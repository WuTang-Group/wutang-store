<template>
  <div class="app-container">
    <el-form ref="categoryDetail" :model="categoryDetail" :inline="true" label-position="right" label-width="100px">
      <el-card class="box-card-header" shadow="hover" style="margin-bottom: 10px">
        <el-row>
          <el-col :span="7">
            <el-form-item label="类目名称">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="类目英文名称">
              <el-input v-model="categoryDetail.title_en" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="上级类目">
              <el-input v-model="categoryDetail.parent.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="商品所属分类">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="状态">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="商品规格">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="价格">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="优惠价格">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="库存量">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="销量">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="平均评分">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="评价数量">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>

        <el-row>
          <el-col :span="7">
            <el-form-item label="网页title (SEO)">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="网页关键字 (SEO)">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="网页描述(SEO)">
              <el-input v-model="categoryDetail.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>

      </el-card>
      <el-card class="box-card-description" shadow="hover" style="margin-bottom: 10px">
        <el-row>
          <el-col :span="12">
            <el-form-item label="简短介绍">
              <el-input v-model="categoryDetail.title" type="textarea" :autosize="true" label-position="right" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="英文简短介绍">
              <el-input v-model="categoryDetail.title" type="textarea" :autosize="true" label-position="right" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="12">
            <el-form-item label="产品功效">
              <el-input v-model="categoryDetail.title" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="英文产品功效">
              <el-input v-model="categoryDetail.title" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="12">
            <el-form-item label="科技介绍">
              <el-input v-model="categoryDetail.title" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="英文科技介绍">
              <el-input v-model="categoryDetail.title" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="12">
            <el-form-item label="产品细节">
              <el-input v-model="categoryDetail.title" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="英文产品细节">
              <el-input v-model="categoryDetail.title" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
        </el-row>
      </el-card>
      <el-card class="box-card-image" shadow="hover">
        <el-row>
          <el-col :span="7">
            <el-form-item label="页面主图1">
              <el-image style="width: 120px;height: 120px;" :src="categoryDetail.img" fit="scale-down" @click="previewImgAction(productDetail.main_image)" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="页面主图2">
              <el-image style="width: 120px;height: 120px;" :src="categoryDetail.img" fit="scale-down" @click="previewImgAction(productDetail.main_image_2)" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="功效背景图">
              <el-image style="width: 120px;height: 120px;" :src="categoryDetail.img" fit="scale-down" @click="previewImgAction(productDetail.benefit_image)" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row style="margin-bottom: 50px">
          <el-col :span="2" :offset="8">
            <el-button type="success" @click="submitProduct">提交</el-button>
          </el-col>
          <el-col :span="2">
            <el-button type="info" plain @click="closePageButton">返回</el-button>
          </el-col>
        </el-row>
      </el-card>
    </el-form>
    <el-dialog
      title="图片预览"
      :visible.sync="previewImgDialogVisible"
      width="50%"
    >
      <el-image :src="previewImg" style="width: 100%;" />
    </el-dialog>
  </div>
</template>

<script>
import { categoryDetail } from '@/api/category'
export default {
  name: 'CategoryViewOrUpdate',
  data() {
    return {
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
            id: 32,
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
      }
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
      console.log(this.$route)
      this.category_slug = this.$route.params.category_slug
      this.status = this.$route.params.status
      if (this.status === 'view') {
        this.formDisable = true
      }
    },
    getCategoryDetail() {
      categoryDetail(this.category_slug).then(response => {
        this.categoryDetail = response.data
        this.categoryDetail.product_category_stories = response.data.product_category_stories[0]
        console.log(this.categoryDetail)
      })
    },
    submitProduct() {
      console.log(this.productDetail)
    },
    inputEvents(e) {
      console.log(e)
    },
    // 关闭页面
    closePageButton() {
      this.$store.dispatch('tagsView/delView', this.$route)
      this.$router.go(-1)
    }
  }

}
</script>

<style scoped>

</style>
