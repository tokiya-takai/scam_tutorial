<template>
  <div class="lesson1-1 lesson-tutorial-area animate__animated"
    v-bind:class="{ 
      animate__fadeOutLeft: isActiveNext,
      animate__fadeInLeft: !isActiveNext,
    }">
    <h1>フィッシング詐欺とは？</h1>
    <div class="lesson1-tutorial-content">
      <span>フィッシング詐欺とは、ユーザーIDやパスワード、クレジットカード情報や住所等の情報を不正に取得する詐欺のことです。<br>
        緊急メールを模したメールを送りたり、本物そっくりに作った偽サイトでログインさせたりすることで、情報を抜き取られます。
      </span>
      <div class="phishing-hero-container">
        <img class="phishing-hero" src="/images/phishing-hero.png">
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
  }
}
</script>

<style>
h1 {
  padding: 30px 3%;
  font-size: 2rem;
}
span {
  display: inline-block;
  padding: 0 3%;
  font-size: 1.2rem;
  line-height: 1.8em;
}
.lesson1-tutorial-content {
  height: calc(100% - 96px);
}
.phishing-hero-container {
  width: 100%;
  height: 100%;
  padding: 0 3%;
  display: flex;
  justify-content: center;
  align-items: center;
}
.phishing-hero {
  height: 70%;
  margin: 0 auto;
}
</style>