import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'
import Project from "./components/Projects/Project.vue";
import Welcome from "./components/Welcome.vue";

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome },
    {
        path: '/project/:uuid',
        name: 'project',
        component: Project
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

createApp(App).use(router).mount('#app')
