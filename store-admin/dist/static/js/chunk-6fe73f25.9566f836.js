(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["chunk-6fe73f25"],{"09f4":function(e,t,r){"use strict";r.d(t,"a",(function(){return o})),Math.easeInOutQuad=function(e,t,r,a){return e/=a/2,e<1?r/2*e*e+t:(e--,-r/2*(e*(e-2)-1)+t)};var a=function(){return window.requestAnimationFrame||window.webkitRequestAnimationFrame||window.mozRequestAnimationFrame||function(e){window.setTimeout(e,1e3/60)}}();function n(e){document.documentElement.scrollTop=e,document.body.parentNode.scrollTop=e,document.body.scrollTop=e}function l(){return document.documentElement.scrollTop||document.body.parentNode.scrollTop||document.body.scrollTop}function o(e,t,r){var o=l(),s=e-o,i=20,c=0;t="undefined"===typeof t?500:t;var u=function e(){c+=i;var l=Math.easeInOutQuad(c,o,s,t);n(l),c<t?a(e):r&&"function"===typeof r&&r()};u()}},cc5e:function(e,t,r){"use strict";r.d(t,"a",(function(){return n}));var a=r("b775");function n(){return Object(a["a"])({url:"/admin/roles",method:"get"})}},e382:function(e,t,r){"use strict";r.r(t);var a=function(){var e=this,t=e.$createElement,r=e._self._c||t;return r("div",{staticClass:"app-container"},[r("el-card",{staticClass:"box-card"},[r("div",{staticClass:"clearfix",attrs:{slot:"header"},slot:"header"},[r("el-tooltip",{staticClass:"item",attrs:{effect:"dark",content:"新增用户",placement:"top"}},[r("el-button",{attrs:{type:"primary",icon:"el-icon-plus",size:"small"},on:{click:e.handleCreate}},[e._v("新增")])],1)],1),r("el-table",{directives:[{name:"loading",rawName:"v-loading",value:e.listLoading,expression:"listLoading"}],staticStyle:{width:"100%"},attrs:{data:e.userList,fit:"",border:"","highlight-current-row":"",height:e.tableHeight<500?500:e.tableHeight,"header-cell-style":{background:"#ebeef5"}}},[r("el-table-column",{attrs:{"header-align":"center",align:"center",label:"序号",type:"index",width:"50"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"username",label:"用户名",width:"180"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"name",label:"姓名",width:"100"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"profile.sex",label:"性别",width:"50"},scopedSlots:e._u([{key:"default",fn:function(t){var r=t.row;return[e._v(" "+e._s(r.profile?1===r.profile.sex?"男":"女":"其他")+" ")]}}])}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"phone",label:"手机号"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"email",label:"邮箱"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"role",label:"角色",width:"100"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"department.company.name",label:"公司"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"department.name",label:"部门",width:"100"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"member_code.code",label:"注册会员码"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",label:"状态",width:"80"},scopedSlots:e._u([{key:"default",fn:function(t){var a=t.row;return[1===a.status?r("el-tag",{attrs:{type:"success"}},[e._v("正常")]):r("el-tag",{attrs:{type:"info"}},[e._v("禁用")])]}}])}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"created_at",label:"注册时间"}}),r("el-table-column",{attrs:{"header-align":"center",align:"center",prop:"columnProp",label:"操作",width:"150"},scopedSlots:e._u([{key:"default",fn:function(t){var a=t.row,n=t.$index;return["admin"!==a.username?r("div",[r("el-button",{attrs:{type:"primary",icon:"el-icon-edit",circle:""},on:{click:function(t){return e.handleUpdate(a,n)}}})],1):e._e()]}}])})],1),r("pagination",{directives:[{name:"show",rawName:"v-show",value:e.total>0,expression:"total>0"}],attrs:{total:e.total,page:e.listQuery.page,limit:e.listQuery.page_limit},on:{"update:page":function(t){return e.$set(e.listQuery,"page",t)},"update:limit":function(t){return e.$set(e.listQuery,"page_limit",t)},pagination:e.getUserList}})],1),r("el-drawer",{attrs:{title:e.drawerTitle,visible:e.drawer,direction:e.drawerDirection},on:{"update:visible":function(t){e.drawer=t}}},[r("el-divider"),r("div",{staticStyle:{padding:"10px"}},[r("el-form",{ref:"userForm",attrs:{model:e.userForm,"label-width":"80px"}},[r("el-form-item",{attrs:{label:"用户名",prop:"username",required:""}},[r("el-input",{attrs:{placeholder:"输入用户名"},model:{value:e.userForm.username,callback:function(t){e.$set(e.userForm,"username",t)},expression:"userForm.username"}})],1),"新增用户"===e.drawerTitle?r("el-form-item",{attrs:{prop:"password",label:"密码",required:""}},[r("el-input",{attrs:{placeholder:"输入密码"},model:{value:e.userForm.password,callback:function(t){e.$set(e.userForm,"password",t)},expression:"userForm.password"}})],1):e._e(),r("el-row",[r("el-col",{attrs:{span:12}},[r("el-form-item",{attrs:{label:"姓名",prop:"name",required:""}},[r("el-input",{attrs:{placeholder:"输入姓名"},model:{value:e.userForm.name,callback:function(t){e.$set(e.userForm,"name",t)},expression:"userForm.name"}})],1)],1),r("el-col",{attrs:{span:12}},[r("el-form-item",{attrs:{label:"性别"}},[r("el-radio-group",{model:{value:e.userForm.sex,callback:function(t){e.$set(e.userForm,"sex",t)},expression:"userForm.sex"}},[r("el-radio",{attrs:{label:1}},[e._v("男")]),r("el-radio",{attrs:{label:0}},[e._v("女")])],1)],1)],1)],1),r("el-form-item",{attrs:{label:"手机号"}},[r("el-input",{staticStyle:{width:"80%"},attrs:{placeholder:"输入手机号"},model:{value:e.userForm.phone,callback:function(t){e.$set(e.userForm,"phone",t)},expression:"userForm.phone"}})],1),r("el-form-item",{attrs:{label:"邮箱"}},[r("el-input",{attrs:{placeholder:"输入邮箱"},model:{value:e.userForm.email,callback:function(t){e.$set(e.userForm,"email",t)},expression:"userForm.email"}})],1),r("el-form-item",{attrs:{label:"角色",prop:"role",required:""}},[r("el-select",{staticStyle:{width:"100%"},attrs:{remote:!0,loading:e.selectLoading,placeholder:"选择角色"},on:{focus:e.getRoleList},model:{value:e.userForm.role,callback:function(t){e.$set(e.userForm,"role",t)},expression:"userForm.role"}},e._l(e.role_list,(function(e){return r("el-option",{key:e.id,attrs:{label:e.name,value:e.name}})})),1)],1),r("el-row",[r("el-col",{attrs:{span:12}},[r("el-form-item",{attrs:{label:"公司",prop:"company",required:""}},[r("el-select",{staticStyle:{width:"100%"},attrs:{remote:!0,loading:e.selectLoading,placeholder:"选择公司"},on:{focus:e.getCompanyList},model:{value:e.userForm.company,callback:function(t){e.$set(e.userForm,"company",t)},expression:"userForm.company"}},e._l(e.company_list,(function(e){return r("el-option",{key:e.id,attrs:{label:e.name,value:e.name}})})),1)],1)],1),r("el-col",{attrs:{span:12}},[r("el-form-item",{attrs:{label:"部门",prop:"department",required:""}},[r("el-select",{staticStyle:{width:"100%"},attrs:{remote:!0,loading:e.selectLoading,placeholder:"选择部门"},on:{focus:e.getDepartmentsByCompanyName},model:{value:e.userForm.department,callback:function(t){e.$set(e.userForm,"department",t)},expression:"userForm.department"}},e._l(e.department_list,(function(e){return r("el-option",{key:e.id,attrs:{label:e.name,value:e.name}})})),1)],1)],1)],1),r("el-form-item",{attrs:{label:"会员码"}},[r("el-input",{attrs:{placeholder:"输入注册会员码"},model:{value:e.userForm.member_code,callback:function(t){e.$set(e.userForm,"member_code",t)},expression:"userForm.member_code"}})],1),"新增用户"!==e.drawerTitle?r("el-form-item",{attrs:{label:"是否启用",prop:"status",required:""}},[r("el-select",{staticStyle:{width:"100%"},attrs:{remote:!0,loading:e.selectLoading,placeholder:"是否启用"},model:{value:e.userForm.status,callback:function(t){e.$set(e.userForm,"status",t)},expression:"userForm.status"}},e._l(e.status_list,(function(e){return r("el-option",{key:e.id,attrs:{label:e.desc,value:e.id}})})),1)],1):e._e()],1),r("el-row",[r("el-col",{attrs:{align:"center"}},[r("el-button",{attrs:{type:"primary"},on:{click:function(t){return e.onDrawerSubmit("userForm")}}},[e._v("提交")]),r("el-button",{on:{click:function(t){return e.handleCancel("userForm")}}},[e._v("取消")])],1)],1)],1)],1)],1)},n=[],l=(r("4160"),r("b0c0"),r("159b"),r("5530")),o=r("2f62"),s=r("c24f"),i=r("cc5e"),c=r("b775");function u(e){return Object(c["a"])({url:"admin/companies",method:"get",params:e})}function m(e){return Object(c["a"])({url:"admin/company/departments/"+e,method:"get"})}var d=r("333d"),p={name:"User",components:{Pagination:d["a"]},filters:{},data:function(){var e=this,t=function(t,r,a){""===r?a(new Error("请选择部门")):""===e.userForm.company?a(new Error("请先选择公司")):a()};return{listLoading:!1,selectLoading:!1,drawer:!1,drawerDirection:"rtl",drawerTitle:"",userList:[],total:0,listQuery:{page:1,page_limit:20},userForm:{username:"",password:"",name:"",sex:1,phone:"",email:"",role:"",member_code:"",company:"",department:"",status:0},status_list:[{id:1,desc:"启用"},{id:-1,desc:"禁用"}],rules:{username:[{required:!0,message:"请输入用户名",trigger:"blur"}],password:[{required:!0,message:"请输入密码",trigger:"blur"},{min:6,message:"密码不少于6位",trigger:"blur"}],name:[{required:!0,message:"请输入姓名",trigger:"blur"}],role:[{required:!0,message:"请选择角色",trigger:"blur"}],company:[{required:!0,message:"请选择公司",trigger:"blur"}],department:[{validator:t,trigger:"blur"}]},role_list:"",company_list:"",department_list:""}},computed:Object(l["a"])({},Object(o["d"])({tableHeight:function(e){return e.screenHeight-400}})),created:function(){this.getUserList()},methods:{getUserList:function(){var e=this;this.listLoading=!0,Object(s["b"])(this.listQuery).then((function(t){e.userList=t.data.data,e.userList.forEach((function(e){e.role=e.roles&&e.roles.length?e.roles[0].name:"无"})),e.listLoading=!1,e.total=t.data.total}))},getRoleList:function(){var e=this;this.selectLoading=!0,Object(i["a"])().then((function(t){e.selectLoading=!1,e.role_list=t.data}))},getCompanyList:function(){var e=this;this.selectLoading=!0,u().then((function(t){e.company_list=t.data.data,e.selectLoading=!1}))},getDepartmentsByCompanyName:function(){var e=this;this.userForm.company||this.$message({message:"请先选择公司",type:"warning"}),this.selectLoading=!0,m(this.userForm.company).then((function(t){e.department_list=t.data,e.selectLoading=!1}))},handleCreate:function(){this.drawerTitle="新增用户",this.userForm={},this.drawer=!0,this.drawerDirection="ltr"},handleUpdate:function(e,t){this.drawerTitle="编辑用户",Object.assign(this.userForm,{username:e.username,password:"",name:e.name,sex:e.profile.sex,phone:e.phone,email:e.email,role:"无"!==e.role?e.role:"",member_code:e.member_code?e.member_code.code:"",company:e.department?e.department.company.name:"",department:e.department?e.department.name:"",hash_id:e.hash_id,status:e.status}),this.drawer=!0,this.drawerDirection="rtl"},onDrawerSubmit:function(e){var t=this;this.$refs[e].validate((function(e){if(!e)return console.log("error submit!!"),!1;"新增用户"===t.drawerTitle?Object(s["g"])(t.userForm).then((function(e){20001===e.code&&(t.$notify({title:"成功",message:"操作成功",type:"success"}),t.getUserList(),t.drawer=!1)})).catch((function(e){console.log(e)})):t.handleSubmit()}))},handleSubmit:function(){var e=this;Object(s["a"])(this.userForm).then((function(t){console.log(t),20001===t.code?e.$notify({title:"成功",message:"更新成功",type:"success"}):e.$notify({title:"失败",message:"更新失败",type:"error"})}))},resetUserForm:function(e){this.$refs[e].resetFields()},handleCancel:function(e){"新增用户"===this.drawerTitle?this.$refs[e].resetFields():(this.drawer=!1,this.getUserList())},handleDelete:function(e){console.log(e)}}},h=p,g=r("2877"),f=Object(g["a"])(h,a,n,!1,null,"7c55c7fc",null);t["default"]=f.exports}}]);