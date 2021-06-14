<template>
  <div id="congratulations" class="congratulations">
    <div v-if="lesson.number <= 2" class="congratulations-content">
      <h1>Congratulations!</h1>
      <div class="congratulations-content-body">
        <p>お疲れ様でした！Lesson{{ lesson.number }}-{{ lesson.sub_number }}をクリアしました！</p>
        <a href="/relay"><button class="congratulations-content-btn">トップページに戻る</button></a>
        <a v-if="isLoggedin" href="/listoflessons"><button class="congratulations-content-btn">レッスン一覧へ</button></a>
      </div>
      <div class="congratulations-content-indicator-container">
        <div class="congratulations-content-indicator-background">
          <div class="congratulations-content-indicator" :style="'width:' + width + '%;'"></div>
        </div>
        <span class="congratulations-content-all-lessons">1/1</span>
      </div>
      <div class="congratulations-content-message">
        <p>{{ message }}</p>
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
    lesson: Object,
    message: String,
    isLoggedin: {
      type: Boolean,
      default: false,
    }
  },
  mounted() {
    setTimeout(this.updateIndicator, 300);
  },
  methods: {
    updateIndicator() {
      this.width = this.lesson.percentage;
    },
  },
}
</script>

<style>
.congratulations-content-indicator {
  transition: width 1.5s;
}
</style>