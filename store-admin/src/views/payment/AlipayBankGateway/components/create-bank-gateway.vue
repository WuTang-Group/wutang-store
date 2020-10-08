<template>
  <div class="app-container">
    <el-card class="box-card">
      <el-form ref="form" :model="form" :rules="alipayRules" label-width="140px">
        <el-row :gutter="10">
          <el-col :span="10">
            <el-form-item label="商户编号" prop="merch_id">
              <el-input v-model="form.merch_id" />
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
            <el-form-item label="商户密钥(key)" prop="key">
              <el-input v-model="form.key" type="textarea" />
            </el-form-item>
          </el-col>
          <el-col :span="10">
            <el-form-item label="产品编号" prop="product">
              <el-input v-model="form.product" />
            </el-form-item>
          </el-col>
        </el-row>
        <!--        <el-row :gutter="10">-->
        <!--          <el-col :span="10">-->
        <!--            <el-form-item label="前端回调地址" prop="return_url">-->
        <!--              <el-input v-model="form.return_url" />-->
        <!--            </el-form-item>-->
        <!--          </el-col>-->
        <!--          <el-col :span="10">-->
        <!--            <el-form-item label="异步回调地址" prop="notify_url">-->
        <!--              <el-input v-model="form.notify_url" />-->
        <!--            </el-form-item>-->
        <!--          </el-col>-->
        <!--        </el-row>-->
        <el-row style="margin-bottom: 50px">
          <el-col :span="2" :offset="8">
            <el-button type="success" @click="submitAlipay('form')">提交</el-button>
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
import { store } from '@/api/AlipayBankGateway'
export default {
  name: 'CreateBankGateway',
  data() {
    return {
      form: {
        merch_id: '',
        key: '',
        product: '',
        status: -1
      },
      formArray: [],
      alipayRules: {
        merch_id: [
          { required: true, message: '请输入商户编号', trigger: 'blur' }
        ],
        product: [
          { required: true, message: '请输入产品编号', trigger: 'blur' }
        ],
        key: [
          { required: true, message: '请输入商户密钥', trigger: 'blur' }
        ]
      }
    }
  },
  created() {
  },
  methods: {
    submitAlipay(formName) {
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

