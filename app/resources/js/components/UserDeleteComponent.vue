<template>
  <div id="user-delete" class="user-delete">
    <div class="user-delete-container">
      <div class="user-delete-header">アカウントを削除</div>
      <p class="user-delete-message">i-Liteをご利用頂きありがとうございます。<br>アカウントを削除する場合は、「削除」と入力して削除ボタンを押してください。</p>
      <form :action="userDeleteUrl" method="post" @submit="userDelete">

        <input type="hidden" name="_token" v-bind:value="csrf">

        <div class="form-group">
          <input type="text" maxlength="2" name="delete" v-model="value" @input="detection" placeholder="削除" required autofocus>
        </div>
        <div class="submit-form-group">
          <button v-if="canDelete" type="submit" class="auth-submit-btn btn btn-primary">削除</button>
          <button v-else class="dummy-submit-btn" type="button" role="button">削除</button>
        </div>

      </form>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      value: "",
      canDelete: false,
      userDeleteUrl: "/userdelete/" + this.user_id + "/delete"
    }
  },
  props: {
    csrf: {
      type: String,
      required: true,
    },
    user_id: Number,
  },
  methods: {
    detection() {
      const equalValue = "削除";
      if(this.value === equalValue) {
        this.canDelete = true;
      } else {
        this.canDelete = false;
      }
    },
    userDelete(e) {
      const answer = window.confirm('確認');
      if(!answer) {
        e.preventDefault();
        return;
      } else {
        return;
      }
    },
  },
}
</script>