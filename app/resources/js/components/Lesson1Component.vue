<template>
  <div id="lesson1">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="exercise-area">
      <div class="procedure-container">
        <div class="procedure-header">
          <img class="procedure-icon" src="/images/procedure.svg"><span>手順</span>
        </div>
        <div class="procedure-area">
          <component :is="currentProcedure"></component>
        </div>
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
// 手順
import Procedure1 from './Lesson1Procedure1Component.vue'
import Procedure2 from './Lesson1Procedure2Component.vue'
import Procedure3 from './Lesson1Procedure3Component.vue'
import Procedure4 from './Lesson1Procedure4Component.vue'
import Procedure5 from './Lesson1Procedure5Component.vue'
// 実際に操作するエリアに関係
import Mail from './PhishingMailComponent.vue'
import MailText from './PhishingMailTextComponent.vue'
import AmazonEmailOrTel from './AmazonEmailOrTelComponent.vue'
import AmazonPassword from './AmazonPasswordComponent.vue'
import NotFound from './404NotFoundComponent.vue'
import Indicator from './IndicatorComponent.vue'

export default {
  components: {
    LessonHeader,
    LessonFotter,
    Mail,
    MailText,
    AmazonEmailOrTel,
    AmazonPassword,
    NotFound,
    Procedure1,
    Procedure2,
    Procedure3,
    Procedure4,
    Procedure5,
    Indicator,
  },
  data() {
    return {
      lesson: "Lesson1 フィッシング詐欺 > メール",
      currentView: 'Mail',
      input1: "",
      input2: "",
      mailOrTelError: false,
      passwordError: false,

      currentProcedure: 'Procedure1',
    }
  },
  methods: {
    toMailContent() {
      this.currentView = 'MailText';
      this.currentProcedure = 'Procedure2';
    },
    backMail() {
      this.currentView = "Mail";
      this.currentProcedure = 'Procedure1';
    },
    toAmazonEmailOrTel() {
      this.currentProcedure = "Procedure3";
      this.currentView = "AmazonEmailOrTel";
    },
    toAmazonPassword() {
      if(this.input1 != ""){
        this.currentProcedure = "Procedure4";
        this.currentView = "AmazonPassword";
        return;
      }
      this.mailOrTelError = true;
    },
    toNotFound() {
      if(this.input2 != ""){
        this.currentView = "Indicator";
        setTimeout(this.toNotFoundPage, 2000);
        return
      }
      this.passwordError = true;
    },
    toNotFoundPage() {
      this.currentProcedure = "Procedure5";
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