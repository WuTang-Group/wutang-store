<template>
  <div class="app-container">
    <el-card>
      <el-form ref="form" :model="form" :inline="true" label-position="right">
        <el-row>
          <el-col>
            <el-form-item label="所属The House">
              <el-input v-if="formDisable" v-model="form.the_house.title" :readonly="formDisable" style="width: 400px" />
              <el-select v-else v-model="form.the_house_id" placeholder="请选择" style="width: 190px">
                <el-option
                  v-for="item in theHouseList"
                  :key="item.id"
                  :label="item.title"
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
                    <span class="theHouseText">文案标题</span>
                  </template>
                  <span v-html="form.title" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
          <el-col :span="10">
            <div style="width: 470px;margin-bottom: 25px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('content')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="content">
                  <template slot="title">
                    <span class="theHouseText">文案正文</span>
                  </template>
                  <span v-html="form.content" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="10">
            <div style="width: 470px;margin-bottom: 25px">
              <el-button v-if="!formDisable" type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('img_desc')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="img_desc">
                  <template slot="title">
                    <span class="theHouseText">图片描述</span>
                  </template>
                  <span v-html="form.img_desc" />
                </el-collapse-item>
              </el-collapse>
            </div>
          </el-col>
          <el-col :span="10">
            <el-form-item label="文案图片">
              <el-image v-if="formDisable" style="width: 120px;height: 120px;" :src="form.img" fit="scale-down" @click="previewImgAction(form.img)" />
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
import { contentDetail, contentStore, contentUpdate, contentToTHeHouseList } from '@/api/theHouse'
export default {
  name: 'ContentView',
  components: {
    Tinymce
  },
  data() {
    return {
      status: '', // 页面状态
      form: {
        id: '',
        title: '',
        content: '',
        img: '',
        img_desc: '',
        the_house_id: ''
      },
      theHouseList: [],
      content_id: '',
      // 富文本
      showDialog: false,
      tinyTxt: '',
      flag: '',
      formDisable: false,
      activeNames: ['title', 'content', 'img_desc'],
      // 图片上传
      hideUploadBanner: false,
      limitCountBanner: 1,
      bannerList: [],
      // 图片dialog
      previewImg: '',
      previewImgDialogVisible: false
    }
  },
  created() {
    this.getHouseList()
    this.getInitData()
  },
  methods: {
    // 获取初始化数据
    getInitData() {
      this.status = this.$route.params.status
      if (this.status === 'view') {
        this.content_id = this.$route.params.content_id
        this.formDisable = true
        this.getContentDetail()
      } else if (this.status === 'edit') {
        this.content_id = this.$route.params.content_id
        // 获取初始化数据
        this.getContentDetail()
        // 图片上传初始化
        this.hideUploadBanner = true
      } else if (this.status === 'create') {
        this.form.the_house_id = this.$route.params.the_house_id
      }
    },
    // 获取the house列表
    getHouseList() {
      contentToTHeHouseList().then((response) => {
        this.theHouseList = response.data.data
      })
    },
    // 获取the house 详情
    getContentDetail() {
      contentDetail(this.content_id).then((response) => {
        console.log(response)
        this.form = response.data
        this.bannerList.push({ 'url': this.form.img })
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
        case 'content':
          this.form.content = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'img_desc':
          this.form.img_desc = this.tinyTxt
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
      this.form.img = file.raw
    },
    handleBannerRemove(file, fileList) {
      this.hideUploadBanner = fileList.length >= this.limitCountBanner
      this.form.img = null
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
      if (this.status === 'create') {
        this.contentStore()
      } else if (this.status === 'edit') {
        this.contentUpdate()
      }
    },
    contentStore() {
      const postForm = new FormData()
      for (const key in this.form) {
        postForm.append(key, this.form[key])
      }
      contentStore(postForm).then((response) => {
        if (response.code === 20001) {
          this.initFormData()
          this.$message({
            type: 'success',
            message: '创建成功！'
          })
        } else {
          this.$message({
            type: 'error',
            message: '创建失败，请检查参数！'
          })
        }
      })
    },
    contentUpdate() {
      const postForm = new FormData()
      for (const key in this.form) {
        postForm.append(key, this.form[key])
      }
      contentUpdate(this.form.id, postForm).then((response) => {
        console.log(response)
        if (response.code === 20001) {
          this.$message({
            type: 'success',
            message: '更新成功！'
          })
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
      this.bannerList = []
      this.hideUploadBanner = false
    }
  }
}
</script>

<style lang="scss">
  /*上传图片完成后隐藏按钮*/
  .hideImg .el-upload--picture-card {
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
