<template>
  <div id="congratulations" class="congratulations">
    <div v-if="lessonStatus">
      <div>lesson1</div>
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