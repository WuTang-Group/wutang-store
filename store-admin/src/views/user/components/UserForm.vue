<template>
  <div class="account-form-container">
    <div class="account-content-container" :style="'height:' + containerHeight + 'px; overflow:auto'">
      <el-card class="box-card">
        <div slot="header" class="clearfix">
          <span class="card-header">修改用户信息</span>
        </div>
        <div class="card-content">
          <el-form ref="userForm" :model="userInfo" label-width="180px" :rules="userRules">
            <el-form-item label="用户账号">
              <el-input v-model="userInfo.username" size="small" :disabled="true" />
            </el-form-item>
            <el-form-item label="头像">
              <img class="user-avatar" :src="userInfo.avatar" alt="avatar">
            </el-form-item>
            <el-form-item label="姓名" prop="name">
              <el-input v-model="userInfo.name" size="small" />
            </el-form-item>
            <el-form-item label="邮箱" prop="email">
              <el-input v-model="userInfo.email" size="small" />
            </el-form-item>
            <el-form-item label="电话" prop="phone">
              <el-input v-model="userInfo.phone" size="small" />
            </el-form-item>
          </el-form>
          <div class="modify-form-buttons-container">
            <el-button class="account-close-button" type="danger" @click="closePageButton">取消</el-button>
            <el-button class="account-update-button" type="success" @click="updateButton('userForm')">更新</el-button>
          </div>
        </div>
      </el-card>
    </div>
  </div>
</template>

<script>
import { mapState } from 'vuex'
import { editUserInfo, getInfoById } from '@/api/user'
const defaultForm = {
  username: '',
  name: '',
  email: '',
  phone: '',
  avatar: ''
}

export default {
  name: 'UserForm',
  props: {
    params: {
      type: Object,
      default: () => {}
    }
  },
  data() {
    return {
      userInfo: JSON.parse(JSON.stringify(defaultForm)),
      userRules: {
        name: [{ required: true, message: '姓名不能为空', trigger: 'blur' }],
        email: [{ required: true, message: '邮箱不能为空', trigger: 'blur' }],
        phone: [{ required: true, message: '电话不能为空', trigger: 'blur' }]
      }
    }
  },
  computed: {
    ...mapState({
      containerHeight: state => state.screenHeight - 160
    })
  },
  created() {
    const that = this
    that.query = that.$route.query
    if (that.query.isEdit === 'edit') {
      // 根据id获取用户id
      that.getUserInfoById()
    }
  },
  methods: {
    getUserInfoById() {
      const that = this
      console.log(that.$route.params)
      const data = {
        hash_id: that.$route.params.id
      }
      getInfoById(data).then(res => {
        const data = res.data
        if (data) {
          that.userInfo.username = data.username
          that.userInfo.name = data.name
          that.userInfo.email = data.email
          that.userInfo.phone = data.phone
          that.userInfo.avatar = data.avatar
        }
      })
    },

    // 更新角色
    updateButton(formName) {
      const that = this
      const userInfo = JSON.parse(JSON.stringify(that.userInfo))
      const params = {
        username: userInfo.username,
        data: {
          name: userInfo.name,
          email: userInfo.email,
          phone: userInfo.phone,
          avatar: userInfo.avatar
        }
      }

      that.$refs[formName].validate((valid) => {
        if (valid) {
          editUserInfo(params).then(res => {
            that.$message.success({
              message: 'Update Success'
            })
            that.closePageButton()
          })
        }
      })
    },

    // 关闭页面
    closePageButton() {
      this.$store.dispatch('tagsView/delView', this.$route)
      this.$router.go(-1)
    }
  }
}
</script>
<style lang="scss" scoped>
.account-form-container {
  margin: 20px;

  .card-content {
    max-width: 500px;
  }

  .user-avatar {
    width: 46px;
    border-radius: 5px;
  }

  .modify-form-buttons-container {
    margin-top: 20px;
    display: flex;
    justify-content: flex-end;

    .modify-close-button,
    .modify-update-button {
      font-size: 14px;
    }
  }
}
</style>
