(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-2f785256"],{"17a5":function(e,t,n){"use strict";var a=n("1ebf"),o=n.n(a);o.a},"1ebf":function(e,t,n){},a673:function(e,t,n){"use strict";n.r(t);var a=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"app-container"},[n("el-container",[n("el-header",[e._v("Header")]),n("el-container",[n("el-aside",{attrs:{width:"200px"}},[n("el-tree",{attrs:{data:e.memberCode,props:e.defaultProps},on:{"node-click":e.handleNodeClick}})],1),n("el-main",[e._v("Main")])],1)],1)],1)},o=[],r=n("b775");function i(){return Object(r["a"])({url:"/admin/member_codes",method:"get"})}var c={name:"MemberCode",data:function(){return{memberCode:[],defaultProps:{children:"children",label:"code"}}},created:function(){this.getList()},methods:{getList:function(){var e=this;i().then((function(t){console.log(t),e.memberCode=t.data}))},handleNodeClick:function(){console.log(this.memberCode)}}},d=c,l=(n("17a5"),n("2877")),s=Object(l["a"])(d,a,o,!1,null,"5b42342a",null);t["default"]=s.exports}}]);