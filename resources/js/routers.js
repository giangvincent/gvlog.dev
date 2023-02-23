import { createRouter, createWebHistory } from "vue-router";

import Index from './Index.vue';
import Detail from './Detail.vue';

const routes = [
    {
        path: '/',
        name: 'index',
        component: Index
    },
    {
        path: '/post/:postId',
        name: 'post_detail',
        component: Detail
    }
]

export default createRouter({
    history: createWebHistory(),
    routes
})