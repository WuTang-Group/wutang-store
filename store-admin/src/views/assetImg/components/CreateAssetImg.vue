<template>
  <div class="app-container">
    <el-card class="box-card" style="padding: 0 30px">
      <el-form ref="form" :model="form" label-position="left">
        <el-row :gutter="10">
          <el-col :span="8">
            <el-form-item label="关联产品" prop="product_id">
              <el-select v-model="form.product_id" placeholder="请选择" style="width: 250px">
                <el-option
                  v-for="item in productList"
                  :key="item.id"
                  :label="item.product_name"
                  :value="item.id"
                />
              </el-select>
            </el-form-item>
          </el-col>
          <el-col :span="8">
            <el-form-item label="图片位置" prop="img_location">
              <el-select v-model="form.img_location" placeholder="请选择" style="width: 250px">
                <el-option
                  v-for="item in img_location"
                  :key="item.id"
                  :label="item.desc"
                  :value="item.id"
                />
              </el-select>
            </el-form-item>
          </el-col>
          <el-col :span="8">
            <el-form-item label="图片类型" prop="type">
              <el-select v-model="form.type" placeholder="请选择" style="width: 250px">
                <el-option
                  v-for="item in typeList"
                  :key="item.type"
                  :label="item.type"
                  :value="item.type"
                />
              </el-select>
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
        <el-row>
          <el-col :span="6">
            <el-form-item label="视频">
              <el-upload
                ref="uploadVideo"
                :class="{hideVideo:hideUploadVideo}"
                name="video"
                action="#"
                list-type="text"
                :auto-upload="false"
                :limit="limitCountVideo"
                :file-list="videoList"
                :on-change="handleVideoChange"
                :on-remove="handleVideoRemove"
              >
                <el-button v-if="!hideUploadVideo" size="small" plain type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传一个视频，且不超过50M</div>
              </el-upload>
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
      <el-row style="margin-bottom: 50px">
        <el-col :span="2" :offset="8">
          <el-button type="success" :loading="loading" @click="updateValue()">提交</el-button>
        </el-col>
        <el-col :span="2">
          <el-button type="info" plain @click="closePageButton">返回</el-button>
        </el-col>
      </el-row>
    </el-card>
  </div>
</template>

<script>
import { createAssetImg, getProductBasicInfo, updateAssetImg, getEnum } from '@/api/assetImg'

export default {
  name: 'CreateAssetImg',
  data() {
    return {
      flag: '',
      status: '',
      form: {
        img: '',
        img_location: '',
        video: '',
        type: '',
        product_id: ''
      },
      hideUploadImg: false,
      limitCount: 1,
      imgList: [],
      productList: [],
      img_location: [],
      typeList: [],
      // 商品视频
      hideUploadVideo: false,
      limitCountVideo: 1,
      videoList: [],
      loading: false
    }
  },
  watch: {},
  created() {
    this.getAssetImgType()
    this.getAssetImgLocation()
    this.getInitData()
    this.getProductBasicInfo()
  },
  methods: {
    // 获取初始化数据
    getInitData() {
      this.status = this.$route.params.status
      if (this.status === 'view') {
        this.form = this.$route.params.data
      } else if (this.status === 'edit') {
        this.form = this.$route.params.data
        if (this.form.img && this.form.img !== 'null') {
          this.imgList.push({ 'url': this.form.img })
          this.hideUploadImg = true
        }
        if (this.form.video && this.form.video !== 'null') {
          this.videoList.push({ 'url': this.form.video })
          this.hideUploadVideo = true
        }
      }
    },
    getAssetImgType() {
      getEnum('AssetImgType').then((response) => {
        const assetImgList = response.data.values
        for (let i = 0; i < assetImgList.length; i++) {
          this.typeList.push({ type: assetImgList[i] })
        }
      })
    },
    getAssetImgLocation() {
      getEnum('AssetImgLocation').then((response) => {
        console.log(response.data)
        const assetImgLocationKeys = response.data.keys
        const assetImgLocationValues = response.data.values
        for (let i = 0; i < assetImgLocationValues.length; i++) {
          this.img_location.push({ id: assetImgLocationValues[i], desc: assetImgLocationKeys[i] })
        }
      })
    },
    updateValue() {
      if (this.status === 'create') {
        const postForm = new FormData()
        for (const val in this.form) {
          postForm.append(val, this.form[val])
        }
        // 添加所有参数
        this.loading = true
        createAssetImg(postForm).then((response) => {
          if (response.code === 20001) {
            this.$message({
              message: '资源添加成功！',
              type: 'success'
            })
            this.initFormData()
            this.closePageButton()
          } else {
            this.$message({
              message: '资源添加失败，请检查输入参数！',
              type: 'error'
            })
          }
          this.loading = false
        }).catch(err => {
          console.log(err, '123456edit')
          this.loading = false
          this.$message({
            message: '网络错误！',
            type: 'error'
          })
        })
      } else if (this.status === 'edit') {
        const postForm = new FormData()
        for (const val in this.form) {
          postForm.append(val, this.form[val])
        }
        // 添加所有参数
        this.loading = true
        updateAssetImg(this.form.id, postForm).then((response) => {
          console.log(response, 'response')
          if (response.code === 20001) {
            this.$message({
              message: '更新成功！',
              type: 'success'
            })
            this.closePageButton()
          } else {
            this.$message({
              message: '更新失败失败，请检查输入参数！',
              type: 'error'
            })
          }
          this.loading = false
        }).catch(err => {
          console.log(err, '123456')
          this.loading = false
          this.$message({
            message: '网络错误！',
            type: 'error'
          })
        })
      }
    },
    getProductBasicInfo() {
      getProductBasicInfo().then((response) => {
        this.productList = response.data
      })
    },
    // 创建成功后初始化数据
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
    // 产品视频
    handleVideoChange(file, fileList) {
      this.hideUploadVideo = fileList.length >= this.limitCountVideo
      this.form.video = file.raw
    },
    handleVideoRemove(file, fileList) {
      this.hideUploadVideo = fileList.length >= this.limitCountVideo
      this.form.video = null
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
.hideVideo .el-upload--picture-card {
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
