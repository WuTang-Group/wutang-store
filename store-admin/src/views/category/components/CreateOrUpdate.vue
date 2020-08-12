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
            <el-form-item label="分类描述">
              <tinymce v-model="form.describe" :height="50" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="分类描述(英文)">
              <tinymce v-model="form.describe_en" :height="50" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-divider />
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="分类简介">
              <tinymce v-model="form.description" :height="50" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="分类简介(英文)">
              <tinymce v-model="form.description_en" :height="50" />
            </el-form-item>
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
                :file-list="fileList"
                :on-change="handleBannerChange"
                :on-remove="handleBannerRemove"
              >
                <el-button size="small" type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传一张jpg/png文件，且不超过500kb</div>
              </el-upload>
              <el-button type="primary" @click="updatetValue">测试上传</el-button>
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
    </el-card>
  </div>
</template>

<script>
import Tinymce from '@/components/Tinymce'
import { testUpload } from '@/api/category'

export default {
  name: 'CreateOrUpdate',
  components: {
    Tinymce
  },
  data() {
    return {
      form: {
        describe: '',
        describe_en: '',
        description: '',
        description_en: ''
      },
      hideUpload: false,
      limitCount: 1,
      fileList: []
    }
  },
  watch: {
  },
  created() {
  },
  methods: {
    updatetValue() {
      testUpload({ data: this.fileList }).then(response => {
        console.log(response)
      })
    },
    handleBannerChange(file, fileList) {
      this.hideUpload = fileList.length >= this.limitCount
      // const form = new FormData()
      // form.append('name', file)
      this.fileList = fileList
      console.log(file)
    },
    handleBannerRemove(file, fileList) {
      this.hideUpload = fileList.length >= this.limitCount
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
