<template>
  <div class="app-container">
    <el-form ref="productDetail" :model="productDetail" :inline="true" label-position="right" label-width="100px">
      <el-card class="box-card-header" shadow="hover" style="margin-bottom: 10px">
        <el-row>
          <el-col :span="7">
            <el-form-item label="商品名称">
              <el-input v-model="productDetail.product_name" :disabled="formDisable" @input="inputEvents" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="商品英文名称">
              <el-input v-model="productDetail.product_name_en" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="商品缩略图">
              <el-image style="width: 120px;height: 120px;" :src="productDetail.thumbnail" fit="scale-down" @click="previewImgAction(productDetail.thumbnail)" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="商品所属分类">
              <el-input v-model="productDetail.product_category.title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="状态">
              <el-input v-model="productDetail.status" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="商品规格">
              <el-input v-model="productDetail.spec" :disabled="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="价格">
              <el-input v-model="productDetail.price" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="优惠价格">
              <el-input v-model="productDetail.sale_price" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="库存量">
              <el-input v-model="productDetail.stock" :disabled="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="销量">
              <el-input v-model="productDetail.sold_count" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="平均评分">
              <el-input v-model="productDetail.rating" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="评价数量">
              <el-input v-model="productDetail.review_count" :disabled="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>

        <el-row>
          <el-col :span="7">
            <el-form-item label="网页title (SEO)">
              <el-input v-model="productDetail.seo_title" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="网页关键字 (SEO)">
              <el-input v-model="productDetail.seo_keyword" :disabled="formDisable" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="网页描述(SEO)">
              <el-input v-model="productDetail.seo_description" :disabled="formDisable" />
            </el-form-item>
          </el-col>
        </el-row>

      </el-card>
      <el-card class="box-card-description" shadow="hover" style="margin-bottom: 10px">
        <el-row>
          <el-col :span="12">
            <el-form-item label="简短介绍">
              <el-input v-model="productDetail.short_description" type="textarea" :autosize="true" label-position="right" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="英文简短介绍">
              <el-input v-model="productDetail.short_description_en" type="textarea" :autosize="true" label-position="right" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="12">
            <el-form-item label="产品功效">
              <el-input v-model="productDetail.benefit" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="英文产品功效">
              <el-input v-model="productDetail.benefit_en" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="12">
            <el-form-item label="科技介绍">
              <el-input v-model="productDetail.tech_description" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="英文科技介绍">
              <el-input v-model="productDetail.tech_description_en" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="12">
            <el-form-item label="产品细节">
              <el-input v-model="productDetail.description" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item label="英文产品细节">
              <el-input v-model="productDetail.description_en" type="textarea" label-position="right" :autosize="true" :disabled="formDisable" style="width: 400px" />
            </el-form-item>
          </el-col>
        </el-row>
      </el-card>
      <el-card class="box-card-image" shadow="hover">
        <el-row>
          <el-col :span="7">
            <el-form-item label="页面主图1">
              <el-image style="width: 120px;height: 120px;" :src="productDetail.main_image" fit="scale-down" @click="previewImgAction(productDetail.main_image)" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="页面主图2">
              <el-image style="width: 120px;height: 120px;" :src="productDetail.main_image_2" fit="scale-down" @click="previewImgAction(productDetail.main_image_2)" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="功效背景图">
              <el-image style="width: 120px;height: 120px;" :src="productDetail.benefit_image" fit="scale-down" @click="previewImgAction(productDetail.benefit_image)" />
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
import { productDetail } from '@/api/product'
export default {
  name: 'ProductViewOrUpdate',
  data() {
    return {
      formDisable: false,
      product_slug: '',
      productDetail: {
        id: '',
        benefit: '',
        benefit_en: '',
        benefit_image: '',
        description: '',
        description_en: '',
        main_image: '',
        main_image_2: '',
        price: '',
        product_category: {
          id: '',
          slug: '',
          title: ''
        },
        product_category_id: '',
        product_name: '',
        product_name_en: '',
        product_video: '',
        rating: '',
        review_count: '',
        sale_price: '',
        seo_description: '',
        seo_keyword: '',
        seo_title: '',
        short_description: '',
        short_description_en: '',
        slug: '',
        sold_count: '',
        spec: '',
        status: '',
        stock: '',
        tech_description: '',
        tech_description_en: '',
        thumbnail: '',
        usage: '',
        usage_en: '',
        created_at: ''
      },
      previewImgDialogVisible: false,
      previewImg: ''
    }
  },
  created() {
    this.getProductData()
    this.getProductDetail()
  },
  methods: {
    // 点击预览图片
    previewImgAction(url) {
      this.previewImg = url
      this.previewImgDialogVisible = true
    },
    getProductData() {
      console.log(this.$route)
      this.product_slug = this.$route.params.product_slug
      this.status = this.$route.params.status
      if (this.status === 'view') {
        this.formDisable = true
      }
    },
    getProductDetail() {
      productDetail(this.product_slug).then(response => {
        this.productDetail = response.data
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
