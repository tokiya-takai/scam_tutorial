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
      this.currentView = "AmazonPassword";
    },
    toNotFound() {
      this.currentView = "NotFound";
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