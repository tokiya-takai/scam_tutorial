<template>
  <div id="procedure2" class="procedure2 procedure animate__animated animate__fadeInUp">
    <span class="procedure-title"><b>今回は、犯人になり切ってみましょう。</b><br></span>
    <p class="procedure-main-text">Lesson1で学習したフィッシングによって、以下のメールアドレスとパスワードを手に入れました。</p>
    <p class="procedure-main-data">メールアドレス: example@ilite.co.jp
        <span class="copied copied-address animate__animated animate__fadeInUp animate__faster" :style="style1">Copied!</span>
        <button>
        <img src="/images/clipboard.svg"
          v-clipboard:copy="address"
          v-clipboard:success="onCopy"
          v-clipboard:error="onError"
        ></button>
    </p>
    <p class="procedure-main-data">パスワード: mypassword123
        <span class="copied animate__animated animate__fadeInUp animate__faster" :style="style2">Copied!</span>
        <button><img src="/images/clipboard.svg"
          v-clipboard:copy="pass"
          v-clipboard:success="onCopy"
          v-clipboard:error="onError"
        ></button>
    </p>
    <p class="procedure-sub-info"><img src="/images/clipboard.svg">を押すとコピーできます。</p>
    <p class="procedure-main-text">これを入力してInstakilogramにログインを試みましょう。</p>
    <p class="procedure-caution">※このログインページはInstagram.comが提供しているものではありません。</p>
  </div>
</template>

<script>
export default {
  data() {
    return {
      address: "example@ilite.co.jp",
      pass: "mypassword123",
      style1: "display: none;",
      style2: "display: none;"
    }
  },
  methods: {
    onCopy: function(target) {
      switch (target.text) {
        case 'example@ilite.co.jp':
          this.style1 = "display: block;";
          setTimeout(function() {
            this.style1 = "display: none;";
          }.bind(this),2000);
          break;
        case 'mypassword123':
          this.style2 = "display: block;";
          setTimeout(function() {
            this.style2 = "display: none;";
          }.bind(this),2000);
          break;
        default:
          break;
      }
    },
    onError: function(target) {
      switch (target.text) {
        case 'example@ilite.co.jp':
          this.style1 = "display: block;";
          setTimeout(function() {
            this.style1 = "display: none;";
          }.bind(this),2000);
          break;
        case 'mypassword123':
          this.style2 = "display: block;";
          setTimeout(function() {
            this.style2 = "display: none;";
          }.bind(this),2000);
          break;
        default:
          break;
      }
    },
  }
}
</script>