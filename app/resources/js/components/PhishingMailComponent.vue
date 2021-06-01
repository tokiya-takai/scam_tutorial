<template>
  <div id="phishing-mail" class="phishing-mail">
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
      <div class="phishing-mail-mails-area">
        <div class="phishing-mail-mails-header">
          <div class="phishing-mail-mails-header-current"><img src="/images/task-tray.svg">メイン</div>
          <div class="phishing-mail-mails-mail">
            <button class="mail-btn" @click="childToMailContent()">
              <div class="mail-sender"><span class="dummy-check-box">□</span>アマゾン</div>
              <div class="mail-title">【重要】情報を更新する必要があります。</div>
            </button>
          </div>
          <ul v-for="n of 15">
            <div class="dummy-mails">
              <div class="mail-sender"><span class="dummy-check-box">□</span>i-Lite</div>
              <div class="mail-title">アプリをご利用頂きありがとうございます。</div>
            </div>
          </ul>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
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