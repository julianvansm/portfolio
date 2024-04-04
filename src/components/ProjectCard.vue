<template>
  <div class="gradient shadow project-container-extra p-3 m-8 rounded-xl flex flex-col items-stretch">
    <a :href="project.link" target="_blank" class="bg-gray-700 relative rounded">
      <img class="flex justify-center items-center rounded hover:opacity-20" :src="project.image" :alt="project.title"/>
    </a>
    <div class="mt-4 h-full bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
      <div class=" mb-3 p-2 border-gray-800 border-b-2">
        <h1 class="text-black text-3xl">{{ project.title }}</h1>
        <h2 class="text-xl text-gray-600">{{ project.date }}</h2>
      </div>
      <p class="p-2 pt-0 break-words text-lg">{{ project.description }}</p>
    </div>
  </div>
</template>

<script>
export default {
  props: {
    project: Object,
  },
};
</script>

<style scoped>
.gradient{
  background: whitesmoke;
}

.shadow{
  box-shadow: rgba(131, 131, 131, 0.76) 0 0 8px 7px;
}
</style>