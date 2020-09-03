<template>
  <div class="app-container">
    <el-card class="box-card filter-container">
      <el-input
        v-model="listQuery.no"
        placeholder="输入订单编号"
        style="width: 200px;"
        class="filter-item"
        @keyup.enter.native="handleFilter"
      />
      <el-button v-waves class="filter-item" type="primary" style="margin-left: 20px;" icon="el-icon-search" @click="handleFilter">
        {{ $t('table.search') }}
      </el-button>
    </el-card>
    <el-card class="box-card box-cart-centent" style="margin-top: 20px;">
      <el-table
        :key="tableKey"
        v-loading="listLoading"
        :data="list"
        border
        fit
        highlight-current-row
        style="width: 100%;"
        :header-cell-style="{background:'#ebeef5'}"
      >
        <el-table-column header-align="center" align="center" prop="id" label="ID" width="60" />
        <el-table-column header-align="center" align="center" label="订单号" width="240px">
          <template slot-scope="scope">
            <router-link :to="{ name: 'ViewOrUpdate', params: { 'no': scope.row.no, 'username': scope.row.user.username }}">
              <el-button type="primary" plain>{{ scope.row.no }}</el-button>
            </router-link>
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="total_amount" label="总金额" />
        <el-table-column header-align="center" align="center" prop="user.username" label="用户" />
        <el-table-column
          header-align="center"
          align="center"
          prop="status"
          :formatter="formatOrderStatus"
          label="订单状态"
          width="130px"
        >
          <template slot-scope="{row}">
            <template v-if="row.editStatus">
              <el-select v-model="row.status" placeholder="请选择活动区域">
                <el-option
                  v-for="item in orderStatusList"
                  :key="item.id"
                  :label="item.title"
                  :value="item.id"
                />
              </el-select>
            </template>
            <span v-else>{{ row.status | filterOrderStatus }}</span>
          </template>
        </el-table-column>>
        <el-table-column header-align="center" align="center" prop="payment_no" label="支付交易号" />
        <el-table-column header-align="center" align="center" prop="payment_method" :formatter="formatPaymentMethod" label="支付方式" />
        <el-table-column
          header-align="center"
          align="center"
          prop="refund_status"
          :formatter="formatRefundStatus"
          label="退款状态"
          width="110px"
        >
          <template slot-scope="{row}">
            <template v-if="row.editStatus">
              <el-select v-model="row.refund_status" placeholder="请选择活动区域">
                <el-option
                  v-for="item in orderRefundStatus"
                  :key="item.id"
                  :label="item.title"
                  :value="item.id"
                />
              </el-select>
            </template>
            <span v-else>{{ row.refund_status | filterOrderStatus }}</span>
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="refund_no" label="退款单号" />
        <el-table-column header-align="center" align="center" prop="reviewed" label="是否评价" />
        <el-table-column
          header-align="center"
          align="center"
          prop="ship_status"
          :formatter="formatShipStatus"
          label="物流状态"
          width="110px"
        >
          <template slot-scope="{row}">
            <template v-if="row.editStatus">
              <el-select v-model="row.ship_status" placeholder="请选择活动区域">
                <el-option
                  v-for="item in orderShipStatus"
                  :key="item.id"
                  :label="item.title"
                  :value="item.id"
                />
              </el-select>
            </template>
            <span v-else>{{ row.ship_status | filterOrderStatus }}</span>
          </template>
        </el-table-column>>
        <el-table-column header-align="center" align="center" prop="paid_at" label="支付时间" />
        <el-table-column align="center" label="操作" width="120">
          <template slot-scope="{row}">
            <el-button
              v-if="row.editStatus"
              type="success"
              size="small"
              @click="confirmEdit(row)"
            >
              确认
            </el-button>
            <el-button
              v-if="row.editStatus"
              class="cancel-btn"
              size="small"
              type="warning"
              style="margin:5px 0 0 0 "
              @click="cancelEdit(row)"
            >
              关闭
            </el-button>
            <el-button
              v-else
              type="primary"
              size="small"
              icon="el-icon-edit"
              @click="row.editStatus=!row.editStatus"
            >
              编辑
            </el-button>
          </template>
        </el-table-column>
      </el-table>
    </el-card>
    <pagination
      v-show="total>0"
      :total="total"
      :page.sync="listQuery.page"
      :limit.sync="listQuery.page_limit"
      @pagination="getList"
    />
  </div>
</template>

<script>
import { getList, orderUpdate } from '@/api/purchaseOrder'
import Pagination from '@/components/Pagination'
import waves from '@/directive/waves'
export default {
  name: 'PurchaseOrderList',
  components: { Pagination },
  directives: { waves },
  filters: {
    filterOrderStatus(value) {
      switch (value) {
        case 0:
          return '待付款'
        case 1:
          return '已付款'
        case -1:
          return '付款失败'
      }
    }
  },
  data() {
    return {
      list: [
        {
          status: '',
          ship_status: '',
          refund_status: '',
          user: {
            username: ''
          }
        }
      ],
      total: 0,
      tableKey: 0,
      listQuery: {
        'page': 1,
        'page_limit': 10
      },
      listLoading: true,
      orderStatusList: [
        {
          id: 1,
          title: '已付款'
        },
        {
          id: 0,
          title: '待付款'
        },
        {
          id: -1,
          title: '付款失败'
        },
        {
          id: -2,
          title: '取消订单'
        }
      ],
      orderShipStatus: [
        {
          id: 1,
          title: '已发货'
        },
        {
          id: -1,
          title: '未发货'
        },
        {
          id: 0,
          title: '已签收'
        }
      ],
      orderRefundStatus: [
        {
          id: 1,
          title: '未退款'
        },
        {
          id: -1,
          title: '已退款'
        }
      ]
    }
  },
  created() {
    this.getList()
  },
  methods: {
    getList() {
      this.listLoading = true
      getList(this.listQuery).then(response => {
        this.list = response.data.data
        this.total = response.data.total
        this.listLoading = false
        const items = this.list
        this.list = items.map(v => {
          this.$set(v, 'editStatus', false)
          return v
        })
      })
    },
    formatPaymentMethod(row, column) {
      if (row.payment_method === 'null') {
        return ''
      }
      return row.payment_method
    },
    formatOrderStatus(row) {
      switch (row.status) {
        case 0:
          return '待付款'
        case 1:
          return '已付款'
        case -1:
          return '付款失败'
      }
    },
    formatShipStatus(row) {
      switch (row.ship_status) {
        case 0:
          return '已签收'
        case 1:
          return '已发货'
        case -1:
          return '未发货'
      }
    },
    formatRefundStatus(row) {
      switch (row.refund_status) {
        case 1:
          return '未退款'
        case -1:
          return '已退款'
      }
    },
    handleFilter() {
      console.log('search test')
    },
    confirmEdit(row) {
      orderUpdate(row).then((response) => {
        if (response.code === 20001) {
          this.$message({
            message: '更新成功',
            type: 'success'
          })
          this.getList()
        } else {
          this.$message({
            message: '更新失败',
            type: 'fail'
          })
        }
      })
      row.editStatus = false
    },
    cancelEdit(row) {
      row.editStatus = false
      this.$message({
        message: '取消编辑',
        type: 'warning'
      })
      this.getList()
    },
    handleMouse() {
      console.log('qwertyuiop')
    }
  }
}
</script>

<style scoped lang="scss">
  .orderLink {
    font-weight: bold;
    font-style: italic;
  }

</style>
