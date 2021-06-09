<template>
  <div id="procedure5" class="procedure5 procedure animate__animated animate__fadeInUp">
    <span class="procedure-title"><b>5.では、解決策を見ていきましょう。</b><br></span>
    <p class="procedure-main-text">解決策はもう予想が付きますね。<br>
    以下のことを気をつければ良いのです。
    </p>
    <p class="procedure-main-data">パスワードを使い回さない</p>
    <p class="procedure-main-data">二段階認証を有効にする</p>
    <p class="procedure-main-data">見に覚えのない二段階認証要求が来たら、情報を変更する</p>
    <div class="nextButton">
      <button @click="childToCongratulations()">レッスンを終了</button>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    childToCongratulations() {
      this.$emit('parentToCongratulations');
    }
  }
}
</script>