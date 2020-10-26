<template>
  <div class="app-container">
    <el-card class="box-card filter-container">
      <el-form ref="listQuery" :model="listQuery">
        <el-row>
          <el-col :span="6">
            <el-form-item label="商品名称">
              <el-input
                v-model="listQuery.product_name"
                placeholder="输入商品名称"
                style="width: 200px;"
                class="filter-item"
                clearable
              />
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="英文名称">
              <el-input
                v-model="listQuery.product_name_en"
                placeholder="输入商品名称(英文)"
                style="width: 200px;"
                class="filter-item"
                clearable
              />
            </el-form-item>
          </el-col>
          <el-col :span="10">
            <el-form-item label="商品创建时间">
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
          <el-col :span="6">
            <el-form-item label="产品类目">
              <el-input
                v-model="listQuery.product_category"
                placeholder="输入产品类目"
                style="width: 200px;"
                class="filter-item"
                clearable
              />
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="所属商品">
              <el-input
                v-model="listQuery.parent_product"
                placeholder="输入所属商品"
                style="width: 200px;"
                class="filter-item"
                clearable
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
    <el-card class="box-card box-card-centent" style="margin-top: 20px;">
      <div slot="header" class="clearfix">
        <router-link :to="{name:'CreateProduct'}">
          <el-button v-waves>添加</el-button>
        </router-link>
      </div>
      <el-table
        :key="tableKey"
        v-loading="listLoading"
        :data="list"
        border
        fit
        stripe
        highlight-current-row
        style="width: 100%;"
        :header-cell-style="{background:'#ebeef5'}"
      >
        <el-table-column type="index" header-align="center" align="center" label="序号" width="60" />
        <el-table-column header-align="center" label="商品名称" prop="product_name" align="center" width="130px">
          <template slot-scope="scope">
            <router-link :to="{ name: 'ProductViewOrUpdate', params: {'status': 'view', 'product_slug': scope.row.slug} }">
              <el-tag>{{ scope.row.product_name }}</el-tag>
            </router-link>
          </template>
        </el-table-column>
        <el-table-column header-align="center" label="商品名称(英文)" prop="product_name_en" align="center" />
        <el-table-column header-align="center" label="所属商品" prop="parent.product_name" align="center" />
        <el-table-column header-align="center" label="Level" prop="level" :formatter="formatLevel" align="center" />
        <el-table-column header-align="center" label="所属分类" prop="product_category.name" align="center" />
        <el-table-column header-align="center" label="产品缩略图" align="center" width="125">
          <template slot-scope="{row}">
            <el-image style="width: 100px;height: 100px;" :src="row.thumbnail" fit="scale-down" @click="previewImgAction(row.thumbnail)" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" label="价格" prop="price" align="center" />
        <el-table-column header-align="center" label="优惠价格" prop="sale_price" align="center" />
        <el-table-column header-align="center" label="库存" prop="stock" align="center" />
        <el-table-column header-align="center" label="规格" prop="spec" align="center" />
        <el-table-column header-align="center" label="状态" prop="status" :formatter="formatStatus" align="center" />
        <el-table-column header-align="center" label="创建时间" prop="created_at" align="center" sortable />
        <el-table-column header-align="center" label="更新时间" prop="updated_at" align="center" sortable />
        <el-table-column
          header-align="center"
          align="center"
          label="操作"
          prop="product_id"
          min-width="100px"
        >
          <template slot-scope="scope">
            <el-tooltip class="item" effect="dark" content="编辑" placement="top">
              <router-link :to="{ name: 'ProductViewOrUpdate', params: {'status': 'edit', 'product_slug': scope.row.slug} }">
                <el-button type="primary" icon="el-icon-edit" circle style="margin-right: 5px" />
              </router-link>
            </el-tooltip>
            <el-tooltip class="item" effect="dark" content="删除" placement="top">
              <el-button type="danger" icon="el-icon-delete" circle @click="deleteConfirm(scope.row.slug)" />
            </el-tooltip>
          </template>
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
      <el-image :src="previewImg" style="width: 100%;" />
    </el-dialog>
  </div>
</template>

<script>
import { getList } from '@/api/product'
import Pagination from '@/components/Pagination'
import waves from '@/directive/waves'
import { productDelete } from '@/api/product'
export default {
  name: 'ProductList',
  components: { Pagination },
  directives: { waves },
  data() {
    return {
      list: null,
      total: 0,
      listQuery: {
        page: 1,
        page_limit: 10,
        product_name: '',
        product_name_en: '',
        parent_product: '',
        product_category: '',
        created_at: ''
      },
      listLoading: true,
      tableKey: 0,
      previewImgDialogVisible: false,
      previewImg: '',
      status: '', // 商品操作标志
      viewOrUpdateData: {
        status: '',
        product_slug: ''
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
      }
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
        this.listLoading = false
      })
    },
    formatStatus(row, column) {
      return row.status === 1 ? '新品' : row.status === 2 ? '畅销' : row.status === 3 ? '促销' : row.status === -1 ? '下架' : '其他'
    },
    formatLevel(row, column) {
      return row.level === 1 ? '套装' : row.level === 2 ? '单品' : '其他'
    },
    handleFilter() {
      this.getList()
    },
    // 删除确认
    deleteConfirm(product_slug) {
      this.$confirm('此操作将永久删除该商品, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        // 请求后台删除
        productDelete(product_slug).then(response => {
          if (response.code === 20001) {
            this.$message({
              message: '删除成功!',
              type: 'success'
            })
            // 刷新数据
            this.getList()
          } else {
            this.$message({
              message: '删除失败！',
              type: 'error'
            })
          }
        })
      }).catch(() => {
        this.$message({
          type: 'info',
          message: '已取消删除'
        })
      })
    }
  }
}
</script>

<style scoped>

</style>
