(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-504e7e7b"],{"09f4":function(t,e,a){"use strict";a.d(e,"a",(function(){return i})),Math.easeInOutQuad=function(t,e,a,n){return t/=n/2,t<1?a/2*t*t+e:(t--,-a/2*(t*(t-2)-1)+e)};var n=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(t){window.setTimeout(t,1e3/60)}}();function r(t){document.documentElement.scrollTop=t,document.body.parentNode.scrollTop=t,document.body.scrollTop=t}function l(){return document.documentElement.scrollTop||document.body.parentNode.scrollTop||document.body.scrollTop}function i(t,e,a){var i=l(),s=t-i,o=20,c=0;e="undefined"===typeof e?500:e;var u=function t(){c+=o;var l=Math.easeInOutQuad(c,i,s,e);r(l),c<e?n(t):a&&"function"===typeof a&&a()};u()}},"5f9b":function(t,e,a){"use strict";a.r(e);var n=function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"app-container"},[a("el-card",{staticClass:"box-card filter-container"},[a("el-input",{staticClass:"filter-item",staticStyle:{width:"200px"},attrs:{placeholder:"输入订单编号"},nativeOn:{keyup:function(e){return!e.type.indexOf("key")&&t._k(e.keyCode,"enter",13,e.key,"Enter")?null:t.handleFilter(e)}},model:{value:t.listQuery.no,callback:function(e){t.$set(t.listQuery,"no",e)},expression:"listQuery.no"}}),a("el-button",{directives:[{name:"waves",rawName:"v-waves"}],staticClass:"filter-item",staticStyle:{"margin-left":"20px"},attrs:{type:"primary",icon:"el-icon-search"},on:{click:t.handleFilter}},[t._v(" "+t._s(t.$t("table.search"))+" ")])],1),a("el-card",{staticClass:"box-card box-cart-centent",staticStyle:{"margin-top":"20px"}},[a("el-table",{directives:[{name:"loading",rawName:"v-loading",value:t.listLoading,expression:"listLoading"}],key:t.tableKey,staticStyle:{width:"100%"},attrs:{data:t.list,border:"",fit:"","highlight-current-row":"","header-cell-style":{background:"#ebeef5"}}},[a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"id",label:"ID",width:"60"}}),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"no",label:"订单号"}}),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"total_amount",label:"总金额"}}),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"user.username",label:"用户"}}),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"status",formatter:t.formatOrderStatus,label:"订单状态",width:"130px"},scopedSlots:t._u([{key:"default",fn:function(e){var n=e.row;return[n.editStatus?[a("el-select",{attrs:{placeholder:"请选择活动区域"},model:{value:n.status,callback:function(e){t.$set(n,"status",e)},expression:"row.status"}},t._l(t.orderStatusList,(function(t){return a("el-option",{key:t.id,attrs:{label:t.title,value:t.id}})})),1)]:a("span",[t._v(t._s(t._f("filterOrderStatus")(n.status)))])]}}])}),t._v("> "),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"payment_no",label:"支付交易号"}}),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"payment_method",formatter:t.formatPaymentMethod,label:"支付方式"}}),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"refund_status",formatter:t.formatRefundStatus,label:"退款状态"},scopedSlots:t._u([{key:"default",fn:function(e){var n=e.row;return[n.editStatus?[a("el-select",{attrs:{placeholder:"请选择活动区域"},model:{value:n.refund_status,callback:function(e){t.$set(n,"refund_status",e)},expression:"row.refund_status"}},t._l(t.orderRefundStatus,(function(t){return a("el-option",{key:t.id,attrs:{label:t.title,value:t.id}})})),1)]:a("span",[t._v(t._s(t._f("filterOrderStatus")(n.refund_status)))])]}}])}),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"refund_no",label:"退款单号"}}),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"reviewed",label:"是否评价"}}),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"ship_status",formatter:t.formatShipStatus,label:"物流状态"},scopedSlots:t._u([{key:"default",fn:function(e){var n=e.row;return[n.editStatus?[a("el-select",{attrs:{placeholder:"请选择活动区域"},model:{value:n.ship_status,callback:function(e){t.$set(n,"ship_status",e)},expression:"row.ship_status"}},t._l(t.orderShipStatus,(function(t){return a("el-option",{key:t.id,attrs:{label:t.title,value:t.id}})})),1)]:a("span",[t._v(t._s(t._f("filterOrderStatus")(n.ship_status)))])]}}])}),t._v("> "),a("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"paid_at",label:"支付时间"}}),a("el-table-column",{attrs:{align:"center",label:"操作",width:"120"},scopedSlots:t._u([{key:"default",fn:function(e){var n=e.row;return[n.editStatus?a("el-button",{attrs:{type:"success",size:"small"},on:{click:function(e){return t.confirmEdit(n)}}},[t._v(" 确认 ")]):t._e(),n.editStatus?a("el-button",{staticClass:"cancel-btn",staticStyle:{margin:"5px 0 0 0"},attrs:{size:"small",type:"warning"},on:{click:function(e){return t.cancelEdit(n)}}},[t._v(" 关闭 ")]):a("el-button",{attrs:{type:"primary",size:"small",icon:"el-icon-edit"},on:{click:function(t){n.editStatus=!n.editStatus}}},[t._v(" 编辑 ")])]}}])})],1)],1),a("pagination",{directives:[{name:"show",rawName:"v-show",value:t.total>0,expression:"total>0"}],attrs:{total:t.total,page:t.listQuery.page,limit:t.listQuery.page_limit},on:{"update:page":function(e){return t.$set(t.listQuery,"page",e)},"update:limit":function(e){return t.$set(t.listQuery,"page_limit",e)},pagination:t.getList}})],1)},r=[],l=(a("d81d"),a("b775"));function i(t){return Object(l["a"])({url:"admin/order",method:"get",params:t})}function s(t,e){return Object(l["a"])({url:"admin/order/"+t,method:"post",data:e})}var o=a("333d"),c=a("6724"),u={name:"PurchaseOrderList",components:{Pagination:o["a"]},directives:{waves:c["a"]},filters:{filterOrderStatus:function(t){switch(t){case 0:return"待付款";case 1:return"已付款";case-1:return"付款失败"}}},data:function(){return{list:null,total:0,tableKey:0,listQuery:{page:1,page_limit:10},listLoading:!0,orderStatusList:[{id:"1",title:"已付款"},{id:"0",title:"待付款"},{id:"-1",title:"付款失败"},{id:"-2",title:"取消订单"}],orderShipStatus:[{id:"1",title:"已发货"},{id:"-1",title:"未发货"},{id:"0",title:"已签收"}],orderRefundStatus:[{id:"1",title:"未退款"},{id:"-1",title:"已退款"}]}},created:function(){this.getList()},methods:{getList:function(){var t=this;this.listLoading=!0,i(this.listQuery).then((function(e){t.list=e.data.data,t.total=e.data.total,t.listLoading=!1;var a=t.list;t.list=a.map((function(e){return t.$set(e,"editStatus",!1),e}))}))},formatPaymentMethod:function(t,e){return"null"===t.payment_method?"":t.payment_method},formatOrderStatus:function(t){switch(t.status){case 0:return"待付款";case 1:return"已付款";case-1:return"付款失败"}},formatShipStatus:function(t){switch(t.ship_status){case 0:return"已签收";case 1:return"已发货";case-1:return"未发货"}},formatRefundStatus:function(t){switch(t.refund_status){case 1:return"未退款";case-1:return"已退款"}},handleFilter:function(){console.log("search test")},confirmEdit:function(t){console.log(t),s(t).then((function(t){console.log(t),20001===t.data.code&&console.log(t)})),t.editStatus=!1,this.$message({message:"更新成功",type:"success"})},cancelEdit:function(t){t.editStatus=!1,this.$message({message:"取消编辑",type:"warning"})}}},d=u,p=a("2877"),f=Object(p["a"])(d,n,r,!1,null,"28dc4cff",null);e["default"]=f.exports},6724:function(t,e,a){"use strict";a("8d41");var n="@@wavesContext";function r(t,e){function a(a){var n=Object.assign({},e.value),r=Object.assign({ele:t,type:"hit",color:"rgba(0, 0, 0, 0.15)"},n),l=r.ele;if(l){l.style.position="relative",l.style.overflow="hidden";var i=l.getBoundingClientRect(),s=l.querySelector(".waves-ripple");switch(s?s.className="waves-ripple":(s=document.createElement("span"),s.className="waves-ripple",s.style.height=s.style.width=Math.max(i.width,i.height)+"px",l.appendChild(s)),r.type){case"center":s.style.top=i.height/2-s.offsetHeight/2+"px",s.style.left=i.width/2-s.offsetWidth/2+"px";break;default:s.style.top=(a.pageY-i.top-s.offsetHeight/2-document.documentElement.scrollTop||document.body.scrollTop)+"px",s.style.left=(a.pageX-i.left-s.offsetWidth/2-document.documentElement.scrollLeft||document.body.scrollLeft)+"px"}return s.style.backgroundColor=r.color,s.className="waves-ripple z-active",!1}}return t[n]?t[n].removeHandle=a:t[n]={removeHandle:a},a}var l={bind:function(t,e){t.addEventListener("click",r(t,e),!1)},update:function(t,e){t.removeEventListener("click",t[n].removeHandle,!1),t.addEventListener("click",r(t,e),!1)},unbind:function(t){t.removeEventListener("click",t[n].removeHandle,!1),t[n]=null,delete t[n]}},i=function(t){t.directive("waves",l)};window.Vue&&(window.waves=l,Vue.use(i)),l.install=i;e["a"]=l},"8d41":function(t,e,a){}}]);