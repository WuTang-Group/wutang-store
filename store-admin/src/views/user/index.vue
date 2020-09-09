<template>
  <div class="app-container user-container">
    <el-card class="box-card filter-container">
      <el-form :inline="true" :model="listQuery">
        <el-form-item label="用户名">
          <el-input v-model="listQuery.username" placeholder="请输入查询的账号名称" style="width: 240px;" class="filter-item" clearable />
        </el-form-item>
        <el-form-item>
          <el-button class="filter-item filter-search" type="primary" icon="el-icon-search" @click="handleFilter">
            查询
          </el-button>
        </el-form-item>
      </el-form>
    </el-card>
    <el-card class="box-card box-card-content">
      <el-table
        v-loading="listLoading"
        :data="userlist"
        border
        fit
        highlight-current-row
        :height="tableHeight < 500 ? 500 : tableHeight"
        :header-cell-style="{background:'#ebeef5'}"
        @row-click="userProfileDiag"
      >
        <el-table-column type="index" align="center" label="序号" width="80">
          <!--<template slot-scope="scope">
            <span>{{ scope.row.id }}</span>
          </template> -->
        </el-table-column>
        <el-table-column align="center" label="用户名">
          <template slot-scope="scope">
            <span>{{ scope.row.username }}</span>
          </template>
        </el-table-column>
        <el-table-column align="center" label="头像">
          <template slot-scope="scope">
            <img class="user-avatar" :src="scope.row.avatar" alt="avatar">
          </template>
        </el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="姓名">
          <template slot-scope="scope">
            <span>{{ scope.row.name }}</span>
          </template>
        </el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="邮箱">
          <template slot-scope="scope">
            <span>{{ scope.row.email }}</span>
          </template>
        </el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="电话">
          <template slot-scope="scope">
            <span>{{ scope.row.phone }}</span>
          </template>
        </el-table-column>
        <el-table-column label="操作" align="center" class-name="small-padding">
          <template slot-scope="{row, $index}">
            <el-button size="small" type="primary" icon="el-icon-edit" circle @click="editUserButton(row)" />
            <el-button size="small" type="danger" icon="el-icon-delete" circle @click="deleteUserButton(row, $index)" />
          </template>
        </el-table-column>
      </el-table>
      <pagination v-show="total>0" :total="total" :page.sync="listQuery.page" :limit.sync="listQuery.page_limit" @pagination="getList" />
    </el-card>
    <el-dialog title="用户详细信息" :visible.sync="dialogTableVisible">
      <el-form
        :inline="true"
        :model="userDetail"
        disabled="true"
        label-position="right"
        class="form-inline"
        label-width="100px"
        size="medium"
      >
        <el-form-item label="用户名">
          <el-input v-model="userDetail.username" />
        </el-form-item>
        <el-form-item label="姓名">
          <el-input v-model="userDetail.name" />
        </el-form-item>
        <el-form-item label="性别">
          <el-input v-model="userDetail.profile.sex" />
        </el-form-item>
        <el-form-item label="年龄">
          <el-input v-model="userDetail.profile.age" />
        </el-form-item>
        <el-form-item label="电话号码">
          <el-input v-model="userDetail.phone" />
        </el-form-item>
        <el-form-item label="邮箱">
          <el-input v-model="userDetail.email" />
        </el-form-item>
        <el-form-item label="生日">
          <el-input v-model="userDetail.profile.birthday" />
        </el-form-item>
        <el-form-item label="邮编">
          <el-input v-model="userDetail.profile.zip" />
        </el-form-item>
        <el-form-item label="地址">
          <el-input v-model="userDetail.profile.fullAddress" style="width:400px" />
        </el-form-item>
      </el-form>
    </el-dialog>
  </div>
</template>

<script>
import { mapState } from 'vuex'
import { fetchUserList, deleteUser } from '@/api/user'
import Pagination from '@/components/Pagination'
// import { genderMap } from './common/common'

export default {
  name: 'User',
  components: { Pagination },
  data() {
    return {
      listLoading: false,
      userlist: [],
      listQuery: {
        page: 1,
        page_limit: 20,
        username: ''
      },
      total: 0,
      dialogTableVisible: false,
      userDetail: {
        avatar: '',
        created_at: '',
        email: '',
        email_verified_at: '',
        hash_id: '',
        name: '',
        password_answer: '',
        password_question_id: '',
        phone: '',
        profile: {
          fullAddress: '',
          age: '',
          birthday: '',
          created_at: '',
          id: '',
          phone: '',
          real_name: '',
          sex: '',
          updated_at: '',
          user_id: '',
          zip: '',
          province: '',
          city: '',
          district: '',
          address: ''
        }
      }
    }
  },
  computed: {
    ...mapState({
      tableHeight: state => state.screenHeight - 400
    })
  },
  watch: {
    userDetail: function(newUser, oldUser) {
      const oldSex = newUser.profile.sex
      switch (oldSex.toString()) {
        case '0':
          this.userDetail.profile.sex = '女'
          return this.userDetail.profile.sex
        case '1':
          this.userDetail.profile.sex = '男'
          return this.userDetail.profile.sex
        case '-1':
          this.userDetail.profile.sex = '其他'
          return this.userDetail.profile.sex
      }
    }
  },
  beforeRouteEnter(to, from, next) {
    // 从以下路由返回时，则指定isBack为true，然后触发activated事件时需要更新页面数据
    const backUpdatePagesName = ['CreateUser', 'EditUser']
    if (backUpdatePagesName.indexOf(from.name) > -1) {
      to.meta.isBack = true
    }
    next()
  },
  activated() {
    const that = this
    // 如果是从指定页面返回，则刷新页面数据
    if (that.$route.meta.isBack) {
      that.getUserList()
    }

    that.$route.meta.isBack = false
  },
  created() {
    const that = this
    // 获取用户列表
    that.getList()
  },
  methods: {
    // 查询用户列表
    getList() {
      const that = this

      // 获取查询信息
      const listQuery = that.listQuery

      // 显示查询loading
      that.listLoading = true

      fetchUserList(listQuery).then(response => {
        const data = response.data
        console.log(data)
        if (data && data.data && data.data.length > 0) {
          that.userlist = data.data
          that.total = data.total
        } else if (data && data.data && data.data.length === 0) {
          if (listQuery.page > 1) {
            listQuery.page--
            that.getList()
          } else {
            that.userlist = []
            that.total = 0

            that.$message({
              message: '暂无用户信息',
              type: 'info'
            })
          }
        }
      }).finally(() => {
        that.listLoading = false
      })
    },
    // 查询用户
    handleFilter() {
      const that = this
      that.listQuery.page = 1
      that.getList()
    },
    // 编辑用户
    editUserButton(row) {
      const that = this
      const params = {
        isEdit: 'edit'
      }
      that.$router.push({ path: '/user/edit/' + row.hash_id, query: params })
    },
    // 删除用户
    deleteUserButton(row, index) {
      const that = this
      that.$confirm(`是否删除${row.username}用户?`, '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        const params = {
          username: row.username
        }
        deleteUser(params).then(res => {
          that.$message({
            type: 'success',
            message: '删除成功!'
          })
          // 更新列表
          that.getList()
        }).catch(() => {
          that.$message({
            type: 'info',
            message: '删除失败'
          })
        })
      }).catch(() => {
        that.$message({
          type: 'info',
          message: '已取消删除'
        })
      })
    },
    userProfileDiag(row) {
      this.userDetail = row
      const profile = row.profile
      this.userDetail.profile.fullAddress = profile.province + profile.city + profile.district + profile.address
      this.dialogTableVisible = true
    },
    formatSex(row) {
      console.log(row)
      switch (row.profile.sex) {
        case 1:
          return '男'
        case '0':
          return '女'
        case '-1':
          return '其他'
      }
    }
  }
}
</script>

<style lang="scss" scoped>
.user-container {

   .filter-container {
     margin-bottom: 20px;

     .search-btn {
       margin-left: 10px;
     }

     .create-btn {
       margin-left: 10px;
     }
   }
}

.user-avatar {
  width: 38px;
  border-radius: 5px;
}

.page-pagination {
  margin-top: 20px;
}
</style>
