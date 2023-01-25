require('./bootstrap');

import { createApp } from 'vue'
import Index from './components/index'

const app = createApp({})

app.component('index', Index)

app.mount('#app')