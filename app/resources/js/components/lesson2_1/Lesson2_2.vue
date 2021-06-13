<template>
  <div class="lesson2-2 lesson-tutorial-area animate__animated"
    v-bind:class="{
      animate__fadeInRight: isActiveBack,
      animate__fadeOutRight: !isActiveNext,
      animate__fadeInLeft: !isActiveIntermediate,
      animate__fadeOutLeft: isActiveIntermediate,
    }">
    <h1 class="lesson2-tutorial-title">パスワードリスト攻撃の手口</h1>
    <div class="lesson2-tutorial-content">
      <span>パスワードリスト攻撃は、手に入れたIDやパスワードなどのログイン情報を使って、漏洩先のユーザーが利用していそうなサービスへのログインを試みます。<br>
      <br>一般的には、ユーザーは複数のサービスを利用しています。それぞれのサービスでIDやパスワードが必要なため、同じIDやパスワードを設定していることが多いです。<br>
      攻撃者はそこを突いて、不正ログインを行おうとするわけです。
      </span>
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