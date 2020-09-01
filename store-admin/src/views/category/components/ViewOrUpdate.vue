<template>
  <div class="app-container">
    <el-form ref="categoryDetail" :model="categoryDetail" :inline="true" label-position="right">
      <!--      类目信息-->
      <el-card class="box-card-description" shadow="hover" style="margin-bottom: 10px">
        <div slot="header" class="clearfix">
          <span>类目信息</span>
        </div>
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="上级类目">
              <el-input v-if="formDisable" v-model="categoryDetail.parent.title" :readonly="formDisable" style="width: 400px" />
              <el-select v-else v-model="categoryDetail.parent_id" placeholder="请选择" style="width: 400px">
                <el-option
                  v-for="item in parentCategory"
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
            <el-form-item label="类目名称">
              <el-input v-model="categoryDetail.title" :readonly="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="类目英文名称">
              <el-input v-model="categoryDetail.title_en" :readonly="formDisable" style="width: 370px" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="12">
            <div style="width: 470px;margin-bottom: 25px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('describe')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="describe">
                  <template slot="title">
                    <span class="productDetailText">类目描述</span>
                  </template>
                  <span v-html="categoryDetail.describe" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
          <el-col :span="12">
            <div style="width: 470px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('describe_en')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="describe_en">
                  <template slot="title">
                    <span class="productDetailText">类目描述(英文)</span>
                  </template>
                  <span v-html="categoryDetail.describe_en" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="12">
            <div style="width: 470px;margin-bottom: 25px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('description')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="description">
                  <template slot="title">
                    <span class="productDetailText">类目简介</span>
                  </template>
                  <span v-html="categoryDetail.description" />
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
                    <span class="productDetailText">类目简介(英文)</span>
                  </template>
                  <span v-html="categoryDetail.description_en" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="类目banner图">
              <el-image v-if="formDisable" style="width: 120px;height: 120px;" :src="categoryDetail.banner" fit="scale-down" @click="previewImgAction(categoryDetail.banner)" />
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
          <el-col :span="12">
            <el-form-item label="类目简介图">
              <el-image v-if="formDisable" style="width: 120px;height: 120px;" :src="categoryDetail.img" fit="scale-down" @click="previewImgAction(categoryDetail.img)" />
              <el-upload
                v-else
                ref="uploadBanner"
                :class="{hideBanner:hideUploadImg}"
                name="img"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCountImg"
                :file-list="imgList"
                :on-change="handleImgChange"
                :on-remove="handleImgRemove"
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
            <el-button type="success" @click="submitCategory(categoryDetail)">提交</el-button>
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
import { categoryDetail, getList, categoryEdit } from '@/api/category'
export default {
  name: 'CategoryViewOrUpdate',
  components: {
    Tinymce
  },
  data() {
    return {
      showDialog: false,
      tinyTxt: '',
      flag: '',
      formDisable: false,
      category_slug: '',
      previewImgDialogVisible: false,
      previewImg: '',
      categoryDetail: {
        id: '',
        slug: '',
        title: '',
        title_en: '',
        describe: '',
        describe_en: '',
        banner: '',
        description: '',
        description_en: '',
        img: '',
        parent_id: '',
        created_at: '',
        updated_at: '',
        product_category_stories:
          {
            id: '',
            product_category_id: '',
            title: '',
            title_en: '',
            description: '',
            description_en: '',
            banner: '',
            created_at: '',
            updated_at: ''
          },
        parent: {
          id: '',
          title: ''
        }
      },
      parentCategory: null,
      activeNameDescribe: 'describe',
      // 图片上传
      hideUploadBanner: false,
      limitCountBanner: 1,
      bannerList: [],
      hideUploadImg: false,
      limitCountImg: 1,
      imgList: [],
      activeNames: ['describe', 'describe_en', 'description', 'description_en']
    }
  },
  created() {
    this.getCategoryData()
    this.getCategoryDetail()
  },
  methods: {
    // 点击预览图片
    previewImgAction(url) {
      this.previewImg = url
      this.previewImgDialogVisible = true
    },
    getCategoryData() {
      this.category_slug = this.$route.params.category_slug
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
        this.parentCategory = response.data.data
      })
    },
    getCategoryDetail() {
      // 类目故事详细数据
      categoryDetail(this.category_slug).then(response => {
        this.categoryDetail = response.data
        if (response.data.product_category_stories[0]) {
          this.categoryDetail.product_category_stories = response.data.product_category_stories[0]
        }
        // 图片上传初始图片
        this.bannerList.push({ 'url': this.categoryDetail.banner })
        this.imgList.push({ 'url': this.categoryDetail.img })
        this.hideUploadImg = true
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
      const postForm = new FormData()
      // 更换了图片则保存
      postForm.append('img', this.categoryDetail.img)
      postForm.append('banner', this.categoryDetail.banner)
      postForm.append('description', this.categoryDetail.description)
      postForm.append('description_en', this.categoryDetail.description_en)
      postForm.append('title', this.categoryDetail.title)
      postForm.append('title_en', this.categoryDetail.title_en)
      postForm.append('describe', this.categoryDetail.describe)
      postForm.append('describe_en', this.categoryDetail.describe_en)
      postForm.append('parent_id', this.categoryDetail.parent_id)
      categoryEdit(postForm, this.categoryDetail.slug).then(response => {
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
        case 'describe':
          this.categoryDetail.describe = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'describe_en':
          this.categoryDetail.describe_en = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'description':
          this.categoryDetail.description = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'description_en':
          this.categoryDetail.description_en = this.tinyTxt
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
      this.categoryDetail.banner = file.raw
    },
    handleBannerRemove(file, fileList) {
      this.hideUploadBanner = fileList.length >= this.limitCountBanner
      this.categoryDetail.banner = null
    },
    handleImgChange(file, fileList) {
      this.hideUploadImg = fileList.length >= this.limitCountImg
      this.categoryDetail.img = file.raw
    },
    handleImgRemove(file, fileList) {
      this.hideUploadImg = fileList.length >= this.limitCountImg
      this.categoryDetail.img = null
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
