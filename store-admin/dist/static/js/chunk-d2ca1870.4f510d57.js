(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-d2ca1870"],{3526:function(t,e,a){"use strict";a.r(e);var i=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"app-container"},[a("el-card",{staticClass:"box-card",staticStyle:{padding:"0 30px"}},[a("el-form",{ref:"form",attrs:{model:t.form,"label-position":"left"}},[a("el-row",{attrs:{gutter:10}},[a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"关联产品",prop:"product_id"}},[a("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.product_id,callback:function(e){t.$set(t.form,"product_id",e)},expression:"form.product_id"}},t._l(t.productList,(function(t){return a("el-option",{key:t.id,attrs:{label:t.product_name,value:t.id}})})),1)],1)],1),a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"图片位置",prop:"img_location"}},[a("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.img_location,callback:function(e){t.$set(t.form,"img_location",e)},expression:"form.img_location"}},t._l(t.img_location,(function(t){return a("el-option",{key:t.id,attrs:{label:t.desc,value:t.id}})})),1)],1)],1),a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"图片类型",prop:"type"}},[a("el-select",{staticStyle:{width:"250px"},attrs:{placeholder:"请选择"},model:{value:t.form.type,callback:function(e){t.$set(t.form,"type",e)},expression:"form.type"}},t._l(t.typeList,(function(t){return a("el-option",{key:t.type,attrs:{label:t.type,value:t.type}})})),1)],1)],1)],1),a("el-row",{attrs:{gutter:10}},[a("el-col",{attrs:{span:12}},[a("el-form-item",{attrs:{label:"图片"}},[a("el-upload",{ref:"uploadImg",class:{hideImg:t.hideUploadImg},attrs:{name:"img",action:"#","list-type":"picture-card","auto-upload":!1,limit:t.limitCount,"file-list":t.imgList,"on-change":t.handleImgChange,"on-remove":t.handleImgRemove}},[a("el-button",{attrs:{size:"small",plain:"",type:"primary"}},[t._v("点击上传")]),a("div",{staticClass:"el-upload__tip",attrs:{slot:"tip"},slot:"tip"},[t._v("只能上传一张jpg/png文件，且不超过500kb")])],1)],1)],1)],1),a("el-row",{staticStyle:{"margin-bottom":"50px"}},[a("el-col",{attrs:{span:2,offset:8}},[a("el-button",{attrs:{type:"success"},on:{click:function(e){return t.updateValue()}}},[t._v("提交")])],1),a("el-col",{attrs:{span:2}},[a("el-button",{attrs:{type:"info",plain:""},on:{click:t.closePageButton}},[t._v("返回")])],1)],1)],1)],1)],1)},s=[],o=(a("d3b7"),a("ddb0"),a("5759")),n={name:"CreateAssetImg",data:function(){return{flag:"",status:"",form:{img:"",img_location:"",type:"",product_id:""},hideUploadImg:!1,limitCount:1,imgList:[],productList:[],img_location:[],typeList:[]}},watch:{},created:function(){this.getAssetImgType(),this.getAssetImgLocation(),this.getInitData(),this.getProductBasicInfo()},methods:{getInitData:function(){this.status=this.$route.params.status,"view"===this.status?this.form=this.$route.params.data:"edit"===this.status&&(this.form=this.$route.params.data,this.imgList.push({url:this.form.img}),this.hideUploadImg=!0)},getAssetImgType:function(){var t=this;Object(o["c"])("AssetImgType").then((function(e){for(var a=e.data.values,i=0;i<a.length;i++)t.typeList.push({type:a[i]})}))},getAssetImgLocation:function(){var t=this;Object(o["c"])("AssetImgLocation").then((function(e){console.log(e.data);for(var a=e.data.keys,i=e.data.values,s=0;s<i.length;s++)t.img_location.push({id:i[s],desc:a[s]})}))},updateValue:function(){var t=this;if("create"===this.status){var e=new FormData;for(var a in this.form)e.append(a,this.form[a]);Object(o["a"])(e).then((function(e){20001===e.code?(t.$message({message:"图片添加成功！",type:"success"}),t.initFormData()):t.$message({message:"图片添加失败，请检查输入参数！",type:"error"})}))}else if("edit"===this.status){var i=new FormData;for(var s in this.form)i.append(s,this.form[s]);Object(o["f"])(this.form.id,i).then((function(e){20001===e.code?(t.$message({message:"更新成功！",type:"success"}),t.initFormData()):t.$message({message:"更新失败失败，请检查输入参数！",type:"error"})}))}},getProductBasicInfo:function(){var t=this;Object(o["e"])().then((function(e){t.productList=e.data}))},initFormData:function(){this.$refs["form"].resetFields(),this.imgList=[],this.hideUploadImg=!1},handleImgChange:function(t,e){this.hideUploadImg=e.length>=this.limitCount,this.form.img=t.raw},handleImgRemove:function(t,e){this.hideUploadImg=e.length>=this.limitCount,this.form.img=null},closePageButton:function(){this.$store.dispatch("tagsView/delView",this.$route),this.$router.go(-1)}}},r=n,l=(a("7ee1"),a("2877")),c=Object(l["a"])(r,i,s,!1,null,null,null);e["default"]=c.exports},5759:function(t,e,a){"use strict";a.d(e,"d",(function(){return s})),a.d(e,"a",(function(){return o})),a.d(e,"b",(function(){return n})),a.d(e,"e",(function(){return r})),a.d(e,"f",(function(){return l})),a.d(e,"c",(function(){return c}));var i=a("b775");function s(t){return Object(i["a"])({url:"admin/asset_img",path:"get",params:t})}function o(t){return Object(i["a"])({url:"admin/asset_img",method:"post",data:t})}function n(t){return Object(i["a"])({url:"admin/asset_img/"+t,method:"delete"})}function r(){return Object(i["a"])({url:"admin/product/basic_info_list",method:"get"})}function l(t,e){return Object(i["a"])({url:"admin/asset_img/"+t,method:"post",data:e})}function c(t){return Object(i["a"])({url:"admin/enums/"+t,method:"get"})}},"7ee1":function(t,e,a){"use strict";var i=a("b691"),s=a.n(i);s.a},b691:function(t,e,a){}}]);