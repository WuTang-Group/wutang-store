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
        <el-table-column header-align="center" align="center" prop="no" label="订单号" />
        <el-table-column header-align="center" align="center" prop="total_amount" label="总金额" />
        <el-table-column header-align="center" align="center" prop="user.username" label="用户" />
        <el-table-column header-align="center" align="center" prop="status" :formatter="formatOrderStatus" label="订单状态" />
        <el-table-column header-align="center" align="center" prop="payment_method" :formatter="formatPaymentMethod" label="支付方式" />
        <el-table-column header-align="center" align="center" prop="payment_no" label="支付交易号" />
        <el-table-column header-align="center" align="center" prop="paid_at" label="支付时间" />
        <el-table-column header-align="center" align="center" prop="refund_status" :formatter="formatRefundStatus" label="退款状态" />
        <el-table-column header-align="center" align="center" prop="refund_no" label="退款单号" />
        <el-table-column header-align="center" align="center" prop="reviewed" label="是否评价" />
        <el-table-column header-align="center" align="center" prop="ship_status" :formatter="formatShipStatus" label="物流状态" />
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
import { getList } from '@/api/purchaseOrder'
import Pagination from '@/components/Pagination'
export default {
  name: 'PurchaseOrderList',
  components: { Pagination },
  data() {
    return {
      list: null,
      total: 0,
      tableKey: 0,
      listQuery: {
        'page': 1,
        'page_limit': 10
      },
      listLoading: true
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
    }
  }
}
</script>

<style scoped>

</style>
