<template>
  <div>
    <el-card class="box-card">
      <el-form ref="theHouseList">
        <el-row>
          <el-col :span="8">
            <el-form-item label="The House 类别">
              <el-input
                v-model="theHouseList.category"
                placeholder="输入The House 类别"
                style="width: 200px;"
                class="filter-item"
                clearable
              />
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
      <el-button v-waves class="filter-item" type="primary" style="margin-left: 20px;" icon="el-icon-search" @click="handleFilter">
        {{ $t('table.search') }}
      </el-button>
    </el-card>
    <el-card>
      <div slot="header" class="clearfix">
        <router-link :to="{name:'CreateOrView', params: { status: 'create', the_house_slug: ''}}">
          <el-button v-waves>添加</el-button>
        </router-link>
      </div>
      <el-table
        v-loading="listLoading"
        :data="theHouseList"
        border
        fit
        highlight-current-row
        style="width: 100%;"
        :header-cell-style="{background:'#ebeef5'}"
      >
        <el-table-column header-align="center" type="index" align="center" label="ID" width="60" />
        <el-table-column header-align="center" prop="the_house_category.name" align="center" label="所属类别" width="100px" />
        <el-table-column header-align="center" align="center" label="文案大标题">
          <template slot-scope="scope">
            <router-link :to="{name:'CreateOrView', params: { status: 'view', the_house_slug: scope.row.slug}}">
              <el-tag>{{ scope.row.title }}</el-tag>
            </router-link>
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" label="文案副标题">
          <template slot-scope="scope">
            <p v-html="scope.row.sub_title" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" show-overflow-tooltip label="简要描述">
          <template slot-scope="scope">
            <p v-html="scope.row.describe" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" label="banner图">
          <template slot-scope="{row}">
            <el-image style="width: 100px;height: 100px;" :src="row.banner" fit="scale-down" @click="previewImgAction(row.banner)" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="created_at" label="创建时间" width="180px" />
        <el-table-column header-align="center" align="center" prop="updated_at" label="更新时间" width="180px" />
        <el-table-column
          header-align="center"
          align="center"
          label="操作"
        >
          <template slot-scope="scope">
            <el-tooltip class="item" effect="dark" content="编辑" placement="top">
              <router-link :to="{name:'CreateOrView', params: { status: 'edit', the_house_slug: scope.row.slug}}">
                <el-button type="primary" icon="el-icon-edit" circle style="margin-right: 5px" />
              </router-link>
            </el-tooltip>
            <el-tooltip class="item" effect="dark" content="删除" placement="top">
              <el-button type="danger" icon="el-icon-delete" circle @click="deleteConfirm(scope.row.slug)" />
            </el-tooltip>
          </template>
        </el-table-column>
      </el-table>
    </el-card>
    <pagination
      v-show="total>0"
      :total="total"
      :page.sync="requestQuery.page"
      :limit.sync="requestQuery.page_limit"
      @pagination="getTheHouseList"
    />
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
import { theHouseList, theHouseDestroy } from '@/api/theHouse'
import waves from '@/directive/waves'
import Pagination from '@/components/Pagination'
export default {
  name: 'TheHouseList',
  components: { Pagination },
  directives: { waves },
  data() {
    return {
      theHouseList: [
      ],
      requestQuery: {
        page: 1,
        page_limit: 10
      },
      listLoading: false,
      total: 0,
      previewImgDialogVisible: false,
      previewImg: ''
    }
  },
  created() {
    this.getTheHouseList()
  },
  methods: {
    getTheHouseList() {
      this.listLoading = true
      theHouseList(this.requestQuery).then((response) => {
        this.theHouseList = response.data.data
        this.total = response.data.total
        this.listLoading = false
      })
    },
    // 点击预览图片
    previewImgAction(url) {
      this.previewImg = url
      this.previewImgDialogVisible = true
    },
    handleFilter() {
      console.log('test')
    },
    deleteConfirm(slug) {
      this.$confirm('此操作将永久删除该文件, 是否继续?', '提示', {
        confirmButtonText: '确定',
        cancelButtonText: '取消',
        type: 'warning'
      }).then(() => {
        // 请求后台删除
        theHouseDestroy(slug).then(response => {
          if (response.code === 20001) {
            this.$message({
              message: '删除成功!',
              type: 'success'
            })
            // 刷新数据
            this.getTheHouseList()
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
