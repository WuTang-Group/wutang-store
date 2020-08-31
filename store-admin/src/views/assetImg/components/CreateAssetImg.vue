<template>
  <div class="app-container">
    <el-card class="box-card" style="padding: 0 30px">
      <el-form ref="form" :model="form" label-position="left">
        <el-row :gutter="10">
          <el-col :span="8">
            <el-form-item label="图片位置" prop="img_location">
              <el-input v-model="form.img_location" style="width: 250px" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="12">
            <el-form-item label="图片">
              <el-upload
                ref="uploadImg"
                :class="{hideImg:hideUploadImg}"
                name="img"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCount"
                :file-list="imgList"
                :on-change="handleImgChange"
                :on-remove="handleImgRemove"
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
  </div>
</template>

<script>
import { createAssetImg } from '@/api/assetImg'

export default {
  name: 'CreateAssetImg',
  data() {
    return {
      flag: '',
      form: {
        img: '',
        img_location: ''
      },
      hideUploadImg: false,
      limitCount: 1,
      imgList: []
    }
  },
  watch: {},
  created() {
  },
  methods: {
    updateValue() {
      console.log(this.form)
      const postForm = new FormData()
      postForm.append('img', this.form.img)
      postForm.append('img_location', this.form.img_location)
      // 添加所有参数
      createAssetImg(postForm).then((response) => {
        if (response.code === 20001) {
          this.$message({
            message: '图片添加成功！',
            type: 'success'
          })
          this.initFormData()
        } else {
          this.$message({
            message: '图片添加失败，请检查输入参数！',
            type: 'error'
          })
        }
      })
    },
    // 创建类目成功后初始化数据
    initFormData() {
      this.$refs['form'].resetFields()
      this.imgList = []
      this.hideUploadImg = false
    },
    handleImgChange(file, fileList) {
      this.hideUploadImg = fileList.length >= this.limitCount
      this.form.img = file.raw
    },
    handleImgRemove(file, fileList) {
      this.hideUploadImg = fileList.length >= this.limitCount
      this.form.img = null
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
