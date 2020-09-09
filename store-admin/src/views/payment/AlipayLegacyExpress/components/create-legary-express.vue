<template>
  <div class="app-container">
    <el-card class="box-card">
      <el-form ref="form" :model="form" :rules="alipayRules" label-width="140px">
        <el-row :gutter="10">
          <el-col :span="10">
            <el-form-item label="卖家支付宝账号" prop="seller_email">
              <el-input v-model="form.seller_email" />
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
            <el-form-item label="商户ID(pid)" prop="pid">
              <el-input v-model="form.pid" />
            </el-form-item>
          </el-col>
          <el-col :span="10">
            <el-form-item label="商户密钥(key)" prop="key">
              <el-input v-model="form.key" type="textarea" />
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
import { store } from '@/api/AlipayLegacyExpress'
export default {
  name: 'CreateLegacyExpress',
  data() {
    return {
      form: {
        seller_email: '',
        pid: '',
        key: '',
        return_url: '',
        notify_url: '',
        status: -1
      },
      formArray: [],
      alipayRules: {
        seller_email: [
          { required: true, message: '请输入商户支付宝账号', trigger: 'blur' }
        ],
        pid: [
          { required: true, message: '请输入商户id', trigger: 'blur' }
        ],
        key: [
          { required: true, message: '请输入商户密钥', trigger: 'blur' }
        ],
        return_url: [
          { required: true, message: '请输入前端回调地址', trigger: 'blur' }
        ],
        notify_url: [
          { required: true, message: '请输入异步回调URL', trigger: 'blur' }
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

