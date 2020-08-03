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
      <el-table v-loading="listLoading" :data="userlist" border fit highlight-current-row :height="tableHeight < 500 ? 500 : tableHeight" :header-cell-style="{background:'#ebeef5'}">
        <el-table-column type="index" align="center" label="序号" width="80">
          <!--<template slot-scope="scope">
            <span>{{ scope.row.id }}</span>
          </template> -->
        </el-table-column>
        <el-table-column align="center" label="用户名" min-width="180">
          <template slot-scope="scope">
            <span>{{ scope.row.username }}</span>
          </template>
        </el-table-column>
        <el-table-column align="center" label="头像" min-width="120">
          <template slot-scope="scope">
            <img class="user-avatar" :src="scope.row.avatar" alt="avatar">
          </template>
        </el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="姓名" min-width="120">
          <template slot-scope="scope">
            <span>{{ scope.row.name }}</span>
          </template>
        </el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="邮箱" min-width="240">
          <template slot-scope="scope">
            <span>{{ scope.row.email }}</span>
          </template>
        </el-table-column>
        <el-table-column align="center" show-overflow-tooltip label="电话" min-width="200">
          <template slot-scope="scope">
            <span>{{ scope.row.phone }}</span>
          </template>
        </el-table-column>
        <el-table-column label="操作" align="center" class-name="small-padding" fixed="right" width="300">
          <template slot-scope="{row, $index}">
            <el-button size="mini" type="success" @click="editUserButton(row)">
              编辑
            </el-button>
            <el-button size="mini" type="danger" @click="deleteUserButton(row, $index)">
              删除
            </el-button>
          </template>
        </el-table-column>
      </el-table>
      <pagination v-show="total>0" :total="total" :page.sync="listQuery.page" :limit.sync="listQuery.page_limit" @pagination="getList" />
    </el-card>
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
      total: 0
    }
  },
  computed: {
    ...mapState({
      tableHeight: state => state.screenHeight - 400
    })
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
