require('./bootstrap');


window.Vue = require('vue').default;

Vue.component('lesson-alert-component', require('./components/LessonAlertComponent.vue').default);
// Lesson1
Vue.component('lesson1-1-tutorial-component', require('./components/lesson1_1/TutorialComponent.vue').default);
Vue.component('lesson1-1-component', require('./components/lesson1_1/ExerciseComponent.vue').default);
// Lesson2
Vue.component('lesson2-1-tutorial-component', require('./components/lesson2_1/TutorialComponent.vue').default);
Vue.component('lesson2-1-component', require('./components/lesson2_1/ExerciseComponent.vue').default);
// Lesson3
Vue.component('lesson3-1-tutorial-component', require('./components/lesson3_1/TutorialComponent.vue').default);
Vue.component('lesson3-1-component', require('./components/lesson3_1/ExerciseComponent'))


// Lesson common
Vue.component('congratulations-component', require('./components/CongratulationsComponent.vue').default);

// Limited
Vue.component('dashboard-component', require('./components/Limited/DashboardComponent.vue').default);
Vue.component('list-of-lessons-component', require('./components/Limited/ListOfLessonsComponent.vue').default);

// Service
Vue.component('user-delete-component', require('./components/UserDeleteComponent.vue').default);


const VueClipboard = require('vue-clipboard2');
Vue.use(VueClipboard);

const app = new Vue({
    el: '#main',
});
