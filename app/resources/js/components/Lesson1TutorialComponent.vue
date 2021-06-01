<template>
  <div class="lesson1-tutorial">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="lesson1-tutorial-container">
      <component :is="currentView" :isActive="isActive"></component>
      <div class="page-btn">
        <div class="balloon-container animate__animated animate__pulse animate__infinite" v-bind:class="{'not-page1' : isNotInitial}">
          <div class="balloon1">
            <p class="balloon1-content">▶をクリックして、<br>次のスライドを見ることができます。</p>
          </div>
        </div>
        <div v-if="currentView == 'Lesson1_1'" class="slide-btn-end"><img src="/images/back.png"></div>
        <button v-else class="slide-btn" @click="setAnimateBack()"><img src="/images/back.png"></button>
        <div v-if="currentView == 'Lesson1_2'" class="slide-btn-end"><img src="/images/next.png"></div>
        <button v-else class="slide-btn" @click="setAnimateNext()"><img src="/images/next.png"></button>
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
      isActive: false,
      isNotInitial: false,
      display: 'display: block;',
    }
  },
  methods: {
    setAnimateNext() {
      this.isActive = true;
      setTimeout(this.next, 400);
      this.isNotInitial = true;
    },
    setAnimateBack() {
      this.isActive = false;
      setTimeout(this.back, 400);
    },
    next() {
      switch (this.currentView) {
        case 'Lesson1_1':
          this.currentView = 'Lesson1_2';
          break;
        default:
          break;
      }
    },
    back() {
      switch (this.currentView) {
        case 'Lesson1_2':
          this.currentView = 'Lesson1_1';
          break;
        default:
          break;
      }
    },
  }
}
</script>

<style>
.not-page1 {
  display: none;
}
.balloon-container {
  position: absolute;
  top: -100px;
  left: calc(100% - 310px);
}
.balloon1 {
  position: relative;
  display: inline-block;
  margin: 1.5em 0;
  padding: 25px 15px;
  min-width: 300px;
  max-width: 100%;
  color: #555;
  font-size: 13px;
  text-align: center;
  background: #e0edff;
  border-radius: 50%;
}
.balloon1:before {
  content: "";
  position: absolute;
  top: 90%;
  left: 70%;
  margin-left: -15px;
  border: 15px solid transparent;
  border-top: 15px solid #e0edff;
}
.balloon1 p {
  margin: 0;
  padding: 0;
}
.slide-btn:hover {
  opacity: 0.8;
}
</style>