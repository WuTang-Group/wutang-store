(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-14cbd30c"],{6560:function(t,e,i){"use strict";var n=i("db19"),a=i.n(n);a.a},"94b4":function(t,e,i){"use strict";i.r(e);var n=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"app-container"},[i("el-card",{staticClass:"box-card",staticStyle:{padding:"0 30px"}},[i("el-form",{ref:"form",attrs:{model:t.form,"label-position":"left"}},[i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"类目名称",prop:"title"}},[i("el-input",{staticStyle:{width:"250px"},model:{value:t.form.title,callback:function(e){t.$set(t.form,"title",e)},expression:"form.title"}})],1)],1),i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"类目名称(英文)",prop:"title_en"}},[i("el-input",{staticStyle:{width:"250px"},model:{value:t.form.title_en,callback:function(e){t.$set(t.form,"title_en",e)},expression:"form.title_en"}})],1)],1),i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"上级类目",prop:"parent_id"}},[i("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.parent_id,callback:function(e){t.$set(t.form,"parent_id",e)},expression:"form.parent_id"}},t._l(t.parentCategory,(function(t){return i("el-option",{key:t.id,attrs:{label:t.title,value:t.id}})})),1)],1)],1)],1),i("el-divider"),i("el-row",{attrs:{gutter:40}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{staticStyle:{"margin-bottom":"40px"},attrs:{prop:"describe"}},[i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(e){return t.handleDescribes(1)}}}),i("el-collapse",{model:{value:t.activeNames,callback:function(e){t.activeNames=e},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"describe"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[t._v("类目描述")])]),i("span",{domProps:{innerHTML:t._s(t.form.describe)}})],2)],1)],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"describe_en"}},[i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(e){return t.handleDescribes(2)}}}),i("el-collapse",{model:{value:t.activeNames,callback:function(e){t.activeNames=e},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"describe_en"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[t._v("类目描述(英文)")])]),i("span",{domProps:{innerHTML:t._s(t.form.describe_en)}})],2)],1)],1)],1)],1),i("el-row",{attrs:{gutter:40}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"description"}},[i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(e){return t.handleDescribes(3)}}}),i("el-collapse",{model:{value:t.activeNames,callback:function(e){t.activeNames=e},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"description"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[t._v("类目简介")])]),i("span",{domProps:{innerHTML:t._s(t.form.description)}})],2)],1)],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{prop:"description_en"}},[i("el-button",{staticStyle:{float:"right"},attrs:{type:"primary",plain:"",icon:"el-icon-edit-outline"},on:{click:function(e){return t.handleDescribes(4)}}}),i("el-collapse",{model:{value:t.activeNames,callback:function(e){t.activeNames=e},expression:"activeNames"}},[i("el-collapse-item",{attrs:{name:"description_en"}},[i("template",{slot:"title"},[i("span",{staticClass:"productDetailText"},[t._v("类目简介(英文)")])]),i("span",{domProps:{innerHTML:t._s(t.form.description_en)}})],2)],1)],1)],1)],1),i("el-divider"),i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"banner图"}},[i("el-upload",{ref:"uploadBanner",class:{hideBanner:t.hideUploadBanner},attrs:{name:"banner",action:"#","list-type":"picture-card","auto-upload":!1,limit:t.limitCount,"file-list":t.bannerList,"on-change":t.handleBannerChange,"on-remove":t.handleBannerRemove}},[i("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[t._v("点击上传")]),i("div",{staticClass:"el-upload__tip",attrs:{slot:"tip"},slot:"tip"},[t._v("只能上传一张jpg/png文件，且不超过500kb")])],1)],1)],1),i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"分类简介图",prop:"img"}},[i("el-upload",{ref:"uploadImg1",class:{hideImg:t.hideUploadImg},attrs:{name:"img",action:"#","list-type":"picture-card","auto-upload":!1,limit:t.limitCount1,"file-list":t.imgList,"on-change":t.handleBannerChange1,"on-remove":t.handleBannerRemove1}},[i("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[t._v("点击上传")])],1)],1)],1)],1),i("el-row",{staticStyle:{"margin-bottom":"50px"}},[i("el-col",{attrs:{span:2,offset:8}},[i("el-button",{attrs:{type:"success"},on:{click:function(e){return t.updateValue()}}},[t._v("提交")])],1),i("el-col",{attrs:{span:2}},[i("el-button",{attrs:{type:"info",plain:""},on:{click:t.closePageButton}},[t._v("返回")])],1)],1)],1)],1),i("el-dialog",{attrs:{title:"富文本编辑",visible:t.showDialog,width:"50%","before-close":t.handleClose},on:{"update:visible":function(e){t.showDialog=e}}},[i("tinymce",{attrs:{height:150},model:{value:t.tinyTxt,callback:function(e){t.tinyTxt=e},expression:"tinyTxt"}}),i("span",{staticClass:"dialog-footer",attrs:{slot:"footer"},slot:"footer"},[i("el-button",{on:{click:function(e){t.showDialog=!1}}},[t._v("取 消")]),i("el-button",{attrs:{type:"primary"},on:{click:t.comfirmSaveTiny}},[t._v("确 定")])],1)],1)],1)},a=[],s=(i("a4d3"),i("e01a"),i("8256")),o=i("c405"),r={name:"CreateCategory",components:{Tinymce:s["a"]},data:function(){return{showDialog:!1,tinyTxt:"",flag:"",form:{title:"",title_en:"",slug:"",describe:"",describe_en:"",description:"",description_en:"",banner:"",parent_id:"",img:""},parentCategory:null,hideUploadBanner:!1,hideUploadImg:!1,limitCount:1,limitCount1:1,bannerList:[],imgList:[],activeNames:["describe","describe_en","description","description_en"]}},watch:{},created:function(){this.getCategoryList()},methods:{updateValue:function(){var t=this;if(!this.form.describe)return this.$message({message:"类目描述不可为空！",type:"warning"}),!1;var e=new FormData;e.append("description",this.form.description),e.append("description_en",this.form.description_en),e.append("banner",this.form.banner),e.append("img",this.form.img),e.append("title",this.form.title),e.append("title_en",this.form.title_en),e.append("describe",this.form.describe),e.append("describe_en",this.form.describe_en),e.append("parent_id",this.form.parent_id),Object(o["e"])(e).then((function(e){20001===e.code?(t.$message({message:"类目创建成功！",type:"success"}),t.initFormData()):t.$message({message:"类目创建失败，请检查输入参数！",type:"error"})}))},initFormData:function(){this.$refs["form"].resetFields(),this.bannerList=[],this.imgList=[],this.hideUploadImg=!1,this.hideUploadBanner=!1},getCategoryList:function(){var t=this,e={page_limit:40};Object(o["d"])(e).then((function(e){t.parentCategory=e.data.data}))},handleBannerChange:function(t,e){this.hideUploadBanner=e.length>=this.limitCount,this.form.banner=t.raw},handleBannerChange1:function(t,e){this.hideUploadImg=e.length>=this.limitCount1,this.form.img=t.raw},handleBannerRemove:function(t,e){this.hideUploadBanner=e.length>=this.limitCount,this.form.banner=null},handleBannerRemove1:function(t,e){this.hideUploadImg=e.length>=this.limitCount1,this.form.img=null},handleDescribes:function(t){this.flag=t,this.tinyTxt="",this.showDialog=!0},comfirmSaveTiny:function(){switch(this.flag){case 1:this.form.describe=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case 2:this.form.describe_en=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case 3:this.form.description=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;case 4:this.form.description_en=this.tinyTxt,this.showDialog=!1,this.tinyTxt="";break;default:break}this.$message({message:"编辑完成",type:"success"})},handleClose:function(t){this.$confirm("确认关闭？").then((function(e){t()})).catch((function(t){}))},closePageButton:function(){this.$store.dispatch("tagsView/delView",this.$route),this.$router.go(-1)}}},l=r,c=(i("6560"),i("2877")),p=Object(c["a"])(l,n,a,!1,null,null,null);e["default"]=p.exports},c405:function(t,e,i){"use strict";i.d(e,"d",(function(){return a})),i.d(e,"e",(function(){return s})),i.d(e,"b",(function(){return o})),i.d(e,"c",(function(){return r})),i.d(e,"a",(function(){return l}));var n=i("b775");function a(t){return Object(n["a"])({url:"admin/product_categories",method:"get",params:t})}function s(t){return Object(n["a"])({url:"admin/product_categories",method:"post",data:t})}function o(t){return Object(n["a"])({url:"admin/product_categories/"+t,method:"get"})}function r(t,e){return Object(n["a"])({url:"admin/product_categories/"+e,method:"post",data:t})}function l(t){return Object(n["a"])({url:"admin/product_categories/"+t,method:"delete"})}},db19:function(t,e,i){}}]);