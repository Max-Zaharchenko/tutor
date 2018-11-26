<template>
    <form v-on:submit.prevent="createWord">
        <div class="form-row align-items-center">
            <div class="col-md-5 my-1">
                <input type="text" v-model="word.original" class="form-control" id="inlineFormInputName" placeholder="Слово">
            </div>
            <div class="col-md-5 my-1">
                <div class="input-group">
                    <input type="text" v-model="word.translation" class="form-control" id="inlineFormInputGroupUsername" placeholder="Перевод">
                </div>
            </div>
            <div class="col-md-2 my-1">
                <button type="submit" class="btn btn-block btn-primary">Добавить</button>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        data: function () {
            return {
                word: {
                    original: '',
                    translation: ''
                }
            };
        },
        methods: {
            createWord: function () {
                axios.post('/api/admin/vocabulary', this.word)
                    .then((r) => {
                        this.word = {
                            original: '',
                            translation: ''
                        };

                        alert('Слово успешно создано!')
                    })
                    .catch((e) => {
                        alert('Ошибка.')
                    });
            }
        }
    }
</script>
