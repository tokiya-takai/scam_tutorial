<template>
  <div class="lesson1-2 lesson-tutorial-area animate__animated"
    v-bind:class="{
      animate__fadeInRight: isActive,
      animate__fadeOutRight: !isActive,
    }">
    <h1>lesson1_2</h1>
  </div>
</template>

<script>
export default {
  props: {
    isActive: Boolean,
  }
}
</script>