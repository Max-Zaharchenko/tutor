<template>
    <div class="row">
        <div class="col-md-12">
            <div class="form-row" v-for="word in words" style="margin-top: 5px;">
                <div class="col-md-5">
                    <input type="text" class="form-control" v-model="word.original" placeholder="Оригинал">
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control" v-model="word.translate" placeholder="Перевод">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-danger">Удалить</button>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-top: 5px;">
            <button class="btn btn-block btn-outline-secondary" v-on:click="addWord">Добавить слово</button>
            <button class="btn btn-block btn-outline-secondary" v-on:click="save">Save</button>
        </div>
    </div>
</template>

<script>
    import LessonWord from '../../../Models/Admin/Courses/LessonWord'

    export default {
        data: function () {
            return {
                words: [],
            };
        },
        methods: {
            addWord: function () {
                this.words.push(new LessonWord);
            },
            save: function () {
                console.log(this.words);
            }
        }
    }
</script>
