
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
Vue.component('admin-calls-index', require('./components/Admin/Calls/Index.vue'));
Vue.component('admin-add-call-session', require('./components/Admin/Calls/AddCallSession.vue'));
Vue.component('admin-call-show', require('./components/Admin/Calls/Show.vue'));

const app = new Vue({
    el: '#app'
});

const subscribeAreaApp = new Vue({
    el: '#subscribeArea',
    data: {
        errors: {},
        form: {
            name: '',
            phone_number: '',
            messenger: 'telegram',
        }
    },
    methods: {
        submitForm: function() {
            this.errors = {};

            axios.post('/api/join', this.form)
                .then(r => {
                    swal("Фая!", "Ваша заявка принята", "success");

                    this.form = {};
                })
                .catch(e => {
                    if (e.response.status == 422) {
                        this.errors = e.response.data.errors;
                    }

                    $(".newsletter-form").addClass("animated shake");
                    setTimeout(function() {
                        $(".newsletter-form").removeClass("animated shake");
                    }, 1000)
                });
        }
    }
});
