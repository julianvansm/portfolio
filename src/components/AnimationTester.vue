<template>
  <div class="wave-top">
    <svg class="wave wave-motion" height="620px" viewBox="0 520.9 2120 322.1">
      <path fill-rule="evenodd" clip-rule="evenodd"
            d=""  ref="wavePath" fill="url(#waveGradient)"/>
      <defs>
        <linearGradient id="waveGradient" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#fff" />
          <stop offset="100%" stop-color="#0bd8a2" />
        </linearGradient>
      </defs>
    </svg>
  </div>

</template>

<script>
import anime from 'animejs';
export default {
  mounted() {
    const wavePath = this.$refs.wavePath;

    const wave1 = "M1886 572.9C2073.9 490.8 2280.6 408.3 2460.1 321.3 2639.7 234.3 2913 209.5 3280 247.1 3427.2 255.7 3574.4 264.2 3721.6 272.8L5120 342.3 5120 197.9 0 197.9 3 742C222 856 327 864 513 877 1332 861 1708.9 612.7 1786 601.9Z";
    const wave2 = "M1874 553C2073.9 490.8 2280.6 408.3 2460.1 321.3 2639.7 234.3 2913 209.5 3280 247.1 3427.2 255.7 3574.4 264.2 3721.6 272.8L5120 342.3 5120 197.9 0 197.9 3 742C222 856 327 864 503 858 1341 832 1698 603 1784 582Z";
    const wave3 = "M1886 572.9C2073.9 490.8 2280.6 408.3 2460.1 321.3 2639.7 234.3 2913 209.5 3280 247.1 3427.2 255.7 3574.4 264.2 3721.6 272.8L5120 342.3 5120 197.9 0 197.9 3 742C222 856 327 864 513 877 1332 861 1708.9 612.7 1786 601.9Z";

    const animation = anime({
      targets: wavePath,
      easing: 'linear',
      duration: 8000,
      loop: true,
      d: [
        {value: [wave1, wave2]},
        {value: wave3}

      ],
    });
  },
};
</script>

<style scoped>
.wave-top {
  overflow: hidden;
}
.wave {
  //transform: translateX(-1.11111rem);


}
.wave-motion{
  position: relative;
  width: 200%;
  animation: move2 20s linear infinite;
}

@keyframes move2 {
  0% {
    left: -40%;
  }
  50% {
    left: -50%;
  }
  100%{
    left: -40%;
  }
}
</style>
