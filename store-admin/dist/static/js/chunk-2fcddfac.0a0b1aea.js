(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2fcddfac"],{"361e":function(t,e,a){"use strict";a.d(e,"b",(function(){return n})),a.d(e,"c",(function(){return o})),a.d(e,"d",(function(){return s})),a.d(e,"e",(function(){return i})),a.d(e,"a",(function(){return u}));var r=a("b775");function n(){return Object(r["a"])({url:"admin/union_pay/gateway",method:"get"})}function o(t){return Object(r["a"])({url:"admin/union_pay/gateway",method:"post",data:t})}function s(t,e){return Object(r["a"])({url:"/admin/union_pay/gateway/"+t,method:"put",data:e})}function i(t,e){return Object(r["a"])({url:"/admin/union_pay/gateway/status/"+t,method:"put",params:e})}function u(t){return Object(r["a"])({url:"admin/union_pay/gateway/"+t,method:"delete"})}},7294:function(t,e,a){"use strict";a.r(e);var r=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"app-container"},[a("el-card",{staticClass:"box-card"},[a("el-form",{ref:"form",attrs:{model:t.form,rules:t.unionRules,"label-width":"140px"}},[a("el-row",{attrs:{gutter:10}},[a("el-col",{attrs:{span:10}},[a("el-form-item",{attrs:{label:"CP标识",prop:"cpid"}},[a("el-input",{model:{value:t.form.cpid,callback:function(e){t.$set(t.form,"cpid",e)},expression:"form.cpid"}})],1)],1),a("el-col",{attrs:{span:10}},[a("el-form-item",{attrs:{label:"是否激活",prop:"status"}},[a("el-switch",{attrs:{"active-color":"#13ce66","inactive-color":"#ff4949","active-value":1,"inactive-value":-1},model:{value:t.form.status,callback:function(e){t.$set(t.form,"status",e)},expression:"form.status"}})],1)],1)],1),a("el-row",{attrs:{gutter:10}},[a("el-col",{attrs:{span:10}},[a("el-form-item",{attrs:{label:"支付方式",prop:"pay_type"}},[a("el-input",{model:{value:t.form.pay_type,callback:function(e){t.$set(t.form,"pay_type",t._n(e))},expression:"form.pay_type"}})],1)],1)],1),a("el-row",{staticStyle:{"margin-bottom":"50px"}},[a("el-col",{attrs:{span:2,offset:8}},[a("el-button",{attrs:{type:"success"},on:{click:function(e){return t.submitUnion("form")}}},[t._v("提交")])],1),a("el-col",{attrs:{span:2}},[a("el-button",{attrs:{type:"info",plain:""},on:{click:t.closePageButton}},[t._v("返回")])],1)],1)],1)],1)],1)},n=[],o=a("361e"),s={name:"CreateUnionGateway",data:function(){return{form:{cpid:"",pay_type:null,status:-1},formArray:[],unionRules:{cpid:[{required:!0,message:"请输入CP标识",trigger:"blur"}],pay_type:[{required:!0,message:"请输入支付方式",trigger:"blur"},{type:"number",message:"请输入数字"}]}}},created:function(){},methods:{submitUnion:function(t){var e=this;this.$refs[t].validate((function(t){e.formArray.push(e.form),t&&(console.log(e.formArray),Object(o["c"])({items:e.formArray}).then((function(t){20001===t.code?(e.$message({type:"success",message:"添加成功"}),e.initFormData()):e.$message({type:"error",message:"添加失败！！"}),e.formArray=[]})))}))},initFormData:function(){this.$refs["form"].resetFields()},closePageButton:function(){this.$store.dispatch("tagsView/delView",this.$route),this.$router.go(-1)}}},i=s,u=a("2877"),c=Object(u["a"])(i,r,n,!1,null,"2b8a87c5",null);e["default"]=c.exports}}]);