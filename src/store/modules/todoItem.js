//import axios from 'axios';

const state = {
    todos: [
        {
            id: 1,
            title: 'Todo one',
        },
        {
            id: 2,
            title: 'Todo one',
        }
    ]
};

const getters = {
    allTodos: (state) => {
        return state.todos
    }
};

const actions = {};

const mutations = {};

export default {
    state,
    getters,
    actions,
    mutations
};