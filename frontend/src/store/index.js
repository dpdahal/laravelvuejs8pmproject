import {createStore, createLogger} from 'vuex';
import UserStore from "@/store/userStore";


const debug = process.env.NODE_ENV !== 'production'

const Store = createStore({
    modules: {
        users: UserStore
    },
    strict: debug,
    plugins: debug ? [createLogger()] : []
})

export default Store;