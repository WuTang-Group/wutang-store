<template>
  <user-form :params="params" />
</template>

<script>
import UserForm from './components/UserForm'
export default {
  name: 'EditUser',
  components: { UserForm },
  data() {
    return {
      params: {}
    }
  },
  created() {
    const that = this
    that.params = that.$route.query || {}
  }
}
</script>
