<template>
    <div v-if="word != null">
        <hr>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title d-flex justify-content-between align-items-center">
                    Вокебулари <i class="fas fa-times" v-on:click="closeVocabulary" style="cursor: pointer"></i>
                </h5>
                <hr>
                <ul class="list-unstyled">
                    <li><b>{{ word.original }}</b></li>
                    <li><span class="text-muted">{{ word.translation }}</span></li>
                </ul>
                <button class="btn btn-block btn-outline-secondary">Добавить в вокебулари</button>
            </div>
        </div>
    </div>
</template>

<script>
    import store from '../../../store/index';

    export default {
        store,
        computed: {
            word: function () {
                return store.getters.selectedWord;
            }
        },
        methods: {
            closeVocabulary: function () {
                store.commit('forgetWord')
            }
        }
    }
</script>
