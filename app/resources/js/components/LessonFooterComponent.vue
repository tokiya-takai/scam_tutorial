<template>
  <div id="lesson-footer" class="lesson-footer">
    <div class="to-slide-btn-container">
      <button class="to-slide-btn" @click="toSlide()"><img src="/images/slide.svg">スライドを見る</button>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    slideLink: String,
  },
  methods: {
    toSlide() {
      if (window.confirm('入力した内容などがリセットされますがよろしいですか？')) {
        window.location.href = this.slideLink;
        return;
      } else {
        return;
      }
    },
  },
}
</script>