(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-0d24e19c"],{"09f4":function(e,t,a){"use strict";a.d(t,"a",(function(){return i})),Math.easeInOutQuad=function(e,t,a,n){return e/=n/2,e<1?a/2*e*e+t:(e--,-a/2*(e*(e-2)-1)+t)};var n=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}();function r(e){document.documentElement.scrollTop=e,document.body.parentNode.scrollTop=e,document.body.scrollTop=e}function l(){return document.documentElement.scrollTop||document.body.parentNode.scrollTop||document.body.scrollTop}function i(e,t,a){var i=l(),o=e-i,c=20,s=0;t="undefined"===typeof t?500:t;var u=function e(){s+=c;var l=Math.easeInOutQuad(s,i,o,t);r(l),s<t?n(e):a&&"function"===typeof a&&a()};u()}},6724:function(e,t,a){"use strict";a("8d41");var n="@@wavesContext";function r(e,t){function a(a){var n=Object.assign({},t.value),r=Object.assign({ele:e,type:"hit",color:"rgba(0, 0, 0, 0.15)"},n),l=r.ele;if(l){l.style.position="relative",l.style.overflow="hidden";var i=l.getBoundingClientRect(),o=l.querySelector(".waves-ripple");switch(o?o.className="waves-ripple":(o=document.createElement("span"),o.className="waves-ripple",o.style.height=o.style.width=Math.max(i.width,i.height)+"px",l.appendChild(o)),r.type){case"center":o.style.top=i.height/2-o.offsetHeight/2+"px",o.style.left=i.width/2-o.offsetWidth/2+"px";break;default:o.style.top=(a.pageY-i.top-o.offsetHeight/2-document.documentElement.scrollTop||document.body.scrollTop)+"px",o.style.left=(a.pageX-i.left-o.offsetWidth/2-document.documentElement.scrollLeft||document.body.scrollLeft)+"px"}return o.style.backgroundColor=r.color,o.className="waves-ripple z-active",!1}}return e[n]?e[n].removeHandle=a:e[n]={removeHandle:a},a}var l={bind:function(e,t){e.addEventListener("click",r(e,t),!1)},update:function(e,t){e.removeEventListener("click",e[n].removeHandle,!1),e.addEventListener("click",r(e,t),!1)},unbind:function(e){e.removeEventListener("click",e[n].removeHandle,!1),e[n]=null,delete e[n]}},i=function(e){e.directive("waves",l)};window.Vue&&(window.waves=l,Vue.use(i)),l.install=i;t["a"]=l},"8d41":function(e,t,a){},c4c8:function(e,t,a){"use strict";a.d(t,"a",(function(){return r})),a.d(t,"d",(function(){return l})),a.d(t,"e",(function(){return i})),a.d(t,"f",(function(){return o})),a.d(t,"c",(function(){return c})),a.d(t,"b",(function(){return s}));var n=a("b775");function r(e){return Object(n["a"])({url:"admin/product",method:"get",params:e})}function l(e){return Object(n["a"])({url:"admin/product/"+e,method:"get"})}function i(e){return Object(n["a"])({url:"admin/product",method:"post",data:e})}function o(e,t){return Object(n["a"])({url:"admin/product/"+e,method:"post",data:t})}function c(e){return Object(n["a"])({url:"admin/product/"+e,method:"delete"})}function s(){return Object(n["a"])({url:"admin/products/parent",method:"get"})}},e6e2:function(e,t,a){"use strict";a.r(t);var n=function(){var e=this,t=e.$createElement,a=e._self._c||t;return a("div",{staticClass:"app-container"},[a("el-card",{staticClass:"box-card filter-container"},[a("el-form",{ref:"listQuery",attrs:{model:e.listQuery}},[a("el-row",[a("el-col",{attrs:{span:6}},[a("el-form-item",{attrs:{label:"商品名称"}},[a("el-input",{staticClass:"filter-item",staticStyle:{width:"200px"},attrs:{placeholder:"输入商品名称",clearable:""},model:{value:e.listQuery.product_name,callback:function(t){e.$set(e.listQuery,"product_name",t)},expression:"listQuery.product_name"}})],1)],1),a("el-col",{attrs:{span:6}},[a("el-form-item",{attrs:{label:"英文名称"}},[a("el-input",{staticClass:"filter-item",staticStyle:{width:"200px"},attrs:{placeholder:"输入商品名称(英文)",clearable:""},model:{value:e.listQuery.product_name_en,callback:function(t){e.$set(e.listQuery,"product_name_en",t)},expression:"listQuery.product_name_en"}})],1)],1),a("el-col",{attrs:{span:10}},[a("el-form-item",{attrs:{label:"商品创建时间"}},[a("el-date-picker",{attrs:{type:"datetimerange","picker-options":e.pickerOptions,"range-separator":"至","start-placeholder":"开始日期","end-placeholder":"结束日期",align:"right"},model:{value:e.listQuery.created_at,callback:function(t){e.$set(e.listQuery,"created_at",t)},expression:"listQuery.created_at"}})],1)],1)],1),a("el-row",[a("el-col",{attrs:{span:6}},[a("el-form-item",{attrs:{label:"产品类目"}},[a("el-input",{staticClass:"filter-item",staticStyle:{width:"200px"},attrs:{placeholder:"输入产品类目",clearable:""},model:{value:e.listQuery.product_category,callback:function(t){e.$set(e.listQuery,"product_category",t)},expression:"listQuery.product_category"}})],1)],1),a("el-col",{attrs:{span:6}},[a("el-form-item",{attrs:{label:"所属商品"}},[a("el-input",{staticClass:"filter-item",staticStyle:{width:"200px"},attrs:{placeholder:"输入所属商品",clearable:""},model:{value:e.listQuery.parent_product,callback:function(t){e.$set(e.listQuery,"parent_product",t)},expression:"listQuery.parent_product"}})],1)],1)],1),a("el-row",[a("el-col",{attrs:{span:6,offset:20}},[a("el-button",{directives:[{name:"waves",rawName:"v-waves"}],staticClass:"filter-item",staticStyle:{"margin-left":"20px"},attrs:{type:"primary",icon:"el-icon-search"},on:{click:e.handleFilter}},[e._v(" "+e._s(e.$t("table.search"))+" ")])],1)],1)],1)],1),a("el-card",{staticClass:"box-card box-card-centent",staticStyle:{"margin-top":"20px"}},[a("div",{staticClass:"clearfix",attrs:{slot:"header"},slot:"header"},[a("router-link",{attrs:{to:{name:"CreateProduct"}}},[a("el-button",{directives:[{name:"waves",rawName:"v-waves"}]},[e._v("添加")])],1)],1),a("el-table",{directives:[{name:"loading",rawName:"v-loading",value:e.listLoading,expression:"listLoading"}],key:e.tableKey,staticStyle:{width:"100%"},attrs:{data:e.list,border:"",fit:"",stripe:"","highlight-current-row":"","header-cell-style":{background:"#ebeef5"}}},[a("el-table-column",{attrs:{type:"index","header-align":"center",align:"center",label:"序号",width:"60"}}),a("el-table-column",{attrs:{"header-align":"center",label:"商品名称",prop:"product_name",align:"center",width:"130px"},scopedSlots:e._u([{key:"default",fn:function(t){return[a("router-link",{attrs:{to:{name:"ProductViewOrUpdate",params:{status:"view",product_slug:t.row.slug}}}},[a("el-tag",[e._v(e._s(t.row.product_name))])],1)]}}])}),a("el-table-column",{attrs:{"header-align":"center",label:"商品名称(英文)",prop:"product_name_en",align:"center"}}),a("el-table-column",{attrs:{"header-align":"center",label:"所属商品",prop:"parent.product_name",align:"center"}}),a("el-table-column",{attrs:{"header-align":"center",label:"Level",prop:"level",formatter:e.formatLevel,align:"center"}}),a("el-table-column",{attrs:{"header-align":"center",label:"所属分类",prop:"product_category.name",align:"center"}}),a("el-table-column",{attrs:{"header-align":"center",label:"产品缩略图",align:"center",width:"125"},scopedSlots:e._u([{key:"default",fn:function(t){var n=t.row;return[a("el-image",{staticStyle:{width:"100px",height:"100px"},attrs:{src:n.thumbnail,fit:"scale-down"},on:{click:function(t){return e.previewImgAction(n.thumbnail)}}})]}}])}),a("el-table-column",{attrs:{"header-align":"center",label:"价格",prop:"price",align:"center"}}),a("el-table-column",{attrs:{"header-align":"center",label:"优惠价格",prop:"sale_price",align:"center"}}),a("el-table-column",{attrs:{"header-align":"center",label:"库存",prop:"stock",align:"center"}}),a("el-table-column",{attrs:{"header-align":"center",label:"规格",prop:"spec",align:"center"}}),a("el-table-column",{attrs:{"header-align":"center",label:"状态",prop:"status",formatter:e.formatStatus,align:"center"}}),a("el-table-column",{attrs:{"header-align":"center",label:"创建时间",prop:"created_at",align:"center",sortable:""}}),a("el-table-column",{attrs:{"header-align":"center",label:"更新时间",prop:"updated_at",align:"center",sortable:""}}),a("el-table-column",{attrs:{"header-align":"center",align:"center",label:"操作",prop:"product_id","min-width":"100px"},scopedSlots:e._u([{key:"default",fn:function(t){return[a("el-tooltip",{staticClass:"item",attrs:{effect:"dark",content:"编辑",placement:"top"}},[a("router-link",{attrs:{to:{name:"ProductViewOrUpdate",params:{status:"edit",product_slug:t.row.slug}}}},[a("el-button",{staticStyle:{"margin-right":"5px"},attrs:{type:"primary",icon:"el-icon-edit",circle:""}})],1)],1),a("el-tooltip",{staticClass:"item",attrs:{effect:"dark",content:"删除",placement:"top"}},[a("el-button",{attrs:{type:"danger",icon:"el-icon-delete",circle:""},on:{click:function(a){return e.deleteConfirm(t.row.slug)}}})],1)]}}])})],1),a("pagination",{directives:[{name:"show",rawName:"v-show",value:e.total>0,expression:"total>0"}],attrs:{total:e.total,page:e.listQuery.page,limit:e.listQuery.page_limit},on:{"update:page":function(t){return e.$set(e.listQuery,"page",t)},"update:limit":function(t){return e.$set(e.listQuery,"page_limit",t)},pagination:e.getList}})],1),a("el-dialog",{attrs:{title:"图片预览",visible:e.previewImgDialogVisible,width:"50%"},on:{"update:visible":function(t){e.previewImgDialogVisible=t}}},[a("el-image",{staticStyle:{width:"100%"},attrs:{src:e.previewImg}})],1)],1)},r=[],l=a("c4c8"),i=a("333d"),o=a("6724"),c={name:"ProductList",components:{Pagination:i["a"]},directives:{waves:o["a"]},data:function(){return{list:null,total:0,listQuery:{page:1,page_limit:10,product_name:"",product_name_en:"",parent_product:"",product_category:"",created_at:""},listLoading:!0,tableKey:0,previewImgDialogVisible:!1,previewImg:"",status:"",viewOrUpdateData:{status:"",product_slug:""},pickerOptions:{shortcuts:[{text:"最近一周",onClick:function(e){var t=new Date,a=new Date;a.setTime(a.getTime()-6048e5),e.$emit("pick",[a,t])}},{text:"最近一个月",onClick:function(e){var t=new Date,a=new Date;a.setTime(a.getTime()-2592e6),e.$emit("pick",[a,t])}},{text:"最近三个月",onClick:function(e){var t=new Date,a=new Date;a.setTime(a.getTime()-7776e6),e.$emit("pick",[a,t])}}]}}},created:function(){this.getList()},methods:{previewImgAction:function(e){this.previewImg=e,this.previewImgDialogVisible=!0},getList:function(){var e=this;this.listLoading=!0,Object(l["a"])(this.listQuery).then((function(t){e.list=t.data.data,e.total=t.data.total,e.listLoading=!1}))},formatStatus:function(e,t){return 1===e.status?"新品":2===e.status?"畅销":3===e.status?"促销":-1===e.status?"下架":"其他"},formatLevel:function(e,t){return 1===e.level?"套装":2===e.level?"单品":"其他"},handleFilter:function(){this.getList()},deleteConfirm:function(e){var t=this;this.$confirm("此操作将永久删除该商品, 是否继续?","提示",{confirmButtonText:"确定",cancelButtonText:"取消",type:"warning"}).then((function(){Object(l["c"])(e).then((function(e){20001===e.code?(t.$message({message:"删除成功!",type:"success"}),t.getList()):t.$message({message:"删除失败！",type:"error"})}))})).catch((function(){t.$message({type:"info",message:"已取消删除"})}))}}},s=c,u=a("2877"),d=Object(u["a"])(s,n,r,!1,null,"dd4896f2",null);t["default"]=d.exports}}]);