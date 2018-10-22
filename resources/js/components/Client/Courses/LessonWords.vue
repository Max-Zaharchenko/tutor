<template>
    <div class="row">
        <div class="col-md-12">
            <button class="btn btn-outline-secondary" v-for="word in words" v-on:click="selectWord(word)">{{ word.original }}</button>
        </div>
    </div>
</template>

<script>
    import store from '../../../store/index';

    export default {
        store,
        props: ['words'],
        methods: {
            selectWord: function (word) {
                store.commit('selectWord', word);
            }
        }
    }
</script>
