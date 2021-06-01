<template>
  <div id="lesson1">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="exercise-area">
      <div class="procedure-container">
      </div>
      <div class="display-container">
        <component :is="currentView"></component>
      </div>
    </div>
    <LessonFotter></LessonFotter>
  </div>
</template>

<script>
import LessonHeader from './LessonHeaderComponent.vue'
import LessonFotter from './LessonFooterComponent.vue'
import Mail from './PhishingMailComponent.vue'

export default {
  components: {
    LessonHeader,
    LessonFotter,
    Mail,
  },
  data() {
    return {
      lesson: "Lesson1 フィッシング詐欺",
      currentView: 'Mail',
    }
  }
}
</script>