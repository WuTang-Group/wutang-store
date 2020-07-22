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
