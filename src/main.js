import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'
import Project from "./components/Projects/Project.vue";
import Welcome from "./components/Welcome.vue";
import Portfolio from "./components/Projects/Portfolio.vue";
import AnimationTester from "@/components/AnimationTester.vue";
import svgMan from "@/components/SvgMan.vue";

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome
    },
    {
        path: '/project/:uuid',
        name: 'project',
        component: Project
    },
    {
        path: '/test',
        name: 'test',
        component: AnimationTester
    },
    {
        path: '/test2',
        name: 'test2',
        component: svgMan
    },

]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

createApp(App).use(router).mount('#app')
