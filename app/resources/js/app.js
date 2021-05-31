require('./bootstrap');

window.Vue = require('vue').default;

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('lesson1-tutorial-component', require('./components/Lesson1TutorialComponent.vue').default);

const app = new Vue({
    el: '#main',
});
