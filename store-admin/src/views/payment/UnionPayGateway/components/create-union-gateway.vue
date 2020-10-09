<template>
  <div class="app-container">
    <el-card class="box-card">
      <el-form ref="form" :model="form" :rules="unionRules" label-width="140px">
        <el-row :gutter="10">
          <el-col :span="10">
            <el-form-item label="CP标识" prop="cpid">
              <el-input v-model="form.cpid" />
            </el-form-item>
          </el-col>
          <el-col :span="10">
            <el-form-item label="是否激活" prop="status">
              <el-switch
                v-model="form.status"
                active-color="#13ce66"
                inactive-color="#ff4949"
                :active-value="1"
                :inactive-value="-1"
              />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="10">
            <el-form-item label="支付方式" prop="pay_type">
              <el-input v-model.number="form.pay_type" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row style="margin-bottom: 50px">
          <el-col :span="2" :offset="8">
            <el-button type="success" @click="submitUnion('form')">提交</el-button>
          </el-col>
          <el-col :span="2">
            <el-button type="info" plain @click="closePageButton">返回</el-button>
          </el-col>
        </el-row>
      </el-form>
    </el-card>
  </div>
</template>

<script>
import { store } from '@/api/UnionGateway'
export default {
  name: 'CreateUnionGateway',
  data() {
    return {
      form: {
        cpid: '',
        pay_type: null,
        status: -1
      },
      formArray: [],
      unionRules: {
        cpid: [
          { required: true, message: '请输入CP标识', trigger: 'blur' }
        ],
        pay_type: [
          { required: true, message: '请输入支付方式', trigger: 'blur' },
          { type: 'number', message: '请输入数字' }
        ]
      }
    }
  },
  created() {
  },
  methods: {
    submitUnion(formName) {
      this.$refs[formName].validate((valid) => {
        this.formArray.push(this.form)
        if (valid) {
          console.log(this.formArray)
          store({ 'items': this.formArray }).then((response) => {
            if (response.code === 20001) {
              this.$message({
                type: 'success',
                message: '添加成功'
              })
              this.initFormData()
            } else {
              this.$message({
                type: 'error',
                message: '添加失败！！'
              })
            }
            this.formArray = []
          })
        }
      })
    },
    initFormData() {
      this.$refs['form'].resetFields()
    },
    // 关闭页面
    closePageButton() {
      this.$store.dispatch('tagsView/delView', this.$route)
      this.$router.go(-1)
    }
  }
}
</script>

<style scoped>

</style>

