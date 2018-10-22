<template>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-sm btn-block btn-outline-secondary" v-on:click="addWord">Добавить слово</button>
            <hr>
        </div>
        <div class="col-md-12">
            <div class="form-row" v-for="(word, index) in words" style="margin-top: 5px;">
                <div class="col-md-5">
                    <input type="text" class="form-control form-control-sm"
                           v-bind:class="{'is-invalid': hasError('words.' + index +'.original')}"
                           v-model="word.original" placeholder="Оригинал">
                    <span role="alert" class="invalid-feedback">
                        <strong v-for="error in getErrors('words.' + index +'.original')">{{ error }}</strong>
                    </span>
                </div>
                <div class="col-md-5">
                    <input type="text" class="form-control form-control-sm"
                           v-bind:class="{'is-invalid': hasError('words.' + index +'.translation')}"
                           v-model="word.translation" placeholder="Перевод">
                    <span role="alert" class="invalid-feedback">
                        <strong v-for="error in getErrors('words.' + index +'.translation')">{{ error }}</strong>
                    </span>
                </div>
                <div class="col-md-2">
                    <button class="btn btn-sm btn-block btn-danger" v-on:click="deleteWord(index)">Удалить</button>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <hr>
        </div>
        <div class="col-md-12" style="margin-top: 5px;">
            <button class="btn btn-sm btn-block btn-outline-success" v-on:click="save">Сохранить</button>
        </div>
        <notifications group="admin" position="bottom left" />
    </div>
</template>

<script>
    import LessonWord from '../../../Models/Admin/Courses/LessonWord'

    export default {
        props: ['lesson'],
        data: function () {
            return {
                words: [],
                errors: {},
            };
        },
        mounted() {
            this.words = this.lesson.words
        },
        methods: {
            hasError: function (key) {
                return this.errors[key];
            },
            getErrors: function (key) {
                return this.errors[key];
            },
            addWord: function () {
                this.words.push(new LessonWord);
            },
            deleteWord: function (index) {
                this.words.splice(index, 1);
            },
            save: function () {
                this.errors = {};

                axios.put(`/api/admin/lessons/${this.lesson.id}/words`, {
                    words: this.words
                })
                    .then(response => {
                        if (response.status == 200) {
                            this.$notify({
                                group: 'admin',
                                type: 'success',
                                title: 'Успех',
                                duration: 5000,
                                text: 'Слова были успешно синхронизированы'
                            });
                        } else {
                            this.$notify({
                                group: 'admin',
                                type: 'error',
                                title: 'Неизвестная ошибка.',
                                duration: 5000,
                            });
                        }
                    })
                    .catch(error => {
                        var response = error.response;

                        if (response.status == 422) {
                            this.errors = response.data.errors;

                            this.$notify({
                                group: 'admin',
                                type: 'error',
                                title: 'Ошибка валидации',
                                duration: 5000,
                                text: 'Проверь заполненные поля, и исправь ошибки :)'
                            });
                        } else {
                            this.$notify({
                                group: 'admin',
                                type: 'error',
                                title: 'Неизвестная ошибка.',
                                duration: 5000,
                            });
                        }
                    });
            }
        }
    }
</script>
