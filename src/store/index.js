import Vue from 'vue';
import Vuex from 'vuex';

import todoItem from './modules/todoItem';

// Load Vuex
Vue.use(Vuex);

// Create store
export default new Vuex.Store({
    modules: {
        todoItem
    }
});