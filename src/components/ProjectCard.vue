<template>
  <div  class="project-container-extra gradient shadow p-3 sm:m-8 my-8 rounded-xl flex flex-col items-stretch">
    <a v-if="project.link" :href="project.link" :target="project.title === 'Portfolio' ? '_self' : '_blank'" class="bg-gray-700 relative rounded">

      <img class="flex justify-center items-center rounded hover:opacity-20" :src="project.image" :alt="project.title"/>
    </a>
    <img v-if="!project.link" class="flex justify-center items-center rounded " :src="project.image" :alt="project.title"/>

    <div class="mt-4 h-full bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
      <div class=" flex justify-between mb-3 p-2 border-gray-800 border-b-2">

        <div>
          <h1 class="text-black max-sm:text-2xl text-3xl">{{ project.title }}</h1>
          <h2 class="text-xl text-gray-600">{{ project.date }}</h2>
        </div>

        <Project v-if="this.moreInfo === true" :project="project" :moreInfo="this.moreInfo" @toggle-project="readMore"></Project>
        <div v-if="project.info" class="flex h-full items-end">
          <button @click="readMore" class="underline text-nowrap ">Read more</button>

        </div>

      </div>
<div class="flex flex-grow">
  <p class="p-2 pt-0 break-words text-lg">{{ project.description }}</p>

</div>
    </div>
  </div>
</template>

<script>
import Project from "@/components/Projects/Project.vue";
import {useRouter} from "vue-router";

export default {
  data() {
    return {
      moreInfo: false,
    }
  },
  setup() {
    const router = useRouter();
    return {router};
  },
  components: {Project},
  props: {
    project: Object,
  },
  methods: {
    readMore(){
      const screenWidth = window.innerWidth;
      if (screenWidth < 600) {
        this.router.push({
          path: `/project/${this.project.title}`,
          query: this.project,
        });
      } else {
        this.router.push({
          path: `pc/project/${this.project.title}`,
          query: this.project,
        });
      }
    }
  }
};
</script>

<style scoped>

.gradient {
  background: whitesmoke;
}

.shadow {
  box-shadow: rgba(131, 131, 131, 0.76) 0 0 8px 7px;
}
</style>