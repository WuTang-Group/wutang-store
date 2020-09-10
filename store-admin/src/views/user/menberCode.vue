<template>
  <div class="app-container">
    <el-tree :data="memberCode" :props="defaultProps" @node-click="handleNodeClick" />
  </div>
</template>

<script>
import { list } from '@/api/memberCode'
export default {
  name: 'MemberCode',
  data() {
    return {
      memberCode: [],
      defaultProps: {
        children: 'children',
        label: 'code'
      }
    }
  },
  created() {
    this.getList()
  },
  methods: {
    getList() {
      list().then((response) => {
        console.log(response)
        this.memberCode = response.data
        console.log(this.memberCode)
      })
    },
    handleNodeClick() {
      console.log(this.memberCode)
    }
  }
}
</script>

<style scoped>

</style>
