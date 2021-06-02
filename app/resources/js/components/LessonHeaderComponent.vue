<template>
  <div class="lesson-header">
    <a href="/"><img src="/images/small-logo.png" class="lesson-header-logo lesson-header-logo-animated animate__animated"></a>
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