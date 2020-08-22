<template>
  <div class="app-container">
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <span>卡片名称</span>
      </div>
      <el-form ref="form" :model="form" label-width="80px">
        <el-row :gutter="10">
          <el-col :span="8">
            <el-form-item label="类目名称">
              <el-input v-model="form.title" />
            </el-form-item>
          </el-col>
          <el-col :span="8">
            <el-form-item label="类目名称(英文)">
              <el-input v-model="form.title_en" />
            </el-form-item>
          </el-col>
          <el-col :span="8">
            <el-form-item label="上级分类">
              <el-select v-model="form.parent_id" placeholder="请选择">
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
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="分类描述">
              <el-input v-show="false" v-model="form.describe" disabled />
              <el-button icon="el-icon-edit-outline" @click="handleDescribes(1)" />
              <el-button icon="el-icon-arrow-up" @click="showOne = !showOne" />
              <span v-show="showOne" v-html="form.describe" />
            </el-form-item>
            <tinymce v-if="describeVisible" v-model="form.describe" :height="50" />
          </el-col>
          <el-col :span="12">
            <el-form-item label="分类描述(英文)">
              <el-input v-show="false" v-model="form.describe_en" disabled />
              <el-button icon="el-icon-edit-outline" @click="handleDescribes(2)" />
              <el-button icon="el-icon-arrow-up" @click="showTwo = !showTwo" />
              <span v-show="showTwo" v-html="form.describe_en" />
            </el-form-item>
            <tinymce v-if="describeEnVisible" v-model="form.describe_en" :height="50" />
          </el-col>
        </el-row>
        <el-divider />
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="分类简介">
              <el-input v-show="false" v-model="form.description" disabled />
              <el-button icon="el-icon-edit-outline" @click="handleDescribes(3)" />
              <el-button icon="el-icon-arrow-up" @click="showThree =!showThree" />
              <span v-show="showThree" v-html="form.description" />
            </el-form-item>
            <tinymce v-if="descriptionVisible" v-model="form.description" :height="50" />
          </el-col>
          <el-col :span="12">
            <el-form-item label="分类简介(英文)">
              <el-input v-show="false" v-model="form.description_en" disabled />
              <el-button icon="el-icon-edit-outline" @click="handleDescribes(4)" />
              <el-button icon="el-icon-arrow-up" @click="showFour =!showFour" />
              <span v-show="showFour" v-html="form.description_en" />
            </el-form-item>
            <tinymce
              v-if="descriptionEnVisible"
              v-model="form.description_en"
              :height="50"
            />
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="banner图">
              <el-upload
                ref="uploadBanner"
                :class="{hide:hideUpload}"
                name="banner"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCount"
                :file-list="bannerList"
                :on-change="handleBannerChange"
                :on-remove="handleBannerRemove"
              >
                <el-button size="small" type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传一张jpg/png文件，且不超过500kb</div>
              </el-upload>
              <el-button type="primary" @click="updatetValue">测试上传</el-button>
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="分类简介图">
              <el-upload
                ref="uploadImg1"
                :class="{hide:hideUpload}"
                name="img"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCount1"
                :file-list="imgList"
                :on-change="handleBannerChange1"
                :on-remove="handleBannerRemove1"
              >
                <el-button size="small" type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传一张jpg/png文件，且不超过500kb</div>
              </el-upload>
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
    </el-card>
    <!-- TinyMce 实例公用弹框 -->
    <el-dialog title="提示" :visible.sync="showDialog" width="50%" :before-close="handleClose">
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
  name: 'CreateOrUpdate',
  components: {
    Tinymce
  },
  data() {
    return {
      showDialog: false,
      tinyTxt: '',
      flag: '',
      showOne: true,
      showTwo: true,
      showThree: true,
      showFour: true,
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
      hideUpload: false,
      limitCount: 1,
      limitCount1: 1,
      bannerList: [],
      imgList: [],
      describeVisible: false,
      describeEnVisible: false,
      descriptionVisible: false,
      descriptionEnVisible: false
    }
  },
  watch: {},
  created() {
    this.getCategoryList()
  },
  methods: {
    updatetValue() {
      console.log(this.form)
      const postForm = new FormData()
      postForm.append('description', this.form.description) //
      postForm.append('description_en', this.form.description_en) //
      postForm.append('banner', this.form.banner) //
      postForm.append('img', this.form.img) //
      postForm.append('title', this.form.title) //
      postForm.append('title_en', this.form.title_en) //
      postForm.append('describe', this.form.describe) //
      postForm.append('describe_en', this.form.describe_en) //
      postForm.append('parent_id', this.form.parent_id) //
      // 添加所有参数
      storeForm(postForm).then((response) => {
        console.log(response)
      })
    },
    getCategoryList() {
      const param = {
        page_limit: 40
      }
      getList(param).then((response) => {
        console.log(response.data)
        this.parentCategory = response.data.data
      })
    },
    handleBannerChange(file, fileList) {
      this.hideUpload = fileList.length >= this.limitCount
      // const form = new FormData()
      // form.append('name', file)
      // this.bannerList = fileList;
      this.form.banner = file.raw
    },
    handleBannerChange1(file, fileList) {
      this.form.img = file.raw
    },
    handleBannerRemove(file, fileList) {
      this.hideUpload = fileList.length >= this.limitCount
    },
    handleBannerRemove1(file, fileList) {
      this.hideUpload = fileList.length >= this.limitCount1
    },
    handleDescribes(flag) {
      this.flag = flag
      this.tinyTxt = ''
      this.showDialog = true
    },
    handleDescribe(flag) {},
    handleDescribeEn(flag) {
      // this.showDialog = true;
    },
    handleDescription(flag) {
      // this.showDialog = true;
    },
    handleDescriptionEn(flag) {
      // this.showDialog = true;
    },

    // 确认保存当前富文本
    comfirmSaveTiny() {
      // console.log(this.flag);
      // if (this.flag == 1) {
      //     this.form.describe = this.tinyTxt;
      //     this.showDialog = false;
      // }
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
        message: 'test',
        type: 'success'
      })
    },
    handleClose(done) {
      this.$confirm('确认关闭？')
        .then((_) => {
          done()
        })
        .catch((_) => {})
    }
  }
}
</script>

<style lang="scss">
/*上传图片完成后隐藏按钮*/
/*.hide .el-upload--picture-card {*/
/*    display: none;*/
/*}*/
</style>
