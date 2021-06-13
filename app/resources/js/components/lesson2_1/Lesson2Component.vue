<template>
  <div id="lesson2">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="exercise-area">
      <div class="procedure-container">
        <div class="procedure-header">
          <img class="procedure-icon" src="/images/procedure.svg"><span>手順</span>
        </div>
        <div class="procedure-area">

          <component :is="currentProcedure"
            @parentToVerificationLogin="toVerificationLogin"
            @parentToPasswordlistSolution="toPasswordlistSolution"
            @parentToCongratulations="toCongratulations"
          ></component>

        </div>
      </div>
      <div class="display-container">

        <component :is="currentView"
          @parentToInstakilogramTimeLine="toInstakilogramTimeLine"
          @parentToVerificationPage="toVerificationPage"
          :verificationFlag="verificationFlag"
          :lessonStatus="lessonStatus"
          :lessonNumber="lessonNumber"
        ></component>

      </div>
    </div>
    <LessonFotter :slideLink="'/lesson2'"></LessonFotter>
  </div>
</template>

<script>
import LessonHeader from '../LessonHeaderComponent.vue'
import LessonFotter from '../LessonFooterComponent.vue'
// 操作する部分
import Indicator from '../IndicatorComponent.vue'
import InstakilogramLogin from './InstakilogramLogin.vue'
import InstakilogramTimeLine from './InstakilogramTimeLine.vue'
import VerificationPage from './VerificationPage.vue'
import PasswordlistSolution from './PasswordlistSolution.vue'
// 手順
import Procedure1 from './Lesson2Procedure1.vue'
import Procedure2 from './Lesson2Procedure2.vue'
import Procedure3 from './Lesson2Procedure3.vue'
import Procedure4 from './Lesson2Procedure4.vue'
import Procedure5 from './Lesson2Procedure5.vue'
// Congratulations
import Congratulations from '../CongratulationsComponent.vue'

export default {
  components: {
    LessonHeader,
    LessonFotter,
    Indicator,
    InstakilogramLogin,
    InstakilogramTimeLine,
    VerificationPage,
    PasswordlistSolution,
    Procedure1,
    Procedure2,
    Procedure3,
    Procedure4,
    Procedure5,
    Congratulations
  },
  data() {
    return {
      lesson: "Lesson2 パスワードリスト攻撃",
      currentView: "InstakilogramLogin",
      currentProcedure: 'Procedure1',
      verificationFlag: false,
      lessonStatus: true,
      lessonNumber: "Lesson2",
    }
  },
  methods: {
    // ログイン後、インジケータを表示してタイムラインへ
    toInstakilogramTimeLine() {
      this.currentView = "Indicator";
      setTimeout(function(){
        this.currentView = 'InstakilogramTimeLine';
        this.currentProcedure = 'Procedure2';
      }.bind(this), 2000);
    },
    // タイムライン表示後、二段階認証バージョンへ
    toVerificationLogin() {
      this.verificationFlag = true;
      this.currentView = "InstakilogramLogin";
      this.currentProcedure = "Procedure3";
    },
    // 二段階認証ページへ
    toVerificationPage() {
      this.currentView = "VerificationPage";
      this.currentProcedure = "Procedure4";
    },
    // 解決ページへ
    toPasswordlistSolution() {
      this.currentView = "PasswordlistSolution";
      this.currentProcedure = "Procedure5"
    },
    // 終了ページへ
    toCongratulations() {
      this.currentProcedure = "";
      this.currentView = "Congratulations";
    },
  }
}
</script>