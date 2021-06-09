<template>
  <div id="congratulations" class="congratulations">
    <div v-if="lessonStatus" class="congratulations-lesson1">
      <h1>Congratulations!</h1>
      <div class="congratulations-lesson1-body">
        <p>お疲れ様でした！{{ lessonNumber }}をクリアしました！</p>
        <a href="/relay"><button class="congratulations-lesson1-btn">トップページに戻る</button></a>
      </div>
      <div class="congratulations-lesson1-indicator-container">
        <div class="congratulations-lesson1-indicator-background">
          <div class="congratulations-lesson1-indicator" :style="'width:' + width + '%;'"></div>
        </div>
        <span class="congratulations-lesson1-all-lessons">1/1</span>
      </div>
    </div>
    <div v-else>
      <div>Others</div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      width: 0,
    }
  },
  props: {
    lessonStatus: Boolean,
    lessonNumber: String,
  },
  mounted() {
    setTimeout(this.updateIndicator, 300);
  },
  methods: {
    updateIndicator() {
      this.width = 100;
    },
  },
}
</script>

<style>
.congratulations-lesson1-indicator {
  transition: width 1.5s;
}
</style>