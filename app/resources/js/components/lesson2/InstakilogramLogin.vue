<template>
  <div id="instakilogram-login" class="instakilogram-login">
    <article class="instakilogram-login-main">
      <div class="instakilogram-login-image">
        <div class="instakilogram-login-image-margin">
          <img class="animate__animated animate__slower"
            v-bind:class="{
              animate__fadeIn : isActiveFadeIn3,
              animate__fadeOut : isActiveFadeOut3,
            }"
          src="/images/instakilogram-display3.jpg" alt="">
          <img class="animate__animated animate__slower"
            v-bind:class="{
              animate__fadeIn : isActiveFadeIn2,
              animate__fadeOut : isActiveFadeOut2,
            }"
          src="/images/instakilogram-display2.jpg" alt="">
          <img class="animate__animated animate__slower opt"
            v-bind:class="{ 
              animate__fadeIn : isActiveFadeIn1,
              animate__fadeOut : isActiveFadeOut1,
            }"
            :style="'opacity:'+opacity+';'"
          src="/images/instakilogram-display1.jpg" alt="">
        </div>
      </div>
      <div class="instakilogram-login-input">
        <div class="instakilogram-login-input-container">
          <div class="instakilogram-logo"><img src="/images/instakilogram-logo.png" alt=""></div>
          <input type="text" placeholder="電話番号、ユーザーネーム、メールアドレス" required>
          <input type="password" placeholder="パスワード" required>
          <button type="button" role="button">ログイン</button>
        </div>
        <div class="instakilogram-login-input-sub">
          <span>アカウントをお持ちでないですか？</span><span><a href="javascript:void(0)">登録する</a></span>
        </div>
      </div>
    </article>
  </div>
</template>

<script>
export default {
  data() {
    return {
      isActiveFadeIn1: false,
      isActiveFadeIn2: false,
      isActiveFadeIn3: false,
      isActiveFadeOut1: false,
      isActiveFadeOut2: false,
      isActiveFadeOut3: false,
      isActiveOpacity1: true,
      isActiveOpacity2: false,
      isActiveOpacity3: false,
      displayStatus: 1,
      opacity: 1,
    }
  },
  mounted() {
    setInterval(function(){
      switch (this.displayStatus) {
        case 1:
          this.isActiveFadeIn3 = false;
          this.isActiveFadeOut2 = false;
          this.isActiveFadeOut1 = true;
          this.isActiveFadeIn2 = true;
          this.displayStatus = 2;
          this.$refs.img1.classList.add('top');
          break;
        case 2:
          this.isActiveFadeOut1 = false;
          this.isActiveFadeIn2 = false;
          this.isActiveFadeOut2 = true;
          this.isActiveFadeIn3 = true;
          this.displayStatus = 3;
          this.opacity = 0;
          break;
        case 3:
          this.isActiveFadeOut2 = false;
          this.isActiveFadeIn3 = false;
          this.isActiveFadeIn3 = true;
          this.isActiveFadeOut2 = true;
          this.displayStatus = 1;
          this.opacity = 1;
          break;
        default:
          break;
      }
    }.bind(this), 6000);
    }
}
</script>

<style>
  .opt {
    transition: opacity 3s;
  }
</style>