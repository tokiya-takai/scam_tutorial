<template>
    <div id="li-lessons" class="li-lessons">
      <div class="li-lessons-title">
        <h1>レッスン一覧</h1>
        <p>公開中の全てのレッスンを見ることができます。</p>
      </div>
      <div class="li-lessons-content">
        <h3>Lesson1</h3>
        <div class="li-lessons-area">
          <a href="/lesson1"><button class="li-lesson-group lesson1">
            <img src="/images/phishing.png" alt="phishing">
            <span>Lesson1-1</span>
            <h4>フィッシング詐欺</h4>
          </button></a>
        </div>
        <div class="li-lessons-rate-group">
          <div class="li-lessons-rate-container">
            <div class="li-lessons-rate-background">
              <div class="li-lessons-rate-indicator" :style="'width:'+width1+'%;'"></div>
            </div>
          </div>
          <span v-if="lesson1 != null " class="li-lessons-rate-percentage">{{ lesson1.percentage }}/100%</span>
          <span v-else class="li-lessons-rate-percentage">0/100%</span>
        </div>
        <h3>Lesson2</h3>
        <div class="li-lessons-area">
          <a href="/lesson2"><button class="li-lesson-group lesson2">
            <img src="/images/passwordlist.png" alt="password list attack">
            <span>Lesson2-1</span>
            <h4>パスワードリスト攻撃</h4>
          </button></a>
        </div>
        <div class="li-lessons-rate-group">
          <div class="li-lessons-rate-container">
            <div class="li-lessons-rate-background">
              <div class="li-lessons-rate-indicator" :style="'width:'+width2+'%;'"></div>
            </div>
          </div>
          <span v-if="lesson2 != null " class="li-lessons-rate-percentage">{{ lesson2.percentage }}/100%</span>
          <span v-else class="li-lessons-rate-percentage">0/100%</span>
        </div>
        <h3>Lesson3</h3>
        <div class="li-lessons-area">
           <a href="/"><button class="li-lesson-group lesson3">
            <img src="/images/pharming.png" alt="pharming">
            <span>Lesson3-1</span>
            <h4>ファーミング</h4>
          </button></a>

           <a href="/"><button class="li-lesson-group lesson3">
            <img src="/images/spear.png" alt="spear">
            <span>Lesson3-2</span>
            <h4>スピアフィッシング</h4>
          </button></a>
        </div>
        <div class="li-lessons-rate-group">
          <div class="li-lessons-rate-container">
            <div class="li-lessons-rate-background">
              <div class="li-lessons-rate-indicator" :style="'width:'+width3+'%;'"></div>
            </div>
          </div>
          <span v-if="lesson3 != null " class="li-lessons-rate-percentage">{{ lesson3.percentage }}/100%</span>
          <span v-else class="li-lessons-rate-percentage">0/100%</span>
        </div>
      </div>
    </div>
</template>

<script>

export default {
  data() {
    return {
      lesson1: null,
      lesson2: null,
      lesson3: null,
      width1: 0,
      width2: 0,
      width3: 0
    }
  },
  props: {
    myLessonsStatus: Array,
  },
  mounted() {
    // 対応した各レッスンをクリアしていない場合、undefinedになるため、nullで初期化
    let l1 = null;
    let l2 = null;
    let l3 = null;
    this.myLessonsStatus.forEach(element => {
      // number毎にオブジェクトを取り出す
      switch (element.number) {
        case 1:
          l1 = element;
          break;
        case 2:
          l2 = element;
          break;
        case 3:
          l3 = element;
          break;
        default:
          break;
      }
    });
    this.lesson1 = l1;
    this.lesson2 = l2;
    this.lesson3 = l3;
    setTimeout(this.setWidth, 500);
  },
  methods: {
    // インジケータ用。遅延無しだとcssのtransitionが間に合わないので。
    setWidth() {
      if(this.lesson1 != null) {
        this.width1 = this.lesson1.percentage;
      }
      if(this.lesson2 != null) {
        this.width2 = this.lesson2.percentage;
      }
      if(this.lesson3 != null) {
        this.width3 = this.lesson3.percentage;
      }
    }
  },
}
</script>