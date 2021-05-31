<template>
  <div class="lesson1-tutorial">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="lesson1-tutorial-container">
      <component :is="currentView"></component>
      <div class="page-btn">
        <button @click="back()"><img src="/images/back.png"></button>
        <button @click="next()"><img src="/images/next.png"></button>
      </div>
    </div>
  </div>
</template>

<script>
import Lesson1_1 from './Lesson1_1.vue'
import Lesson1_2 from './Lesson1_2.vue'
import LessonHeader from './LessonHeaderComponent.vue'

export default {
  components: {
    Lesson1_1,
    Lesson1_2,
    LessonHeader,
  },
  data() {
    return {
      currentView: 'Lesson1_1',
      lesson: "Lesson1 フィッシング詐欺",
    }
  },
  methods: {
    next() {
      this.currentView = 'Lesson1_2';
    },
    back() {
      this.currentView = 'Lesson1_1';
    },
  }
}
</script>