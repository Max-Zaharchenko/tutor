<template>
    <form v-on:submit.prevent="createCall">
       <div class="row">
           <div class="form-group col-md-4">
               <label for="course">Курс</label>
               <select name="course" id="course" class="form-control" v-model="course_id">
                   <option v-bind:value="course.id" v-for="course in courses">{{ course.title }}</option>
               </select>
           </div>
           <div class="form-group col-md-4">
               <label for="title">Название содзвона</label>
               <input type="text" class="form-control">
           </div>
           <div class="form-group col-md-4">
               <label for="call_date">День содзвона</label>
               <datepicker :bootstrap-styling="true" :language="ru" v-model="call_date"></datepicker>
           </div>
           <div class="form-group col-md-12">
               <label for="description">Описание</label>
               <textarea name="" id="" cols="30" rows="3" class="form-control"></textarea>
           </div>
           <div class="form-group col-md-12">
               <button class="btn btn-primary btn-sm btn-block">Создать содзвон</button>
           </div>
       </div>
    </form>
</template>

<script>
    import Datepicker from 'vuejs-datepicker';
    import {ru} from 'vuejs-datepicker/dist/locale'


    export default {
        components: {
            Datepicker
        },
        data: function () {
            return {
                course_id: '',
                call_date: '',
                courses: [],
                ru: ru
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
                console.log(this.call_course_id);
                axios.post(`/api/admin/courses/${this.course_id}/calls`)
                    .then(r => {})
                    .catch(e => {
                        console.log(e.response.status);
                        alert('error scheduling a call')
                    });
            }
        }
    }
</script>
