<template>
  <div class="app-container">
    <el-card class="box-card-header" shadow="hover" style="margin-bottom: 10px">
      <el-form ref="formRules" :model="form" :rules="formRules" :inline="true" label-position="right" label-width="120px">
        <el-row>
          <el-col :span="7">
            <el-form-item label="商品名称" prop="product_name">
              <el-input v-model="form.product_name" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="商品英文名称" prop="product_name_en">
              <el-input v-model="form.product_name_en" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="所属商品" prop="parent_id">
              <el-select v-model="form.parent_id" placeholder="请选择" style="width: 190px">
                <el-option
                  v-for="item in parent_product"
                  :key="item.id"
                  :label="item.product_name"
                  :value="item.id"
                />
              </el-select>
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="Level" prop="level">
              <el-select v-model="form.level" placeholder="请选择" style="width: 190px">
                <el-option
                  v-for="item in level"
                  :key="item.id"
                  :label="item.msg"
                  :value="item.id"
                />
              </el-select>
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="商品所属类目" prop="product_category_id">
              <el-select v-model="form.product_category_id" placeholder="请选择" style="width: 190px">
                <el-option
                  v-for="item in product_category"
                  :key="item.id"
                  :label="item.name"
                  :value="item.id"
                />
              </el-select>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="库存量" prop="stock">
              <el-input v-model="form.stock" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="状态" prop="status">
              <el-select v-model="form.status" placeholder="请选择" style="width: 190px">
                <el-option
                  v-for="item in product_status"
                  :key="item.flag"
                  :label="item.msg"
                  :value="item.flag"
                />
              </el-select>
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="商品规格" prop="spec">
              <el-input v-model="form.spec" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="价格" prop="price">
              <el-input v-model="form.price" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="优惠价格" prop="sale_price">
              <el-input v-model="form.sale_price" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="销量" prop="sold_count">
              <el-input v-model="form.sold_count" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="平均评分" prop="rating">
              <el-input v-model="form.rating" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="评价数量" prop="review_count">
              <el-input v-model="form.review_count" />
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="7">
            <el-form-item label="网页title (SEO)" prop="seo_title">
              <el-input v-model="form.seo_title" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="网页关键字 (SEO)" prop="seo_keyword">
              <el-input v-model="form.seo_keyword" />
            </el-form-item>
          </el-col>
          <el-col :span="7">
            <el-form-item label="网页描述(SEO)" prop="seo_description">
              <el-input v-model="form.seo_description" />
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
    </el-card>
    <el-card class="box-card-description" shadow="hover" style="margin-bottom: 10px;padding: 0 30px">
      <el-form ref="formDesc" :model="form" label-position="top">
        <el-row :gutter="40">
          <el-col :span="12">
            <el-form-item prop="short_description" style="margin-bottom: 40px">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('short_description')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="short_description">
                  <template slot="title">
                    <span class="productDetailText">简短介绍</span>
                  </template>
                  <span v-html="form.short_description" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item prop="short_description_en">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('short_description_en')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="short_description_en">
                  <template slot="title">
                    <span class="productDetailText">简短介绍(英文)</span>
                  </template>
                  <span v-html="form.short_description_en" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="40">
          <el-col :span="12">
            <el-form-item prop="benefit">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('benefit')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="benefit">
                  <template slot="title">
                    <span class="productDetailText">产品功效</span>
                  </template>
                  <span v-html="form.benefit" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item prop="benefit_en">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('benefit_en')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="benefit_en">
                  <template slot="title">
                    <span class="productDetailText">产品功效(英文)</span>
                  </template>
                  <span v-html="form.benefit_en" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="40">
          <el-col :span="12">
            <el-form-item prop="tech_description">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('tech_description')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="tech_description">
                  <template slot="title">
                    <span class="productDetailText">科技介绍</span>
                  </template>
                  <span v-html="form.tech_description" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item prop="tech_description_en">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('tech_description_en')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="tech_description_en">
                  <template slot="title">
                    <span class="productDetailText">科技介绍(英文)</span>
                  </template>
                  <span v-html="form.tech_description_en" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="40">
          <el-col :span="12">
            <el-form-item prop="description">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('description')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="description">
                  <template slot="title">
                    <span class="productDetailText">产品细节</span>
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
                    <span class="productDetailText">产品细节(英文)</span>
                  </template>
                  <span v-html="form.description_en" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="40">
          <el-col :span="12">
            <el-form-item prop="usage">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('usage')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="usage">
                  <template slot="title">
                    <span class="productDetailText">使用方法</span>
                  </template>
                  <span v-html="form.usage" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
          <el-col :span="12">
            <el-form-item prop="usage_en">
              <el-button type="primary" plain icon="el-icon-edit-outline" style="float: right" @click="handleDescribes('usage_en')" />
              <el-collapse v-model="activeNames">
                <el-collapse-item name="usage_en">
                  <template slot="title">
                    <span class="productDetailText">使用方法(英文)</span>
                  </template>
                  <span v-html="form.usage_en" />
                </el-collapse-item>
              </el-collapse>
            </el-form-item>
          </el-col>
        </el-row>
      </el-form>
    </el-card>
    <el-card
      class="box-card-image"
      shadow="hover"
      style="padding: 0 30px"
    >
      <el-form ref="form" :model="form" label-position="top">
        <el-row>
          <el-col :span="6">
            <el-form-item label="商品缩略图">
              <el-upload
                ref="uploadThumbnail"
                :class="{hideThumbnail:hideUploadThumbnail}"
                name="Thumbnail"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCountThumbnail"
                :file-list="ThumbnailList"
                :on-change="handleThumbnailChange"
                :on-remove="handleThumbnailRemove"
              >
                <el-button size="small" plain type="primary">点击上传</el-button>
              </el-upload>
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="页面主图1">
              <el-upload
                ref="uploadMainImage"
                :class="{hideMainImage:hideUploadMainImage}"
                name="main_image"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCountMainImage"
                :file-list="mainImageList"
                :on-change="handleMainImageChange"
                :on-remove="handleMainImageRemove"
              >
                <el-button size="small" plain type="primary">点击上传</el-button>
              </el-upload>
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="页面主图2(低分辨率)">
              <el-upload
                ref="uploadMainImage2"
                :class="{hideMainImage2:hideUploadMainImage2}"
                name="main_image2"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCountMainImage2"
                :file-list="mainImage2List"
                :on-change="handleMainImage2Change"
                :on-remove="handleMainImage2Remove"
              >
                <el-button size="small" plain type="primary">点击上传</el-button>
              </el-upload>
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="功效背景图">
              <el-upload
                ref="uploadBenefitImage"
                :class="{hideBenefitImage:hideUploadBenefitImage}"
                name="benefit_image"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCountBenefitImage"
                :file-list="BenefitImageList"
                :on-change="handleBenefitImageChange"
                :on-remove="handleBenefitImageRemove"
              >
                <el-button size="small" plain type="primary">点击上传</el-button>
              </el-upload>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row>
          <el-col :span="6">
            <el-form-item label="使用方法背景图">
              <el-upload
                ref="uploadUsageImage"
                :class="{hideUsageImage:hideUploadUsageImage}"
                name="UsageImage"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCountUsageImage"
                :file-list="UsageImageList"
                :on-change="handleUsageImageChange"
                :on-remove="handleUsageImageRemove"
              >
                <el-button size="small" plain type="primary">点击上传</el-button>
                <div slot="tip" class="el-upload__tip">只能上传一张jpg/png文件，且不超过500kb</div>
              </el-upload>
            </el-form-item>
          </el-col>
          <el-col :span="6">
            <el-form-item label="科技介绍背景图">
              <el-upload
                ref="uploadTechImage"
                :class="{hideTechImage:hideUploadTechImage}"
                name="tech_image"
                action="#"
                list-type="picture-card"
                :auto-upload="false"
                :limit="limitCountTechImage"
                :file-list="TechImageList"
                :on-change="handleTechImageChange"
                :on-remove="handleTechImageRemove"
              >
                <el-button size="small" plain type="primary">点击上传</el-button>
              </el-upload>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row :gutter="10">
          <el-col :span="6">
            <el-form-item label="商品视频">
              <el-upload
                ref="uploadProductVideo"
                :class="{hideProductVideo:hideUploadProductVideo}"
                name="product_video"
                action="#"
                list-type="text"
                :auto-upload="false"
                :limit="limitCountProductVideo"
                :file-list="ProductVideoList"
                :on-change="handleProductVideoChange"
                :on-remove="handleProductVideoRemove"
              >
                <el-button v-if="!hideUploadProductVideo" size="small" plain type="primary">点击上传</el-button>
              </el-upload>
            </el-form-item>
          </el-col>
        </el-row>
        <el-row style="margin-bottom: 50px">
          <el-form-item>
            <el-col :span="2" :offset="8">
              <el-button
                v-loading="loading"
                element-loading-background="rgba(255,255,255,0.6)"
                type="success"
                @click="submitProduct('formRules')"
              >提交</el-button>
            </el-col>
            <el-col :span="2">
              <el-button type="info" plain @click="closePageButton">返回</el-button>
            </el-col>
          </el-form-item>
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
import { productStore, getParentProduct } from '@/api/product'
import Tinymce from '@/components/Tinymce'
import { getList } from '@/api/category'
export default {
  name: 'CreateProduct',
  components: {
    Tinymce
  },
  data() {
    return {
      formDisable: false,
      product_slug: '',
      loading: false,
      form: {
        product_name: '',
        product_name_en: '',
        stock: '',
        status: '',
        spec: '',
        price: '',
        sale_price: '',
        sold_count: 0,
        rating: 5,
        review_count: 0,
        seo_title: '',
        seo_keyword: '',
        seo_description: '',
        short_description: '',
        short_description_en: '',
        benefit: '',
        benefit_en: '',
        tech_description: '',
        tech_description_en: '',
        description: '',
        description_en: '',
        main_image: '',
        main_image_2: '',
        benefit_image: '',
        usage_image: '',
        tech_image: '',
        thumbnail: '',
        product_category_id: 0,
        product_video: '',
        usage: '',
        usage_en: '',
        parent_id: 0,
        level: 2
      },
      product_category: [
        { id: 0, name: '无' }
      ],
      parent_product: [
        { id: 0, product_name: '无' }
      ],
      level: [
        { id: 1,
          msg: '套装'
        },
        { id: 2,
          msg: '单品'
        }
      ],
      previewImgDialogVisible: false,
      previewImg: '',
      // 富文本
      showDialog: false,
      tinyTxt: '',
      flag: '',
      activeNames: [
        'short_description',
        'short_description_en',
        'benefit',
        'benefit_en',
        'tech_description',
        'tech_description_en',
        'description',
        'description_en',
        'usage',
        'usage_en'
      ],
      // 图片上传
      // 缩略图
      hideUploadThumbnail: false,
      limitCountThumbnail: 1,
      ThumbnailList: [],
      // 主图1
      hideUploadMainImage: false,
      limitCountMainImage: 1,
      mainImageList: [],
      // 主图2
      hideUploadMainImage2: false,
      limitCountMainImage2: 1,
      mainImage2List: [],
      // 功效背景图
      hideUploadBenefitImage: false,
      limitCountBenefitImage: 1,
      BenefitImageList: [],
      // 使用方法背景图
      hideUploadUsageImage: false,
      limitCountUsageImage: 1,
      UsageImageList: [],
      // 科技介绍背景图
      hideUploadTechImage: false,
      limitCountTechImage: 1,
      TechImageList: [],
      // 商品视频
      hideUploadProductVideo: false,
      limitCountProductVideo: 1,
      ProductVideoList: [],
      product_status: [
        { 'flag': 1, 'msg': '新品' },
        { 'flag': 2, 'msg': '畅销' },
        { 'flag': 3, 'msg': '促销' },
        { 'flag': -1, 'msg': '下架' }
      ],
      formRules: {
        product_name: [
          { required: true, message: '请输入商品名称', trigger: 'blur' }
        ],
        product_name_en: [
          { required: true, message: '请输入商品英文名称', trigger: 'blur' }
        ],
        price: [
          { required: true, message: '请输入商品价格', trigger: 'blur' },
          { pattern: '^([1-9]\\d{0,9}|0)(\\.\\d{1,2}){1}$', message: '请输入两位小数的价格', trigger: 'blur' }
        ],
        sale_price: [
          { required: true, message: '请输入商品优惠价格', trigger: 'blur' },
          { pattern: '^([1-9]\\d{0,9}|0)(\\.\\d{1,2}){1}$', message: '请输入两位小数的优惠价格', trigger: 'blur' }
        ],
        // product_category_id: [
        //   { required: true, message: '请选择商品类目', trigger: 'change' }
        // ],
        status: [
          { required: true, message: '请选择商品状态', trigger: 'change' }
        ],
        stock: [
          { required: true, message: '请输入商品库存量', trigger: 'blur' },
          {
            validator(rule, value, callback) {
              if (Number.isInteger(Number(value)) && Number(value) > 0) {
                callback()
              } else {
                callback(new Error('请输入正整数'))
              }
            },
            trigger: 'blur'
          }
        ],
        sold_count: [
          { required: true, message: '请输入商品销量，无销量则为0', trigger: 'blur' },
          {
            validator(rule, value, callback) {
              if (Number.isInteger(Number(value)) && Number(value) >= 0) {
                callback()
              } else {
                callback(new Error('请输入正整数或0'))
              }
            },
            trigger: 'blur'
          }
        ],
        rating: [
          { required: true, message: '请输入评分，默认为5', trigger: 'blur' },
          {
            validator(rule, value, callback) {
              const ratingStr = String(value)
              const reg = new RegExp('^([1-9]\\d*|0)(\\.\\d)?$')
              if (reg.test(ratingStr)) {
                callback()
              } else {
                callback(new Error('请输入整数或一位小数的评分'))
              }
            },
            trigger: 'blur'
          }
        ],
        review_count: [
          { required: true, message: '请输入评价数量，无评价则为0', trigger: 'blur' },
          {
            validator(rule, value, callback) {
              if (Number.isInteger(Number(value)) && Number(value) >= 0) {
                callback()
              } else {
                callback(new Error('请输入正整数或0'))
              }
            },
            trigger: 'blur'
          }
        ]
      }
    }
  },
  created() {
    this.getCategoryList()
    this.getParentProduct()
  },
  methods: {
    // 获取类目列表
    getCategoryList() {
      const param = {
        page_limit: 40
      }
      getList(param).then((response) => {
        this.product_category = this.product_category.concat(response.data.data)
      })
    },
    getParentProduct() {
      getParentProduct().then((response) => {
        this.parent_product = this.parent_product.concat(response.data)
      })
    },
    // 提交表单
    submitProduct(formName) {
      if (formName) {
        // 表单验证
        this.$refs[formName].validate((valid) => {
          // 表单验证通过
          if (valid) {
            // 文本和图片必填判断
            if (!this.form.short_description) {
              this.$message({
                message: '简短介绍不可为空！',
                type: 'warning'
              })
              return false
            } else if (!this.form.main_image) {
              this.$message({
                message: '请上传页面主图！',
                type: 'warning'
              })
              return false
            } else if (!this.form.main_image_2) {
              this.$message({
                message: '请上传页面主图2！',
                type: 'warning'
              })
              return false
            }
            this.submitRequestProduct()
          } else {
            return false
          }
        })
      }
    },
    // 请求后端接口创建商品
    submitRequestProduct() {
      const postForm = new FormData()
      for (const val in this.form) {
        postForm.append(val, this.form[val])
      }
      this.loading = true
      productStore(postForm).then((response) => {
        if (response.code === 20001) {
          this.$message({
            message: '商品创建成功！',
            type: 'success'
          })
          this.initFormData()
          this.closePageButton()
        } else {
          this.$message({
            message: '商品创建失败，请检查参数！',
            type: 'error'
          })
        }
        this.loading = false
      }).catch(err => {
        this.loading = true
        this.$message({
          message: '网络错误！',
          type: 'error'
        })
      })
    },
    // 创建商品成功后初始化数据
    initFormData() {
      this.$refs['formRules'].resetFields()
      this.$refs['formDesc'].resetFields()
      this.ThumbnailList = []
      this.mainImageList = []
      this.mainImage2List = []
      this.BenefitImageList = []
      this.ProductVideoList = []
      this.UsageImageList = []
      this.TechImageList = []
      this.hideUploadThumbnail = false
      this.hideUploadMainImage = false
      this.hideUploadMainImage2 = false
      this.hideUploadBenefitImage = false
      this.hideUploadProductVideo = false
      this.hideUploadUsageImage = false
      this.hideUploadTechImage = false
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
        case 'short_description':
          this.form.short_description = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'short_description_en':
          this.form.short_description_en = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'benefit':
          this.form.benefit = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'benefit_en':
          this.form.benefit_en = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'tech_description':
          this.form.tech_description = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'tech_description_en':
          this.form.tech_description_en = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
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
        case 'usage':
          this.form.usage = this.tinyTxt
          this.showDialog = false
          this.tinyTxt = ''
          break
        case 'usage_en':
          this.form.usage_en = this.tinyTxt
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
    // 图片上传
    // 缩略图
    handleThumbnailChange(file, fileList) {
      this.hideUploadThumbnail = fileList.length >= this.limitCountThumbnail
      this.form.thumbnail = file.raw
    },
    handleThumbnailRemove(file, fileList) {
      this.hideUploadThumbnail = fileList.length >= this.limitCountThumbnail
      this.form.thumbnail = null
    },
    // 页面主图1
    handleMainImageChange(file, fileList) {
      this.hideUploadMainImage = fileList.length >= this.limitCountMainImage
      this.form.main_image = file.raw
    },
    handleMainImageRemove(file, fileList) {
      this.hideUploadMainImage = fileList.length >= this.limitCountMainImage
      this.form.main_image = null
    },
    // 主图2
    handleMainImage2Change(file, fileList) {
      this.hideUploadMainImage2 = fileList.length >= this.limitCountMainImage2
      this.form.main_image_2 = file.raw
    },
    handleMainImage2Remove(file, fileList) {
      this.hideUploadMainImage2 = fileList.length >= this.limitCountMainImage2
      this.form.main_image_2 = null
    },
    // 功效背景图
    handleBenefitImageChange(file, fileList) {
      this.hideUploadBenefitImage = fileList.length >= this.limitCountBenefitImage
      this.form.benefit_image = file.raw
    },
    handleBenefitImageRemove(file, fileList) {
      this.hideUploadBenefitImage = fileList.length >= this.limitCountBenefitImage
      this.form.benefit_image = null
    },
    // 使用方法背景图
    handleUsageImageChange(file, fileList) {
      this.hideUploadUsageImage = fileList.length >= this.limitCountUsageImage
      this.form.usage_image = file.raw
    },
    handleUsageImageRemove(file, fileList) {
      this.hideUploadUsageImage = fileList.length >= this.limitCountUsageImage
      this.form.usage_image = null
    },
    // 科技介绍背景图
    handleTechImageChange(file, fileList) {
      this.hideUploadTechImage = fileList.length >= this.limitCountTechImage
      this.form.tech_image = file.raw
    },
    handleTechImageRemove(file, fileList) {
      this.hideUploadTechImage = fileList.length >= this.limitCountTechImage
      this.form.tech_image = null
    },
    // 产品视频
    handleProductVideoChange(file, fileList) {
      this.hideUploadProductVideo = fileList.length >= this.limitCountProductVideo
      this.form.product_video = file.raw
    },
    handleProductVideoRemove(file, fileList) {
      this.hideUploadProductVideo = fileList.length >= this.limitCountProductVideo
      this.form.product_video = null
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
  .hideThumbnail .el-upload--picture-card {
    display: none;
  }
  .hideMainImage .el-upload--picture-card {
    display: none;
  }
  .hideMainImage2 .el-upload--picture-card {
    display: none;
  }
  .hideBenefitImage .el-upload--picture-card {
    display: none;
  }
  .hideUsageImage .el-upload--picture-card {
    display: none;
  }
  .hideTechImage .el-upload--picture-card {
    display: none;
  }
  .hideProductVideo .el-upload--picture-card {
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
