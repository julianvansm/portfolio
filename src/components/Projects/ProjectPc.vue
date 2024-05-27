<template>

  <div
      style="background: #00343d"
      class="w-full overflow-x-hidden h-full pt-10 text-white z-50"
      id="app">
    <button class="z-50 fixed top-5 left-5" @click="this.unLoad()">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white"
           aria-multiline='true' class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M11 20.5 4 13m0 0 8-8M4 13h16" stroke="#ec50ef"
              stroke-width="2"/>
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18"/>
      </svg>

    </button>
    <div :class="{ 'loadIn0': loadIn, }">
      <div class="w-full flex justify-center">
        <div>
          <h2
              class="duration-200 w-min text-nowrap text-6xl max-sm:text-5xl text-white text-center mb-4"
              style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px black;">

            {{ $route.query.title }}
          </h2>
          <div class="container">
            <div class="text-red-500">*</div>
            <div class="line line-1"></div>
            <div class="line line-2"></div>
          </div>
        </div>
      </div>
      <h1 class="text-center text-3xl ">
        {{ $route.query.date }}
      </h1>
    </div>
    <div class="font-semibold font-sans flex flex-col justify-evenly items-center mx-4 mb-4">
      <div class="sm:p-2" style="max-width: 1002px;">
        <div class="duration-200 py-4 text-2xl ">
          <h2 :class="{ 'loadIn1': loadIn, }" class="mb-6">
            {{ $route.query.paragraph1 }}
            <a class="text-blue-700 hover:text-blue-500 hover:underline " v-if="$route.query.link && !$route.query.extraLink" target="_blank"
               :href="$route.query.link"> {{ $route.query.title }}</a>
            <a class="text-blue-700 hover:text-blue-500 hover:underline " v-if="$route.query.extraLink" target="_blank"
               :href="$route.query.extraLink"> {{ $route.query.extraLinkName }}</a>
            <a v-if="$route.query.extraLink2">, </a>
            <a class="text-blue-700 hover:text-blue-500 hover:underline " v-if="$route.query.extraLink2" target="_blank"
               :href="$route.query.extraLink2">{{ $route.query.extraLink2Name }}</a>
          </h2>

          <div :class="{ 'loadIn2': loadIn, }" class="flex flex-row flex-nowrap">

            <div>
              <h3 class="font-bold py-1" v-if="$route.query.paragraph2Title">
                {{ $route.query.paragraph2Title }}:

              </h3>
                <img class="ml-1 w-1/2 float-right" height="400" width="400" :src="$route.query.image"
                     alt="Project background image" />


                <h3 class="">

                  {{ $route.query.paragraph2 }}

                </h3>

            </div>

          </div>
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
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.loadIn0 {
  animation-name: load0;
  animation-duration: 500ms;
}

.loadIn1 {
  animation-name: load1;
  animation-duration: 750ms;
}

.loadIn2 {
  animation-name: load2;
  animation-duration: 750ms;
}


@keyframes load0 {
  from {
    transform: translate(0%, -100%);
    opacity: 0;
  }
  to {
    transform: translate(0%, 0%);
    opacity: 100;
  }
}

@keyframes load1 {
  from {
    transform: translate(100%, 0%);
    opacity: 0;
  }
  to {
    transform: translate(0%, 0%);
    opacity: 100;
  }
}

@keyframes load2 {
  from {
    transform: translate(-100%, 0%);
    opacity: 0;
  }
  to {
    transform: translate(0%, 0%);
    opacity: 100;
  }
}
</style>