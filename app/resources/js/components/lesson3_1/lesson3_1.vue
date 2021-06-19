<template>
  <div class="lesson3-1 lesson-tutorial-area animate__animated"
    v-bind:class="{ 
      animate__fadeOutLeft: isActiveNext,
      animate__fadeInLeft: !isActiveNext,
    }">
    <h1 class="lesson3-tutorial-title">ファーミング</h1>
    <div class="lesson3-tutorial-content">
      <div class="phishing-hero-container">
        <img class="phishing-hero" src="">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    isActiveNext: Boolean,
  }
}
</script>