import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        word: null,
    },
    getters: {
        selectedWord(state) {
            return state.word;
        }
    },
    mutations: {
        selectWord(state, word) {
            state.word = word;
        },
        forgetWord(state) {
            state.word = null;

        }
    }
});
