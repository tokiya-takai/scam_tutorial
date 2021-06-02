<template>
  <div class="amazon">
    <div class="amazon-logo"><img src="/images/amazon-logo.png"></div>
    <div class="amazon-login-area">
      <div class="amazon-login-container">
        <p class="amazon-login-title">ログイン</p>
        <p class="amazon-login-entered-input1">{{ input1 }}</p>
        <div class="amazon-login-password-label">
          <span class="amazon-login-passowrd">パスワード</span>
          <span class="amazon-login-password-forgot"><a href="javascript:void(0)" class="forgot">パスワードを忘れた場合</a></span>
        </div>
        <input class="amazon-login-input" type="text" v-model="input2">
        <div class="amazon-login-submit" @click="childToNotFound()">ログイン</div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      input2: "",
    }
  },
  props: {
    input1: String,
  },
  methods: {
    childToMailContent() {
      this.$emit('parentToMailContent');
    },
    childBackMail() {
      this.$emit('parentBackMail');
    },
    childToAmazonEmailOrTel() {
      this.$emit('parentToAmazonEmailOrTel');
    },
    childToAmazonPassword(){
      this.$emit('parentToAmazonPassword');
    },
    childToNotFound() {
      this.$emit('parentToNotFound');
    }
  },
}
</script>