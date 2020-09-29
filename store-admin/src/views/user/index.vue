<template>
  <div class="app-container">
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <el-tooltip class="item" effect="dark" content="新增用户" placement="top">
          <el-button type="primary" icon="el-icon-plus" size="small" @click="handleCreate">新增</el-button>
        </el-tooltip>
      </div>
      <el-table
        v-loading="listLoading"
        :data="userList"
        fit
        border
        highlight-current-row
        :height="tableHeight < 500 ? 500 : tableHeight"
        :header-cell-style="{background:'#ebeef5'}"
        style="width: 100%"
      >
        <el-table-column header-align="center" align="center" label="序号" type="index" width="50" />
        <el-table-column header-align="center" align="center" prop="username" label="用户名" width="180" />
        <el-table-column header-align="center" align="center" prop="name" label="姓名" width="100" />
        <el-table-column header-align="center" align="center" prop="profile.sex" label="性别" width="50">
          <template slot-scope="{row}">
            {{ row.profile ? (row.profile.sex === 1 ? '男':'女') : '其他' }}
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="phone" label="手机号" />
        <el-table-column header-align="center" align="center" prop="email" label="邮箱" />
        <el-table-column header-align="center" align="center" prop="role" label="角色" width="100" />
        <el-table-column header-align="center" align="center" prop="department.company.name" label="公司" />
        <el-table-column header-align="center" align="center" prop="department.name" label="部门" width="100" />
        <el-table-column header-align="center" align="center" prop="member_code.code" label="注册会员码" />
        <el-table-column header-align="center" align="center" label="状态" width="80">
          <template slot-scope="{row}">
            <el-tag v-if="row.status === 1" type="success">正常</el-tag>
            <el-tag v-else type="info">禁用</el-tag>
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="created_at" label="注册时间" />
        <el-table-column header-align="center" align="center" prop="columnProp" label="操作" width="150">
          <template v-slot="{row,$index}">
            <div v-if="row.username!=='admin'"> <!-- 管理员账号不能编辑 -->
              <el-button type="primary" icon="el-icon-edit" circle @click="handleUpdate(row,$index)" />
              <el-button type="danger" icon="el-icon-delete" circle />
            </div>
          </template>
        </el-table-column>
      </el-table>
      <pagination v-show="total>0" :total="total" :page.sync="listQuery.page" :limit.sync="listQuery.page_limit" @pagination="getUserList" />
    </el-card>
    <!-- 弹出框 -->
    <el-drawer
      :title="drawerTitle"
      :visible.sync="drawer"
      :direction="drawerDirection"
    >
      <el-divider />
      <div style="padding: 10px">
        <el-form ref="userForm" :model="userForm" label-width="80px">
          <el-form-item label="用户名" prop="username" required>
            <el-input v-model="userForm.username" placeholder="输入用户名" />
          </el-form-item>
          <el-form-item v-if="drawerTitle==='新增用户'" prop="password" label="密码" required>
            <el-input v-model="userForm.password" placeholder="输入密码" />
          </el-form-item>
          <el-row>
            <el-col :span="12">
              <el-form-item label="姓名" prop="name" required>
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
          <el-form-item label="角色" prop="role" required>
            <el-select v-model="userForm.role" :remote="true" :loading="selectLoading" placeholder="选择角色" style="width: 100%" @focus="getRoleList">
              <el-option
                v-for="item in role_list"
                :key="item.id"
                :label="item.name"
                :value="item.name"
              />
            </el-select>
          </el-form-item>
          <el-row>
            <el-col :span="12">
              <el-form-item label="公司" prop="company" required>
                <el-select v-model="userForm.company" :remote="true" :loading="selectLoading" placeholder="选择公司" style="width: 100%" @focus="getCompanyList">
                  <el-option
                    v-for="item in company_list"
                    :key="item.id"
                    :label="item.name"
                    :value="item.name"
                  />
                </el-select>
              </el-form-item>
            </el-col>
            <el-col :span="12">
              <el-form-item label="部门" prop="department" required>
                <el-select v-model="userForm.department" :remote="true" :loading="selectLoading" placeholder="选择部门" style="width: 100%" @focus="getDepartmentsByCompanyName">
                  <el-option
                    v-for="item in department_list"
                    :key="item.id"
                    :label="item.name"
                    :value="item.name"
                  />
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
            <el-button type="primary" @click="onDrawerSubmit('userForm')">提交</el-button>
            <el-button @click="resetUserForm('userForm')">取消</el-button>
          </el-col>
        </el-row>
      </div>
    </el-drawer>
  </div>
</template>
<script>
import { mapState } from 'vuex'
import { fetchUserList, storeUser } from '@/api/user'
import { getRoles } from '@/api/role'
import { getCompanies, getDepartmentsByCompanyName } from '@/api/company'
import Pagination from '@/components/Pagination'

export default {
  name: 'User',
  components: {
    Pagination
  },
  filters: {},
  data() {
    // 自定义验证部门
    const validateDepartment = (rule, value, callback) => {
      if (value === '') {
        callback(new Error('请选择部门'))
      } else if (this.userForm.company === '') {
        callback(new Error('请先选择公司'))
      } else {
        callback()
      }
    }
    return {
      listLoading: false, // 加载动画
      selectLoading: false, // 选择器加载动画
      drawer: false, // 抽屉显示
      drawerDirection: 'rtl', // 抽屉开启方向
      drawerTitle: '', // 抽屉标题
      userList: [], // 用户数据
      total: 0,
      listQuery: {
        page: 1,
        page_limit: 20
      },
      userForm: { // 用户表单数据
        username: '',
        password: '',
        name: '',
        sex: 1,
        phone: '',
        email: '',
        role: '',
        member_code: '',
        company: '',
        department: ''
      },
      rules: { // 验证规则
        username: [{ required: true, message: '请输入用户名', trigger: 'blur' }],
        password: [
          { required: true, message: '请输入密码', trigger: 'blur' },
          { min: 6, message: '密码不少于6位', trigger: 'blur' }
        ],
        name: [{ required: true, message: '请输入姓名', trigger: 'blur' }],
        role: [{ required: true, message: '请选择角色', trigger: 'blur' }],
        company: [{ required: true, message: '请选择公司', trigger: 'blur' }],
        department: [{ validator: validateDepartment, trigger: 'blur' }]
      },
      role_list: '', // 角色列表
      company_list: '', // 公司列表
      department_list: ''
    }
  },
  computed: {
    ...mapState({
      tableHeight: state => state.screenHeight - 400
    })
  },
  created() {
    this.getUserList()
  },
  methods: {
    // 获取用户列表
    getUserList() {
      this.listLoading = true
      fetchUserList(this.listQuery).then(response => {
        this.userList = response.data.data
        // 整合role名
        this.userList.forEach(item => {
          item.role = item.roles && item.roles.length ? item.roles[ 0 ].name : '无'
        })
        this.listLoading = false
        this.total = response.data.total
      })
    },
    // 获取角色列表
    getRoleList() {
      this.selectLoading = true
      getRoles().then(response => {
        this.selectLoading = false
        this.role_list = response.data
      })
    },
    // 获取公司列表
    getCompanyList() {
      this.selectLoading = true
      getCompanies().then(response => {
        this.company_list = response.data.data
        this.selectLoading = false
      })
    },
    // 根据公司名称获取部门列表
    getDepartmentsByCompanyName() {
      if (!this.userForm.company) {
        this.$message({
          message: '请先选择公司',
          type: 'warning'
        })
      }
      this.selectLoading = true
      getDepartmentsByCompanyName(this.userForm.company).then(response => {
        this.department_list = response.data
        this.selectLoading = false
      })
    },
    // 新增数据
    handleCreate() {
      this.drawerTitle = '新增用户'
      this.userForm = {}
      this.drawer = true
      this.drawerDirection = 'ltr'
    },
    // 编辑数据
    handleUpdate(row, index) {
      this.drawerTitle = '编辑用户'
      Object.assign(this.userForm, {
        username: row.username,
        password: '',
        name: row.name,
        sex: row.profile.sex,
        phone: row.phone,
        email: row.email,
        role: row.role,
        member_code: row.member_code ? row.member_code.code : '',
        company: row.department ? row.department.company.name : '',
        department: row.department ? row.department.name : ''
      })
      this.drawer = true
      this.drawerDirection = 'rtl'
      // console.log(row, index)
    },
    // 抽屉内提交事件
    onDrawerSubmit(formName) {
      this.$refs[formName].validate((valid) => {
        if (valid) {
          if (this.drawerTitle === '新增用户') {
            storeUser(this.userForm).then(response => {
              if (response.code === 20001) {
                this.$notify({
                  title: '成功',
                  message: '操作成功',
                  type: 'success'
                })
                this.getUserList()
                this.drawer = false
              }
            }).catch(response => {
              console.log(response)
            })
          }
        } else {
          console.log('error submit!!')
          return false
        }
      })
    },
    // 重置表单
    resetUserForm(formName) {
      this.$refs[formName].resetFields()
    }
    // 抽屉关闭前事件
    // handleDrawerClose(done) {
    //   this.$confirm('确认关闭？')
    //     .then(_ => {
    //       done()
    //     }).catch(_ => {})
    // }
  }
}
</script>
<style scoped lang="scss">

</style>
