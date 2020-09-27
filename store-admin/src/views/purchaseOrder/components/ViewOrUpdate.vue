<template>
  <div class="app-container">
    <el-card class="box-card" shadow="hover" style="margin-bottom: 10px">
      <div slot="header" class="clearfix">
        <span>订单信息</span>
      </div>
      <el-form ref="orderDetail" :model="orderDetail" label-width="120px" :readonly="formDisable">
        <el-row :gutter="10">
          <el-col :span="7">
            <el-form-item label="用户">
              <el-input v-model="orderDetail.username" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="订单号">
              <el-input v-model="orderDetail.no" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="订单状态">
              <el-input v-model="orderDetail.status" :readonly="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="7">
            <el-form-item label="订单总金额">
              <el-input v-model="orderDetail.total_amount" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="是否关闭">
              <el-input v-model="orderDetail.closed" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="订单备注">
              <el-input v-model="orderDetail.remark" :readonly="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="7">
            <el-form-item label="支付方式">
              <el-input v-model="orderDetail.payment_method" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="支付交易号">
              <el-input v-model="orderDetail.payment_no" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="支付时间">
              <el-input v-model="orderDetail.paid_at" :readonly="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="7">
            <el-form-item label="是否退款">
              <el-input v-model="orderDetail.refund_status" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="退款单号">
              <el-input v-model="orderDetail.refund_no" :readonly="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="7">
            <el-form-item label="物流状态">
              <el-input v-model="orderDetail.ship_status" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="物流数据">
              <el-input v-model="orderDetail.ship_data" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="是否评价">
              <el-input v-model="orderDetail.reviewed" :readonly="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="7">
            <el-form-item label="收件人">
              <el-input v-model="orderDetail.address.contact_name" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="联系电话">
              <el-input v-model="orderDetail.address.contact_phone" :readonly="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="收货地址">
              <el-input v-model="addressAttribute" :readonly="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
    </el-card>
    <el-card class="box-card" shadow="hover">
      <div slot="header" class="clearfix">
        <span>商品信息</span>
      </div>
      <el-table
        :data="orderDetail.items"
        style="width: 100%"
        :row-style="{height: '10px'}"
        border
        :header-cell-style="{background:'#ebeef5'}"
      >
        <el-table-column type="index" header-align="center" align="center" label="序号" width="60" />
        <el-table-column header-align="center" align="center" prop="product.product_name" label="商品名称" />
        <el-table-column header-align="center" align="center" prop="product.short_description" label="简短介绍" />
        <el-table-column header-align="center" align="center" label="商品缩略图">
          <template slot-scope="{row}">
            <el-image style="width: 100px;height: 100px;" :src="row.product.thumbnail" fit="scale-down" @click="previewImgAction(row.product.thumbnail)" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="amount" label="数量" />
        <el-table-column header-align="center" align="center" prop="product.price" label="售 价" />
        <el-table-column header-align="center" align="center" prop="price" label="实付价格" />
        <el-table-column header-align="center" align="center" prop="rating" label="商品评分" />
        <el-table-column header-align="center" align="center" prop="review_count" label="评价数量" />
      </el-table>
    </el-card>
    <el-dialog
      title="图片预览"
      :visible.sync="previewImgDialogVisible"
      width="50%"
    >
      <el-image :src="previewImg" style="width: 100%;" />
    </el-dialog>
  </div>
</template>

<script>
import { orderDetail } from '@/api/purchaseOrder'
export default {
  name: 'ViewOrUpdate',
  data() {
    return {
      orderDetail: {
        address: {
          contact_name: '',
          contact_phone: ''
        }
      },
      orderNo: '',
      formDisable: true,
      username: '',
      previewImg: '',
      previewImgDialogVisible: false
    }
  },
  computed: {
    addressAttribute() {
      const addressInfo = this.orderDetail.address
      return addressInfo.province + addressInfo.city + addressInfo.district + addressInfo.address
    }
  },
  created() {
    this.getRequest()
    this.getOrderDetail()
  },
  methods: {
    getRequest() {
      this.orderNo = this.$route.params.no
      this.username = this.$route.params.username
    },
    getOrderDetail() {
      orderDetail(this.orderNo).then((response) => {
        this.orderDetail = response.data
        this.orderDetail.username = this.username
        // 订单状态
        switch (this.orderDetail.status) {
          case 0 :
            this.orderDetail.status = '待付款'
            break
          case 1:
            this.orderDetail.status = '已付款'
            break
          case -1:
            this.orderDetail.status = '付款失败'
            break
          case -2:
            this.orderDetail.status = '取消订单'
        }
        // 是否关闭
        if (this.orderDetail.closed) {
          this.orderDetail.closed = '已关闭'
        } else {
          this.orderDetail.closed = '未关闭'
        }
        // 退款状态
        switch (this.orderDetail.refund_status) {
          case 1:
            this.orderDetail.refund_status = '未退款'
            break
          case -1:
            this.orderDetail.refund_status = '已退款'
        }
        // 支付方式
        if (this.orderDetail.payment_method === 'null') {
          this.orderDetail.payment_method = ''
        }
        // 是否评价
        if (this.orderDetail.reviewed) {
          this.orderDetail.reviewed = '已评价'
        } else {
          this.orderDetail.reviewed = '未评价'
        }
        // 物流装填
        switch (this.orderDetail.ship_status) {
          case 0:
            this.orderDetail.ship_status = '已签收'
            break
          case 1:
            this.orderDetail.ship_status = '已发货'
            break
          case -1:
            this.orderDetail.ship_status = '未发货'
        }
      })
    },
    // 点击预览图片
    previewImgAction(url) {
      this.previewImg = url
      this.previewImgDialogVisible = true
    }
  }
}
</script>

<style scoped>

</style>
