import {createApp} from 'vue';
import App from './App.vue';
import router from './router';
import "bootstrap/dist/css/bootstrap.css";
import Store from "@/store";

createApp(App).use(Store).use(router).mount('#app')
