<template>
  <el-container>
    <el-aside width="400px" style="margin-bottom: 0">
      <el-card shadow="hover" style="height: 600px">
        <el-tree
          :data="memberCode"
          :props="defaultProps"
          :highlight-current="true"
          @node-click="handleNodeClick"
        />
      </el-card>
    </el-aside>
    <el-main style="background-color: #eef1f6">
      <div class="app-container">
        <el-form v-show="loadingDetail" ref="memberCodeDetail" :data="memberCodeDetail" :inline="true" label-position="left">
          <el-card shadow="hover">
            <div slot="header">
              <span>会员码信息</span>
            </div>
            <el-row>
              <el-col :span="8">
                <el-form-item label="验证码">
                  <el-input v-model="memberCodeDetail.code" :readonly="formDisable" />
                </el-form-item>
              </el-col>
              <el-col :span="8">
                <el-form-item label="等级">
                  <el-input v-model="memberCodeDetail.level" :readonly="formDisable" />
                </el-form-item>
              </el-col>
              <el-col :span="8">
                <el-form-item label="是否启用">
                  <el-input v-model="memberCodeDetail.status" :formatter="formatterStatus" />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="16">
                <el-form-item label="备注">
                  <el-input v-model="memberCodeDetail.remark" type="textarea" style="width: 500px" :readonly="formDisable" />
                </el-form-item>
              </el-col>
            </el-row>
          </el-card>
          <el-card shadow="hover" style="margin-top: 10px">
            <div slot="header" class="clearfix">
              <span>用户信息</span>
            </div>
            <el-row>
              <el-col :span="8">
                <el-form-item label="用户名">
                  <el-input v-model="memberCodeDetail.user.username" :readonly="formDisable" />
                </el-form-item>
              </el-col>
              <el-col :span="8">
                <el-form-item label="姓名">
                  <el-input v-model="memberCodeDetail.user.name" :readonly="formDisable" />
                </el-form-item>
              </el-col>
              <el-col :span="8">
                <el-form-item label="邮箱">
                  <el-input v-model="memberCodeDetail.user.email" :readonly="formDisable" />
                </el-form-item>
              </el-col>
            </el-row>
            <el-row>
              <el-col :span="8">
                <el-form-item label="手机号">
                  <el-input v-model="memberCodeDetail.user.phone" :readonly="formDisable" />
                </el-form-item>
              </el-col>
            </el-row>
          </el-card>
        </el-form>
      </div>
    </el-main>
  </el-container>
</template>

<script>
import { list, memberCodeDetail } from '@/api/memberCode'
export default {
  name: 'MemberCode',
  filters: {
    formatterStatus(row) {
      console.log(row)
    }
  },
  data() {
    return {
      memberCode: [],
      memberCodeDetail: {
        code: '',
        level: '',
        status: '',
        remark: '',
        user: {}
      },
      defaultProps: {
        children: 'children',
        label: 'code'
      },
      loadingDetail: false,
      formDisable: true
    }
  },
  created() {
    this.getList()
  },
  methods: {
    getList() {
      list().then((response) => {
        this.memberCode = response.data
        this.handleNodeClick(this.memberCode[0])
      })
    },
    handleNodeClick(row) {
      memberCodeDetail(row.code).then((response) => {
        this.memberCodeDetail = response.data
        this.loadingDetail = true
      })
    },
    formatterStatus(row) {
      console.log(row)
    }
  }
}
</script>

<style scoped>
</style>
