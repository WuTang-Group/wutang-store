<template>
  <div class="app-container">
    <el-card class="box-card">
      <div slot="header" class="clearfix">
        <span>卡片名称</span>
      </div>
      <el-form ref="form" :model="form" label-width="80px">
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="类目名称">
              <el-input v-model="form.title" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="类目名称(英文)">
              <el-input v-model="form.title_en" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-divider />
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="分类slug">
              <el-input v-model="form.slug" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
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
              <el-input v-model="form.describe" disabled>
                <el-button v-if="!describeVisible" slot="append" icon="el-icon-edit-outline" @click="handleDescribe" />
                <el-button v-if="describeVisible" slot="append" icon="el-icon-arrow-up" @click="handleDescribe" />
              </el-input>
            </el-form-item>
            <tinymce v-if="describeVisible" v-model="form.describe" :height="50" />
          </el-col>
          <el-col :span="12">
            <el-form-item label="分类描述(英文)">
              <el-input v-model="form.describe_en" disabled>
                <el-button v-if="!describeEnVisible" slot="append" icon="el-icon-edit-outline" @click="handleDescribeEn" />
                <el-button v-else slot="append" icon="el-icon-arrow-up" @click="handleDescribeEn" />
              </el-input>
            </el-form-item>
            <tinymce v-if="describeEnVisible" v-model="form.describe_en" :height="50" />
          </el-col>
        </el-row>
        <el-divider />
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="分类简介">
              <el-input v-model="form.description" disabled>
                <el-button v-if="!descriptionVisible" slot="append" icon="el-icon-edit-outline" @click="handleDescription" />
                <el-button v-if="descriptionVisible" slot="append" icon="el-icon-arrow-up" @click="handleDescription" />
              </el-input>
            </el-form-item>
            <tinymce v-if="descriptionVisible" v-model="form.description" :height="50" />
          </el-col>
          <el-col :span="12">
            <el-form-item label="分类简介(英文)">
              <el-input v-model="form.description_en" disabled>
                <el-button v-if="!descriptionEnVisible" slot="append" icon="el-icon-edit-outline" @click="handleDescriptionEn" />
                <el-button v-if="descriptionEnVisible" slot="append" icon="el-icon-arrow-up" @click="handleDescriptionEn" />
              </el-input>
            </el-form-item>
            <tinymce v-if="descriptionEnVisible" v-model="form.description_en" :height="50" />
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
          <!--          <el-col :span="12">-->
          <!--            <el-form-item label="分类简介图">-->
          <!--              <el-upload-->
          <!--                ref="uploadImg"-->
          <!--                :class="{hide:hideUpload}"-->
          <!--                name="img"-->
          <!--                action="#"-->
          <!--                list-type="picture-card"-->
          <!--                :auto-upload="false"-->
          <!--                :limit="limitCount"-->
          <!--                :file-list="imgList"-->
          <!--                :on-change="handleBannerChange"-->
          <!--                :on-remove="handleBannerRemove"-->
          <!--              >-->
          <!--                <el-button size="small" type="primary">点击上传</el-button>-->
          <!--                <div slot="tip" class="el-upload__tip">只能上传一张jpg/png文件，且不超过500kb</div>-->
          <!--              </el-upload>-->
          <!--            </el-form-item>-->
          <!--          </el-col>-->
        </el-row>
      </el-form>
    </el-card>
  </div>
</template>

<script>
import Tinymce from '@/components/Tinymce'
import { getList, store } from '@/api/category'

export default {
  name: 'CreateOrUpdate',
  components: {
    Tinymce
  },
  data() {
    return {
      form: {
        title: '',
        title_en: '',
        slug: '',
        describe: '',
        describe_en: '',
        description: '',
        description_en: '',
        banner: '',
        parent_id: '',
        img: ''
      },
      parentCategory: null,
      hideUpload: false,
      limitCount: 1,
      bannerList: [],
      imgList: [],
      describeVisible: false,
      describeEnVisible: false,
      descriptionVisible: false,
      descriptionEnVisible: false
    }
  },
  watch: {
  },
  created() {
    this.getCategoryList()
  },
  methods: {
    updatetValue() {
      console.log(this.form)
      store(this.form).then(response => {
        console.log(response)
      }
      )
    },
    getCategoryList() {
      const param = {
        page_limit: 40
      }
      getList(param).then(response => {
        console.log(response.data)
        this.parentCategory = response.data.data
      })
    },
    handleBannerChange(file, fileList) {
      this.hideUpload = fileList.length >= this.limitCount
      // const form = new FormData()
      // form.append('name', file)
      this.bannerList = fileList
      this.form.banner = file
    },
    handleBannerRemove(file, fileList) {
      this.hideUpload = fileList.length >= this.limitCount
    },
    handleDescribe() {
      this.describeVisible = !this.describeVisible
    },
    handleDescribeEn() {
      this.describeEnVisible = !this.describeEnVisible
    },
    handleDescription() {
      this.descriptionVisible = !this.descriptionVisible
    },
    handleDescriptionEn() {
      this.descriptionEnVisible = !this.descriptionEnVisible
    }
  }
}
</script>

<style lang="scss">
  /*上传图片完成后隐藏按钮*/
  .hide .el-upload--picture-card {
    display: none;
  }
</style>
