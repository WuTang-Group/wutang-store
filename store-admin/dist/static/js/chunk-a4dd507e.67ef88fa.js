(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-a4dd507e"],{"09f4":function(e,t,n){"use strict";n.d(t,"a",(function(){return r})),Math.easeInOutQuad=function(e,t,n,i){return e/=i/2,e<1?n/2*e*e+t:(e--,-n/2*(e*(e-2)-1)+t)};var i=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}();function a(e){document.documentElement.scrollTop=e,document.body.parentNode.scrollTop=e,document.body.scrollTop=e}function o(){return document.documentElement.scrollTop||document.body.parentNode.scrollTop||document.body.scrollTop}function r(e,t,n){var r=o(),l=e-r,s=20,c=0;t="undefined"===typeof t?500:t;var u=function e(){c+=s;var o=Math.easeInOutQuad(c,r,l,t);a(o),c<t?i(e):n&&"function"===typeof n&&n()};u()}},"1e4d":function(e,t,n){"use strict";var i=n("c810"),a=n.n(i);a.a},"4cfc":function(e,t,n){"use strict";n.r(t);var i=function(){var e=this,t=e.$createElement,n=e._self._c||t;return n("div",{staticClass:"app-container"},[n("el-card",{staticClass:"box-card filter-container"},[n("el-input",{staticClass:"filter-item",staticStyle:{width:"200px"},attrs:{placeholder:"输入分类名称"},nativeOn:{keyup:function(t){return!t.type.indexOf("key")&&e._k(t.keyCode,"enter",13,t.key,"Enter")?null:e.handleFilter(t)}},model:{value:e.listQuery.title,callback:function(t){e.$set(e.listQuery,"title",t)},expression:"listQuery.title"}}),n("el-button",{directives:[{name:"waves",rawName:"v-waves"}],staticClass:"filter-item",staticStyle:{"margin-left":"20px"},attrs:{type:"primary",icon:"el-icon-search"},on:{click:e.handleFilter}},[e._v(" "+e._s(e.$t("table.search"))+" ")])],1),n("el-card",{staticClass:"box-card box-card-centent",staticStyle:{"margin-top":"20px"}},[n("div",{staticClass:"clearfix",attrs:{slot:"header"},slot:"header"},[n("router-link",{attrs:{to:{name:"CreateAssetImg",params:{status:"create",data:null}}}},[n("el-button",{directives:[{name:"waves",rawName:"v-waves"}]},[e._v("添加")])],1)],1),n("el-table",{directives:[{name:"loading",rawName:"v-loading",value:e.listLoading,expression:"listLoading"}],key:e.tableKey,staticStyle:{width:"100%"},attrs:{data:e.list,border:"",fit:"","highlight-current-row":"","header-cell-style":{background:"#ebeef5"}}},[n("el-table-column",{attrs:{align:"center",type:"index","header-align":"center",label:"序号",width:"60"}}),n("el-table-column",{attrs:{align:"center","header-align":"center",label:"图片位置","show-overflow-tooltip":"",prop:"img_location",formatter:e.formatterLocation}}),n("el-table-column",{attrs:{align:"center","header-align":"center",label:"图片类型","show-overflow-tooltip":"",prop:"type"}}),n("el-table-column",{attrs:{align:"center","header-align":"center",label:"关联产品","show-overflow-tooltip":"",prop:"product.product_name"}}),n("el-table-column",{attrs:{align:"center","header-align":"center",label:"图片"},scopedSlots:e._u([{key:"default",fn:function(t){var i=t.row;return[n("el-image",{staticStyle:{width:"100px",height:"100px"},attrs:{src:i.img,fit:"scale-down"},on:{click:function(t){return e.previewImgAction(i.img)}}})]}}])}),e._v("ss "),n("el-table-column",{attrs:{"header-align":"center",label:"创建时间",prop:"created_at",align:"center"}}),n("el-table-column",{attrs:{"header-align":"center",label:"更新时间",prop:"updated_at",align:"center"}}),n("el-table-column",{attrs:{"header-align":"center",align:"center",label:"操作"},scopedSlots:e._u([{key:"default",fn:function(t){return[n("el-tooltip",{staticClass:"item",attrs:{effect:"dark",content:"编辑",placement:"top"}},[n("router-link",{attrs:{to:{name:"CreateAssetImg",params:{status:"edit",data:t.row}}}},[n("el-button",{staticStyle:{"margin-right":"5px"},attrs:{type:"primary",icon:"el-icon-edit",circle:""}})],1)],1),n("el-tooltip",{staticClass:"item",attrs:{effect:"dark",content:"删除",placement:"top"}},[n("el-button",{attrs:{type:"danger",icon:"el-icon-delete",circle:""},on:{click:function(n){return e.deleteConfirm(t.row.id)}}})],1)]}}])})],1),n("pagination",{directives:[{name:"show",rawName:"v-show",value:e.total>0,expression:"total>0"}],attrs:{total:e.total,page:e.listQuery.page,limit:e.listQuery.page_limit},on:{"update:page":function(t){return e.$set(e.listQuery,"page",t)},"update:limit":function(t){return e.$set(e.listQuery,"page_limit",t)},pagination:e.getList}})],1),n("el-dialog",{attrs:{title:"图片预览",visible:e.previewImgDialogVisible,width:"50%"},on:{"update:visible":function(t){e.previewImgDialogVisible=t}}},[n("el-image",{staticStyle:{width:"100%"},attrs:{src:e.previewImg}})],1)],1)},a=[],o=n("5759"),r=n("6724"),l=n("333d"),s={name:"AssetImgList",components:{Pagination:l["a"]},directives:{waves:r["a"]},data:function(){return{tableKey:0,list:null,total:0,listLoading:!0,listQuery:{page:1,page_limit:10},previewImg:"",previewImgDialogVisible:!1,showReviewer:!1,temp:{id:void 0,importance:1,remark:"",timestamp:new Date},isActive:!1}},created:function(){this.getList()},methods:{previewImgAction:function(e){this.previewImg=e,this.previewImgDialogVisible=!0},getList:function(){var e=this;this.listLoading=!0,Object(o["c"])(this.listQuery).then((function(t){e.list=t.data.data,e.total=t.data.total,e.listLoading=!1,console.log(e.list)}))},resetTemp:function(){this.temp={id:void 0,importance:1,remark:"",timestamp:new Date,title:"",status:"published",type:""}},deleteConfirm:function(e){var t=this;this.$confirm("此操作将永久删除该文件, 是否继续?","提示",{confirmButtonText:"确定",cancelButtonText:"取消",type:"warning"}).then((function(){Object(o["b"])(e).then((function(e){20001===e.code?(t.$message({message:"删除成功!",type:"success"}),t.getList()):t.$message({message:"删除失败！",type:"error"})}))})).catch((function(){t.$message({type:"info",message:"已取消删除"})}))},handleFilter:function(){console.log("test")},handleMouseEnter:function(){this.isActive=!0},handleMouseMove:function(){this.isActive=!1},formatterLocation:function(e){switch(e.img_location){case 1:return"首页";default:return"其他"}}}},c=s,u=(n("1e4d"),n("2877")),d=Object(u["a"])(c,i,a,!1,null,"99446b48",null);t["default"]=d.exports},5759:function(e,t,n){"use strict";n.d(t,"c",(function(){return a})),n.d(t,"a",(function(){return o})),n.d(t,"b",(function(){return r})),n.d(t,"d",(function(){return l})),n.d(t,"e",(function(){return s}));var i=n("b775");function a(e){return Object(i["a"])({url:"admin/asset_img",path:"get",params:e})}function o(e){return Object(i["a"])({url:"admin/asset_img",method:"post",data:e})}function r(e){return Object(i["a"])({url:"admin/asset_img/"+e,method:"delete"})}function l(){return Object(i["a"])({url:"admin/product/basic_info_list",method:"get"})}function s(e,t){return Object(i["a"])({url:"admin/asset_img/"+e,method:"post",data:t})}},6724:function(e,t,n){"use strict";n("8d41");var i="@@wavesContext";function a(e,t){function n(n){var i=Object.assign({},t.value),a=Object.assign({ele:e,type:"hit",color:"rgba(0, 0, 0, 0.15)"},i),o=a.ele;if(o){o.style.position="relative",o.style.overflow="hidden";var r=o.getBoundingClientRect(),l=o.querySelector(".waves-ripple");switch(l?l.className="waves-ripple":(l=document.createElement("span"),l.className="waves-ripple",l.style.height=l.style.width=Math.max(r.width,r.height)+"px",o.appendChild(l)),a.type){case"center":l.style.top=r.height/2-l.offsetHeight/2+"px",l.style.left=r.width/2-l.offsetWidth/2+"px";break;default:l.style.top=(n.pageY-r.top-l.offsetHeight/2-document.documentElement.scrollTop||document.body.scrollTop)+"px",l.style.left=(n.pageX-r.left-l.offsetWidth/2-document.documentElement.scrollLeft||document.body.scrollLeft)+"px"}return l.style.backgroundColor=a.color,l.className="waves-ripple z-active",!1}}return e[i]?e[i].removeHandle=n:e[i]={removeHandle:n},n}var o={bind:function(e,t){e.addEventListener("click",a(e,t),!1)},update:function(e,t){e.removeEventListener("click",e[i].removeHandle,!1),e.addEventListener("click",a(e,t),!1)},unbind:function(e){e.removeEventListener("click",e[i].removeHandle,!1),e[i]=null,delete e[i]}},r=function(e){e.directive("waves",o)};window.Vue&&(window.waves=o,Vue.use(r)),o.install=r;t["a"]=o},"8d41":function(e,t,n){},c810:function(e,t,n){}}]);