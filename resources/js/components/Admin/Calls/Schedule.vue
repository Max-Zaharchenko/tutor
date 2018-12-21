<template>
    <form v-on:submit.prevent="createCall">
       <div class="row">
           <div class="form-group col-md-6">
               <label for="course">Курс</label>
               <select name="course" id="course" class="form-control" v-model="course_id">
                   <option v-bind:value="course.id" v-for="course in courses" class="justify-content-between">{{ course.title }}</option>
               </select>
           </div>
           <div class="form-group col-md-6">
               <label for="call_date">День содзвона</label>
               <datepicker :bootstrap-styling="true" :language="ru" v-model="call.call_date"></datepicker>
           </div>
           <div class="form-group col-md-12">
               <button class="btn btn-success btn-sm btn-block">Запланировать содзвон</button>
           </div>
       </div>
    </form>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';
    import {ru} from 'vuejs-datepicker/dist/locale';

    import AdminCallsStore from '../../../store/admin-calls';

    export default {
        AdminCallsStore,
        components: {
            Datepicker
        },
        data: function () {
            return {
                course_id: '',
                courses: [],
                ru: ru,
                call: {
                    call_date: '',
                }
            };
        },
        mounted() {
            axios.get('/api/admin/courses')
                .then(r => {
                    this.courses = r.data.data;
                })
                .catch(e => {
                    alert('Error loading courses.');
                });
        },
        methods: {
            createCall: function () {
                axios.post(`/api/admin/courses/${this.course_id}/calls`, this.call)
                    .then(r => {
                        AdminCallsStore.commit('addCall', r.data.data);

                        alert('Содзвон был успешно создан.');

                        location.reload();
                    })
                    .catch(e => {
                        alert('error scheduling a call')
                    });
            }
        }
    }
</script>
