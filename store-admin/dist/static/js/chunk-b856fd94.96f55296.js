(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-b856fd94"],{"2d49":function(e,t,n){"use strict";n.d(t,"a",(function(){return l})),n.d(t,"c",(function(){return i})),n.d(t,"b",(function(){return s})),n.d(t,"e",(function(){return r})),n.d(t,"d",(function(){return c}));var a=n("b775");function l(e){return Object(a["a"])({url:"/admin/alipay/legacy_express",method:"get",params:e})}function i(e){return Object(a["a"])({url:"/admin/alipay/legacy_express",method:"post",data:e})}function s(e){return Object(a["a"])({url:"admin/alipay/legacy_express/"+e,method:"delete"})}function r(e,t){return Object(a["a"])({url:"/admin/alipay/legacy_express/status/"+e,method:"put",params:t})}function c(e,t){return Object(a["a"])({url:"/admin/alipay/legacy_express/"+e,method:"put",data:t})}},6724:function(e,t,n){"use strict";n("8d41");var a="@@wavesContext";function l(e,t){function n(n){var a=Object.assign({},t.value),l=Object.assign({ele:e,type:"hit",color:"rgba(0, 0, 0, 0.15)"},a),i=l.ele;if(i){i.style.position="relative",i.style.overflow="hidden";var s=i.getBoundingClientRect(),r=i.querySelector(".waves-ripple");switch(r?r.className="waves-ripple":(r=document.createElement("span"),r.className="waves-ripple",r.style.height=r.style.width=Math.max(s.width,s.height)+"px",i.appendChild(r)),l.type){case"center":r.style.top=s.height/2-r.offsetHeight/2+"px",r.style.left=s.width/2-r.offsetWidth/2+"px";break;default:r.style.top=(n.pageY-s.top-r.offsetHeight/2-document.documentElement.scrollTop||document.body.scrollTop)+"px",r.style.left=(n.pageX-s.left-r.offsetWidth/2-document.documentElement.scrollLeft||document.body.scrollLeft)+"px"}return r.style.backgroundColor=l.color,r.className="waves-ripple z-active",!1}}return e[a]?e[a].removeHandle=n:e[a]={removeHandle:n},n}var i={bind:function(e,t){e.addEventListener("click",l(e,t),!1)},update:function(e,t){e.removeEventListener("click",e[a].removeHandle,!1),e.addEventListener("click",l(e,t),!1)},unbind:function(e){e.removeEventListener("click",e[a].removeHandle,!1),e[a]=null,delete e[a]}},s=function(e){e.directive("waves",i)};window.Vue&&(window.waves=i,Vue.use(s)),i.install=s;t["a"]=i},"8d41":function(e,t,n){},b17e:function(e,t,n){"use strict";n.r(t);var a=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"app-container"},[n("el-card",{staticClass:"box-card"},[n("el-input",{staticClass:"filter-item",staticStyle:{width:"200px"},attrs:{placeholder:"输入类目名称"},nativeOn:{keyup:function(t){return!t.type.indexOf("key")&&e._k(t.keyCode,"enter",13,t.key,"Enter")?null:e.handleFilter(t)}},model:{value:e.listQuery.title,callback:function(t){e.$set(e.listQuery,"title",t)},expression:"listQuery.title"}}),n("el-button",{directives:[{name:"waves",rawName:"v-waves"}],staticClass:"filter-item",staticStyle:{"margin-left":"20px"},attrs:{type:"primary",icon:"el-icon-search"},on:{click:e.handleFilter}},[e._v(" "+e._s(e.$t("table.search"))+" ")])],1),n("el-card",{staticClass:"box-card"},[n("div",{staticClass:"clearfix",attrs:{slot:"header"},slot:"header"},[n("router-link",{attrs:{to:{name:"CreateLegacyExpress"}}},[n("el-button",{directives:[{name:"waves",rawName:"v-waves"}]},[e._v("添加")])],1)],1),n("el-table",{directives:[{name:"loading",rawName:"v-loading",value:e.listLoading,expression:"listLoading"}],staticStyle:{width:"100%"},attrs:{data:e.list,border:"",fit:"","highlight-current-row":"","header-cell-style":{background:"#ebeef5"}}},[n("el-table-column",{attrs:{type:"index",label:"序号",width:"80",align:"center"}}),n("el-table-column",{attrs:{prop:"pid",label:"商户ID",align:"center",width:"160px"},scopedSlots:e._u([{key:"default",fn:function(t){return[t.row.editStatus?[n("el-input",{model:{value:t.row.pid,callback:function(n){e.$set(t.row,"pid",n)},expression:"scope.row.pid"}})]:n("span",[e._v(e._s(t.row.pid))])]}}])}),n("el-table-column",{attrs:{"show-overflow-tooltip":"",prop:"key",label:"商户密钥",align:"center"},scopedSlots:e._u([{key:"default",fn:function(t){return[t.row.editStatus?[n("el-input",{model:{value:t.row.key,callback:function(n){e.$set(t.row,"key",n)},expression:"scope.row.key"}})]:n("span",[e._v(e._s(t.row.key))])]}}])}),n("el-table-column",{attrs:{prop:"seller_email",label:"卖家支付宝账号",align:"center"},scopedSlots:e._u([{key:"default",fn:function(t){return[t.row.editStatus?[n("el-input",{model:{value:t.row.seller_email,callback:function(n){e.$set(t.row,"seller_email",n)},expression:"scope.row.seller_email"}})]:n("span",[e._v(e._s(t.row.seller_email))])]}}])}),n("el-table-column",{attrs:{prop:"return_url",label:"前端回调url",align:"center"}}),n("el-table-column",{attrs:{prop:"notify_url",label:"异步回调url",align:"center"}}),n("el-table-column",{attrs:{label:"是否激活",align:"center"},scopedSlots:e._u([{key:"default",fn:function(t){return[n("el-switch",{attrs:{"active-color":"#13ce66","inactive-color":"#ff4949","active-value":1,"inactive-value":-1},on:{change:function(n){return e.statusChange(t.row)}},model:{value:t.row.status,callback:function(n){e.$set(t.row,"status",n)},expression:"scope.row.status"}})]}}])}),e._v("> "),n("el-table-column",{attrs:{prop:"updated_at",label:"更新时间",align:"center"}}),n("el-table-column",{attrs:{prop:"created_at",label:"创建时间",align:"center"}}),n("el-table-column",{attrs:{align:"center",label:"操作",width:"120"},scopedSlots:e._u([{key:"default",fn:function(t){var a=t.row;return[a.editStatus?n("el-button",{attrs:{type:"success",circle:"",icon:"el-icon-check"},on:{click:function(t){return e.confirmEdit(a)}}}):e._e(),a.editStatus?n("el-button",{staticClass:"cancel-btn",attrs:{type:"info",circle:"",icon:"el-icon-circle-close"},on:{click:function(t){return e.handleCancel(a)}}}):e._e(),a.editStatus?e._e():n("el-button",{attrs:{type:"primary",circle:"",icon:"el-icon-edit"},on:{click:function(e){a.editStatus=!a.editStatus}}}),a.editStatus?e._e():n("el-button",{attrs:{type:"danger",circle:"",icon:"el-icon-delete"},on:{click:function(t){return e.deleteConfirm(a)}}})]}}])})],1)],1)],1)},l=[],i=(n("d81d"),n("2d49")),s=n("6724"),r={name:"LegacyExpressList",directives:{waves:s["a"]},data:function(){return{list:[],listLoading:!1,listQuery:{page:1,page_limit:30},total:0,test:[]}},created:function(){this.getList()},methods:{getList:function(){var e=this;this.listLoading=!0,Object(i["a"])(this.listQuery).then((function(t){console.log(t),e.list=t.data.data,e.total=t.data.total,e.listLoading=!1;var n=e.list;e.list=n.map((function(t){return e.$set(t,"editStatus",!1),t}))}))},handleFilter:function(){console.log("test")},deleteConfirm:function(e){var t=this;this.$confirm("此操作将永久删除该记录, 是否继续?","提示",{confirmButtonText:"确定",cancelButtonText:"取消",type:"warning"}).then((function(){t.deleteAlipy(e)})).catch((function(){t.$message({type:"info",message:"已取消删除"})}))},deleteAlipy:function(e){var t=this;Object(i["b"])(e.id).then((function(e){20001===e.code?t.$message({type:"success",message:"删除成功！"}):t.$message({type:"warning",message:"删除失败！！"}),t.getList()}))},statusChange:function(e){var t=this,n=e.id,a=e.status;Object(i["e"])(n,{status:a}).then((function(e){20001===e.code?t.$message({type:"success",message:"更新成功！"}):t.$message({type:"warning",message:"更新失败！！"}),t.getList()}))},handleCancel:function(e){e.editStatus=!e.editStatus,this.getList()},confirmEdit:function(e){var t=this;if(!e.pid||!e.key||!e.seller_email)return this.$message({type:"error",message:"不允许为空！"}),!1;Object(i["d"])(e.id,e).then((function(e){20001===e.code?(t.$message({type:"success",message:"更新成功!"}),t.getList()):t.$message({type:"warning",message:"更新失败！"})}))}}},c=r,o=n("2877"),u=Object(o["a"])(c,a,l,!1,null,"9504b964",null);t["default"]=u.exports}}]);