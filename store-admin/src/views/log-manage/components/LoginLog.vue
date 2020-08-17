<template>
  <div class="app-container user-container">
    <el-card class="box-card box-card-content">
      <el-table
        v-loading="listLoading"
        :data="list"
        border
        fit
        highlight-current-row
        :header-cell-style="{background:'#ebeef5'}"
        style="width: 100%"
      >
        <el-table-column header-align="center" align="center" label="序号" type="index" />
        <!-- <el-table-column header-align="center" align="center" prop="_id.$oid" label="ID" width="220" />-->
        <el-table-column header-align="center" align="center" show-overflow-tooltip prop="context.username" label="用户名" width="150" />
        <el-table-column header-align="center" align="center" show-overflow-tooltip prop="message" label="提示信息" width="150" />
        <el-table-column header-align="center" align="center" show-overflow-tooltip prop="extra.url" label="请求URI" width="250" />
        <el-table-column header-align="center" align="center" prop="extra.ip" label="IP地址" width="150" />
        <el-table-column header-align="center" align="center" prop="extra.http_method" label="HTTP" width="100">
          <template slot-scope="{row}">
            <el-link href="#" :type="row.extra.http_method | HttpMethodFilter" size="mini">
              {{ row.extra.http_method }}
            </el-link>
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="extra.server" label="域名" width="150" />
        <el-table-column header-align="center" align="center" prop="level" label="等级指数" width="80">
          <template slot-scope="{row}">
            <el-button :type="row.level | levelFilter" size="mini">
              {{ row.level }}
            </el-button>
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="level_name" label="等级名称" width="100">
          <template slot-scope="{row}">
            <el-tag :type="row.level_name | levelNameFilter" size="mini">
              {{ row.level_name }}
            </el-tag>
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="context.status" label="状态" width="150" />
        <el-table-column header-align="center" align="center" prop="datetime.$date.$numberLong" label="时间" sortable>
          <template v-slot="{row}">
            <span>{{ row.datetime.$date.$numberLong | parseTime('{y}-{m}-{d} {h}:{i}') }}</span>
          </template>
        </el-table-column>
      </el-table>
      <pagination
        v-show="total>0"
        :total="total"
        :page.sync="listQuery.page"
        :limit.sync="listQuery.page_limit"
        @pagination="getSystemLogList"
      />
    </el-card>
  </div>
</template>

<script>
import { getLoginLog } from '@/api/log'
import Pagination from '@/components/Pagination'
// import { genderMap } from './common/common'

export default {
  name: 'LoginLog',
  components: { Pagination },
  filters: {
    levelFilter(level) {
      const statusMap = {
        100: 'primary',
        200: 'info',
        300: 'warning',
        400: 'danger'
      }
      return statusMap[level]
    },
    levelNameFilter(lavelName) {
      const statusMap = {
        DEBUG: 'primary',
        INFO: 'info',
        NOTICE: 'warning',
        ERROR: 'danger'
      }
      return statusMap[lavelName]
    },
    HttpMethodFilter(method) {
      const statusMap = {
        GET: 'success',
        POST: 'warning',
        PUT: 'primary',
        DELETE: 'danger',
        PATCH: 'info'
      }
      return statusMap[method]
    }
  },
  data() {
    return {
      listLoading: false,
      list: null,
      listQuery: {
        page: 1,
        page_limit: 20
      },
      total: 0
    }
  },
  created() {
    // 获取用户列表
    this.getLoginLogList()
  },
  methods: {
    // 查询用户列表
    getLoginLogList() {
      // 显示查询loading
      this.listLoading = true

      getLoginLog(this.listQuery).then(response => {
        this.total = response.data.total
        this.list = response.data.data
        console.log(response.data)
      }).finally(() => {
        this.listLoading = false
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
