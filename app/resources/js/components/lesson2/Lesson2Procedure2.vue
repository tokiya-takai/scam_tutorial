<template>
  <div id="procedure2" class="procedure2 procedure animate__animated animate__fadeInUp">
    <span class="procedure-title"><b>2.あらら、他人のアカウントでログインすることができてしまいました。</b><br></span>
    <p class="procedure-main-text">このアカウントの持ち主は、情報を手に入れたサイトとは別のサイトでも、同じアカウント情報を使っていることがわかりました。<br>
    正式な情報でログインしたので、あなたはこのアカウントを好きなようにできてしまいます。<br>例えばパスワードを変えて、持ち主がログインできないようにしたり、
    投稿したり、電話番号を手に入れることもできてしまいます。</p>
    <p class="procedure-caution">※このページはInstagram.comが提供しているものではありません。</p>
    <div class="to-login2">
      <button @click="childToTwoStepVerification()">次へ進む</button>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    childToTwoStepVerification() {
      this.$emit('parentToVerificationLogin');
    }
  }
}
</script>