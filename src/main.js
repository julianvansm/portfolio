import { createApp } from 'vue'
import './style.css'
import App from './App.vue'
import { createRouter, createWebHistory } from 'vue-router'
import Welcome from "./components/Welcome.vue";
import AnimationTester from "@/components/AnimationTester.vue";
import svgMan from "@/components/SvgMan.vue";
import ProjectSmall from "@/components/Projects/ProjectSmall.vue";
import ProjectPc from "@/components/Projects/ProjectPc.vue";
import { createHead } from '@vueuse/head'

const routes = [
    {
        path: '/',
        name: 'welcome',
        component: Welcome,
    },
    {
        path: '/project/:uuid',
        name: 'project',
        component: ProjectSmall
    },
    {
        path: '/pc/project/:uuid',
        name: 'projectPC',
        component: ProjectPc
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
const head = createHead()

createApp(App)
    .use(router)
    .use(head)
    .mount('#app')