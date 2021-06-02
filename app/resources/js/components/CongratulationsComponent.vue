<template>
  <div id="congratulations" class="congratulations">
    <div v-if="lessonStatus" class="congratulations-lesson1">
      <h1>Congratulations!</h1>
      <div class="congratulations-lesson1-body">
        <p>お疲れ様でした！Lesson1をクリアしました！</p>
        <button class="congratulations-lesson1-btn">トップページに戻る</button>
      </div>
    </div>
    <div v-else>
      <div>Others</div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    lessonStatus: Boolean,
  },
}
</script>