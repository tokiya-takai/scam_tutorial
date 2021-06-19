<template>
  <div class="lesson3-2 lesson-tutorial-area animate__animated"
    v-bind:class="{
      animate__fadeInRight: isActiveBack,
      animate__fadeOutRight: !isActiveNext,
      animate__fadeInLeft: !isActiveIntermediate,
      animate__fadeOutLeft: isActiveIntermediate,
    }">
    <h1 class="lesson3-tutorial-title">ファーミングの手口</h1>
    <div class="lesson3-tutorial-content">
      <span>
      </span>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    isActiveNext: Boolean,
    isActiveBack: Boolean,
    isActiveIntermediate: Boolean,
  }
}
</script>