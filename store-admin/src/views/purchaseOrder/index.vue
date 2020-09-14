<template>
  <div class="app-container">
    <el-card class="box-card filter-container">
      <el-form ref="listQuery" :model="listQuery">
        <el-row>
          <el-col :span="6">
            <el-form-item label="用户名">
              <el-input
                v-model="listQuery.username"
                placeholder="输入用户名"
                style="width: 200px;"
                class="filter-item"
                clearable
              />
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="订单编号">
              <el-input
                v-model="listQuery.no"
                placeholder="输入订单编号"
                style="width: 200px;"
                class="filter-item"
                clearable
              />
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="支付交易号">
              <el-input
                v-model="listQuery.payment_no"
                placeholder="输入支付交易号"
                style="width: 200px;"
                class="filter-item"
                clearable
              />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="6">
            <el-form-item label="收货人">
              <el-input
                v-model="listQuery.contact_name"
                placeholder="输入收货人"
                style="width: 200px;"
                class="filter-item"
                clearable
              />
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="联系电话">
              <el-input
                v-model="listQuery.contact_phone"
                placeholder="输入收货人联系电话"
                style="width: 200px;"
                class="filter-item"
                clearable
              />
            </el-form-item>
          </el-col>
          <el-col :span="10">
            <el-form-item label="订单创建时间">
              <el-date-picker
                v-model="listQuery.created_at"
                type="datetimerange"
                :picker-options="pickerOptions"
                range-separator="至"
                start-placeholder="开始日期"
                end-placeholder="结束日期"
                align="right"
              />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="6" :offset="20">
            <el-button v-waves class="filter-item" type="primary" style="margin-left: 20px;" icon="el-icon-search" @click="handleFilter">
              {{ $t('table.search') }}
            </el-button>
          </el-col>
        </el-row>
      </el-form>
    </el-card>
    <el-card class="box-card box-cart-centent" style="margin-top: 20px;">
      <el-row>
        <el-col :span="6" :offset="20">
          <el-button :loading="downloadLoading" style="margin:0 0 20px 20px;" type="primary" icon="el-icon-document" @click="handleDownload">
            导出订单
          </el-button>
        </el-col>
      </el-row>
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
        <el-table-column header-align="center" type="index" align="center" label="ID" width="60" />
        <el-table-column header-align="center" align="center" label="订单号" width="180px">
          <template slot-scope="scope">
            <router-link :to="{ name: 'ViewOrUpdate', params: { 'no': scope.row.no, 'username': scope.row.user.username }}">
              <el-tag>{{ scope.row.no }}</el-tag>
            </router-link>
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="total_amount" label="总金额" />
        <el-table-column header-align="center" align="center" prop="user.username" label="用户" width="100px" />
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
        <el-table-column header-align="center" align="center" prop="reviewed" :formatter="formatterReviewed" label="是否评价" />
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
            <span v-else>{{ row.ship_status | filterShipStatus }}</span>
          </template>
        </el-table-column>>
        <el-table-column header-align="center" align="center" prop="address.contact_name" label="收货人" />
        <el-table-column header-align="center" align="center" prop="address.contact_phone" label="联系电话" width="110px" />
        <el-table-column header-align="center" align="center" prop="address" label="收货地址" width="150px">
          <template slot-scope="{row}">
            {{ row.address | filterAddress }}
          </template>
        </el-table-column>>
        <el-table-column header-align="center" align="center" prop="paid_at" label="支付时间" width="100px" />
        <el-table-column header-align="center" align="center" prop="created_at" label="订单创建时间" width="100px" />
        <el-table-column align="center" fixed="right" label="操作">
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
              style="margin:5px 0 0 0 "
              circle
              icon="el-icon-circle-close"
              @click="cancelEdit(row)"
            />
            <el-button
              v-else
              type="primary"
              icon="el-icon-edit"
              circle
              @click="row.editStatus=!row.editStatus"
            />
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
    },
    filterShipStatus(value) {
      switch (value) {
        case 0:
          return '已签收'
        case 1:
          return '已发货'
        case -1:
          return '未发货'
      }
    },
    filterAddress(value) {
      if (value) {
        return value.province + value.city + value.district + value.address
      } else {
        return ''
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
          created_at: '',
          user: {
            username: ''
          },
          address: {
            province: ''
          }
        }
      ],
      total: 0,
      tableKey: 0,
      listQuery: {
        'page': 1,
        'page_limit': 10,
        'no': '',
        'payment_no': '',
        'username': '',
        'contact_name': '',
        'contact_phone': '',
        'created_at': ''
      },
      pickerOptions: {
        shortcuts: [{
          text: '最近一周',
          onClick(picker) {
            const end = new Date()
            const start = new Date()
            start.setTime(start.getTime() - 3600 * 1000 * 24 * 7)
            picker.$emit('pick', [start, end])
          }
        }, {
          text: '最近一个月',
          onClick(picker) {
            const end = new Date()
            const start = new Date()
            start.setTime(start.getTime() - 3600 * 1000 * 24 * 30)
            picker.$emit('pick', [start, end])
          }
        }, {
          text: '最近三个月',
          onClick(picker) {
            const end = new Date()
            const start = new Date()
            start.setTime(start.getTime() - 3600 * 1000 * 24 * 90)
            picker.$emit('pick', [start, end])
          }
        }]
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
      ],
      downloadLoading: false
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
    // 付款方式
    formatPaymentMethod(row, column) {
      if (row.payment_method === 'null') {
        return ''
      }
      return row.payment_method
    },
    // 订单状态
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
    // 是否签收
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
    // 是否退款
    formatRefundStatus(row) {
      switch (row.refund_status) {
        case 1:
          return '未退款'
        case -1:
          return '已退款'
      }
    },
    // 是否评价
    formatterReviewed(row) {
      return row.reviewed ? '已评价' : '未评价'
    },
    handleFilter() {
      console.log(this.listQuery)
      this.getList()
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
    handleDownload() {
      this.downloadLoading = true
      import('@/vendor/Export2Excel').then(excel => {
        const tHeader = ['订单号', '总金额', '支付交易号', '支付方式', '退款单号', '是否退款', '订单创建时间']
        const filterVal = ['no', 'total_amount', 'payment_no', 'payment_method', 'refund_no', 'reviewed', 'created_at']
        const list = this.list
        const data = this.formatJson(filterVal, list)
        excel.export_json_to_excel({
          header: tHeader,
          data,
          filename: this.filename,
          autoWidth: true,
          bookType: 'xlsx'
        })
        this.downloadLoading = false
      })
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
