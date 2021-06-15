<template>
  <div class="lesson2-tutorial">
    <LessonHeader :lesson="lesson"></LessonHeader>
    <div class="lesson2-tutorial-container">
      <component :is="currentView"
        :isActiveNext="isActiveNext"
        :isActiveBack="isActiveBack"
        :isActiveIntermediate="isActiveIntermediate"
        :exerciseURL="exerciseURL"
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
      <div class="lesson-tutorial-indicator-container">
        <div class="lesson-tutorial-indicator-backgournd">
          <span class="lesson-tutorial-indicator-indicator" :style="'width:' + width + '%;'"></span>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import LessonHeader from '../LessonHeaderComponent.vue'
import Lesson2_1 from './Lesson2_1.vue'
import Lesson2_2 from './Lesson2_2.vue'
import LessonEnd from '../LessonEnd.vue'

export default {
  components: {
    LessonHeader,
    Lesson2_1,
    Lesson2_2,
    LessonEnd
  },
  data() {
    return {
      exerciseURL: "/lesson2/exercise",
      lesson: "Lesson2 パスワードリスト攻撃",
      currentView: "Lesson2_1",

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
        case 'Lesson2_1':
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
        case 'Lesson2_1':
          this.currentView = 'Lesson2_2';
          this.width = 50;
          break;
        case 'Lesson2_2':
          this.currentView = "LessonEnd";
          this.width = 100;
        default:
          break;
      }
    },
    back() {
      switch (this.currentView) {
        case 'LessonEnd':
          this.currentView = "Lesson2_2";
          this.width = 50;
          break;
        case 'Lesson2_2':
          this.currentView = 'Lesson2_1';
          this.width = 0;
          break;
        default:
          break;
      }
    },
  }
}
</script>