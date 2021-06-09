<template>
  <div id="verification" class="verification">
    <div class="verification-container">
      <div class="verification-mark">
        <img src="/images/verification-mark.png" alt="verification">
      </div>
      <p class="verification-tel">電話番号(下4桁: 1234)に送信されたコードを入力してください。</p>
      <input class="input-security-code" v-model="securityCode" type="text" placeholder="セキュリティコード" maxlength="6">
      <button class="submit-security-code" @click="displayError()">実行</button>
      <p class="security-code-error" v-if="empty">セキュリティコードが必要です。</p>
      <p class="security-code-error" v-if="notEmpty">セキュリティコードをご確認のうえ、もう一度実行してください。</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      securityCode: "",
      empty: false,
      notEmpty: false,
    }
  },
  methods: {
    displayError(){
      if(this.securityCode == "") {
        this.empty = true;
        this.notEmpty = false;
      } else {
        this.notEmpty = true;
        this.empty = false;
      }
    }
  }
}
</script>