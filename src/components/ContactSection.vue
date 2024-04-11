<template>
  <div class="z-50 w-full text-white font-sans" id="About">

    <div style="background: rgb(18, 18, 18)">
      <div style="background: rgb(255, 255, 255);" class="w-full box mask last"></div>
     <div class="pt-5">
       <h3 class="text-center ">
         Contact
       </h3>
       <div class="p-10 pt-5 max-sm:p-2 flex flex-col font-extralight">
         <div class="pb-10">
           <h2 class="font-bold">
             E-mail:
           </h2>
           <a class="link text-nowrap font-extralight" href="mailto:julianvansm@gmail.com">
             julianvansm@gmail.com
           </a>
         </div>
         <div class="pb-10">
           <h2 class="font-bold">
             Linked In:
           </h2>
           <a class="link" target=”_blank” href="https://www.linkedin.com/in/julian-van-smirren-9b60b6256">
             LinkedIn
           </a>
         </div>
       </div>
     </div>
    </div>
    <div style="background: rgb(37, 37, 37)" class="flex min-h-40 justify-center">

      <div class="relative z-10 text-gray-400 p-4 sm:p-2" style="max-width: 1002px;">
        <svg :class="{bottom :bottom === true, 'not-bottom' :bottom === false}" class="blurp duration-500" width="192"
             height="61" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg"
             xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 160.7 61.5"
             enable-background="new 0 0 160.7 61.5" xml:space="preserve"><path fill="#252525FF" d="M80.3,61.5c0,0,22.1-2.7,43.1-5.4s41-5.4,36.6-5.4c-21.7,0-34.1-12.7-44.9-25.4S95.3,0,80.3,0c-15,0-24.1,12.7-34.9,25.4S22.3,50.8,0.6,50.8c-4.3,0-6.5,0,3.5,1.3S36.2,56.1,80.3,61.5z"></path></svg>
        <div :class="{'opacity-0' :bottom === false}" class="btn  duration-1000">
          <a href="#" class="btn--top_text">
            <span class="btn__arrow btn__arrow--top"
                  style="opacity: 1; transform: matrix(0.7071, 0.7071, -0.7071, 0.7071, -5, 0);"></span>
            <span class="btn__arrow btn__arrow--bottom"
                  style="opacity: 1; transform: matrix(0.7071, 0.7071, -0.7071, 0.7071, -5, 0);"></span>
          </a>
        </div>
        <div class="flex flex-col justify-center h-full flex-grow">
          <p>Julian van Smirren</p>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      bottom: false,
    }
  },
  mounted() {
    window.addEventListener('scroll', this.handleScroll);
  },

  methods: {
    handleScroll() {
      const scrollHeight = document.documentElement.scrollHeight;
      const clientHeight = window.innerHeight;
      const scrollTop = window.scrollY;

      this.bottom = scrollTop + clientHeight >= scrollHeight - 20;
    },
  },
};
</script>

<style scoped>
.link {
  width: min-content;
}

.bottom {
  transform: translate3d(0px, -20px, 0px);

}



.not-bottom {
  transform: translate3d(0px, 40px, 0px) scale(0.5, 0.5);

}

.blurp {
  position: absolute;
  top: 0;
  left: 50%;
  translate: -50% -50%;
  z-index: 0;
}

.link:hover {
  text-decoration: underline;
}

</style>