<template>
  <div>
    <el-card class="box-card">
      <el-form ref="theHouseList">
        <el-row>
          <el-col :span="8">
            <el-form-item label="The House 类别">
              <el-input
                v-model="listQuery.category"
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
      <el-table
        :key="tableKey"
        v-loading="listLoading"
        :data="listQuery"
        border
        fit
        highlight-current-row
        style="width: 100%;"
        :header-cell-style="{background:'#ebeef5'}"
      >
        <el-table-column header-align="center" type="index" align="center" label="ID" width="60" />
        <el-table-column header-align="center" align="center" label="名称">
          <template slot-scope="scope">
            <router-link :to="{}">
              <el-tag>{{ scope.row.name }}</el-tag>
            </router-link>
          </template>
        </el-table-column>
        <el-table-column header-align="center" prop="title" align="center" label="banner标题" />
        <el-table-column header-align="center" align="center" prop="sub_title" label="banner副标题" />
        <el-table-column header-align="center" align="center" label="banner图">
          <template slot-scope="{row}">
            <el-image style="width: 100px;height: 100px;" :src="row.banner" fit="scale-down" @click="previewImgAction(row.banner)" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="created_at" label="创建时间" width="180px" />
        <el-table-column header-align="center" align="center" prop="updated_at" label="更新时间" width="180px" />
      </el-table>
    </el-card>
    <pagination
      v-show="total>0"
      :total="total"
      :page.sync="requestQuery.page"
      :limit.sync="requestQuery.page_limit"
      @pagination="getTheHouseCategoryList"
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
import { theHouseCategoryList } from '@/api/theHouse'
import waves from '@/directive/waves'
import Pagination from '@/components/Pagination'
export default {
  name: 'HouseCategoryList',
  components: { Pagination },
  directives: { waves },
  data() {
    return {
      listQuery: [
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
    this.getTheHouseCategoryList()
  },
  methods: {
    getTheHouseCategoryList() {
      this.listLoading = true
      theHouseCategoryList(this.requestQuery).then((response) => {
        console.log(response)
        this.listQuery = response.data.data
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
    }
  }
}
</script>

<style scoped>

</style>
