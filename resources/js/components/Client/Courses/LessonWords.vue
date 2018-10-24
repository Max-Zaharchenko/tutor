<template>
    <div class="row">
        <div class="col-md-12">
            <span class="badge badge-secondary" v-for="word in words" v-on:click="selectWord(word)" style="margin-right: 5px; cursor: pointer;">
                {{ word.original }}
            </span>
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
