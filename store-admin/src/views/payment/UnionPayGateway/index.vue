<template>
  <div class="app-container">
    <el-card class="box-card">
      <el-input
        v-model="listQuery.title"
        placeholder="输入类目名称"
        style="width: 200px;"
        class="filter-item"
        @keyup.enter.native="handleFilter"
      />
      <el-button v-waves class="filter-item" type="primary" style="margin-left: 20px;" icon="el-icon-search" @click="handleFilter">
        {{ $t('table.search') }}
      </el-button>
    </el-card>
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <router-link :to="{name:'CreateUnionGateway'}">
          <el-button v-waves>添加</el-button>
        </router-link>
      </div>
      <el-table
        v-loading="listLoading"
        :data="list"
        border
        fit
        highlight-current-row
        style="width: 100%;"
        :header-cell-style="{background:'#ebeef5'}"
      >
        <el-table-column type="index" label="序号" width="80" align="center" />
        <el-table-column prop="cpid" label="CP标识" align="center" width="160px">
          <template slot-scope="scope">
            <template v-if="scope.row.editStatus" slit-scope="scope">
              <el-input v-model="scope.row.cpid" />
            </template>
            <span v-else>{{ scope.row.cpid }}</span>
          </template>
        </el-table-column>
        <el-table-column show-overflow-tooltip prop="pay_type" label="支付方式" align="center">
          <template slot-scope="scope">
            <template v-if="scope.row.editStatus" slit-scope="scope">
              <el-input v-model.number="scope.row.pay_type" />
            </template>
            <span v-else>{{ scope.row.pay_type }}</span>
          </template>
        </el-table-column>
        <el-table-column prop="jump_url" label="前端跳转地址" align="center" />
        <el-table-column prop="notify_url" label="异步通知地址" align="center" />
        <el-table-column label="是否激活" align="center">
          <template slot-scope="scope">
            <el-switch
              v-model="scope.row.status"
              active-color="#13ce66"
              inactive-color="#ff4949"
              :active-value="1"
              :inactive-value="-1"
              @change="statusChange(scope.row)"
            />
          </template>
        </el-table-column>>
        <el-table-column prop="updated_at" label="更新时间" align="center" />
        <el-table-column prop="created_at" label="创建时间" align="center" />
        <el-table-column align="center" label="操作" width="120">
          <template slot-scope="{row}">
            <el-button
              v-if="row.editStatus"
              type="success"
              circle
              icon="el-icon-check"
              @click="confirmEdit(row)"
            />
            <el-button
              v-if="row.editStatus"
              class="cancel-btn"
              type="info"
              circle
              icon="el-icon-circle-close"
              @click="handleCancel(row)"
            />
            <el-button
              v-if="!row.editStatus"
              type="primary"
              circle
              icon="el-icon-edit"
              @click="row.editStatus=!row.editStatus"
            />
            <el-button
              v-if="!row.editStatus"
              type="danger"
              circle
              icon="el-icon-delete"
              @click="deleteConfirm(row)"
            />
          </template>
        </el-table-column>
      </el-table>
      <!--      TODO 分页获取不到上一页下一页地址，待修复此问题-->
      <!--      <el-pagination-->
      <!--        v-show="total>0"-->
      <!--        :total="total"-->
      <!--        :page.sync="listQuery.page"-->
      <!--        :limit.sync="listQuery.page_limit"-->
      <!--        @pagination="getList"-->
      <!--      />-->
    </el-card>
  </div>
</template>

<script>
import { index, update, destroy, updateStatus } from '@/api/UnionGateway'
import waves from '@/directive/waves'
export default {
  name: 'UnionGatewayList',
  directives: { waves },
  data() {
    return {
      list: [],
      listLoading: false,
      listQuery: {
        page: 1,
        page_limit: 30
      },
      total: 0,
      test: []
    }
  },
  created() {
    this.getList()
  },
  methods: {
    getList() {
      this.listLoading = true
      index(this.listQuery).then((response) => {
        console.log(response)
        this.list = response.data.data
        this.total = response.data.total
        this.listLoading = false
        // 添加editStatus标志控制操作按钮
        const items = this.list
        this.list = items.map(v => {
          this.$set(v, 'editStatus', false)
          return v
        })
      })
    },
    handleFilter() {
      console.log('test')
    },
    deleteConfirm(row) {
      this.$confirm('此操作将永久删除该记录, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        this.deleteAlipy(row)
      }).catch(() => {
        this.$message({
          type: 'info',
          message: '已取消删除'
        })
      })
    },
    deleteAlipy(row) {
      destroy(row.id).then((response) => {
        if (response.code === 20001) {
          this.$message({
            type: 'success',
            message: '删除成功！'
          })
        } else {
          this.$message({
            type: 'warning',
            message: '删除失败！！'
          })
        }
        this.getList()
      })
    },
    statusChange(row) {
      const id = row.id
      const status = row.status
      updateStatus(id, { 'status': status }).then((response) => {
        if (response.code === 20001) {
          this.$message({
            type: 'success',
            message: '更新成功！'
          })
        } else {
          this.$message({
            type: 'warning',
            message: '更新失败！！'
          })
        }
        this.getList()
      })
    },
    handleCancel(row) {
      row.editStatus = !row.editStatus
      this.getList()
    },
    confirmEdit(row) {
      // cpid,pay_type 不允许为空
      if (!row.cpid || !row.pay_type) {
        this.$message({
          type: 'error',
          message: '不允许为空！'
        })
        return false
      } else if (typeof (row.pay_type) !== 'number') {
        this.$message({
          type: 'error',
          message: '支付方式必须为数字！'
        })
        return false
      }
      // 提交更新数据
      update(row.id, row).then((response) => {
        if (response.code === 20001) {
          this.$message({
            type: 'success',
            message: '更新成功!'
          })
          this.getList()
        } else {
          this.$message({
            type: 'warning',
            message: '更新失败！'
          })
        }
      })
    }
  }
}
</script>

<style scoped>

</style>
