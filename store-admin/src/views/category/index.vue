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
        <router-link :to="{name:'CreateOrUpdate'}">
          <el-button v-waves @click="handleCreate()">添加</el-button>
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
        <el-table-column header-align="center" prop="id" align="center" label="ID" width="60" />
        <el-table-column header-align="center" label="类目名称" prop="title" align="center" width="80" />
        <el-table-column header-align="center" label="类目名称(英文)" prop="title_en" align="center" width="80" />
        <el-table-column header-align="center" label="分类描述" show-overflow-tooltip prop="describe" width="200" />
        <el-table-column header-align="center" label="分类描述(英文)" show-overflow-tooltip prop="describe_en" width="200" />
        <el-table-column header-align="center" label="分类Banner">
          <template slot-scope="{row}">
            <el-image style="width: 100px;height: 100px;" :src="row.banner" fit="scale-down" @click="previewImgAction(row.banner)" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" label="分类简介" show-overflow-tooltip prop="description" />
        <el-table-column header-align="center" label="分类简介(英文)" show-overflow-tooltip prop="description_en" />
        <el-table-column header-align="center" label="分类简介图">
          <template slot-scope="{row}">
            <el-image style="width: 100px;height: 100px;" :src="row.img" fit="scale-down" @click="previewImgAction(row.img)" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" label="所属分类ID" prop="parent_id" align="center" />
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
import { getList } from '@/api/category'
import waves from '@/directive/waves' // waves directive
// import { parseTime } from '@/utils'
import Pagination from '@/components/Pagination' // secondary package based on el-pagination

export default {
  name: 'CategoryList',
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
        page_limit: 20
      },
      previewImg: '',
      previewImgDialogVisible: false,
      showReviewer: false,
      temp: {
        id: undefined,
        importance: 1,
        remark: '',
        timestamp: new Date()
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
    // 获取数据列表
    getList() {
      this.listLoading = true
      getList(this.listQuery).then(response => {
        this.list = response.data.data
        this.total = response.data.total
        this.listLoading = false
      })
    },
    handleCreate() {
      console.log(123)
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
    }
  }
}
</script>
<style scoped lang="scss">
  .box-card-centent {
    margin-top: 20px;
  }
</style>
