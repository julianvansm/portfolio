<template>
  <div  :class="{'opacity-0': top === false}" class=" absolute duration-1000 -bottom-36 left-1/2 ">
    <a href="#about" style="transform: rotate(180deg)" class=" btn--page_top">
            <span  :class="{animation: top === true}"  class="btn__arrow btn__arrow--top"
                   style="opacity: 1; transform: matrix(0.7071, 0.7071, -0.7071, 0.7071, -5, 0);"></span>
      <span :class="{animation: top === true}" class="btn__arrow btn__arrow--bottom"
            style="opacity: 1; transform: matrix(0.7071, 0.7071, -0.7071, 0.7071, -5, 0);"></span>
    </a>
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
.btn--page_top {
  display: block;
  position: absolute;
  top: -10px;
  left: 50%;
  font-size: 12px;
  font-weight: 700;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: white;
  transform: translateX(-50%) translateY(-30%);

}

.btn--page_top .btn__arrow {

  display: block;
  position: absolute;
  left: 50%;
  height: 15px;
  width: 15px;
  border-left: 3px solid white;
  border-top: 3px solid white;


}

.btn--page_top .animation {
  animation-name: downArrow;
  animation-duration: 1000ms;
}

@keyframes downArrow {
  from {
    height: 50px
  }
  from {
    width: 50px
  }
  from {
    opacity: 0;
  }
  from {
    transform: translate(-5px, -1000%) rotate(45deg);
  }
  to {
    opacity: 100%
  }
  to {
    transform: translate(-5px, 0%) rotate(45deg);
  }
  to {
    height: 15px;
  }
  to {
    width: 15px;
  }

}

.btn--page_top:hover {
  filter: drop-shadow(2px 2px 2px);
}

.btn--page_top .btn__arrow--top {
  top: -4px;
}

.btn--page_top .btn__arrow--bottom {
  top: 6px;
}

</style>
