<template>
  <div class="lesson1-2 lesson-tutorial-area animate__animated"
    v-bind:class="{
      animate__fadeInRight: isActiveBack,
      animate__fadeOutRight: !isActiveNext,
      animate__fadeInLeft: !isActiveIntermediate,
      animate__fadeOutLeft: isActiveIntermediate,
    }">
    <h1 class="lesson1-tutorial-title">フィッシング詐欺の手口</h1>
    <div class="lesson1-tutorial-content">
      <span>フィッシング詐欺の手口は、年々多様化しています。<br>
      以前は、違和感のある日本語や怪しい文面からある程度判断できていましたが、現在では本物とほとんど見分けが付きません。
      </span>
      <ul class="list-phishing-technique">
        <li class="phishing-technique">1. 電子メールでフィッシングサイトに誘導する手口</li>
        <li class="phishing-technique">2. 電子掲示板などの情報でフィッシングサイトに誘導する手口</li>
        <li class="phishing-technique">3. URLを本物のURLに見せかけてアクセスさせる手口</li>
      </ul>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    isActiveNext: Boolean,
    isActiveBack: Boolean,
    isActiveIntermediate: Boolean,
    exerciseURL: String,
  }
}
</script>