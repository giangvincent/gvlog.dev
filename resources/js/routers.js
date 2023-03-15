import { createRouter, createWebHistory } from "vue-router";

import Index from './Index.vue';
import Detail from './Detail.vue';
import Category from './Category.vue';

const routes = [
    {
        path: '/',
        name: 'index',
        component: Index
    },
    {
        path: '/category/:category',
        name: 'category',
        component: Category,
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
