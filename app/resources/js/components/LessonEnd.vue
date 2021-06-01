<template>
  <div class="lesson1-1 lesson-tutorial-area animate__animated"
    v-bind:class="{ 
      animate__fadeInRight: isActiveIntermediate,
      animate__fadeOutRight: !isActiveIntermediate,
    }">
    <h1>3</h1>
    <div class="lesson1-tutorial-content">
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