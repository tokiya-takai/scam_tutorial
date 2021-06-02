<template>
  <div id="not-found" class="not-found">
    <h1>404 Not Found</h1>
    <p class="not-found-error-message">お探しのページが見つかりませんでした。<br>
    トップページに戻るには<a href="javascript:void(0)">こちら</a>をクリックしてください。
    </p>
    <div class="to-solution-fotter">
      <div class="to-solution-result">
        <div class="to-solution-result-body">
          <span><b>抜き取られた情報</b></span>
          <span>{{ input1 }}</span>
          <span>{{ input2 }}</span>
        </div>
      </div>
      <div class="to-solution-btn-area">
        <button class="to-solution-btn" @click="childToSolution()">次へ進む</button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    input1: String,
    input2: String,
  },
  methods: {
    childToSolution() {
      this.$emit('parentToSolution');
    },
  },
}
</script>