<template>
  <div id="lesson2">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="exercise-area">
      <div class="procedure-container">
        <div class="procedure-header">
          <img class="procedure-icon" src="/images/procedure.svg"><span>手順</span>
        </div>
        <div class="procedure-area">
          <component></component>
        </div>
      </div>
      <div class="display-container">
        <component></component>
      </div>
    </div>
    <LessonFotter :slideLink="'/lesson2'"></LessonFotter>
  </div>
</template>

<script>
import LessonHeader from '../LessonHeaderComponent.vue'
import LessonFotter from '../LessonFooterComponent.vue'


export default {
  components: {
    LessonHeader,
    LessonFotter
  },
  data() {
    return {
      lesson: "Lesson2 パスワードリスト攻撃",
    }
  }
}
</script>