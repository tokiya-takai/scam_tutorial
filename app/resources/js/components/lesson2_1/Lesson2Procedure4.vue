<template>
  <div id="procedure4" class="procedure4 procedure animate__animated animate__fadeInUp">
    <span class="procedure-title"><b>4.二段階認証のセキュリティコードが要求されました。</b><br></span>
    <p class="procedure-main-text">二段階認証を有効にしている場合、ログインをする際に、登録したメールアドレスや電話番号にセキュリティコードが送られます。<br>
    あなたは今回、不正にログインを試みましたが、アカウントの持ち主のメールアドレスに送られたメールや、電話番号に送られたSMSを見ることはできません。<br>
    そのため、セキュリティコードがわからず、ログインができません。<br>
    また、アカウントの持ち主には見に覚えのないセキュリティコードが届くため、不正アクセスを試みたことも知られてしまうでしょう。<br>
    </p>
    <p class="procedure-caution">※実際にセキュリティコードが送信されているわけではありません。</p>
    <p class="procedure-caution">※このログインページはInstagram.comが提供しているものではありません。</p>
    <div class="nextButton">
      <button @click="childToPasswordlistSolution()">次へ進む</button>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    childToPasswordlistSolution() {
      this.$emit('parentToPasswordlistSolution');
    }
  }
}
</script>