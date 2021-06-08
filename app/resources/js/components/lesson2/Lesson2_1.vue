<template>
  <div class="lesson2-1 lesson-tutorial-area animate__animated"
    v-bind:class="{ 
      animate__fadeOutLeft: isActiveNext,
      animate__fadeInLeft: !isActiveNext,
    }">
    <h1 class="lesson2-tutorial-title">パスワードリスト攻撃とは？</h1>
    <div class="lesson2-tutorial-content">
      <span>パスワードリスト攻撃とは、何らかの原因で漏洩したIDやパスワードを使って別のサービスにログインする不正アクセスのことです。<br>
      正規のアカウント情報であるため、攻撃を受けたサービス側では不正アクセスかどうかを判断するのが難しい攻撃です。
      </span>
      <div class="phishing-hero-container">
        <img class="phishing-hero" src="/images/passwordlist-hero.jpg">
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