<template>
  <div class="app-container">
    <el-card class="box-card" style="padding: 0 30px">
      <el-form ref="form" :model="form" label-position="left">
        <el-row :gutter="10">
          <el-col :span="8">
            <el-form-item label="故事名称" prop="title">
              <el-input v-model="form.title" style="width: 250px" />
            </el-form-item>
          </el-col>
          <el-col :span="8">
            <el-form-item label="故事名称(英文)" prop="title_en">
              <el-input v-model="form.title_en" style="width: 250px" />
            </el-form-item>
          </el-col>
          <el-col :span="8">
            <el-form-item label="所属类目" prop="product_category_id">
              <el-select v-model="form.product_category_id" placeholder="请选择" style="width: 250px">
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
        <el-divider />
        <el-row :gutter="40">
          <el-col :span="12">
            <el-form-item prop="description">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('description')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="description">
                  <template slot="title">
                    <span class="productDetailText">类目简介</span>
                  </template>
                  <span v-html="form.description" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item prop="description_en">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('description_en')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="description_en">
                  <template slot="title">
                    <span class="productDetailText">类目简介(英文)</span>
                  </template>
                  <span v-html="form.description_en" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
        </el-row>
        <el-divider />
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="banner图">
              <el-upload
                ref="uploadBanner"
                :class="{hideBanner:hideUploadBanner}"
                name="banner"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCount"
                :file-list="bannerList"
                :on-change="handleBannerChange"
                :on-remove="handleBannerRemove"
              >
                <el-button size="small" plain type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传一张jpg/png文件，且不超过500kb</div>
              </el-upload>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row style="margin-bottom: 50px">
          <el-col :span="2" :offset="8">
            <el-button type="success" @click="updateValue()">提交</el-button>
          </el-col>
          <el-col :span="2">
            <el-button type="info" plain @click="closePageButton">返回</el-button>
          </el-col>
        </el-row>
      </el-form>
    </el-card>
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
import { store } from '@/api/categoryStory'

export default {
  name: 'CreateCategory',
  components: {
    Tinymce
  },
  data() {
    return {
      showDialog: false,
      tinyTxt: '',
      flag: '',
      form: {
        title: '',
        title_en: '',
        description: '',
        description_en: '',
        banner: '',
        product_category_id: '' //
      },
      CategoryList: null,
      hideUploadBanner: false,
      limitCount: 1,
      bannerList: [],
      activeNames: ['describe', 'describe_en', 'description', 'description_en']
    }
  },
  watch: {},
  created() {
    this.getCategoryList()
  },
  methods: {
    updateValue() {
      console.log(this.form)
      const postForm = new FormData()
      postForm.append('description', this.form.description)
      postForm.append('description_en', this.form.description_en)
      postForm.append('banner', this.form.banner)
      postForm.append('title', this.form.title)
      postForm.append('title_en', this.form.title_en)
      postForm.append('product_category_id', this.form.product_category_id)
      // 添加所有参数
      store(postForm).then((response) => {
        if (response.code === 20001) {
          this.$message({
            message: '类目创建成功！',
            type: 'success'
          })
          this.initFormData()
        } else {
          this.$message({
            message: '类目创建失败，请检查输入参数！',
            type: 'error'
          })
        }
      })
    },
    // 创建类目成功后初始化数据
    initFormData() {
      this.$refs['form'].resetFields()
      this.bannerList = []
      this.hideUploadBanner = false
    },
    // 获取类目列表
    getCategoryList() {
      const param = {
        page_limit: 40
      }
      getList(param).then((response) => {
        this.CategoryList = response.data.data
      })
    },
    handleBannerChange(file, fileList) {
      this.hideUploadBanner = fileList.length >= this.limitCount
      this.form.banner = file.raw
    },
    handleBannerRemove(file, fileList) {
      this.hideUploadBanner = fileList.length >= this.limitCount
      this.form.img = null
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
          this.form.description = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'description_en':
          this.form.description_en = this.tinyTxt
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
    // 关闭页面
    closePageButton() {
      this.$store.dispatch('tagsView/delView', this.$route)
      this.$router.go(-1)
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
