require('./bootstrap');

import { createApp } from 'vue';
import router from './routers'
import Index from './Index.vue';

const app = createApp({
    components: {
        Index
    }
})
app.use(router).mount('#app')
