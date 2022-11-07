import api from "@/api/api";

const userStore = {
    state: {
        users: [],
        user: {},
        isLoading: false,
        error: null
    },
    getters: {
        usersList: state => state.users,
        isLoading: state => state.isLoading,
        error: state => state.error
    },


    mutations: {
        setUsers(state, users) {
            state.users = users;
        },
        setLoading(state, isLoading) {
            state.isLoading = isLoading;
        },
        setError(state, error) {
            state.error = error;
        }
    },
    actions: {
        async fetchUsers({commit}) {
            commit('setLoading', true);
            commit('setError', null);
            try {
                const response = await api.get('/users');
                console.log(response);
                commit('setUsers', response.data.users);
            } catch (e) {
                commit('setError', e);
            }
            commit('setLoading', false);
        }
    }
}

export default userStore;
