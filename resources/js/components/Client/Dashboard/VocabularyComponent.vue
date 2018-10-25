<template>
    <div class="card shadow-border mt-3" v-if="word != null">
        <div class="card-body">
            <h6 class="card-title d-flex justify-content-between align-items-center" style="font-weight: 800;">
                Вокебулари <i class="fas fa-times" v-on:click="closeVocabulary" style="cursor: pointer"></i>
            </h6>
            <ul class="list-unstyled">
                <li><span style="font-weight: 800;">{{ word.original }}</span></li>
                <li><span class="text-muted">{{ word.translation }}</span></li>
            </ul>
            <button class="btn btn-sm btn-block btn-outline-secondary">Добавить в вокебулари</button>
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
