<template>
  <div class="app-container">
    <el-card>
      <el-form ref="form" :model="form" :inline="true" label-position="right">
        <el-row>
          <el-col>
            <el-form-item label="所属分类">
              <el-input v-if="formDisable" v-model="form.the_house_category.name" :readonly="formDisable" style="width: 400px" />
              <el-select v-else v-model="form.the_house_category_id" placeholder="请选择" style="width: 190px">
                <el-option
                  v-for="item in theHouseCategoryList"
                  :key="item.id"
                  :label="item.name"
                  :value="item.id"
                />
              </el-select>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="10">
            <div style="width: 470px;margin-bottom: 25px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('title')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="title">
                  <template slot="title">
                    <span class="theHouseText">文案大标题</span>
                  </template>
                  <span v-html="form.title" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
          <el-col :span="10">
            <div style="width: 470px;margin-bottom: 25px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('sub_title')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="sub_title">
                  <template slot="title">
                    <span class="theHouseText">文案副标题</span>
                  </template>
                  <span v-html="form.sub_title" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="10">
            <div style="width: 470px;margin-bottom: 25px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('describe')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="describe">
                  <template slot="title">
                    <span class="theHouseText">简要描述</span>
                  </template>
                  <span v-html="form.describe" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="10">
            <el-form-item label="banner图">
              <el-image v-if="formDisable" style="width: 120px;height: 120px;" :src="form.banner" fit="scale-down" @click="previewImgAction(form.banner)" />
              <el-upload
                v-else
                ref="uploadBanner"
                :class="{hideBanner:hideUploadBanner}"
                name="banner"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCountBanner"
                :file-list="bannerList"
                :on-change="handleBannerChange"
                :on-remove="handleBannerRemove"
              >
                <el-button size="small" type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传一张jpg/png文件，且不超过500kb</div>
              </el-upload>
            </el-form-item>
          </el-col>
          <el-col :span="10">
            <el-form-item label="缩略图">
              <el-image v-if="formDisable" style="width: 120px;height: 120px;" :src="form.thumbnail" fit="scale-down" @click="previewImgAction(form.thumbnail)" />
              <el-upload
                v-else
                ref="uploadThumbnail"
                :class="{hideThumbnail:hideUploadThumbnail}"
                name="thumbnail"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCountThumbnail"
                :file-list="thumbnailList"
                :on-change="handleThumbnailChange"
                :on-remove="handleThumbnailRemove"
              >
                <el-button size="small" type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传一张jpg/png文件，且不超过500kb</div>
              </el-upload>
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
    </el-card>
    <el-card v-if="!formDisable" class="box-card-image" shadow="hover">
      <el-row style="margin-bottom: 50px">
        <el-col :span="2" :offset="8">
          <el-button type="success" @click="submitTheHouse()">提交</el-button>
        </el-col>
        <el-col :span="2">
          <el-button type="info" plain @click="closePageButton">返回</el-button>
        </el-col>
      </el-row>
    </el-card>
    <el-card v-if="status==='view'" class="box-card" shadow="hover">
      <div slot="header" class="clearfix" style="margin-top: 10px; float: right">
        <router-link :to="{name:'ContentView', params: { status: 'create', content_id: '', the_house_id: form.id }}">
          <el-button v-waves>添加</el-button>
        </router-link>
      </div>
      <div slot="header" class="clearfix">
        <span>The House文案</span>
      </div>
      <el-table
        :data="form.the_house_contents"
        style="width: 100%"
        :row-style="{height: '10px'}"
        border
        :header-cell-style="{background:'#ebeef5'}"
      >
        <el-table-column type="index" header-align="center" align="center" label="序号" width="60" />
        <el-table-column header-align="center" align="center" label="文案标题">
          <template slot-scope="scope">
            <router-link :to="{name: 'ContentView',params: {status: 'view', content_id: scope.row.id}}">
              <el-tag>{{ scope.row.title }}</el-tag>
            </router-link>
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" label="文案正文">
          <template slot-scope="scope">
            <p v-html="scope.row.content" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" label="文案配图">
          <template slot-scope="{row}">
            <el-image style="width: 100px;height: 100px;" :src="row.img" fit="scale-down" @click="previewImgAction(row.img)" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="img_desc" label="图片描述">
          <template slot-scope="scope">
            <p v-html="scope.row.img_desc" />
          </template>
        </el-table-column>
        <el-table-column header-align="center" align="center" prop="created_at" label="创建时间" />
        <el-table-column header-align="center" align="center" prop="updated_at" label="更新时间" />
      </el-table>
    </el-card>
    <!--    图片预览弹框-->
    <el-dialog
      title="图片预览"
      :visible.sync="previewImgDialogVisible"
      width="50%"
    >
      <el-image :src="previewImg" style="width: 100%;" />
    </el-dialog>
    <!-- TinyMce 实例公用弹框 -->
    <el-dialog title="富文本编辑" :visible.sync="showDialog" width="50%" :before-close="handleClose">
      <tinymce v-model="tinyTxt" :height="150" />
      <span slot="footer" class="dialog-footer">
        <el-button @click="showDialog = false">取 消</el-button>
        <el-button type="primary" @click="confirmSaveTiny">确 定</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import Tinymce from '@/components/Tinymce'
import { theHouseCategoryList, theHouseDetail, theHouseStore, theHouseUpdate } from '@/api/theHouse'
export default {
  name: 'CreateOrView',
  components: {
    Tinymce
  },
  data() {
    return {
      status: '', // 页面状态
      form: {
        title: '',
        sub_title: '',
        describe: '',
        thumbnail: '',
        banner: '',
        the_house_category_id: ''
      },
      theHouseCategoryList: [],
      the_house_slug: '',
      // 富文本
      showDialog: false,
      tinyTxt: '',
      flag: '',
      formDisable: false,
      activeNames: ['title', 'sub_title', 'describe'],
      // 图片上传
      hideUploadBanner: false,
      limitCountBanner: 1,
      bannerList: [],
      // 缩略图
      hideUploadThumbnail: false,
      limitCountThumbnail: 1,
      thumbnailList: [],
      // 图片dialog
      previewImg: '',
      previewImgDialogVisible: false
    }
  },
  created() {
    this.getInitData()
    this.getHouseCategory()
  },
  methods: {
    // 获取初始化数据
    getInitData() {
      this.status = this.$route.params.status
      if (this.status === 'view') {
        this.the_house_slug = this.$route.params.the_house_slug
        this.formDisable = true
        this.getHouseDetail()
      } else if (this.status === 'edit') {
        this.the_house_slug = this.$route.params.the_house_slug
        // 获取初始化数据
        this.getHouseDetail()
      }
    },
    // 获取the house列表
    getHouseCategory() {
      theHouseCategoryList().then((response) => {
        this.theHouseCategoryList = response.data.data
      })
    },
    // 获取the house 详情
    getHouseDetail() {
      theHouseDetail(this.the_house_slug).then((response) => {
        this.form = response.data
        this.bannerList.push({ 'url': this.form.banner })
        this.thumbnailList.push({ 'url': this.form.thumbnail })
        // 图片上传初始化
        this.hideUploadBanner = true
        this.hideUploadThumbnail = true
      })
    },
    // 调起富文本dialog
    handleDescribes(flag) {
      this.flag = flag
      this.tinyTxt = ''
      this.showDialog = true
    },
    // 确认保存当前富文本
    confirmSaveTiny() {
      switch (this.flag) {
        case 'title':
          this.form.title = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'sub_title':
          this.form.sub_title = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'describe':
          this.form.describe = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
      }
      this.$message({
        message: '编辑完成',
        type: 'success'
      })
    },
    // dialog 关闭提醒
    handleClose(done) {
      this.$confirm('确认关闭？')
        .then((_) => {
          done()
        })
        .catch((_) => {})
    },
    // 图片上传
    handleBannerChange(file, fileList) {
      this.hideUploadBanner = fileList.length >= this.limitCountBanner
      this.form.banner = file.raw
    },
    handleBannerRemove(file, fileList) {
      this.hideUploadBanner = fileList.length >= this.limitCountBanner
      this.form.banner = null
    },
    // 图片上传
    handleThumbnailChange(file, fileList) {
      this.hideUploadThumbnail = fileList.length >= this.limitCountThumbnail
      this.form.thumbnail = file.raw
    },
    handleThumbnailRemove(file, fileList) {
      this.hideUploadThumbnail = fileList.length >= this.limitCountThumbnail
      this.form.thumbnail = null
    },
    // 点击预览图片
    previewImgAction(url) {
      this.previewImg = url
      this.previewImgDialogVisible = true
    },
    // 关闭页面
    closePageButton() {
      this.$store.dispatch('tagsView/delView', this.$route)
      this.$router.go(-1)
    },
    // 提交数据
    submitTheHouse() {
      // 限制title、sub_title、describe不可为空
      if (!this.form.title) {
        this.$message({
          message: '文案大标题不可为空！',
          type: 'warning'
        })
        return false
      } else if (!this.form.sub_title) {
        this.$message({
          message: '文案副标题不可为空！',
          type: 'warning'
        })
        return false
      } else if (!this.form.describe) {
        this.$message({
          message: '简要描述不可为空！',
          type: 'warning'
        })
        return false
      }
      if (this.status === 'create') {
        this.theHouseStore()
      } else if (this.status === 'edit') {
        this.theHouseUpdate()
      }
    },
    theHouseStore() {
      const postForm = new FormData()
      for (const key in this.form) {
        postForm.append(key, this.form[key])
      }
      theHouseStore(postForm).then((response) => {
        if (response.code === 20001) {
          this.initFormData()
          this.$message({
            type: 'success',
            message: '创建成功！'
          })
          this.closePageButton()
        } else {
          this.$message({
            type: 'error',
            message: '创建失败，请检查参数！'
          })
        }
      })
    },
    theHouseUpdate() {
      delete this.form['the_house_category']
      const postForm = new FormData()
      for (const key in this.form) {
        postForm.append(key, this.form[key])
      }
      theHouseUpdate(this.form.slug, postForm).then((response) => {
        if (response.code === 20001) {
          this.$message({
            type: 'success',
            message: '更新成功！'
          })
          this.closePageButton()
        } else {
          this.$message({
            type: 'error',
            message: '更新失败，请检查参数！'
          })
        }
      })
    },
    initFormData() {
      this.$refs['form'].resetFields()
      this.form.title = ''
      this.form.sub_title = ''
      this.form.describe = ''
      this.form.banner = ''
      this.bannerList = []
      this.hideUploadBanner = false
      this.form.thumbnail = ''
      this.thumbnailList = []
      this.hideUploadThumbnail = false
    }
  }
}
</script>

<style lang="scss">
  /*上传图片完成后隐藏按钮*/
  .hideBanner .el-upload--picture-card {
    display: none;
  }
  .hideThumbnail .el-upload--picture-card {
    display: none;
  }
  .theHouseText {
    text-align: right;
    vertical-align: middle;
    padding: 0 12px 0 0;
    color: #606266;
    font-size: 14px;
    box-sizing: border-box;
    font-weight: 700;
  }
</style>
