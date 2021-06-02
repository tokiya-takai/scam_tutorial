require('./bootstrap');

window.Vue = require('vue').default;

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('lesson-alert-component', require('./components/LessonAlertComponent.vue').default);
Vue.component('lesson1-tutorial-component', require('./components/Lesson1TutorialComponent.vue').default);
Vue.component('lesson1-component', require('./components/Lesson1Component.vue').default);

const app = new Vue({
    el: '#main',
});
