<template>
  <div class="lesson1-1 lesson-tutorial-area animate__animated"
    v-bind:class="{ 
      animate__fadeOutLeft: isActiveNext,
      animate__fadeInLeft: !isActiveNext,
    }">
    <h1 class="lesson1-tutorial-title">フィッシング詐欺とは？</h1>
    <div class="lesson1-tutorial-content">
      <span>フィッシング詐欺とは、ユーザーIDやパスワード、クレジットカード情報や住所等の情報を不正に取得する詐欺のことです。<br>
        緊急メールを模したメールを送ったり、本物そっくりに作った偽サイトでログインさせたりすることで、情報を抜き取られます。
      </span>
      <div class="tutorial-img-container">
        <img class="tutorial-img" src="/images/phishing-hero.png">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    isActiveNext: Boolean,
    isActiveBack: Boolean,
    isActiveIntermediate: Boolean,
    exerciseURL: String,
  }
}
</script>