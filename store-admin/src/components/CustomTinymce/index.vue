<template>
  <div class="app-container">
    <el-dialog
      title="编辑器"
      :visible.sync="myTinymceDialogVisible"
      width="50%"
      @close="sendDatatoParent"
    >
      <tinymce v-model="data" :height="50" />
      <span slot="footer" class="dialog-footer">
        <el-button @click="myTinymceDialogVisible = false">取 消</el-button>
        <el-button type="primary" @click="myTinymceDialogVisible = false">确 定</el-button>
      </span>
    </el-dialog>
  </div>
</template>

<script>
import Tinymce from '@/components/Tinymce'
export default {
  name: 'CustomTinymce',
  components: {
    Tinymce
  },
  props: {
    data: {
      type: String,
      required: false,
      default: ''
    }
  },
  data() {
    return {
      myTinymceDialogVisible: false
    }
  },
  created() {
    this.openDialog()
  },
  methods: {
    openDialog() {
      this.myTinymceDialogVisible = true
    },
    sendDatatoParent() {
      this.$emit('tinymceData', this.data)
    }
  }
}
</script>

<style scoped>

</style>
