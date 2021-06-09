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
          ></component>
          
        </div>
      </div>
      <div class="display-container">

        <component :is="currentView"
          @parentToInstakilogramTimeLine="toInstakilogramTimeLine"
        ></component>

      </div>
    </div>
    <LessonFotter :slideLink="'/lesson2'"></LessonFotter>
  </div>
</template>

<script>
import LessonHeader from '../LessonHeaderComponent.vue'
import LessonFotter from '../LessonFooterComponent.vue'
import InstakilogramLogin from './InstakilogramLogin.vue'
import InstakilogramTimeLine from './InstakilogramTimeLine.vue'
import Procedure1 from './Lesson2Procedure1.vue'
import Procedure2 from './Lesson2Procedure2.vue'

export default {
  components: {
    LessonHeader,
    LessonFotter,
    InstakilogramLogin,
    InstakilogramTimeLine,
    Procedure1,
    Procedure2
  },
  data() {
    return {
      lesson: "Lesson2 パスワードリスト攻撃",
      currentView: "InstakilogramLogin",
      currentProcedure: 'Procedure1'
    }
  },
  methods: {
    toInstakilogramTimeLine() {
      this.currentView = 'InstakilogramTimeLine';
      this.currentProcedure = 'Procedure2';
    }
  }
}
</script>