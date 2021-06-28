<template>
  <div class="lesson3-1 lesson-tutorial-area animate__animated"
    v-bind:class="{ 
      animate__fadeOutLeft: isActiveNext,
      animate__fadeInLeft: !isActiveNext,
    }">
    <h1 class="lesson3-tutorial-title">標的型メール</h1>
    <div class="lesson3-tutorial-content">
      <span>標的型メールとは、機密情報を窃取することなどを目的に、特定の個人や企業を狙って行う攻撃のことです。<br>
      攻撃者は、何らかの理由で攻撃目標を定め、事前に情報収集をします。そのため、不特定多数を狙ったフィッシング攻撃と違い、
      信憑性のあるメールが届くため、非常に騙されやすい攻撃です。</span>
      <div class="tutorial-img-container">
        <img class="tutorial-img" src="/images/targeted-mail.jpg">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    isActiveNext: Boolean,
  }
}
</script>