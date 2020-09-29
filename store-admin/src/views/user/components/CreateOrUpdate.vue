<template>
  <div class="app-container">
    <el-form ref="userForm" :model="userForm" label-width="80px">
      <el-form-item label="用户名">
        <el-input v-model="userForm.username" placeholder="输入用户名" />
      </el-form-item>
      <el-form-item label="密码">
        <el-input v-model="userForm.password" placeholder="输入密码" />
      </el-form-item>
      <el-row>
        <el-col :span="12">
          <el-form-item label="姓名">
            <el-input v-model="userForm.name" placeholder="输入姓名" />
          </el-form-item>
        </el-col>
        <el-col :span="12">
          <el-form-item label="性别">
            <el-radio-group v-model="userForm.sex">
              <el-radio :label="1">男</el-radio>
              <el-radio :label="0">女</el-radio>
            </el-radio-group>
          </el-form-item>
        </el-col>
      </el-row>
      <el-form-item label="手机号">
        <el-input v-model="userForm.phone" placeholder="输入手机号" style="width: 80%" />
      </el-form-item>
      <el-form-item label="邮箱">
        <el-input v-model="userForm.email" placeholder="输入邮箱" />
      </el-form-item>
      <el-form-item label="角色">
        <el-select v-model="userForm.role" placeholder="选择角色" style="width: 100%">
          <el-option label="区域一" value="shanghai" />
          <el-option label="区域二" value="beijing" />
        </el-select>
      </el-form-item>
      <el-row>
        <el-col :span="12">
          <el-form-item label="公司">
            <el-select v-model="userForm.company" placeholder="选择公司" style="width: 100%">
              <el-option label="区域一" value="shanghai" />
              <el-option label="区域二" value="beijing" />
            </el-select>
          </el-form-item>
        </el-col>
        <el-col :span="12">
          <el-form-item label="部门">
            <el-select v-model="userForm.department" placeholder="选择部门" style="width: 100%">
              <el-option label="区域一" value="shanghai" />
              <el-option label="区域二" value="beijing" />
            </el-select>
          </el-form-item>
        </el-col>
      </el-row>
      <el-form-item label="会员码">
        <el-input v-model="userForm.member_code" placeholder="输入注册会员码" />
      </el-form-item>
    </el-form>
    <el-row>
      <el-col align="center">
        <el-button type="primary" @click="onSubmit">提交</el-button>
        <el-button>取消</el-button>
      </el-col>
    </el-row>
  </div>
</template>

<script>
export default {
  name: 'UserCreateOrUpdate',
  props: {
    formData: {
      type: Object,
      default: null
    },
    actionData: {
      type: Object,
      default: null
    }
  },
  data() {
    return {
      userForm: {
        username: this.formData.username,
        password: this.formData.password,
        name: this.formData.name,
        sex: this.formData.sex,
        phone: this.formData.phone,
        email: this.formData.email,
        role: this.formData.role,
        member_code: this.formData.member_code,
        company: this.formData.company,
        department: this.formData.department
      }
    }
  },
  watch: {
    actionData: {
      deep: true,
      handler(val) {
        console.log(val)
      }
    }
  },
  created() {
    console.log(this.actionData)
  },
  methods: {
    onSubmit() {
      console.log()
    }
  }
}
</script>

<style scoped>

</style>
