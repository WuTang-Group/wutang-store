(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-d2ca1870"],{3526:function(t,e,i){"use strict";i.r(e);var o=function(){var t=this,e=t.$createElement,i=t._self._c||e;return i("div",{staticClass:"app-container"},[i("el-card",{staticClass:"box-card",staticStyle:{padding:"0 30px"}},[i("el-form",{ref:"form",attrs:{model:t.form,"label-position":"left"}},[i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"关联产品",prop:"product_id"}},[i("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.product_id,callback:function(e){t.$set(t.form,"product_id",e)},expression:"form.product_id"}},t._l(t.productList,(function(t){return i("el-option",{key:t.id,attrs:{label:t.product_name,value:t.id}})})),1)],1)],1),i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"图片位置",prop:"img_location"}},[i("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.img_location,callback:function(e){t.$set(t.form,"img_location",e)},expression:"form.img_location"}},t._l(t.img_location,(function(t){return i("el-option",{key:t.id,attrs:{label:t.desc,value:t.id}})})),1)],1)],1),i("el-col",{attrs:{span:8}},[i("el-form-item",{attrs:{label:"图片类型",prop:"type"}},[i("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.type,callback:function(e){t.$set(t.form,"type",e)},expression:"form.type"}},t._l(t.typeList,(function(t){return i("el-option",{key:t.type,attrs:{label:t.type,value:t.type}})})),1)],1)],1)],1),i("el-row",{attrs:{gutter:10}},[i("el-col",{attrs:{span:12}},[i("el-form-item",{attrs:{label:"图片"}},[i("el-upload",{ref:"uploadImg",class:{hideImg:t.hideUploadImg},attrs:{name:"img",action:"#","list-type":"picture-card","auto-upload":!1,limit:t.limitCount,"file-list":t.imgList,"on-change":t.handleImgChange,"on-remove":t.handleImgRemove}},[i("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[t._v("点击上传")]),i("div",{staticClass:"el-upload__tip",attrs:{slot:"tip"},slot:"tip"},[t._v("只能上传一张jpg/png文件，且不超过500kb")])],1)],1)],1)],1),i("el-row",[i("el-col",{attrs:{span:6}},[i("el-form-item",{attrs:{label:"视频"}},[i("el-upload",{ref:"uploadVideo",class:{hideVideo:t.hideUploadVideo},attrs:{name:"video",action:"#","list-type":"text","auto-upload":!1,limit:t.limitCountVideo,"file-list":t.videoList,"on-change":t.handleVideoChange,"on-remove":t.handleVideoRemove}},[t.hideUploadVideo?t._e():i("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[t._v("点击上传")]),i("div",{staticClass:"el-upload__tip",attrs:{slot:"tip"},slot:"tip"},[t._v("只能上传一个视频，且不超过50M")])],1)],1)],1)],1)],1),i("el-row",{staticStyle:{"margin-bottom":"50px"}},[i("el-col",{attrs:{span:2,offset:8}},[i("el-button",{attrs:{type:"success",loading:t.loading},on:{click:function(e){return t.updateValue()}}},[t._v("提交")])],1),i("el-col",{attrs:{span:2}},[i("el-button",{attrs:{type:"info",plain:""},on:{click:t.closePageButton}},[t._v("返回")])],1)],1)],1)],1)},a=[],s=(i("d3b7"),i("ddb0"),i("5759")),n={name:"CreateAssetImg",data:function(){return{flag:"",status:"",form:{img:"",img_location:"",video:"",type:"",product_id:""},hideUploadImg:!1,limitCount:1,imgList:[],productList:[],img_location:[],typeList:[],hideUploadVideo:!1,limitCountVideo:1,videoList:[],loading:!1}},watch:{},created:function(){this.getAssetImgType(),this.getAssetImgLocation(),this.getInitData(),this.getProductBasicInfo()},methods:{getInitData:function(){this.status=this.$route.params.status,"view"===this.status?this.form=this.$route.params.data:"edit"===this.status&&(this.form=this.$route.params.data,this.form.img&&"null"!==this.form.img&&(this.imgList.push({url:this.form.img}),this.hideUploadImg=!0),this.form.video&&"null"!==this.form.video&&(this.videoList.push({url:this.form.video}),this.hideUploadVideo=!0))},getAssetImgType:function(){var t=this;Object(s["c"])("AssetImgType").then((function(e){for(var i=e.data.values,o=0;o<i.length;o++)t.typeList.push({type:i[o]})}))},getAssetImgLocation:function(){var t=this;Object(s["c"])("AssetImgLocation").then((function(e){console.log(e.data);for(var i=e.data.keys,o=e.data.values,a=0;a<o.length;a++)t.img_location.push({id:o[a],desc:i[a]})}))},updateValue:function(){var t=this;if("create"===this.status){var e=new FormData;for(var i in this.form)e.append(i,this.form[i]);this.loading=!0,Object(s["a"])(e).then((function(e){20001===e.code?(t.$message({message:"资源添加成功！",type:"success"}),t.initFormData(),t.closePageButton()):t.$message({message:"资源添加失败，请检查输入参数！",type:"error"}),t.loading=!1})).catch((function(e){t.loading=!1,t.$message({message:"网络错误！",type:"error"})}))}else if("edit"===this.status){var o=new FormData;for(var a in this.form)o.append(a,this.form[a]);this.loading=!0,Object(s["f"])(this.form.id,o).then((function(e){20001===e.code?(t.$message({message:"更新成功！",type:"success"}),t.closePageButton()):t.$message({message:"更新失败失败，请检查输入参数！",type:"error"}),t.loading=!1})).catch((function(e){t.loading=!1,t.$message({message:"网络错误！",type:"error"})}))}},getProductBasicInfo:function(){var t=this;Object(s["e"])().then((function(e){t.productList=e.data}))},initFormData:function(){this.$refs["form"].resetFields(),this.imgList=[],this.hideUploadImg=!1},handleImgChange:function(t,e){this.hideUploadImg=e.length>=this.limitCount,this.form.img=t.raw},handleImgRemove:function(t,e){this.hideUploadImg=e.length>=this.limitCount,this.form.img=null},handleVideoChange:function(t,e){this.hideUploadVideo=e.length>=this.limitCountVideo,this.form.video=t.raw},handleVideoRemove:function(t,e){this.hideUploadVideo=e.length>=this.limitCountVideo,this.form.video=null},closePageButton:function(){this.$store.dispatch("tagsView/delView",this.$route),this.$router.go(-1)}}},l=n,r=(i("7ee1"),i("2877")),d=Object(r["a"])(l,o,a,!1,null,null,null);e["default"]=d.exports},5759:function(t,e,i){"use strict";i.d(e,"d",(function(){return a})),i.d(e,"a",(function(){return s})),i.d(e,"b",(function(){return n})),i.d(e,"e",(function(){return l})),i.d(e,"f",(function(){return r})),i.d(e,"c",(function(){return d}));var o=i("b775");function a(t){return Object(o["a"])({url:"admin/asset_img",path:"get",params:t})}function s(t){return Object(o["a"])({url:"admin/asset_img",method:"post",data:t})}function n(t){return Object(o["a"])({url:"admin/asset_img/"+t,method:"delete"})}function l(){return Object(o["a"])({url:"admin/product/basic_info_list",method:"get"})}function r(t,e){return Object(o["a"])({url:"admin/asset_img/"+t,method:"post",data:e})}function d(t){return Object(o["a"])({url:"admin/enums/"+t,method:"get"})}},"7ee1":function(t,e,i){"use strict";var o=i("b691"),a=i.n(o);a.a},b691:function(t,e,i){}}]);