<template>
  <div class="lesson-end lesson-tutorial-area animate__animated"
    v-bind:class="{ 
      animate__fadeInRight: isActiveIntermediate,
      animate__fadeOutRight: !isActiveIntermediate,
    }">
    <div class="lesson-end-content">
      <h2>スライドはここまでです。<br>実際に見てみましょう。</h2>
      <p>当アプリで使用する偽サイトは、当アプリで作成された安全なものです。</p>
      <a :href="exerciseURL" class="to-exercise-btn"><button>演習に進む</button></a>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    isActiveNext: Boolean,
    isActiveBack: Boolean,
    isActiveIntermediate: Boolean,
    exerciseURL: String,
  }
}
</script>