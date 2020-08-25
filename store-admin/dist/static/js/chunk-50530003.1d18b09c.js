(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-50530003"],{"106c":function(t,e,i){"use strict";i.r(e);var a=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"app-container"},[i("el-form",{ref:"productDetail",attrs:{model:t.productDetail,inline:!0,"label-position":"right","label-width":"100px"}},[i("el-card",{staticClass:"box-card-header",staticStyle:{"margin-bottom":"10px"},attrs:{shadow:"hover"}},[i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"商品名称"}},[i("el-input",{attrs:{disabled:t.formDisable},on:{input:t.inputEvents},model:{value:t.productDetail.product_name,callback:function(e){t.$set(t.productDetail,"product_name",e)},expression:"productDetail.product_name"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"商品英文名称"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.product_name_en,callback:function(e){t.$set(t.productDetail,"product_name_en",e)},expression:"productDetail.product_name_en"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"商品缩略图"}},[i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:t.productDetail.thumbnail,fit:"scale-down"},on:{click:function(e){return t.previewImgAction(t.productDetail.thumbnail)}}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"商品所属分类"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.product_category.title,callback:function(e){t.$set(t.productDetail.product_category,"title",e)},expression:"productDetail.product_category.title"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"状态"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.status,callback:function(e){t.$set(t.productDetail,"status",e)},expression:"productDetail.status"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"商品规格"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.spec,callback:function(e){t.$set(t.productDetail,"spec",e)},expression:"productDetail.spec"}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"价格"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.price,callback:function(e){t.$set(t.productDetail,"price",e)},expression:"productDetail.price"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"优惠价格"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.sale_price,callback:function(e){t.$set(t.productDetail,"sale_price",e)},expression:"productDetail.sale_price"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"库存量"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.stock,callback:function(e){t.$set(t.productDetail,"stock",e)},expression:"productDetail.stock"}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"销量"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.sold_count,callback:function(e){t.$set(t.productDetail,"sold_count",e)},expression:"productDetail.sold_count"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"平均评分"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.rating,callback:function(e){t.$set(t.productDetail,"rating",e)},expression:"productDetail.rating"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"评价数量"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.review_count,callback:function(e){t.$set(t.productDetail,"review_count",e)},expression:"productDetail.review_count"}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"网页title (SEO)"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.seo_title,callback:function(e){t.$set(t.productDetail,"seo_title",e)},expression:"productDetail.seo_title"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"网页关键字 (SEO)"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.seo_keyword,callback:function(e){t.$set(t.productDetail,"seo_keyword",e)},expression:"productDetail.seo_keyword"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"网页描述(SEO)"}},[i("el-input",{attrs:{disabled:t.formDisable},model:{value:t.productDetail.seo_description,callback:function(e){t.$set(t.productDetail,"seo_description",e)},expression:"productDetail.seo_description"}})],1)],1)],1)],1),i("el-card",{staticClass:"box-card-description",staticStyle:{"margin-bottom":"10px"},attrs:{shadow:"hover"}},[i("el-row",[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"简短介绍"}},[i("el-input",{staticStyle:{width:"400px"},attrs:{type:"textarea",autosize:!0,"label-position":"right",disabled:t.formDisable},model:{value:t.productDetail.short_description,callback:function(e){t.$set(t.productDetail,"short_description",e)},expression:"productDetail.short_description"}})],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"英文简短介绍"}},[i("el-input",{staticStyle:{width:"400px"},attrs:{type:"textarea",autosize:!0,"label-position":"right",disabled:t.formDisable},model:{value:t.productDetail.short_description_en,callback:function(e){t.$set(t.productDetail,"short_description_en",e)},expression:"productDetail.short_description_en"}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"产品功效"}},[i("el-input",{staticStyle:{width:"400px"},attrs:{type:"textarea","label-position":"right",autosize:!0,disabled:t.formDisable},model:{value:t.productDetail.benefit,callback:function(e){t.$set(t.productDetail,"benefit",e)},expression:"productDetail.benefit"}})],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"英文产品功效"}},[i("el-input",{staticStyle:{width:"400px"},attrs:{type:"textarea","label-position":"right",autosize:!0,disabled:t.formDisable},model:{value:t.productDetail.benefit_en,callback:function(e){t.$set(t.productDetail,"benefit_en",e)},expression:"productDetail.benefit_en"}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"科技介绍"}},[i("el-input",{staticStyle:{width:"400px"},attrs:{type:"textarea","label-position":"right",autosize:!0,disabled:t.formDisable},model:{value:t.productDetail.tech_description,callback:function(e){t.$set(t.productDetail,"tech_description",e)},expression:"productDetail.tech_description"}})],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"英文科技介绍"}},[i("el-input",{staticStyle:{width:"400px"},attrs:{type:"textarea","label-position":"right",autosize:!0,disabled:t.formDisable},model:{value:t.productDetail.tech_description_en,callback:function(e){t.$set(t.productDetail,"tech_description_en",e)},expression:"productDetail.tech_description_en"}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"产品细节"}},[i("el-input",{staticStyle:{width:"400px"},attrs:{type:"textarea","label-position":"right",autosize:!0,disabled:t.formDisable},model:{value:t.productDetail.description,callback:function(e){t.$set(t.productDetail,"description",e)},expression:"productDetail.description"}})],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"英文产品细节"}},[i("el-input",{staticStyle:{width:"400px"},attrs:{type:"textarea","label-position":"right",autosize:!0,disabled:t.formDisable},model:{value:t.productDetail.description_en,callback:function(e){t.$set(t.productDetail,"description_en",e)},expression:"productDetail.description_en"}})],1)],1)],1)],1),i("el-card",{staticClass:"box-card-image",attrs:{shadow:"hover"}},[i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"页面主图1"}},[i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:t.productDetail.main_image,fit:"scale-down"},on:{click:function(e){return t.previewImgAction(t.productDetail.main_image)}}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"页面主图2"}},[i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:t.productDetail.main_image_2,fit:"scale-down"},on:{click:function(e){return t.previewImgAction(t.productDetail.main_image_2)}}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"功效背景图"}},[i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:t.productDetail.benefit_image,fit:"scale-down"},on:{click:function(e){return t.previewImgAction(t.productDetail.benefit_image)}}})],1)],1)],1),i("el-row",{staticStyle:{"margin-bottom":"50px"}},[i("el-col",{attrs:{span:2,offset:8}},[i("el-button",{attrs:{type:"success"},on:{click:t.submitProduct}},[t._v("提交")])],1),i("el-col",{attrs:{span:2}},[i("el-button",{attrs:{type:"info",plain:""},on:{click:t.closePageButton}},[t._v("返回")])],1)],1)],1)],1),i("el-dialog",{attrs:{title:"图片预览",visible:t.previewImgDialogVisible,width:"50%"},on:{"update:visible":function(e){t.previewImgDialogVisible=e}}},[i("el-image",{staticStyle:{width:"100%"},attrs:{src:t.previewImg}})],1)],1)},l=[],o=i("c4c8"),r={name:"ProductViewOrUpdate",data:function(){return{formDisable:!1,product_slug:"",productDetail:{id:"",benefit:"",benefit_en:"",benefit_image:"",description:"",description_en:"",main_image:"",main_image_2:"",price:"",product_category:{id:"",slug:"",title:""},product_category_id:"",product_name:"",product_name_en:"",product_video:"",rating:"",review_count:"",sale_price:"",seo_description:"",seo_keyword:"",seo_title:"",short_description:"",short_description_en:"",slug:"",sold_count:"",spec:"",status:"",stock:"",tech_description:"",tech_description_en:"",thumbnail:"",usage:"",usage_en:"",created_at:""},previewImgDialogVisible:!1,previewImg:""}},created:function(){this.getProductData(),this.getProductDetail()},methods:{previewImgAction:function(t){this.previewImg=t,this.previewImgDialogVisible=!0},getProductData:function(){console.log(this.$route),this.product_slug=this.$route.params.product_slug,this.status=this.$route.params.status,"view"===this.status&&(this.formDisable=!0)},getProductDetail:function(){var t=this;Object(o["b"])(this.product_slug).then((function(e){t.productDetail=e.data}))},submitProduct:function(){console.log(this.productDetail)},inputEvents:function(t){console.log(t)},closePageButton:function(){this.$store.dispatch("tagsView/delView",this.$route),this.$router.go(-1)}}},s=r,c=i("2877"),n=Object(c["a"])(s,a,l,!1,null,"723db9fa",null);e["default"]=n.exports},c4c8:function(t,e,i){"use strict";i.d(e,"a",(function(){return l})),i.d(e,"b",(function(){return o}));var a=i("b775");function l(t){return Object(a["a"])({url:"admin/product",method:"get",params:t})}function o(t){return Object(a["a"])({url:"admin/product/"+t,method:"get"})}}}]);