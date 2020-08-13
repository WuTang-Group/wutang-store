<template>
  <div class="app-container">
    <el-card class="box-card filter-container">
      <el-input
        v-model="listQuery.title"
        placeholder="输入商品名称"
        style="width: 200px;"
        class="filter-item"
        @keyup.enter.native="handleFilter"
      />
      <el-button v-waves class="filter-item" type="primary" style="margin-left: 20px;" icon="el-icon-search" @click="handleFilter">
        {{ $t('table.search') }}
      </el-button>
    </el-card>
    <el-card class="box-card box-card-centent" style="margin-top: 20px;">
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
        <el-table-column header-align="center" prop="id" align="center" label="ID" width="60" />
        <el-table-column header-align="center" label="商品名称" prop="product_name" align="center" width="80" />
        <el-table-column header-align="center" label="商品名称(英文)" prop="product_name_en" align="center" width="80" />
        <el-table-column header-align="center" label="所属分类" prop="product_category.title" align="center" width="80" />
        <el-table-column header-align="center" label="产品缩略图" align="center" width="125">
          <template slot-scope="{row}">
            <el-image style="width: 100px;height: 100px;" :src="row.thumbnail" fit="scale-down" @click="previewImgAction(row.thumbnail)" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" label="价格" prop="price" align="center" width="80" />
        <el-table-column header-align="center" label="优惠价格" prop="sale_price" align="center" width="80" />
        <el-table-column header-align="center" label="库存" prop="stock" align="center" width="80" />
        <el-table-column header-align="center" label="规格" prop="spec" align="center" width="80" />
        <el-table-column header-align="center" label="评分" prop="rating" align="center" width="80" />
        <el-table-column header-align="center" label="销量" prop="sold_count" align="center" width="80" />
        <el-table-column header-align="center" label="评价数量" prop="review_count" align="center" width="80" />
        <el-table-column header-align="center" label="状态" prop="status" :formatter="formatStatus" align="center" width="80" />
        <el-table-column header-align="center" label="创建时间" prop="created_at" align="center" />
        <el-table-column header-align="center" label="更新时间" prop="updated_at" align="center" />
        <el-table-column
          header-align="center"
          align="center"
          label="操作"
        >
          <el-tooltip class="item" effect="dark" content="编辑" placement="top">
            <el-button type="primary" icon="el-icon-edit" circle />
          </el-tooltip>
          <el-tooltip class="item" effect="dark" content="删除" placement="top">
            <el-button type="danger" icon="el-icon-delete" circle />
          </el-tooltip>
        </el-table-column>
      </el-table>
      <pagination
        v-show="total>0"
        :total="total"
        :page.sync="listQuery.page"
        :limit.sync="listQuery.page_limit"
        @pagination="getList"
      />
    </el-card>
    <el-dialog
      title="图片预览"
      :visible.sync="previewImgDialogVisible"
      width="50%"
    >
      <el-image :src="previewImg" style="width: 100%;" fit="scale-down" />
    </el-dialog>
  </div>
</template>

<script>
import { getList } from '@/api/product'
import Pagination from '@/components/Pagination'
export default {
  name: 'ProductList',
  components: { Pagination },
  data() {
    return {
      list: null,
      total: 0,
      listQuery: {
        'page': 1,
        'page_limit': 10
      },
      listLoading: true,
      tableKey: 0,
      previewImgDialogVisible: false,
      previewImg: ''
    }
  },
  created() {
    this.getList()
  },
  methods: {
    // 点击预览图片
    previewImgAction(url) {
      this.previewImg = url
      this.previewImgDialogVisible = true
    },
    getList() {
      this.listLoading = true
      getList(this.listQuery).then(response => {
        this.list = response.data.data
        this.total = response.data.total
        console.log(this.list)
        this.listLoading = false
      })
    },
    formatStatus(row, column) {
      return row.status === 1 ? '新品' : row.status === 2 ? '畅销' : row.status === 3 ? '促销' : row.status === -1 ? '下架' : '其他'
    }
  }
}
</script>

<style scoped>

</style>
