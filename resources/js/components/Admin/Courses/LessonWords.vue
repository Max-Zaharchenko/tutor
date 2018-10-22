<template>
    <div class="row">
        <div class="col-md-12">
            <div class="form-row" v-for="(word, index) in words" style="margin-top: 5px;">
                <div class="col-md-5">
                    <input type="text" class="form-control" v-model="word.original" placeholder="Оригинал">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" v-model="word.translation" placeholder="Перевод">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger" v-on:click="deleteWord(index)">Удалить</button>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 5px;">
            <button class="btn btn-block btn-outline-secondary" v-on:click="addWord">Добавить слово</button>
            <button class="btn btn-block btn-outline-secondary" v-on:click="save">Сохранить</button>
        </div>
    </div>
</template>

<script>
    import LessonWord from '../../../Models/Admin/Courses/LessonWord'

    export default {
        props: ['lesson'],
        data: function () {
            return {
                words: [],
            };
        },
        mounted() {
            this.words = this.lesson.words
        },
        methods: {
            addWord: function () {
                this.words.push(new LessonWord);
            },
            deleteWord: function (index) {
                this.words.splice(index, 1);
            },
            save: function () {
                axios.put(`/api/admin/lessons/${this.lesson.id}/words`, {
                    words: this.words
                })
                    .then(response => {
                        console.log(response.data);
                    });
            }
        }
    }
</script>
