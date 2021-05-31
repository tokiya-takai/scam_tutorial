<template>
  <div class="lesson-header">
    <img src="/images/small-logo.png">
    <h2>{{ lesson }}</h2>
  </div>
</template>

<script>
export default {
  props: {
    lesson: String,
  }
}
</script>