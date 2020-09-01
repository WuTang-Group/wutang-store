<template>
  <div class="app-container">
    <el-form ref="categoryDetail" :model="categoryStoryDetail" :inline="true" label-position="right">
      <!--      类目信息-->
      <el-card class="box-card-description" shadow="hover" style="margin-bottom: 10px">
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="所属类目">
              <el-input v-if="formDisable" v-model="categoryStoryDetail.product_category.title" :readonly="formDisable" style="width: 400px" />
              <el-select v-else v-model="categoryStoryDetail.product_category_id" placeholder="请选择" style="width: 400px">
                <el-option
                  v-for="item in CategoryList"
                  :key="item.id"
                  :label="item.title"
                  :value="item.id"
                />
              </el-select>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="故事名称">
              <el-input v-model="categoryStoryDetail.title" :readonly="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="故事名称(英文)">
              <el-input v-model="categoryStoryDetail.title_en" :readonly="formDisable" style="width: 370px" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="12">
            <div style="width: 470px;margin-bottom: 25px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('description')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="description">
                  <template slot="title">
                    <span class="productDetailText">故事简介</span>
                  </template>
                  <span v-html="categoryStoryDetail.description" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
          <el-col :span="12">
            <div style="width: 470px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('description_en')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="description_en">
                  <template slot="title">
                    <span class="productDetailText">故事简介(英文)</span>
                  </template>
                  <span v-html="categoryStoryDetail.description_en" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="故事banner图">
              <el-image v-if="formDisable" style="width: 120px;height: 120px;" :src="categoryStoryDetail.banner" fit="scale-down" @click="previewImgAction(categoryStoryDetail.banner)" />
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
        </el-row>
      </el-card>
      <el-card v-if="!formDisable" class="box-card-image" shadow="hover">
        <el-row style="margin-bottom: 50px">
          <el-col :span="2" :offset="8">
            <el-button type="success" @click="submitCategory(categoryStoryDetail)">提交</el-button>
          </el-col>
          <el-col :span="2">
            <el-button type="info" plain @click="closePageButton">返回</el-button>
          </el-col>
        </el-row>
      </el-card>

    </el-form>
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
        <el-button type="primary" @click="comfirmSaveTiny">确 定</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import Tinymce from '@/components/Tinymce'
import { getList } from '@/api/category'
import { storyDetail, storyEdit } from '@/api/categoryStory'
export default {
  name: 'ViewUpdateStory',
  components: {
    Tinymce
  },
  data() {
    return {
      showDialog: false,
      tinyTxt: '',
      flag: '',
      formDisable: false,
      story_id: '',
      previewImgDialogVisible: false,
      previewImg: '',
      categoryStoryDetail: {
        id: '',
        title: '',
        title_en: '',
        banner: '',
        description: '',
        description_en: '',
        product_category_id: '',
        created_at: '',
        updated_at: '',
        product_category:
          {
            id: '',
            title: ''
          }
      },
      CategoryList: null,
      // 图片上传
      hideUploadBanner: false,
      limitCountBanner: 1,
      bannerList: [],
      hideUploadImg: false,
      limitCountImg: 1,
      imgList: [],
      activeNames: ['description', 'description_en']
    }
  },
  created() {
    this.getStoryData()
    this.getStoryDetail()
  },
  methods: {
    // 点击预览图片
    previewImgAction(url) {
      this.previewImg = url
      this.previewImgDialogVisible = true
    },
    getStoryData() {
      this.story_id = this.$route.params.story_id
      this.status = this.$route.params.status
      if (this.status === 'view') {
        this.formDisable = true
      } else {
        this.getCategoryList()
      }
    },
    // 获取父类列表
    getCategoryList() {
      const param = {
        page_limit: 40
      }
      getList(param).then((response) => {
        this.CategoryList = response.data.data
      })
    },
    getStoryDetail() {
      // 类目故事详细数据
      storyDetail(this.story_id).then(response => {
        this.categoryStoryDetail = response.data
        // 图片上传初始图片
        this.bannerList.push({ 'url': this.categoryStoryDetail.banner })
        this.hideUploadBanner = true
      })
    },
    // 关闭页面
    closePageButton() {
      this.$store.dispatch('tagsView/delView', this.$route)
      this.$router.go(-1)
    },
    // 提交数据
    submitCategory() {
      console.log(this.categoryStoryDetail)
      const postForm = new FormData()
      postForm.append('banner', this.categoryStoryDetail.banner)
      postForm.append('description', this.categoryStoryDetail.description)
      postForm.append('description_en', this.categoryStoryDetail.description_en)
      postForm.append('title', this.categoryStoryDetail.title)
      postForm.append('title_en', this.categoryStoryDetail.title_en)
      postForm.append('product_category_id', this.categoryStoryDetail.product_category_id)
      storyEdit(postForm, this.categoryStoryDetail.id).then(response => {
        if (response.code === 20001) {
          this.$message({
            message: '更新成功！',
            type: 'success'
          })
        } else {
          this.$message({
            message: '更新失败!',
            type: 'error'
          })
        }
      })
    },
    // 调起富文本dialog
    handleDescribes(flag) {
      this.flag = flag
      this.tinyTxt = ''
      this.showDialog = true
    },
    // 确认保存当前富文本
    comfirmSaveTiny() {
      switch (this.flag) {
        case 'description':
          this.categoryStoryDetail.description = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'description_en':
          this.categoryStoryDetail.description_en = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        default:
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
      this.categoryStoryDetail.banner = file.raw
    },
    handleBannerRemove(file, fileList) {
      this.hideUploadBanner = fileList.length >= this.limitCountBanner
      this.categoryStoryDetail.banner = null
    }
  }

}
</script>

<style lang="scss">
  /*上传图片完成后隐藏按钮*/
  .hideBanner .el-upload--picture-card {
    display: none;
  }
  .hideImg .el-upload--picture-card {
    display: none;
  }
  .productDetailText {
    text-align: right;
    vertical-align: middle;
    padding: 0 12px 0 0;
    color: #606266;
    font-size: 14px;
    box-sizing: border-box;
    font-weight: 700;
  }
</style>
