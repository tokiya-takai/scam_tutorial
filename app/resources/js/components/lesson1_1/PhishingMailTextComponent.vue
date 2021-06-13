<template>
  <div id="phishing-mail-text" class="phishing-mail">
    <div class="phishing-mail-header">
      <img src="/images/goodluck.png" class="goodluck-logo">
    </div>
    <div class="phishing-mail-content">
      <div class="phishing-mail-side-bar">
        <ul class="phishing-mail-side-bar-list">
          <li class="phishing-mail-side-bar-list-current" @click="childBackMail()"><img src="/images/task-tray.svg">受信トレイ</li>
          <li><img src="/images/draft.svg">下書き</li>
        </ul>
      </div>
      <div class="phishing-mail-text">
        <div class="phishing-mail-text-title">
          <h2>【重要】情報を更新する必要があります。</h2>
        </div>
        <div class="phishing-mail-text-content">
          <div class="phishing-mail-text-content-sender">
            <img src="/images/user.png"><span><b>Amazooon_info@1234.com</b></span>
          </div>
          <div class="phishing-mail-text-content-body">
            <p>Amazooonプライムをご利用頂きありがとうございます。{{ day | moment }}に、あなたのアカウントに不正ログインの疑いのあるアクセスがありました。<br>
            お客様のログイン情報は既に漏洩している可能性があります。下記リンクからAmazooon.co.jpにログインし、情報の更新を行ってください。</p>
            <p><a href="javascript:void(0);" class="phising-link" @click="childToAmazonEmailOrTel()">https://www.amazooon.co.jp/ap/signin</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import moment from "moment";

export default {
  data() {
    return {
      day: Date,
    }
  },
  mounted() {
    var day = new Date();
    this.day = day.setDate(day.getDate() - 1);
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
    }
  },
  filters: {
    moment(value) {
      return moment(value).format('YYYY/MM/DD HH:mm');
    }
  }
}
</script>