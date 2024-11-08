<template>

  <div class="max-sm:p-2 p-10 pb-10" id="About">
    <div class="w-full flex items-center justify-center">
      <div>
        <h2  v-if="english === false"
            class="duration-200 w-min text-nowrap text-6xl max-sm:text-5xl text-white text-center mb-4"
            style=" text-shadow: 2px 2px 2px black;">
          Over mij
        </h2>
        <h2  v-if="english === true"
             class="duration-200 w-min text-nowrap text-6xl max-sm:text-5xl text-white text-center mb-4"
             style=" text-shadow: 2px 2px 2px black;">
          About me
        </h2>
        <div class="container">
          <div class="text-Purple">*</div>
          <div class="line line-1"></div>
          <div class="line line-2"></div>
        </div>
      </div>
    </div>
    <div class="font-semibold font-sans flex flex-col justify-evenly items-center mb-4">
      <div class="duration-200 text-2xl text-white max-sm:text-xl sm:p-2" style="max-width: 1002px;">

<div>
  <AboutMan class="max-md:hidden ml-1 w-1/2 md:float-right" ></AboutMan>

  <div v-if="english">
    <hgroup>

      <h2 class="mb-6">
        My name is Julian van Smirren, a second-year software development student at Landstede (born April 2006).
        I have a strong and growing interest in web development, especially with technologies like ExpressJS, ReactJS, and JavaScript.
        Additionally, I bring experience with a range of frameworks and languages, including Laravel, PHP, Symfony, Node.js, Java, C#, HTML, and CSS.

      </h2>
      <h3>
        This passion for creation extends beyond programming,
        as evidenced by my dedication to composing piano pieces.
        Along with my studies, I've been working at a local grocery store.
        This job has given me some great hands-on skills and helped me learn how to work well in a busy work environment.

      </h3>
    </hgroup>
  </div>
  <div v-if="english === false">
    <hgroup>
      <h2 class="mb-6">
        Mijn naam is Julian van Smirren, een tweedejaars student softwareontwikkeling bij Landstede (geboren april 2006).
        Ik heb een grote en snelgroeiende interesse in webontwikkeling, vooral met ExpressJS, ReactJS en JavaScript.
        Daarnaast heb ik ervaring met verschillende frameworks en programmeertalen, waaronder Laravel, PHP, Symfony, Node.js, Java, C#, HTML en CSS.
      </h2>

      <h3>
        Deze passie voor creatie gaat verder dan programmeren.
        Ook wijd ik veel tijd aan het componeren van pianostukken.
        Naast mijn studie werk ik bij een lokale supermarkt.
        Deze baan heeft mij een veel praktische vaardigheden opgeleverd en mij geleerd hoe ik kan presteren
        in een drukke werk omgeving.
      </h3>
    </hgroup>
  </div>
</div>
      </div>
    </div>

  </div>
</template>

<script>
import AboutMan from "@/components/AboutMan.vue";

export default {
  components: {AboutMan},
  props: {
    english: Boolean,
  },
};
</script>

<style scoped>

</style>