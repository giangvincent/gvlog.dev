require('./bootstrap');

import { createApp } from 'vue';
import Index from './components/Index.vue';

const app = createApp({})
app.component('index', Index)
app.mount('#app')
