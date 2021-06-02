<template>
  <div id="amazon" class="amazon">
    <div class="amazon-logo"><img src="/images/amazon-logo.png"></div>
    <div class="amazon-login-area">
      <div class="amazon-login-container">
        <p class="amazon-login-title">ログイン</p>
        <span class="amazon-login-email-or-tel">Eメールまたは携帯電話番号</span>
        <input class="amazon-login-input" v-bind:class="{ 'input-error': mailOrTelError }" type="text" v-model="input1">
        <span v-if="mailOrTelError" class="input-error-message"><i>!</i>Eメールアドレスまたは携帯電話番号を入力</span>
        <div class="amazon-login-submit" @click="childToAmazonPassword()">次に進む</div>
        <span class="amazon-login-supplement">
          続行することで、 Amazonの<a href="javascript:void(0)">利用規約</a>および<a href="javascript:void(0)">プライバシー規約</a>に同意するものとみなされます。
        </span>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      input1: "",
    }
  },
  props: {
    mailOrTelError: Boolean,
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
      this.$emit('catchInput1', this.input1);
      this.$emit('parentToAmazonPassword');
    }
  },
}
</script>