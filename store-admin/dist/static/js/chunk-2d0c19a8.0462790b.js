(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2d0c19a8"],{"476e":function(e,t,a){"use strict";a.r(t);var l=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("el-container",[a("el-aside",{staticStyle:{"margin-bottom":"0"},attrs:{width:"400px"}},[a("el-card",{staticStyle:{height:"600px"},attrs:{shadow:"hover"}},[a("el-tree",{attrs:{data:e.memberCode,props:e.defaultProps,"highlight-current":!0},on:{"node-click":e.handleNodeClick}})],1)],1),a("el-main",{staticStyle:{"background-color":"#eef1f6"}},[a("div",{staticClass:"app-container"},[a("el-form",{directives:[{name:"show",rawName:"v-show",value:e.loadingDetail,expression:"loadingDetail"}],ref:"memberCodeDetail",attrs:{data:e.memberCodeDetail,inline:!0,"label-position":"left"}},[a("el-card",{attrs:{shadow:"hover"}},[a("div",{attrs:{slot:"header"},slot:"header"},[a("span",[e._v("会员码信息")])]),a("el-row",[a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"验证码"}},[a("el-input",{attrs:{readonly:e.formDisable},model:{value:e.memberCodeDetail.code,callback:function(t){e.$set(e.memberCodeDetail,"code",t)},expression:"memberCodeDetail.code"}})],1)],1),a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"等级"}},[a("el-input",{attrs:{readonly:e.formDisable},model:{value:e.memberCodeDetail.level,callback:function(t){e.$set(e.memberCodeDetail,"level",t)},expression:"memberCodeDetail.level"}})],1)],1),a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"是否启用"}},[a("el-input",{attrs:{readonly:e.formDisable},model:{value:e.memberCodeDetail.status,callback:function(t){e.$set(e.memberCodeDetail,"status",t)},expression:"memberCodeDetail.status"}})],1)],1)],1),a("el-row",[a("el-col",{attrs:{span:16}},[a("el-form-item",{attrs:{label:"备注"}},[a("el-input",{staticStyle:{width:"500px"},attrs:{type:"textarea",readonly:e.formDisable},model:{value:e.memberCodeDetail.remark,callback:function(t){e.$set(e.memberCodeDetail,"remark",t)},expression:"memberCodeDetail.remark"}})],1)],1)],1)],1),a("el-card",{staticStyle:{"margin-top":"10px"},attrs:{shadow:"hover"}},[a("div",{staticClass:"clearfix",attrs:{slot:"header"},slot:"header"},[a("span",[e._v("用户信息")])]),a("el-row",[a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"用户名"}},[a("el-input",{attrs:{readonly:e.formDisable},model:{value:e.memberCodeDetail.user.username,callback:function(t){e.$set(e.memberCodeDetail.user,"username",t)},expression:"memberCodeDetail.user.username"}})],1)],1),a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"姓名"}},[a("el-input",{attrs:{readonly:e.formDisable},model:{value:e.memberCodeDetail.user.name,callback:function(t){e.$set(e.memberCodeDetail.user,"name",t)},expression:"memberCodeDetail.user.name"}})],1)],1),a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"邮箱"}},[a("el-input",{attrs:{readonly:e.formDisable},model:{value:e.memberCodeDetail.user.email,callback:function(t){e.$set(e.memberCodeDetail.user,"email",t)},expression:"memberCodeDetail.user.email"}})],1)],1)],1),a("el-row",[a("el-col",{attrs:{span:8}},[a("el-form-item",{attrs:{label:"手机号"}},[a("el-input",{attrs:{readonly:e.formDisable},model:{value:e.memberCodeDetail.user.phone,callback:function(t){e.$set(e.memberCodeDetail.user,"phone",t)},expression:"memberCodeDetail.user.phone"}})],1)],1)],1)],1)],1)],1)])],1)},r=[],o=a("b775");function s(){return Object(o["a"])({url:"/admin/member_codes",method:"get"})}function i(e){return Object(o["a"])({url:"admin/member_code/"+e,method:"get"})}var m={name:"MemberCode",filters:{formatterStatus:function(e){console.log(e)}},data:function(){return{memberCode:[],memberCodeDetail:{code:"",level:"",status:"",remark:"",user:{}},defaultProps:{children:"children",label:"code"},loadingDetail:!1,formDisable:!0}},created:function(){this.getList()},methods:{getList:function(){var e=this;s().then((function(t){e.memberCode=t.data,e.handleNodeClick(e.memberCode[0])}))},handleNodeClick:function(e){var t=this;i(e.code).then((function(e){switch(t.memberCodeDetail=e.data,t.loadingDetail=!0,t.memberCodeDetail.status){case 1:t.memberCodeDetail.status="启用";break;case-1:t.memberCodeDetail.status="未启用";break}}))}}},n=m,d=a("2877"),c=Object(d["a"])(n,l,r,!1,null,"dcc7598c",null);t["default"]=c.exports}}]);