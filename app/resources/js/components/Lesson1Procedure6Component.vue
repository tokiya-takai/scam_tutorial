<template>
  <div id="procedure6" class="procedure6 procedure animate__animated animate__fadeInUp">
    <span class="procedure-title"><b>解決策を知りましょう！</b><br></span>
    <p class="procedure-main-text">
    残念ながら、あなたのログイン情報は、悪意のある第三者に抜き取られてしまいました。<br>
    では、どうすれば被害に遭わずに済んだのでしょうか？<br>
    <br>
    ①<br>
    メールの送信元を見てみましょう。<br>
    このメールは、「Amazon_info@1234.com」というメールアドレスから送信されているようです。<br>
    アドレスには確かに「Amazon」の文字があり、一見本物のようです。しかし、このアドレスはアマゾンの公式のものではありません。<br>
    このアドレスはサンプルですが、<b>もし実際に送られてきたアドレスが公式のものかどうか分からない時は、一度調べてみるのがおすすめです。</b><br>
    <br><br>
    ②<br>
    次に、添付されたリンクを見てみましょう。<br>
    このリンクは、一見正しいアドレスに見えます。<br>
    しかし、この見えているリンクは、偽物です。ただの文字列を、リンクっぽく見せているだけです。<br>
    実際は、メールを送信してきた悪意を持った第三者が用意した、偽物のWebサイトへのリンクが埋め込まれています。<br>
    <b>メールに添付されたリンクは、不用意にクリックしないことをおすすめします。</b><br>
    <br><br>
    ③<br>
    もしサイトにアクセスしてしまっても、それだけで何か起きるということは稀です。<br>
    途中で気がついた場合は、ただちにページを閉じましょう。<br>
    ですが、ログインなどのボタンを押してしまうと、手遅れの可能性はぐんと高まります。<br>
    入力したデータはすでに抜き取られてしまっているでしょう。<br>
    <b>気がついた場合は、ただちに正規ページからアクセスし直し、ログイン情報などを変更してください。</b><br>
    </p>
    <div class="end-lesson1-container">
      <button class="end-lesson1-btn" id="end-lesson-btn" @click="childToCongratulations()">レッスンを終了</button>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    childToCongratulations() {
      this.$emit('parentToCongratulations');
    },
  },
}
</script>