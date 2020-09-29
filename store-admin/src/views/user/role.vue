<template>
  <div class="app-container">
    <el-row :gutter="10">
      <el-col :span="8">
        <el-card class="box-card">
          <div slot="header" class="clearfix">
            <span>角色列表</span>
            <el-tooltip class="item" effect="dark" content="新增角色" placement="top">
              <el-button style="float: right" icon="el-icon-plus" type="primary" circle size="small" />
            </el-tooltip>
          </div>
          <el-table
            v-loading="roleListLoading"
            :data="roleList"
            style="width: 100%"
            fit
            :header-cell-style="{background:'#ebeef5'}"
          >
            <el-table-column prop="role_name" label="角色名称" />
            <el-table-column prop="name" label="角色代码" />
            <el-table-column prop="guard_name" label="守卫属性" />
          </el-table>
        </el-card>
      </el-col>
      <el-col :span="16" />
    </el-row>
  </div>
</template>

<script>
import { getRoles } from '@/api/role'
export default {
  name: 'Role',
  data() {
    return {
      roleListLoading: false,
      roleList: []
    }
  },
  created() {
    this.getRoleList()
  },
  methods: {
    getRoleList() {
      this.roleListLoading = true
      getRoles().then(response => {
        this.roleList = response.data
        this.roleListLoading = false
      })
    }
  }
}
</script>

<style scoped>

</style>
