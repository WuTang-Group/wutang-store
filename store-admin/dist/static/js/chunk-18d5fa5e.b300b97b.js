(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-18d5fa5e"],{"513d":function(t,e,i){"use strict";i.r(e);var a=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"app-container"},[i("el-form",{ref:"categoryDetail",attrs:{model:t.categoryDetail,inline:!0,"label-position":"right"}},[i("el-card",{staticClass:"box-card-description",staticStyle:{"margin-bottom":"10px"},attrs:{shadow:"hover"}},[i("div",{staticClass:"clearfix",attrs:{slot:"header"},slot:"header"},[i("span",[t._v("类目信息")])]),i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"上级类目"}},[t.formDisable?i("el-input",{staticStyle:{width:"400px"},attrs:{readonly:t.formDisable},model:{value:t.categoryDetail.parent.name,callback:function(e){t.$set(t.categoryDetail.parent,"name",e)},expression:"categoryDetail.parent.name"}}):i("el-select",{staticStyle:{width:"400px"},attrs:{placeholder:"请选择"},model:{value:t.categoryDetail.parent_id,callback:function(e){t.$set(t.categoryDetail,"parent_id",e)},expression:"categoryDetail.parent_id"}},t._l(t.parentCategory,(function(t){return i("el-option",{key:t.id,attrs:{label:t.name,value:t.id}})})),1)],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"类目名称"}},[i("el-input",{staticStyle:{width:"400px"},attrs:{readonly:t.formDisable},model:{value:t.categoryDetail.name,callback:function(e){t.$set(t.categoryDetail,"name",e)},expression:"categoryDetail.name"}})],1)],1)],1),i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:12}},[i("div",{staticStyle:{width:"470px","margin-bottom":"25px"}},[t.formDisable?t._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(e){return t.handleDescribes("title")}}}),i("el-collapse",{model:{value:t.activeNames,callback:function(e){t.activeNames=e},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"title"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[t._v("类目介绍标题")])]),i("span",{domProps:{innerHTML:t._s(t.categoryDetail.title)}})],2)],1)],1)]),i("el-col",{attrs:{span:12}},[i("div",{staticStyle:{width:"470px"}},[t.formDisable?t._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(e){return t.handleDescribes("title_en")}}}),i("el-collapse",{model:{value:t.activeNames,callback:function(e){t.activeNames=e},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"title_en"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[t._v("类目介绍标题(英文)")])]),i("span",{domProps:{innerHTML:t._s(t.categoryDetail.title_en)}})],2)],1)],1)])],1),i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:12}},[i("div",{staticStyle:{width:"470px","margin-bottom":"25px"}},[t.formDisable?t._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(e){return t.handleDescribes("sub_title")}}}),i("el-collapse",{model:{value:t.activeNames,callback:function(e){t.activeNames=e},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"sub_title"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[t._v("类目副标题")])]),i("span",{domProps:{innerHTML:t._s(t.categoryDetail.sub_title)}})],2)],1)],1)])],1),i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:12}},[i("div",{staticStyle:{width:"470px","margin-bottom":"25px"}},[t.formDisable?t._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(e){return t.handleDescribes("describe")}}}),i("el-collapse",{model:{value:t.activeNames,callback:function(e){t.activeNames=e},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"describe"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[t._v("类目描述")])]),i("span",{domProps:{innerHTML:t._s(t.categoryDetail.describe)}})],2)],1)],1)]),i("el-col",{attrs:{span:12}},[i("div",{staticStyle:{width:"470px"}},[t.formDisable?t._e():i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(e){return t.handleDescribes("describe_en")}}}),i("el-collapse",{model:{value:t.activeNames,callback:function(e){t.activeNames=e},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"describe_en"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[t._v("类目描述(英文)")])]),i("span",{domProps:{innerHTML:t._s(t.categoryDetail.describe_en)}})],2)],1)],1)])],1),i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"类目banner图"}},[t.formDisable?i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:t.categoryDetail.banner,fit:"scale-down"},on:{click:function(e){return t.previewImgAction(t.categoryDetail.banner)}}}):i("el-upload",{ref:"uploadBanner",class:{hideBanner:t.hideUploadBanner},attrs:{name:"banner",action:"#","list-type":"picture-card","auto-upload":!1,limit:t.limitCountBanner,"file-list":t.bannerList,"on-change":t.handleBannerChange,"on-remove":t.handleBannerRemove}},[i("el-button",{attrs:{size:"small",type:"primary"}},[t._v("点击上传")]),i("div",{staticClass:"el-upload__tip",attrs:{slot:"tip"},slot:"tip"},[t._v("只能上传一张jpg/png文件，且不超过500kb")])],1)],1)],1),i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"类目缩略图"}},[t.formDisable?i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:t.categoryDetail.thumbnail,fit:"scale-down"},on:{click:function(e){return t.previewImgAction(t.categoryDetail.thumbnail)}}}):i("el-upload",{ref:"uploadThumbnail",class:{hideThumbnail:t.hideUploadThumbnail},attrs:{name:"img",action:"#","list-type":"picture-card","auto-upload":!1,limit:t.limitCountThumbnail,"file-list":t.thumbnailList,"on-change":t.handleThumbnailChange,"on-remove":t.handleThumbnailRemove}},[i("el-button",{attrs:{size:"small",type:"primary"}},[t._v("点击上传")]),i("div",{staticClass:"el-upload__tip",attrs:{slot:"tip"},slot:"tip"},[t._v("只能上传一张jpg/png文件，且不超过500kb")])],1)],1)],1),i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"类目描述图"}},[t.formDisable?i("el-image",{staticStyle:{width:"120px",height:"120px"},attrs:{src:t.categoryDetail.describe_img,fit:"scale-down"},on:{click:function(e){return t.previewImgAction(t.categoryDetail.describe_img)}}}):i("el-upload",{ref:"uploadDescribeImg",class:{hideDescribeImg:t.hideUploadDescribeImg},attrs:{name:"img",action:"#","list-type":"picture-card","auto-upload":!1,limit:t.limitCountDescribeImg,"file-list":t.describeImgList,"on-change":t.handleDescribeImgChange,"on-remove":t.handleDescribeImgRemove}},[i("el-button",{attrs:{size:"small",type:"primary"}},[t._v("点击上传")]),i("div",{staticClass:"el-upload__tip",attrs:{slot:"tip"},slot:"tip"},[t._v("只能上传一张jpg/png文件，且不超过500kb")])],1)],1)],1)],1)],1),t.formDisable?t._e():i("el-card",{staticClass:"box-card-image",attrs:{shadow:"hover"}},[i("el-row",{staticStyle:{"margin-bottom":"50px"}},[i("el-col",{attrs:{span:2,offset:8}},[i("el-button",{attrs:{type:"success"},on:{click:function(e){return t.submitCategory(t.categoryDetail)}}},[t._v("提交")])],1),i("el-col",{attrs:{span:2}},[i("el-button",{attrs:{type:"info",plain:""},on:{click:t.closePageButton}},[t._v("返回")])],1)],1)],1)],1),i("el-dialog",{attrs:{title:"图片预览",visible:t.previewImgDialogVisible,width:"50%"},on:{"update:visible":function(e){t.previewImgDialogVisible=e}}},[i("el-image",{staticStyle:{width:"100%"},attrs:{src:t.previewImg}})],1),i("el-dialog",{attrs:{title:"富文本编辑",visible:t.showDialog,width:"50%","before-close":t.handleClose},on:{"update:visible":function(e){t.showDialog=e}}},[i("tinymce",{attrs:{height:150},model:{value:t.tinyTxt,callback:function(e){t.tinyTxt=e},expression:"tinyTxt"}}),i("span",{staticClass:"dialog-footer",attrs:{slot:"footer"},slot:"footer"},[i("el-button",{on:{click:function(e){t.showDialog=!1}}},[t._v("取 消")]),i("el-button",{attrs:{type:"primary"},on:{click:t.comfirmSaveTiny}},[t._v("确 定")])],1)],1)],1)},l=[],s=(i("b0c0"),i("8256")),n=i("c405"),r={name:"CategoryViewOrUpdate",components:{Tinymce:s["a"]},data:function(){return{showDialog:!1,tinyTxt:"",flag:"",formDisable:!1,category_slug:"",previewImgDialogVisible:!1,previewImg:"",categoryDetail:{id:"",slug:"",name:"",title:"",title_en:"",sub_title:"",describe:"",describe_en:"",thumbnail:"",banner:"",describe_img:"",parent_id:"",created_at:"",updated_at:"",product_category_stories:{id:"",product_category_id:"",title:"",title_en:"",description:"",description_en:"",banner:"",created_at:"",updated_at:""},parent:{id:"",name:""}},parentCategory:null,hideUploadBanner:!1,limitCountBanner:1,bannerList:[],hideUploadThumbnail:!1,limitCountThumbnail:1,thumbnailList:[],hideUploadDescribeImg:!1,limitCountDescribeImg:1,describeImgList:[],activeNames:["title","title_en","sub_title","describe","describe_en"]}},created:function(){this.getCategoryData(),this.getCategoryDetail()},methods:{previewImgAction:function(t){this.previewImg=t,this.previewImgDialogVisible=!0},getCategoryData:function(){this.category_slug=this.$route.params.category_slug,this.status=this.$route.params.status,"view"===this.status?this.formDisable=!0:this.getCategoryList()},getCategoryList:function(){var t=this,e={page_limit:40};Object(n["d"])(e).then((function(e){t.parentCategory=e.data.data}))},getCategoryDetail:function(){var t=this;Object(n["b"])(this.category_slug).then((function(e){t.categoryDetail=e.data,e.data.product_category_stories[0]&&(t.categoryDetail.product_category_stories=e.data.product_category_stories[0]),t.bannerList.push({url:t.categoryDetail.banner}),t.thumbnailList.push({url:t.categoryDetail.thumbnail}),t.describeImgList.push({url:t.categoryDetail.describe_img}),t.hideUploadBanner=!0,t.hideUploadThumbnail=!0,t.hideUploadDescribeImg=!0}))},closePageButton:function(){this.$store.dispatch("tagsView/delView",this.$route),this.$router.go(-1)},submitCategory:function(){var t=this,e=new FormData;e.append("name",this.categoryDetail.name),e.append("title",this.categoryDetail.title),e.append("title_en",this.categoryDetail.title_en),e.append("sub_title",this.categoryDetail.sub_title),e.append("describe",this.categoryDetail.describe),e.append("describe_en",this.categoryDetail.describe_en),e.append("thumbnail",this.categoryDetail.thumbnail),e.append("banner",this.categoryDetail.banner),e.append("describe_img",this.categoryDetail.describe_img),e.append("parent_id",this.categoryDetail.parent_id),Object(n["c"])(e,this.categoryDetail.slug).then((function(e){20001===e.code?t.$message({message:"更新成功！",type:"success"}):t.$message({message:"更新失败!",type:"error"})}))},handleDescribes:function(t){this.flag=t,this.tinyTxt="",this.showDialog=!0},comfirmSaveTiny:function(){switch(this.flag){case"title":this.categoryDetail.title=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"title_en":this.categoryDetail.title_en=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"sub_title":this.categoryDetail.sub_title=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"describe":this.categoryDetail.describe=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case"describe_en":this.categoryDetail.describe_en=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;default:break}this.$message({message:"编辑完成",type:"success"})},handleClose:function(t){this.$confirm("确认关闭？").then((function(e){t()})).catch((function(t){}))},handleBannerChange:function(t,e){this.hideUploadBanner=e.length>=this.limitCountBanner,this.categoryDetail.banner=t.raw},handleBannerRemove:function(t,e){this.hideUploadBanner=e.length>=this.limitCountBanner,this.categoryDetail.banner=null},handleThumbnailChange:function(t,e){this.hideUploadThumbnail=e.length>=this.limitCountThumbnail,this.categoryDetail.thumbnail=t.raw},handleThumbnailRemove:function(t,e){this.hideUploadThumbnail=e.length>=this.limitCountThumbnail,this.categoryDetail.thumbnail=null},handleDescribeImgChange:function(t,e){this.hideUploadDescribeImg=e.length>=this.limitCountDescribeImg,this.categoryDetail.describe_img=t.raw},handleDescribeImgRemove:function(t,e){this.hideUploadDescribeImg=e.length>=this.limitCountDescribeImg,this.categoryDetail.describe_img=null}}},o=r,c=(i("e648"),i("2877")),d=Object(c["a"])(o,a,l,!1,null,null,null);e["default"]=d.exports},c405:function(t,e,i){"use strict";i.d(e,"d",(function(){return l})),i.d(e,"e",(function(){return s})),i.d(e,"b",(function(){return n})),i.d(e,"c",(function(){return r})),i.d(e,"a",(function(){return o}));var a=i("b775");function l(t){return Object(a["a"])({url:"admin/product_categories",method:"get",params:t})}function s(t){return Object(a["a"])({url:"admin/product_categories",method:"post",data:t})}function n(t){return Object(a["a"])({url:"admin/product_categories/"+t,method:"get"})}function r(t,e){return Object(a["a"])({url:"admin/product_categories/"+e,method:"post",data:t})}function o(t){return Object(a["a"])({url:"admin/product_categories/"+t,method:"delete"})}},e648:function(t,e,i){"use strict";var a=i("e905"),l=i.n(a);l.a},e905:function(t,e,i){}}]);