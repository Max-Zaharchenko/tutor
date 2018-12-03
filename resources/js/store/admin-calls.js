import Vuex from 'vuex';

export default new Vuex.Store({
    state: {
        calls: [],
    },
    getters: {
        calls(state) {
            return state.calls;
        }
    },
    mutations: {
        initCalls(state, calls) {
            state.calls = calls;
        },
        addCall(state, call) {
            state.calls.push(call);
        }
    }
});
