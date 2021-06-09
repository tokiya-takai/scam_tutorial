<template>
  <div id="procedure3" class="procedure3 procedure animate__animated animate__fadeInUp">
    <span class="procedure-title"><b>3.では、ログインできないのはどんな場合でしょうか？</b><br></span>
    <p class="procedure-main-text">先ほどと同じように以下の情報を入力してログインを試みてください。</p>
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