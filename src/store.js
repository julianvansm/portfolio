import { defineStore } from 'pinia';

export const ProjectStore = defineStore('myStore', {
    state: () => ({
        isVisible: false,
    }),
    actions: {
        toggleIsVisible() {
            this.isVisible = !this.isVisible;
        }
    }
});
