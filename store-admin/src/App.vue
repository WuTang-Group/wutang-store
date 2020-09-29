<template>
  <div id="app">
    <router-view />
  </div>
</template>

<script>
import { mapMutations } from 'vuex'
export default {
  name: 'App',
  created() {
    const that = this
    that.updateClientHeight()
    window.onresize = () => {
      that.updateClientHeight()
    }
  },
  methods: {
    ...mapMutations({
      updateScreenHeight: 'updateScreenHeight'
    }),
    updateClientHeight() {
      const that = this
      const fullHeight = document.documentElement.clientHeight
      // 将页面高度保存到vuex中管理
      that.updateScreenHeight(fullHeight)
    }
  }
}
</script>
<style lang="scss">
  /* 鼠标移入表格行样式 */
  .el-table--enable-row-hover .el-table__body tr:hover > td {
    cursor: pointer;
  }
  /* 去除抽屉标题蓝色边框 */
  .el-drawer__header span:focus {
    outline: 0;
  }
</style>
