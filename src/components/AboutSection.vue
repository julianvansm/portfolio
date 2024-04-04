<template>
  <div class="  max-sm:p-2 p-10 pb-10" id="About">
    <h2
        class="duration-200  text-6xl max-sm:text-5xl text-white text-center mb-4"
        style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px black;">
      About me
    </h2>
    <div class="flex flex-col justify-evenly items-center mb-4">
      <div class=" p-4 sm:p-2" style="max-width: 1002px;">
        <hgroup
                class="duration-200  text-3xl max-sm:text-xl">
          <h2 class="mb-2"> I am Julian van Smirren, a first-year software development student at Landstede,
            born in April 2006. I possess a strong foundation in web development technologies like PHP
            and JavaScript.
          </h2>
          <h3>
            My passion for software development stems from a lifelong love of creation, both digital and physical.
            This is reflected in my hobby of composing piano pieces. To complement my academic pursuits,
            I gain valuable work experience and income through my role at a local grocery store.
          </h3>
        </hgroup>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  props: {
    scrollPos: Number,
  },
};
</script>

<style scoped>
.transparent {
  opacity: 0;
}
</style>