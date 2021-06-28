<template>
  <div class="lesson3-2 lesson-tutorial-area animate__animated"
    v-bind:class="{
      animate__fadeInRight: isActiveBack,
      animate__fadeOutRight: !isActiveNext,
      animate__fadeInLeft: !isActiveIntermediate,
      animate__fadeOutLeft: isActiveIntermediate,
    }">
    <h1 class="lesson3-tutorial-title">標的型メールの手口</h1>
    <div class="lesson3-tutorial-content">
      <span>標的を決めた攻撃者は、ターゲットの情報を収集します。そして、ターゲットの企業と関連性の高い、
      実在する取引先などを装ってメールを送ってきたり、添付ファイルに業務に関係のありそうな名前を付けたりと、標的型メールと判断するのが難しくなっています。
      </span>
      <div class="tutorial-img-container">
        <img class="tutorial-img" src="/images/targeted-mail-2.png">
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    isActiveNext: Boolean,
    isActiveBack: Boolean,
    isActiveIntermediate: Boolean,
  }
}
</script>