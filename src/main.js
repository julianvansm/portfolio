import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'
import Project from "./components/Projects/Project.vue";
import Welcome from "./components/Welcome.vue";
import Portfolio from "./components/Projects/Portfolio.vue";

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome },
    {
        path: '/project/portfolio',
        name: 'projectPortfolio',
        component: Portfolio
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

createApp(App).use(router).mount('#app')
