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
            <img src="/images/user.png"><span><b>Amazon_info@1234.com</b></span>
          </div>
          <div class="phishing-mail-text-content-body">
            <p>Amazonプライムをご利用頂きありがとうございます。お客様のAmazonプライム会員資格は、{{ day }}に更新を迎えます。<br>
            お調べしたところ、会費のお支払いに使用できる有効なクレジットカードがアカウントに登録されていません。クレジットカード情報の更新、<br>
            新しいクレジットカードの追加については、以下の手順をご確認ください。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      day: new Date(),
    }
  },
  methods: {
    childToMailContent() {
      this.$emit('parentToMailContent');
    },
    childBackMail() {
      this.$emit('parentBackMail');
    },
  },
}
</script>