<template>

  <div
       style="background: #00343d"
       class="overflow-y-scroll duration-300 fixed top-0 left-0 w-full h-full pt-10 text-white z-50"
       id="About">
    <button class=" z-50 fixed top-5 left-5"  @click="this.unLoad()">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
           class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/>
      </svg>

    </button>
    <div class="w-full flex justify-center">
      <div>
        <h2
            class="duration-200 w-full max-sm:text-4xl text-white text-center mb-4"
            style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px black;">

          {{  $route.query.title }}
        </h2>
        <div class="container">
          <div class="text-red-500">*</div>
          <div class="line line-1"></div>
          <div class="line line-2"></div>
        </div>
      </div>
    </div>
    <div class="font-semibold font-sans flex flex-col justify-evenly items-center mx-4 mb-4">
      <div class=" p- sm:p-2 text-md" style="max-width: 1002px;">
        <h1 class="text-center text-3xl ">
          {{ $route.query.date }}
        </h1>
        <div  :class="{ 'loadIn': loadIn, }" class="duration-200 py-4 ">
            <h2 class="mb-6">
              {{ $route.query.paragraph1 }}
              <a class="text-blue-700 hover:text-blue-500 hover:underline " v-if="$route.query.oldLink" target="_blank"
                 :href="$route.query.oldLink"> {{ $route.query.title }} </a>
            </h2>

          <div class="flex justify-center" >
            <img class="" height="400" width="400" :src="$route.query.image" alt="Project background image" />

          </div>

        </div>
          <div :class="{ 'loadIn': loadIn, }" >
            <h3 class="font-bold py-1" v-if="$route.query.paragraph2Title">
              {{ $route.query.paragraph2Title }}:
            </h3>
            <h3>
              {{ $route.query.paragraph2 }}
            </h3>

        </div>
      </div>
    </div>

  </div>
</template>

<script>
import {useRouter} from "vue-router";

export default {
  props: {
    project: Object,
    moreInfo: Boolean,
  },

  data() {
    return {
      unload: false,
      loadIn: true,
    }
  },
  setup() {
    const router = useRouter();
    return {router};
  },
  methods: {
    async unLoad() {
      await this.router.push({
        path: `/`,
      });
    },
  },

};
</script>

<style scoped>
.loadIn {
  animation-name: load;
  animation-duration: 500ms;
}

@keyframes load {
  from {
    transform: translate(0%, 100%);
    opacity: 0;
  }
  to {
    transform: translate(0%, 0%);
    opacity: 100;
  }
}

</style>