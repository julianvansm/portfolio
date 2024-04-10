<template>

  <div :class="{ 'loadIn': loadIn, 'unLoad': unload }" class=" fixed top-0 left-0 w-full h-full bg-white z-40" id="About">
    <button class=" z-50 fixed top-5 left-5" v-if="moreInfo === true" @click="this.unLoad()">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5 3 12m0 0 7.5-7.5M3 12h18" />
      </svg>

    </button>
    <div class="w-full flex justify-center">
      <div>
        <h2
            class="duration-200 w-min text-nowrap text-6xl max-sm:text-5xl text-white text-center mb-4"
            style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px black;">

          {{ project.title }}
        </h2>
        <div class="container">
          <div class="text-red-500">*</div>
          <div class="line line-1"></div>
          <div class="line line-2"></div>
        </div>
      </div>
    </div>
    <div class="font-semibold font-sans flex flex-col justify-evenly items-center mb-4">
      <div class=" p- sm:p-2" style="max-width: 1002px;">
        <h1 class="text-center text-3xl ">
          {{project.date}}
        </h1>
        <hgroup
            class="duration-200 py-4  text-2xl max-sm:text-xl">
          <h2 class="mb-6">
            {{project.paragraph1}}
            <a class="text-blue-700 hover:text-blue-500 hover:underline " v-if="project.oldLink" target="_blank" :href="project.oldLink"> {{project.title}} </a>
          </h2>
          <h3 class="font-bold py-1" v-if="project.paragraph2Title">
              {{project.paragraph2Title}}:
          </h3>
          <h3>
            {{project.paragraph2}}
          </h3>
        </hgroup>
      </div>
    </div>

  </div>
</template>

<script>
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

  methods: {
    async unLoad(){
      console.log('nah')
      this.unload = true
      this.loadIn = false
      await this.close()
    },
    async close(){

    }
  },

};
</script>

<style scoped>
.loadIn {
  animation-name: load;
  animation-duration: 1s;
}
@keyframes load {
  from  {transform: translate(0%, 100%);}
  to {transform: translate(0%, 0%)}
}
.unLoad {
  animation-name: unLoad;
  animation-duration: 1s;
}
@keyframes unLoad {
  from  {transform: translate(0%, 0%);}
  to {transform: translate(-100%, 0%)}
}
.container {
  position: relative;
  width: 100%; /* Adjust width as needed */
  height: fit-content; /* Adjust height as needed */
  display: flex;
  justify-content: center;
}


.line {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%); /* Center the line intersection */
  width: 30%; /* Initial width is 0, expanded later */
  //background-color: #000000;
  border: 2px solid black;
}

.line:after, .line:before {
  content: "";
  position: absolute;
  width: 3px; /* Initial width is 0, expanded later */
  height: 10px; /* Triangle height */
  border-left: 5px solid transparent; /* Left border for triangle */
  border-right: 5px solid transparent; /* Right border for triangle */
}

.line-1:after {
  left: 4px; /* Position triangle above the line */
  border-bottom: 5px solid #000000; /* Bottom border for triangle */
  transform: translate(-54%, -50%) rotate(90deg); /* Rotate line 2 */

}

.line-2:before {
  left: 4px; /* Position triangle above the line */
  border-bottom: 5px solid #000000; /* Bottom border for triangle */
  transform: translate(-60%, -50%) rotate(90deg); /* Rotate line 2 */
}

.line-1 {
  transform: translate(50%, -46%) rotate(180deg); /* Rotate line 1 */
}

.line-2 {
  transform: translate(-150%, -50%) rotate(0deg); /* Rotate line 2 */
}
</style>