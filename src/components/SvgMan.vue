<template>

  <lottie-animation style="transform:scale(-1, 1);"
      path="./public/kitty.json"
  />

</template>


<script>
import anime from 'animejs';
import LottieAnimation from "lottie-vuejs/src/LottieAnimation.vue"; // import lottie-vuejs

export default {
  components: {
    LottieAnimation
  },
};
</script>

<style>
.overlay {
  /* Style the overlay element as needed */
}
</style>