<template>
    <div id="li-lessons" class="li-lessons">
      <div class="li-lessons-title">
        <h1>レッスン一覧</h1>
        <p>公開中の全てのレッスンを見ることができます。</p>
      </div>
      <div class="li-lessons-all-rate">

        <div class="li-lessons-all-rate-container">
          <div class="li-lessons-all-rate-group">
            <span>Lesson1</span>
            <div class="li-lessons-all-rate-background">
              <div class="li-lessons-all-rate-indicator" :style="'width:'+width1+'%;'"></div>
            </div>
            <span>{{ width1 }}/100%</span>
          </div>

          <div class="li-lessons-all-rate-group">
            <span>Lesson2</span>
            <div class="li-lessons-all-rate-background">
              <div class="li-lessons-all-rate-indicator" :style="'width:'+width2+'%;'"></div>
            </div>
            <span>{{ width2 }}/100%</span>
          </div>

          <div class="li-lessons-all-rate-group">
            <span>Lesson3</span>
            <div class="li-lessons-all-rate-background">
              <div class="li-lessons-all-rate-indicator" :style="'width:'+width3+'%;'"></div>
            </div>
            <span>{{ width3 }}/100%</span>
          </div>
        </div>

      </div>
      <div class="li-lessons-content">
        <h3>Lesson1</h3>
        <div class="li-lessons-area">
          <a href="/lesson1"><button class="li-lesson-group lesson1">
            <img src="/images/phishing.png" alt="phishing">
            <span>Lesson1-1</span>
            <h4>フィッシング詐欺</h4>
            <span v-if="lesson1.indexOf(1) >= 0" class="li-lesson-group-cleared">クリア済</span>
          </button></a>
        </div>
        <div class="li-lessons-rate-group">
          <div class="li-lessons-rate-container">
            <div class="li-lessons-rate-background">
              <div class="li-lessons-rate-indicator" :style="'width:'+width1+'%;'"></div>
            </div>
          </div>
          <span class="li-lessons-rate-percentage">{{ width1 }}/100%</span>
        </div>
        <h3>Lesson2</h3>
        <div class="li-lessons-area">
          <a href="/lesson2"><button class="li-lesson-group lesson2">
            <img src="/images/passwordlist.png" alt="password list attack">
            <span>Lesson2-1</span>
            <h4>パスワードリスト攻撃</h4>
            <span v-if="lesson2.indexOf(1) >= 0" class="li-lesson-group-cleared">クリア済</span>
          </button></a>
        </div>
        <div class="li-lessons-rate-group">
          <div class="li-lessons-rate-container">
            <div class="li-lessons-rate-background">
              <div class="li-lessons-rate-indicator" :style="'width:'+width2+'%;'"></div>
            </div>
          </div>
          <span class="li-lessons-rate-percentage">{{ width2 }}/100%</span>
        </div>
        <h3>Lesson3</h3>
        <div class="li-lessons-area">
           <a href="/limited/lesson3/1"><button class="li-lesson-group lesson3">
            <img src="/images/pharming.png" alt="pharming">
            <span>Lesson3-1</span>
            <h4>ファーミング</h4>
            <span v-if="lesson3.indexOf(1) >= 0" class="li-lesson-group-cleared">クリア済</span>
          </button></a>

           <a href="/"><button class="li-lesson-group lesson3">
            <img src="/images/spear.png" alt="spear">
            <span>Lesson3-2</span>
            <h4>スピアフィッシング</h4>
            <span v-if="lesson3.indexOf(2) >= 0" class="li-lesson-group-cleared">クリア済</span>
          </button></a>
        </div>
        <div class="li-lessons-rate-group">
          <div class="li-lessons-rate-container">
            <div class="li-lessons-rate-background">
              <div class="li-lessons-rate-indicator" :style="'width:'+width3+'%;'"></div>
            </div>
          </div>
          <span class="li-lessons-rate-percentage">{{ width3 }}/100%</span>
        </div>
      </div>
    </div>
</template>

<script>

export default {
  data() {
    return {
      lesson1: [],
      lesson2: [],
      lesson3: [],
      width1: 0,
      width2: 0,
      width3: 0
    }
  },
  props: {
    myLessonsStatus: Array,
  },
  mounted() {
    // 各レッスンの合計パーセンテージを格納する変数
    let lesson1Percentage = 0;
    let lesson2Percentage = 0;
    let lesson3Percentage = 0;

    this.myLessonsStatus.forEach(element => {
      // *1 各レッスンのパーセンテージを集計
      // *2 各レッスンのサブナンバーを配列に追加
      switch (element.number) {
        case 1:
          lesson1Percentage += element.percentage; //*1
          this.lesson1.push(element.sub_number); //*2
          break;
        case 2:
          lesson2Percentage += element.percentage; //*1
          this.lesson2.push(element.sub_number); //*2
          break;
        case 3:
          lesson3Percentage += element.percentage; //*1
          this.lesson3.push(element.sub_number); //*2
          break;
      
        default:
          break;
      }
    });
    // CSS transitionが反映されるために待つ
    setTimeout(()=>{
      this.width1 = lesson1Percentage;
      this.width2 = lesson2Percentage;
      this.width3 = lesson3Percentage;
    }, 500);
  },
}
</script>