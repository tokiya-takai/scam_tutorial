<template>
  <div id="lesson1">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="exercise-area">
      <div class="procedure-container">
      </div>
      <div class="display-container">
        <component :is="currentView"
          @parentToMailContent="toMailContent"
          @parentBackMail="backMail"
          @parentToAmazonEmailOrTel="toAmazonEmailOrTel"
          @parentToAmazonPassword="toAmazonPassword"
          @parentToNotFound="toNotFound"
          @catchInput1="Input1fromChild"
          @catchInput2="Input2fromChild"
          :input1="input1"
          :mailOrTelError="mailOrTelError"
          :passwordError="passwordError"
        ></component>
      </div>
    </div>
    <LessonFotter></LessonFotter>
  </div>
</template>

<script>
import LessonHeader from './LessonHeaderComponent.vue'
import LessonFotter from './LessonFooterComponent.vue'
import Mail from './PhishingMailComponent.vue'
import MailText from './PhishingMailTextComponent.vue'
import AmazonEmailOrTel from './AmazonEmailOrTelComponent.vue'
import AmazonPassword from './AmazonPasswordComponent.vue'
import NotFound from './404NotFoundComponent.vue'

export default {
  components: {
    LessonHeader,
    LessonFotter,
    Mail,
    MailText,
    AmazonEmailOrTel,
    AmazonPassword,
    NotFound,
  },
  data() {
    return {
      lesson: "Lesson1 フィッシング詐欺 > メール",
      currentView: 'Mail',
      input1: "",
      input2: "",
      mailOrTelError: false,
      passwordError: false,
    }
  },
  methods: {
    toMailContent() {
      this.currentView = 'MailText';
    },
    backMail() {
      this.currentView = "Mail";
    },
    toAmazonEmailOrTel() {
      this.currentView = "AmazonEmailOrTel";
    },
    toAmazonPassword() {
      if(this.input1 != ""){
        this.currentView = "AmazonPassword";
        return;
      }
      this.mailOrTelError = true;
    },
    toNotFound() {
      if(this.input2 != ""){
        this.currentView = "NotFound";
        return
      }
      this.passwordError = true;
    },
    Input1fromChild(input1) {
      this.input1 = input1;
    },
    Input2fromChild(input2) {
      this.input2 = input2;
    }
  },
}
</script>