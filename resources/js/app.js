require('./bootstrap');

import { createApp } from 'vue';
import Alpine from 'alpinejs';
import Index from './components/Index.vue';

window.Alpine = Alpine
Alpine.start()

const app = createApp({})
app.component('index', Index)
app.mount('#app')
