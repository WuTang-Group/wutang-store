(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-5e7f6180"],{"106c":function(e,t,i){"use strict";i.r(t);var a=function(){var e=this,t=e.$createElement,i=e._self._c||t;return i("div",{staticClass:"app-container"},[i("el-card",{staticClass:"box-card-header",staticStyle:{"margin-bottom":"10px"},attrs:{shadow:"hover"}},[i("el-form",{ref:"formRules",attrs:{model:e.form,rules:e.formRules,inline:!0,disabled:e.formDisable,"label-position":"right","label-width":"120px"}},[i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"商品名称",prop:"product_name"}},[i("el-input",{model:{value:e.form.product_name,callback:function(t){e.$set(e.form,"product_name",t)},expression:"form.product_name"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"商品英文名称",prop:"product_name_en"}},[i("el-input",{model:{value:e.form.product_name_en,callback:function(t){e.$set(e.form,"product_name_en",t)},expression:"form.product_name_en"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"商品所属类目",prop:"product_category_id"}},[i("el-select",{staticStyle:{width:"190px"},attrs:{placeholder:"请选择"},model:{value:e.form.product_category_id,callback:function(t){e.$set(e.form,"product_category_id",t)},expression:"form.product_category_id"}},e._l(e.product_category,(function(e){return i("el-option",{key:e.id,attrs:{label:e.title,value:e.id}})})),1)],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"库存量",prop:"stock"}},[i("el-input",{model:{value:e.form.stock,callback:function(t){e.$set(e.form,"stock",t)},expression:"form.stock"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"状态",prop:"status"}},[i("el-select",{staticStyle:{width:"190px"},attrs:{placeholder:"请选择"},model:{value:e.form.status,callback:function(t){e.$set(e.form,"status",t)},expression:"form.status"}},e._l(e.product_status,(function(e){return i("el-option",{key:e.flag,attrs:{label:e.msg,value:e.flag}})})),1)],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"商品规格",prop:"spec"}},[i("el-input",{model:{value:e.form.spec,callback:function(t){e.$set(e.form,"spec",t)},expression:"form.spec"}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"价格",prop:"price"}},[i("el-input",{model:{value:e.form.price,callback:function(t){e.$set(e.form,"price",t)},expression:"form.price"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"优惠价格",prop:"sale_price"}},[i("el-input",{model:{value:e.form.sale_price,callback:function(t){e.$set(e.form,"sale_price",t)},expression:"form.sale_price"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"销量",prop:"sold_count"}},[i("el-input",{model:{value:e.form.sold_count,callback:function(t){e.$set(e.form,"sold_count",t)},expression:"form.sold_count"}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"平均评分",prop:"rating"}},[i("el-input",{model:{value:e.form.rating,callback:function(t){e.$set(e.form,"rating",t)},expression:"form.rating"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"评价数量",prop:"review_count"}},[i("el-input",{model:{value:e.form.review_count,callback:function(t){e.$set(e.form,"review_count",t)},expression:"form.review_count"}})],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"网页title (SEO)",prop:"seo_title"}},[i("el-input",{model:{value:e.form.seo_title,callback:function(t){e.$set(e.form,"seo_title",t)},expression:"form.seo_title"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"网页关键字 (SEO)",prop:"seo_keyword"}},[i("el-input",{model:{value:e.form.seo_keyword,callback:function(t){e.$set(e.form,"seo_keyword",t)},expression:"form.seo_keyword"}})],1)],1),i("el-col",{attrs:{span:7}},[i("el-form-item",{attrs:{label:"网页描述(SEO)",prop:"seo_description"}},[i("el-input",{model:{value:e.form.seo_description,callback:function(t){e.$set(e.form,"seo_description",t)},expression:"form.seo_description"}})],1)],1)],1)],1)],1),i("el-card",{staticClass:"box-card-description",staticStyle:{"margin-bottom":"10px",padding:"0 30px"},attrs:{shadow:"hover"}},[i("el-form",{ref:"formDesc",attrs:{model:e.form,"label-position":"top"}},[i("el-row",{attrs:{gutter:40}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{staticStyle:{"margin-bottom":"40px"},attrs:{prop:"short_description"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("short_description")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"short_description"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("简短介绍")])]),i("span",{domProps:{innerHTML:e._s(e.form.short_description)}})],2)],1)],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"short_description_en"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("short_description_en")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"short_description_en"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("简短介绍(英文)")])]),i("span",{domProps:{innerHTML:e._s(e.form.short_description_en)}})],2)],1)],1)],1)],1),i("el-row",{attrs:{gutter:40}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"benefit"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("benefit")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"benefit"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("产品功效")])]),i("span",{domProps:{innerHTML:e._s(e.form.benefit)}})],2)],1)],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"benefit_en"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("benefit_en")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"benefit_en"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("产品功效(英文)")])]),i("span",{domProps:{innerHTML:e._s(e.form.benefit_en)}})],2)],1)],1)],1)],1),i("el-row",{attrs:{gutter:40}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"tech_description"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("tech_description")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"tech_description"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("科技介绍")])]),i("span",{domProps:{innerHTML:e._s(e.form.tech_description)}})],2)],1)],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"tech_description_en"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("tech_description_en")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"tech_description_en"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("科技介绍(英文)")])]),i("span",{domProps:{innerHTML:e._s(e.form.tech_description_en)}})],2)],1)],1)],1)],1),i("el-row",{attrs:{gutter:40}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"description"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("description")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"description"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("产品细节")])]),i("span",{domProps:{innerHTML:e._s(e.form.description)}})],2)],1)],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"description_en"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("description_en")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"description_en"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("产品细节(英文)")])]),i("span",{domProps:{innerHTML:e._s(e.form.description_en)}})],2)],1)],1)],1)],1),i("el-row",{attrs:{gutter:40}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"usage"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("usage")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"usage"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("使用方法")])]),i("span",{domProps:{innerHTML:e._s(e.form.usage)}})],2)],1)],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"usage_en"}},[e.formDisable?e._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(t){return e.handleDescribes("usage_en")}}}),i("el-collapse",{model:{value:e.activeNames,callback:function(t){e.activeNames=t},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"usage_en"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[e._v("使用方法(英文)")])]),i("span",{domProps:{innerHTML:e._s(e.form.usage_en)}})],2)],1)],1)],1)],1)],1)],1),i("el-card",{staticClass:"box-card-image",staticStyle:{padding:"0 30px"},attrs:{shadow:"hover"}},[i("el-form",{ref:"form",attrs:{model:e.form,"label-position":"top"}},[i("el-row",[i("el-col",{attrs:{span:6}},[i("el-form-item",{attrs:{label:"商品缩略图"}},[e.formDisable?i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:e.form.thumbnail,fit:"scale-down"},on:{click:function(t){return e.previewImgAction(e.form.thumbnail)}}}):i("el-upload",{ref:"uploadThumbnail",class:{hideThumbnail:e.hideUploadThumbnail},attrs:{name:"Thumbnail",action:"#","list-type":"picture-card","auto-upload":!1,limit:e.limitCountThumbnail,"file-list":e.ThumbnailList,"on-change":e.handleThumbnailChange,"on-remove":e.handleThumbnailRemove}},[i("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[e._v("点击上传")]),i("div",{staticClass:"el-upload__tip",attrs:{slot:"tip"},slot:"tip"},[e._v("只能上传一张jpg/png文件，且不超过500kb")])],1)],1)],1),i("el-col",{attrs:{span:6}},[i("el-form-item",{attrs:{label:"页面主图1"}},[e.formDisable?i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:e.form.main_image,fit:"scale-down"},on:{click:function(t){return e.previewImgAction(e.form.main_image)}}}):i("el-upload",{ref:"uploadMainImage",class:{hideMainImage:e.hideUploadMainImage},attrs:{name:"main_image",action:"#","list-type":"picture-card","auto-upload":!1,limit:e.limitCountMainImage,"file-list":e.mainImageList,"on-change":e.handleMainImageChange,"on-remove":e.handleMainImageRemove}},[i("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[e._v("点击上传")])],1)],1)],1),i("el-col",{attrs:{span:6}},[i("el-form-item",{attrs:{label:"页面主图2"}},[e.formDisable?i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:e.form.main_image_2,fit:"scale-down"},on:{click:function(t){return e.previewImgAction(e.form.main_image_2)}}}):i("el-upload",{ref:"uploadMainImage2",class:{hideMainImage2:e.hideUploadMainImage2},attrs:{name:"main_image2",action:"#","list-type":"picture-card","auto-upload":!1,limit:e.limitCountMainImage2,"file-list":e.mainImage2List,"on-change":e.handleMainImage2Change,"on-remove":e.handleMainImage2Remove}},[i("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[e._v("点击上传")])],1)],1)],1),i("el-col",{attrs:{span:6}},[i("el-form-item",{attrs:{label:"功效背景图"}},[e.formDisable?i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:e.form.benefit_image,fit:"scale-down"},on:{click:function(t){return e.previewImgAction(e.form.benefit_image)}}}):i("el-upload",{ref:"uploadBenefitImage",class:{hideBenefitImage:e.hideUploadBenefitImage},attrs:{name:"benefit_image",action:"#","list-type":"picture-card","auto-upload":!1,limit:e.limitCountBenefitImage,"file-list":e.BenefitImageList,"on-change":e.handleBenefitImageChange,"on-remove":e.handleBenefitImageRemove}},[i("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[e._v("点击上传")])],1)],1)],1)],1),e.formDisable?e._e():i("el-row",{staticStyle:{"margin-bottom":"50px"}},[i("el-form-item",[i("el-col",{attrs:{span:2,offset:8}},[i("el-button",{attrs:{type:"success"},on:{click:function(t){return e.submitProduct("formRules")}}},[e._v("提交")])],1),i("el-col",{attrs:{span:2}},[i("el-button",{attrs:{type:"info",plain:""},on:{click:e.closePageButton}},[e._v("返回")])],1)],1)],1)],1)],1),i("el-dialog",{attrs:{title:"图片预览",visible:e.previewImgDialogVisible,width:"50%"},on:{"update:visible":function(t){e.previewImgDialogVisible=t}}},[i("el-image",{staticStyle:{width:"100%"},attrs:{src:e.previewImg}})],1),i("el-dialog",{attrs:{title:"富文本编辑",visible:e.showDialog,width:"50%","before-close":e.handleClose},on:{"update:visible":function(t){e.showDialog=t}}},[i("tinymce",{attrs:{height:150},model:{value:e.tinyTxt,callback:function(t){e.tinyTxt=t},expression:"tinyTxt"}}),i("span",{staticClass:"dialog-footer",attrs:{slot:"footer"},slot:"footer"},[i("el-button",{on:{click:function(t){e.showDialog=!1}}},[e._v("取 消")]),i("el-button",{attrs:{type:"primary"},on:{click:e.comfirmSaveTiny}},[e._v("确 定")])],1)],1)],1)},o=[],s=(i("a4d3"),i("e01a"),i("a9e3"),i("8ba4"),i("4d63"),i("ac1f"),i("25f0"),i("c4c8")),n=i("8256"),r=i("c405"),l={name:"ProductViewOrUpdate",components:{Tinymce:n["a"]},data:function(){return{formDisable:!1,product_slug:"",form:{product_name:"",product_name_en:"",stock:"",status:"",spec:"",price:"",sale_price:"",sold_count:"",rating:"",review_count:"",seo_title:"",seo_keyword:"",seo_description:"",short_description:"",short_description_en:"",benefit:"",benefit_en:"",tech_description:"",tech_description_en:"",description:"",description_en:"",main_image:"",main_image_2:"",benefit_image:"",thumbnail:"",product_category_id:"",usage:"",usage_en:""},product_category:{id:"",slug:"",title:""},previewImgDialogVisible:!1,previewImg:"",showDialog:!1,tinyTxt:"",flag:"",activeNames:["short_description","short_description_en","benefit","benefit_en","tech_description","tech_description_en","description","description_en","usage","usage_en"],hideUploadThumbnail:!1,limitCountThumbnail:1,ThumbnailList:[],hideUploadMainImage:!1,limitCountMainImage:1,mainImageList:[],hideUploadMainImage2:!1,limitCountMainImage2:1,mainImage2List:[],hideUploadBenefitImage:!1,limitCountBenefitImage:1,BenefitImageList:[],product_status:[{flag:1,msg:"新品"},{flag:2,msg:"畅销"},{flag:3,msg:"促销"},{flag:-1,msg:"下架"}],formRules:{product_name:[{required:!0,message:"请输入商品名称",trigger:"blur"}],product_name_en:[{required:!0,message:"请输入商品英文名称",trigger:"blur"}],price:[{required:!0,message:"请输入商品价格",trigger:"blur"},{pattern:"^([1-9]\\d{0,9}|0)(\\.\\d{1,2}){1}$",message:"请输入两位小数的价格",trigger:"blur"}],sale_price:[{required:!0,message:"请输入商品优惠价格",trigger:"blur"},{pattern:"^([1-9]\\d{0,9}|0)(\\.\\d{1,2}){1}$",message:"请输入两位小数的优惠价格",trigger:"blur"}],product_category_id:[{required:!0,message:"请选择商品类目",trigger:"change"}],status:[{required:!0,message:"请选择商品状态",trigger:"change"}],stock:[{required:!0,message:"请输入商品库存量",trigger:"blur"},{validator:function(e,t,i){Number.isInteger(Number(t))&&Number(t)>0?i():i(new Error("请输入正整数"))},trigger:"blur"}],sold_count:[{required:!0,message:"请输入商品销量，无销量则为0",trigger:"blur"},{validator:function(e,t,i){Number.isInteger(Number(t))&&Number(t)>=0?i():i(new Error("请输入正整数或0"))},trigger:"blur"}],rating:[{required:!0,message:"请输入评分，默认为5",trigger:"blur"},{validator:function(e,t,i){var a=String(t),o=new RegExp("^([1-9]\\d*|0)(\\.\\d)?$");o.test(a)?i():i(new Error("请输入整数或一位小数的评分"))},trigger:"blur"}],review_count:[{required:!0,message:"请输入评价数量，无评价则为0",trigger:"blur"},{validator:function(e,t,i){Number.isInteger(Number(t))&&Number(t)>=0?i():i(new Error("请输入正整数或0"))},trigger:"blur"}]}}},created:function(){this.getProductData(),this.getProductDetail(),this.getCategoryList()},methods:{getProductData:function(){this.product_slug=this.$route.params.product_slug,this.status=this.$route.params.status,"view"===this.status&&(this.formDisable=!0)},getCategoryList:function(){var e=this,t={page_limit:40};Object(r["d"])(t).then((function(t){e.product_category=t.data.data}))},getProductDetail:function(){var e=this;Object(s["c"])(this.product_slug).then((function(t){e.form=t.data,e.ThumbnailList.push({url:e.form.thumbnail}),e.mainImageList.push({url:e.form.main_image}),e.mainImage2List.push({url:e.form.main_image_2}),e.BenefitImageList.push({url:e.form.benefit_image}),e.hideUploadThumbnail=!0,e.hideUploadMainImage=!0,e.hideUploadMainImage2=!0,e.hideUploadBenefitImage=!0}))},submitProduct:function(e){var t=this;e&&(console.log(this.form),this.$refs[e].validate((function(e){return!!e&&(t.form.short_description?t.form.main_image?t.form.main_image_2?void t.submitRequestProduct():(t.$message({message:"请上传页面主图2！",type:"warning"}),!1):(t.$message({message:"请上传页面主图！",type:"warning"}),!1):(t.$message({message:"简短介绍不可为空！",type:"warning"}),!1))})))},submitRequestProduct:function(){var e=this,t=new FormData;for(var i in this.form)t.append(i,this.form[i]);Object(s["e"])(this.product_slug,t).then((function(t){20001===t.code?e.$message({message:"商品更新成功！",type:"success"}):e.$message({message:"商品更新失败，请检查参数！",type:"error"})}))},initFormData:function(){this.$refs["formRules"].resetFields(),this.$refs["formDesc"].resetFields(),this.ThumbnailList=[],this.mainImageList=[],this.mainImage2List=[],this.BenefitImageList=[],this.hideUploadThumbnail=!1,this.hideUploadMainImage=!1,this.hideUploadMainImage2=!1,this.hideUploadBenefitImage=!1},previewImgAction:function(e){this.previewImg=e,this.previewImgDialogVisible=!0},handleDescribes:function(e){this.flag=e,this.tinyTxt="",this.showDialog=!0},comfirmSaveTiny:function(){switch(this.flag){case"short_description":this.form.short_description=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"short_description_en":this.form.short_description_en=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"benefit":this.form.benefit=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"benefit_en":this.form.benefit_en=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"tech_description":this.form.tech_description=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"tech_description_en":this.form.tech_description_en=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"description":this.form.description=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"description_en":this.form.description_en=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"usage":this.form.usage=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"usage_en":this.form.usage_en=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;default:break}this.$message({message:"编辑完成",type:"success"})},handleClose:function(e){this.$confirm("确认关闭？").then((function(t){e()})).catch((function(e){}))},handleThumbnailChange:function(e,t){this.hideUploadThumbnail=t.length>=this.limitCountThumbnail,this.form.thumbnail=e.raw},handleThumbnailRemove:function(e,t){this.hideUploadThumbnail=t.length>=this.limitCountThumbnail,this.form.thumbnail=null},handleMainImageChange:function(e,t){this.hideUploadMainImage=t.length>=this.limitCountMainImage,this.form.main_image=e.raw},handleMainImageRemove:function(e,t){this.hideUploadMainImage=t.length>=this.limitCountMainImage,this.form.main_image=null},handleMainImage2Change:function(e,t){this.hideUploadMainImage2=t.length>=this.limitCountMainImage2,this.form.main_image_2=e.raw},handleMainImage2Remove:function(e,t){this.hideUploadMainImage2=t.length>=this.limitCountMainImage2,this.form.main_image_2=null},handleBenefitImageChange:function(e,t){this.hideUploadBenefitImage=t.length>=this.limitCountBenefitImage,this.form.benefit_image=e.raw},handleBenefitImageRemove:function(e,t){this.hideUploadBenefitImage=t.length>=this.limitCountBenefitImage,this.form.benefit_image=null},closePageButton:function(){this.$store.dispatch("tagsView/delView",this.$route),this.$router.go(-1)}}},c=l,m=(i("aad9"),i("2877")),u=Object(m["a"])(c,a,o,!1,null,null,null);t["default"]=u.exports},"5e89":function(e,t,i){var a=i("861d"),o=Math.floor;e.exports=function(e){return!a(e)&&isFinite(e)&&o(e)===e}},"6d06":function(e,t,i){},"8ba4":function(e,t,i){var a=i("23e7"),o=i("5e89");a({target:"Number",stat:!0},{isInteger:o})},aad9:function(e,t,i){"use strict";var a=i("6d06"),o=i.n(a);o.a},c405:function(e,t,i){"use strict";i.d(t,"d",(function(){return o})),i.d(t,"e",(function(){return s})),i.d(t,"b",(function(){return n})),i.d(t,"c",(function(){return r})),i.d(t,"a",(function(){return l}));var a=i("b775");function o(e){return Object(a["a"])({url:"admin/product_categories",method:"get",params:e})}function s(e){return Object(a["a"])({url:"admin/product_categories",method:"post",data:e})}function n(e){return Object(a["a"])({url:"admin/product_categories/"+e,method:"get"})}function r(e,t){return Object(a["a"])({url:"admin/product_categories/"+t,method:"post",data:e})}function l(e){return Object(a["a"])({url:"admin/product_categories/"+e,method:"delete"})}},c4c8:function(e,t,i){"use strict";i.d(t,"a",(function(){return o})),i.d(t,"c",(function(){return s})),i.d(t,"d",(function(){return n})),i.d(t,"e",(function(){return r})),i.d(t,"b",(function(){return l}));var a=i("b775");function o(e){return Object(a["a"])({url:"admin/product",method:"get",params:e})}function s(e){return Object(a["a"])({url:"admin/product/"+e,method:"get"})}function n(e){return Object(a["a"])({url:"admin/product",method:"post",data:e})}function r(e,t){return Object(a["a"])({url:"admin/product/"+e,method:"post",data:t})}function l(e){return Object(a["a"])({url:"admin/product/"+e,method:"delete"})}}}]);