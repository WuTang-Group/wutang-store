<template>
  <div class="app-container modify-container">
    <div class="user-content-container">
      <el-card class="box-card">
        <div slot="header" class="clearfix">
          <span class="card-header">修改密码</span>
          <el-tooltip class="info-tip" effect="dark" content="密码最小长度为6个自符" placement="right">
            <i class="el-icon-info" />
          </el-tooltip>
        </div>
        <div class="card-content">
          <el-form :model="userInfo" label-width="180px">
            <el-form-item label="用户账号">
              <el-input v-model="userInfo.username" size="small" :disabled="true" />
            </el-form-item>
            <el-form-item label="姓名">
              <el-input v-model="userInfo.name" size="small" :disabled="true" />
            </el-form-item>
            <el-form-item label="邮箱">
              <el-input v-model="userInfo.email" size="small" :disabled="true" />
            </el-form-item>
            <el-form-item label="旧密码">
              <el-input v-model="passwordInfo.oldPassword" type="password" size="small" />
            </el-form-item>
            <el-form-item label="新密码">
              <el-input v-model="passwordInfo.newPassword" type="password" size="small" />
            </el-form-item>
            <el-form-item label="重复新密码">
              <el-input v-model="passwordInfo.repeatNewPassword" type="password" size="small" />
            </el-form-item>
          </el-form>
          <div class="modify-form-buttons-container">
            <el-button class="modify-update-button" type="success" @click="updateButton">确认</el-button>
            <el-button class="modify-close-button" type="danger" @click="closePageButton">取消</el-button>
          </div>
        </div>
      </el-card>
    </div>
  </div>
</template>
<script>
import { MessageBox, Message } from 'element-ui'
import store from '@/store'
import { mapState } from 'vuex'
import { updateUserPassword } from '@/api/user'
const defaultFormValidateConfig = [{
  key: 'oldPassword',
  text: '请输入密码',
  type: 'String'
}, {
  key: 'newPassword',
  length: 6,
  text: '新密码不能为空且最小长度为6个自符',
  type: 'String'
}, {
  key: 'repeatNewPassword',
  length: 6,
  text: '重复新密码不能为空且最小长度为6个自符',
  type: 'String'
}]
export default {
  name: 'ModifyInfo',
  data() {
    return {
      passwordInfo: {
        oldPassword: '',
        newPassword: '',
        repeatNewPassword: ''
      }
    }
  },
  computed: {
    ...mapState({
      userInfo: 'user'
    })
  },
  methods: {
    // 更新信息
    updateButton() {
      const that = this
      const passwordInfo = that.passwordInfo

      // 检验表单
      if (!that.formValidate(passwordInfo)) return

      // 等待接口调试
      const params = {
        username: that.userInfo.username,
        data: {
          oldPassword: passwordInfo.oldPassword,
          newPassword: passwordInfo.newPassword,
          newPassword_confirmation: passwordInfo.repeatNewPassword
        }
      }

      updateUserPassword(params).then(res => {
        if (res) {
          MessageBox.confirm('密码修改成功，请重新登陆', '确认登出', {
            confirmButtonText: '确认登出',
            showCancelButton: false,
            showClose: false,
            closeOnClickModal: false,
            closeOnPressEscape: false,
            closeOnHashChange: false,
            type: 'warning'
          }).then(() => {
            store.dispatch('user/resetToken').then(() => {
              location.reload()
            })
          })
        } else {
          Message({
            message: '旧密码错误',
            type: 'info'
          })
        }
      }).catch(err => {
        console.log(err)
      })
    },
    // 关闭页面
    closePageButton() {
      this.$store.dispatch('tagsView/delView', this.$route)
      this.$router.go(-1)
    },

    // 表单校验
    formValidate(data) {
      const that = this
      const postForm = JSON.parse(JSON.stringify(data))
      let formValidate = true

      // 判断每个字段是否符合规则
      for (let i = 0; i < defaultFormValidateConfig.length; i++) {
        const item = defaultFormValidateConfig[i]
        const postFormItemValue = postForm[item.key]
        const postFormItemLength = item.length

        if ((item.type === 'String' && !postFormItemValue) ||
           (postFormItemLength && postFormItemValue.length < postFormItemLength)) {
          that.$message({
            message: item.text,
            type: 'info'
          })

          formValidate = false

          break
        }
      }

      // 判断新密码两次输入是否一致
      if (formValidate && data.newPassword !== data.repeatNewPassword) {
        that.$message({
          message: '两次新密码不一致',
          type: 'info'
        })

        formValidate = false
      }

      // 判断新旧密码是否一致
      if (formValidate && data.newPassword === that.passwordInfo.oldPassword) {
        that.$message({
          message: '新旧密码不能相同',
          type: 'info'
        })

        formValidate = false
      }

      return formValidate
    }
  }
}
</script>
<style lang="scss" scoped>
.modify-container {
  .modify-form-buttons-container {
    margin-top: 20px;
    display: flex;
    justify-content: flex-end;

    .modify-close-button,
    .modify-update-button {
      font-size: 14px;
    }
  }

  .card-content {
    max-width: 500px;
  }
}
</style>
