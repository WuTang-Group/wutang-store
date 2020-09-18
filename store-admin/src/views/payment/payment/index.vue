<template>
  <div class="app-container">
    <el-card class="box-card filter-container">
      <el-input
        v-model="listQuery.title"
        placeholder="输入支付类型"
        style="width: 200px;"
        class="filter-item"
        @keyup.enter.native="handleFilter"
      />
      <el-button v-waves class="filter-item" type="primary" style="margin-left: 20px;" icon="el-icon-search" @click="handleFilter">
        {{ $t('table.search') }}
      </el-button>
    </el-card>
    <el-card class="box-card box-card-centent" style="margin-top: 20px;">
      <!--      <div slot="header" class="clearfix">-->
      <!--        <router-link :to="{name:'CreateAssetImg'}">-->
      <!--          <el-button v-waves>添加</el-button>-->
      <!--        </router-link>-->
      <!--      </div>-->
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
        <el-table-column align="center" prop="type" header-align="center" label="支付类型" />
        <el-table-column align="center" prop="request_url" header-align="center" label="发起请求路由" />
        <el-table-column label="是否激活" align="center">
          <template slot-scope="scope">
            <el-switch
              v-model="scope.row.status"
              active-color="#13ce66"
              inactive-color="#ff4949"
              :active-value="1"
              :inactive-value="-1"
              disabled
            />
          </template>
        </el-table-column>>
        <el-table-column align="center" header-align="center" label="支付logo">
          <template slot-scope="{row}">
            <el-image v-if="!row.editStatus" style="width: 100px;height: 100px;" :src="row.img" fit="scale-down" @click="previewImgAction(row.img)" />
            <el-upload
              v-else
              ref="uploadImg"
              :class="{hideImg:hideUploadImg}"
              name="banner"
              action="#"
              list-type="text"
              :auto-upload="false"
              :limit="limitCountImg"
              :file-list="imgList"
              :on-change="handleImgChange"
              :on-remove="handleImgRemove"
            >
              <el-button size="small" type="primary">点击上传</el-button>
            </el-upload>
          </template>

        </el-table-column>
        <el-table-column header-align="center" label="创建时间" prop="created_at" align="center" />
        <el-table-column header-align="center" label="更新时间" prop="updated_at" align="center" />
        <el-table-column
          header-align="center"
          align="center"
          label="操作"
        >
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
              style="margin:5px"
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
import { getPaymentList, PaymentImgUpdate } from '@/api/payment'
import waves from '@/directive/waves' // waves directive
import Pagination from '@/components/Pagination/index'
export default {
  name: 'PaymentList',
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
      isActive: false, // 控制title class的绑定
      hideUploadImg: false,
      limitCountImg: 1,
      imgList: [],
      imgTemp: ''
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
      getPaymentList(this.listQuery).then(response => {
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
    confirmEdit(row) {
      console.log(this.imgTemp)
      const postForm = new FormData()
      postForm.append('img', this.imgTemp)
      console.log(postForm.get('img'))
      PaymentImgUpdate(row.id, postForm).then((response) => {
        if (response.code === 20001) {
          this.$message({
            message: '更新成功',
            type: 'success'
          })
          this.getList()
        } else {
          this.$message({
            message: '更新失败',
            type: 'error'
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
    handleFilter() {
      console.log('test')
    },
    handleMouseEnter() {
      this.isActive = true
    },
    handleMouseMove() {
      this.isActive = false
    },
    // 图片上传
    handleImgChange(file, fileList) {
      this.hideUploadImg = fileList.length >= this.limitCountImg
      this.imgTemp = file.raw
    },
    handleImgRemove(file, fileList) {
      this.hideUploadImg = fileList.length >= this.limitCountImg
      this.imgTemp = null
    }
  }
}
</script>
<style scoped lang="scss">
  .hideImg .el-upload--picture-card {
    display: none;
  }
  .box-card-centent {
    margin-top: 20px;
  }
  .active {
    color: #1890ff;
  }
</style>
