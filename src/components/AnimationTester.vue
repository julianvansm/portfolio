<template>
  <div>
    <svg class="wave" viewBox="-600 600 3820 1334.1">

      <path fill-rule="evenodd" clip-rule="evenodd"
            d="M2004 909C2493 573 2388 475 2666 334 2944 224 2971 304 3290 178 3427.2 115.4 3574.4 132.4 3721.6 149.6L5120 288.6 5120-.2 0-.2 1 1472C1237 1552 1766 1077 2004 909Z  M11 20.5 4 13m0 0 8-8M4 13h16"
            ref="wavePath" fill="url(#waveGradient)" stroke="white" stroke-width="4"/>
      <defs>
        <linearGradient id="waveGradient" x1="0%" y1="0%" x2="0%" y2="100%">
          <stop offset="0%" stop-color="#fff" />
          <stop offset="100%" stop-color="var(--main-color)" />
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

    const wave1 = "M2004 909C2493 573 2388 475 2666 334 2944 224 2971 304 3290 178 3427.2 115.4 3574.4 132.4 3721.6 149.6L5120 288.6 5120-.2 0-.2 1 1472C1237 1552 1766 1077 2004 909Z";
    const wave2 = "M1976 864C2493 573 2388 475 2666 334 2944 224 2971 304 3290 178 3427.2 115.4 3574.4 132.4 3721.6 149.6L5120 288.6 5120-.2 0-.2 0 1372C1182 1185 1549 1102 1976 864Z";
    const wave3 = "M2004 909C2493 573 2388 475 2666 334 2944 224 2971 304 3290 178 3427.2 115.4 3574.4 132.4 3721.6 149.6L5120 288.6 5120-.2 0-.2 1 1472C1237 1552 1766 1077 2004 909Z";

    const animation = anime({
      targets: wavePath,
      easing: 'linear',
      duration: 28000,
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
.wave {
  overflow: hidden;
  position: relative;
  width: 3000px;
  transform: translateX(-20%);
}


@media screen and (max-width: 760px) {
  .wave{
    overflow: hidden;
    position: relative;
    width: 3000px;
    transform: translate(-30%, -20%);
  }

}
</style>
