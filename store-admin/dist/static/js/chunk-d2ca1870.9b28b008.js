(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-d2ca1870"],{3526:function(t,e,i){"use strict";i.r(e);var a=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"app-container"},[i("el-card",{staticClass:"box-card",staticStyle:{padding:"0 30px"}},[i("el-form",{ref:"form",attrs:{model:t.form,"label-position":"left"}},[i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"关联产品",prop:"product_id"}},[i("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.product_id,callback:function(e){t.$set(t.form,"product_id",e)},expression:"form.product_id"}},t._l(t.productList,(function(t){return i("el-option",{key:t.id,attrs:{label:t.product_name,value:t.id}})})),1)],1)],1),i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"图片位置",prop:"img_location"}},[i("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.img_location,callback:function(e){t.$set(t.form,"img_location",e)},expression:"form.img_location"}},t._l(t.img_location,(function(t){return i("el-option",{key:t.id,attrs:{label:t.desc,value:t.id}})})),1)],1)],1),i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"图片类型",prop:"type"}},[i("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.type,callback:function(e){t.$set(t.form,"type",e)},expression:"form.type"}},t._l(t.typeList,(function(t){return i("el-option",{key:t.type,attrs:{label:t.type,value:t.type}})})),1)],1)],1)],1),i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"图片"}},[i("el-upload",{ref:"uploadImg",class:{hideImg:t.hideUploadImg},attrs:{name:"img",action:"#","list-type":"picture-card","auto-upload":!1,limit:t.limitCount,"file-list":t.imgList,"on-change":t.handleImgChange,"on-remove":t.handleImgRemove}},[i("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[t._v("点击上传")]),i("div",{staticClass:"el-upload__tip",attrs:{slot:"tip"},slot:"tip"},[t._v("只能上传一张jpg/png文件，且不超过500kb")])],1)],1)],1)],1),i("el-row",{staticStyle:{"margin-bottom":"50px"}},[i("el-col",{attrs:{span:2,offset:8}},[i("el-button",{attrs:{type:"success"},on:{click:function(e){return t.updateValue()}}},[t._v("提交")])],1),i("el-col",{attrs:{span:2}},[i("el-button",{attrs:{type:"info",plain:""},on:{click:t.closePageButton}},[t._v("返回")])],1)],1)],1)],1)],1)},s=[],o=i("5759"),r={name:"CreateAssetImg",data:function(){return{flag:"",status:"",form:{img:"",img_location:"",type:"",product_id:""},hideUploadImg:!1,limitCount:1,imgList:[],productList:[],img_location:[{id:1,desc:"首页"},{id:-1,desc:"其他"}],typeList:[{type:"banner"},{type:"discover"}]}},watch:{},created:function(){this.getInitData(),this.getProductBasicInfo()},methods:{getInitData:function(){this.status=this.$route.params.status,"view"===this.status?this.form=this.$route.params.data:"edit"===this.status&&(this.form=this.$route.params.data,this.imgList.push({url:this.form.img}),this.hideUploadImg=!0)},updateValue:function(){var t=this;if("create"===this.status){var e=new FormData;for(var i in this.form)e.append(i,this.form[i]);Object(o["a"])(e).then((function(e){20001===e.code?(t.$message({message:"图片添加成功！",type:"success"}),t.initFormData()):t.$message({message:"图片添加失败，请检查输入参数！",type:"error"})}))}else if("edit"===this.status){var a=new FormData;for(var s in this.form)a.append(s,this.form[s]);Object(o["e"])(this.form.id,a).then((function(e){20001===e.code?(t.$message({message:"更新成功！",type:"success"}),t.initFormData()):t.$message({message:"更新失败失败，请检查输入参数！",type:"error"})}))}},getProductBasicInfo:function(){var t=this;Object(o["d"])().then((function(e){t.productList=e.data}))},initFormData:function(){this.$refs["form"].resetFields(),this.imgList=[],this.hideUploadImg=!1},handleImgChange:function(t,e){this.hideUploadImg=e.length>=this.limitCount,this.form.img=t.raw},handleImgRemove:function(t,e){this.hideUploadImg=e.length>=this.limitCount,this.form.img=null},closePageButton:function(){this.$store.dispatch("tagsView/delView",this.$route),this.$router.go(-1)}}},n=r,l=(i("7ee1"),i("2877")),c=Object(l["a"])(n,a,s,!1,null,null,null);e["default"]=c.exports},5759:function(t,e,i){"use strict";i.d(e,"c",(function(){return s})),i.d(e,"a",(function(){return o})),i.d(e,"b",(function(){return r})),i.d(e,"d",(function(){return n})),i.d(e,"e",(function(){return l}));var a=i("b775");function s(t){return Object(a["a"])({url:"admin/asset_img",path:"get",params:t})}function o(t){return Object(a["a"])({url:"admin/asset_img",method:"post",data:t})}function r(t){return Object(a["a"])({url:"admin/asset_img/"+t,method:"delete"})}function n(){return Object(a["a"])({url:"admin/product/basic_info_list",method:"get"})}function l(t,e){return Object(a["a"])({url:"admin/asset_img/"+t,method:"post",data:e})}},"7ee1":function(t,e,i){"use strict";var a=i("b691"),s=i.n(a);s.a},b691:function(t,e,i){}}]);