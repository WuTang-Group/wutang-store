<template>
  <div class="app-container">
    <el-card class="box-card" style="padding: 0 30px">
      <el-form ref="form" :model="form" label-position="left">
        <el-row :gutter="10">
          <el-col :span="8">
            <el-form-item label="类目名称" prop="title">
              <el-input v-model="form.title" style="width: 250px" />
            </el-form-item>
          </el-col>
          <el-col :span="8">
            <el-form-item label="类目名称(英文)" prop="title_en">
              <el-input v-model="form.title_en" style="width: 250px" />
            </el-form-item>
          </el-col>
          <el-col :span="8">
            <el-form-item label="上级类目" prop="parent_id">
              <el-select v-model="form.parent_id" placeholder="请选择" style="width: 250px">
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
        <el-divider />
        <el-row :gutter="40">
          <el-col :span="12">
            <el-form-item prop="describe" style="margin-bottom: 40px">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes(1)" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="describe">
                  <template slot="title">
                    <span class="productDetailText">类目描述</span>
                  </template>
                  <span v-html="form.describe" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item prop="describe_en">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes(2)" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="describe_en">
                  <template slot="title">
                    <span class="productDetailText">类目描述(英文)</span>
                  </template>
                  <span v-html="form.describe_en" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="40">
          <el-col :span="12">
            <el-form-item prop="description">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes(3)" />
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
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes(4)" />
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
          <el-col :span="12">
            <el-form-item label="分类简介图" prop="img">
              <el-upload
                ref="uploadImg1"
                :class="{hideImg:hideUploadImg}"
                name="img"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCount1"
                :file-list="imgList"
                :on-change="handleBannerChange1"
                :on-remove="handleBannerRemove1"
              >
                <el-button size="small" plain type="primary">点击上传</el-button>
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
import { getList, storeForm } from '@/api/category'

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
        title: '', //
        title_en: '', //
        slug: '',
        describe: '',
        describe_en: '',
        description: '',
        description_en: '',
        banner: '',
        parent_id: '', //
        img: ''
      },
      parentCategory: null,
      hideUploadBanner: false,
      hideUploadImg: false,
      limitCount: 1,
      limitCount1: 1,
      bannerList: [],
      imgList: [],
      activeNames: ['describe', 'describe_en', 'description', 'description_en']
    }
  },
  watch: {},
  created() {
    this.getCategoryList()
  },
  methods: {
    updateValue() {
      if (!this.form.describe) {
        this.$message({
          message: '类目描述不可为空！',
          type: 'warning'
        })
        return false
      }
      const postForm = new FormData()
      postForm.append('description', this.form.description)
      postForm.append('description_en', this.form.description_en)
      postForm.append('banner', this.form.banner)
      postForm.append('img', this.form.img)
      postForm.append('title', this.form.title)
      postForm.append('title_en', this.form.title_en)
      postForm.append('describe', this.form.describe)
      postForm.append('describe_en', this.form.describe_en)
      postForm.append('parent_id', this.form.parent_id)
      // 添加所有参数
      storeForm(postForm).then((response) => {
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
      this.imgList = []
      this.hideUploadImg = false
      this.hideUploadBanner = false
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
    handleBannerChange(file, fileList) {
      this.hideUploadBanner = fileList.length >= this.limitCount
      this.form.banner = file.raw
    },
    handleBannerChange1(file, fileList) {
      this.hideUploadImg = fileList.length >= this.limitCount1
      this.form.img = file.raw
    },
    handleBannerRemove(file, fileList) {
      this.hideUploadBanner = fileList.length >= this.limitCount
      this.form.banner = null
    },
    handleBannerRemove1(file, fileList) {
      this.hideUploadImg = fileList.length >= this.limitCount1
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
        case 1:
          this.form.describe = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 2:
          this.form.describe_en = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 3:
          this.form.description = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 4:
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
