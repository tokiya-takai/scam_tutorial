<template>
  <div id="lesson-footer" class="lesson-footer">
    <div class="to-slide-btn-container"><a :href="slideLink"><button class="to-slide-btn"><img src="/images/slide.svg">スライドを見る</button></a></div>
  </div>
</template>

<script>
export default {
  props: {
    slideLink: String,
  }
}
</script>