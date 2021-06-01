<template>
  <div class="lesson1-tutorial">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="lesson1-tutorial-container">
      <component :is="currentView"
        :isActiveNext="isActiveNext"
        :isActiveBack="isActiveBack"
        :isActiveIntermediate="isActiveIntermediate"
      ></component>
      <div class="page-btn">
        <div class="balloon-container animate__animated animate__pulse animate__infinite" v-bind:class="{'not-page1' : isNotInitial}">
          <div class="balloon1">
            <p class="balloon1-content">▶をクリックして、<br>次のスライドを見ることができます。</p>
          </div>
        </div>
        <div v-if="currentView == 'Lesson1_1'" class="slide-btn-end"><img src="/images/back.png"></div>
        <button v-else class="slide-btn" @click="setAnimateBack()"><img src="/images/back.png"></button>
        <div v-if="currentView == 'LessonEnd'" class="slide-btn-end"><img src="/images/next.png"></div>
        <button v-else class="slide-btn" @click="setAnimateNext()"><img src="/images/next.png"></button>
      </div>
      <div class="lesson1-tutorial-indicator-container">
        <div class="lesson1-tutorial-indicator-container-backgournd">
          <span class="lesson1-tutorial-indicator" :style="'width:' + width + '%;'"></span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import Lesson1_1 from './Lesson1_1.vue'
import Lesson1_2 from './Lesson1_2.vue'
import LessonEnd from './LessonEnd.vue'
import LessonHeader from './LessonHeaderComponent.vue'

export default {
  components: {
    Lesson1_1,
    Lesson1_2,
    LessonEnd,
    LessonHeader,
  },
  data() {
    return {
      currentView: 'Lesson1_1',
      lesson: "Lesson1 フィッシング詐欺",
      display: 'display: block;',
      width: 0,

      // 1->2ページへのクラス付与
      isActiveNext: false,
      // 3->2ページへの2ページの fadeInRight を無効化する
      isActiveBack: false,
      // 中間ページ用
      isActiveIntermediate: false,
      // 1ページ目を判定
      isNotInitial: false,

    }
  },
  methods: {
    setAnimateNext() {
      switch (this.currentView) {
        case 'Lesson1_1':
          this.isActiveNext = true;
          this.isActiveBack = true;
          this.isNotInitial = true;
          break;      
        default:
          this.isActiveIntermediate = true;
          break;
      }
      setTimeout(this.next, 400);
    },
    setAnimateBack() {
      switch (this.currentView) {
        case 'LessonEnd':
          this.isActiveIntermediate = false;
          this.isActiveBack = false;
          break;
        default:
          this.isActiveNext = false;
          break;
      }
      setTimeout(this.back, 400);
    },
    next() {
      switch (this.currentView) {
        case 'Lesson1_1':
          this.currentView = 'Lesson1_2';
          this.width = 60;
          break;
        case 'Lesson1_2':
          this.currentView = "LessonEnd";
          this.width = 100;
        default:
          break;
      }
    },
    back() {
      switch (this.currentView) {
        case 'LessonEnd':
          this.currentView = "Lesson1_2";
          this.width = 60;
          break;
        case 'Lesson1_2':
          this.currentView = 'Lesson1_1';
          this.width = 0;
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
.lesson1-tutorial-indicator {
  position: absolute;
  display: inline-block;
  height: 9px;
  background-color: rgb(111, 211, 111);
  transition: width 1s;
}
</style>