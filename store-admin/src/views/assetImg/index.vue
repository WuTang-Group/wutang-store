<template>
  <div class="app-container">
    <el-card class="box-card filter-container">
      <el-input
        v-model="listQuery.title"
        placeholder="输入分类名称"
        style="width: 200px;"
        class="filter-item"
        @keyup.enter.native="handleFilter"
      />
      <el-button v-waves class="filter-item" type="primary" style="margin-left: 20px;" icon="el-icon-search" @click="handleFilter">
        {{ $t('table.search') }}
      </el-button>
    </el-card>
    <el-card class="box-card box-card-centent" style="margin-top: 20px;">
      <div slot="header" class="clearfix">
        <router-link :to="{name:'CreateAssetImg', params: {status: 'create', data: null}}">
          <el-button v-waves>添加</el-button>
        </router-link>
      </div>
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
        <el-table-column align="center" type="index" header-align="center" label="序号" width="60" />
        <el-table-column align="center" header-align="center" label="图片位置" show-overflow-tooltip prop="img_location" :formatter="formatterLocation" />
        <el-table-column align="center" header-align="center" label="图片类型" show-overflow-tooltip prop="type" />
        <el-table-column align="center" header-align="center" label="关联产品" show-overflow-tooltip prop="product.product_name" />
        <el-table-column align="center" header-align="center" label="图片">
          <template slot-scope="{row}">
            <el-image style="width: 100px;height: 100px;" :src="row.img" fit="scale-down" @click="previewImgAction(row.img)" />
          </template>
        </el-table-column>ss
        <el-table-column header-align="center" label="创建时间" prop="created_at" align="center" />
        <el-table-column header-align="center" label="更新时间" prop="updated_at" align="center" />
        <el-table-column
          header-align="center"
          align="center"
          label="操作"
        >
          <template slot-scope="scope">
            <el-tooltip class="item" effect="dark" content="编辑" placement="top">
              <router-link :to="{name:'CreateAssetImg', params: { status: 'edit', data: scope.row}}">
                <el-button type="primary" icon="el-icon-edit" circle style="margin-right: 5px" />
              </router-link>
            </el-tooltip>
            <el-tooltip class="item" effect="dark" content="删除" placement="top">
              <el-button type="danger" icon="el-icon-delete" circle @click="deleteConfirm(scope.row.id)" />
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
import { getList, deleteAssetImg } from '@/api/assetImg'
import waves from '@/directive/waves' // waves directive
import Pagination from '@/components/Pagination' // secondary package based on el-pagination

export default {
  name: 'AssetImgList',
  components: { Pagination },
  directives: { waves },
  data() {
    return {
      tableKey: 0,
      list: null,
      total: 0,
      listLoading: true,
      listQuery: {
        page: 1,
        page_limit: 10
      },
      previewImg: '',
      previewImgDialogVisible: false,
      showReviewer: false,
      temp: {
        id: undefined,
        importance: 1,
        remark: '',
        timestamp: new Date()
      },
      isActive: false // 控制title class的绑定
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
    // 获取数据列表
    getList() {
      this.listLoading = true
      getList(this.listQuery).then(response => {
        this.list = response.data.data
        this.total = response.data.total
        this.listLoading = false
        console.log(this.list)
      })
    },
    resetTemp() {
      this.temp = {
        id: undefined,
        importance: 1,
        remark: '',
        timestamp: new Date(),
        title: '',
        status: 'published',
        type: ''
      }
    },
    // 删除确认
    deleteConfirm(assetImgId) {
      this.$confirm('此操作将永久删除该文件, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        // 请求后台删除
        deleteAssetImg(assetImgId).then(response => {
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
    },
    handleFilter() {
      console.log('test')
    },
    handleMouseEnter() {
      this.isActive = true
    },
    handleMouseMove() {
      this.isActive = false
    },
    formatterLocation(row) {
      switch (row.img_location) {
        case 1:
          return '首页'
        default:
          return '其他'
      }
    }
  }
}
</script>
<style scoped lang="scss">
  .box-card-centent {
    margin-top: 20px;
  }
  .active {
    color: #1890ff;
  }
</style>
