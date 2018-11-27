
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import 'es6-promise/auto';

import Notifications from 'vue-notification';
import Vuex from 'vuex';

Vue.use(Notifications);
Vue.use(Vuex);

Vue.component('vocabulary-component', require('./components/Client/Dashboard/VocabularyComponent.vue'));
Vue.component('lesson-words-component', require('./components/Client/Courses/LessonWords.vue'));

// Admin Components
Vue.component('admin-lesson-words-component', require('./components/Admin/Courses/LessonWords.vue'));
Vue.component('admin-vocabulary-words', require('./components/Admin/Vocabulary/Index.vue'));
Vue.component('admin-vocabulary-create-word', require('./components/Admin/Vocabulary/Create.vue'));
Vue.component('admin-schedule-call', require('./components/Admin/Calls/Schedule.vue'));

const app = new Vue({
    el: '#app'
});
