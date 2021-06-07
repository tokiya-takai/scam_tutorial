<template>
  <div id="lesson1">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="exercise-area">
      <div class="procedure-container">
        <div class="procedure-header">
          <img class="procedure-icon" src="/images/procedure.svg"><span>手順</span>
        </div>
        <div class="procedure-area">
          <component :is="currentProcedure"
            @parentToCongratulations="toCongratulations"
          ></component>
        </div>
      </div>
      <div class="display-container">
        <component :is="currentView"
          @parentToMailContent="toMailContent"
          @parentBackMail="backMail"
          @parentToAmazonEmailOrTel="toAmazonEmailOrTel"
          @parentToAmazonPassword="toAmazonPassword"
          @parentToNotFound="toNotFound"
          @parentToSolution="toSolution"
          @catchInput1="Input1fromChild"
          @catchInput2="Input2fromChild"
          :input1="input1"
          :input2="input2"
          :mailOrTelError="mailOrTelError"
          :passwordError="passwordError"
          :lessonStatus="lessonStatus"
        ></component>
      </div>
    </div>
    <LessonFotter :slideLink="'/lesson1'"></LessonFotter>
  </div>
</template>

<script>
import LessonHeader from '../LessonHeaderComponent.vue'
import LessonFotter from '../LessonFooterComponent.vue'
// 手順
import Procedure1 from './Lesson1Procedure1Component.vue'
import Procedure2 from './Lesson1Procedure2Component.vue'
import Procedure3 from './Lesson1Procedure3Component.vue'
import Procedure4 from './Lesson1Procedure4Component.vue'
import Procedure5 from './Lesson1Procedure5Component.vue'
import Procedure6 from './Lesson1Procedure6Component.vue'
// 実際に操作するエリアに関係
import Mail from './PhishingMailComponent.vue'
import MailText from './PhishingMailTextComponent.vue'
import AmazonEmailOrTel from './AmazonEmailOrTelComponent.vue'
import AmazonPassword from './AmazonPasswordComponent.vue'
import NotFound from './404NotFoundComponent.vue'
import Indicator from '../IndicatorComponent.vue'
import Solution from './Lesson1SolutionComponent.vue'
// Congratulations
import Congratulations from './CongratulationsComponent.vue'

export default {
  components: {
    LessonHeader,
    LessonFotter,
    Mail,
    MailText,
    AmazonEmailOrTel,
    AmazonPassword,
    NotFound,
    Solution,
    Procedure1,
    Procedure2,
    Procedure3,
    Procedure4,
    Procedure5,
    Procedure6,
    Indicator,
    Congratulations,
  },
  data() {
    return {
      lesson: "Lesson1 フィッシング詐欺",
      currentView: 'Mail',
      input1: "",
      input2: "",
      mailOrTelError: false,
      passwordError: false,

      currentProcedure: 'Procedure1',

      // Lesson1 -> true, others -> false
      // Congratulationsでlesson2以降は処理を追加する予定
      lessonStatus: true,
    }
  },
  methods: {
    // メール本文へ
    toMailContent() {
      this.currentView = 'MailText';
      this.currentProcedure = 'Procedure2';
    },
    // 受信トレイへ
    backMail() {
      this.currentView = "Mail";
      this.currentProcedure = 'Procedure1';
    },
    // アマゾンログイン画面1
    toAmazonEmailOrTel() {
      this.currentProcedure = "Procedure3";
      this.currentView = "AmazonEmailOrTel";
    },
    // アマゾンログイン画面2
    toAmazonPassword() {
      if(this.input1 != ""){
        this.currentProcedure = "Procedure4";
        this.currentView = "AmazonPassword";
        return;
      }
      this.mailOrTelError = true;
    },
    // 404 エラーページ(インジケータを回転)
    toNotFound() {
      if(this.input2 != ""){
        this.currentView = "Indicator";
        setTimeout(this.toNotFoundPage, 2000);
        return
      }
      this.passwordError = true;
    },
    // インジケータ表示後、404エラーページを表示
    toNotFoundPage() {
      this.currentProcedure = "Procedure5";
      this.currentView = "NotFound";
    },
    // 解決策ページへ
    toSolution() {
      this.currentProcedure = "Procedure6";
      this.currentView = "Solution";
    },
    // 終了ページへ
    toCongratulations() {
      this.currentProcedure = "";
      this.currentView = "Congratulations";
    },
    // メールor電話番号を子コンポーネントから吸い上げ
    Input1fromChild(input1) {
      this.input1 = input1;
    },
    // パスワードを子コンポーネントから吸い上げ
    Input2fromChild(input2) {
      this.input2 = input2;
    }
  },
}
</script>