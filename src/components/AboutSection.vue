<template>

  <div class="max-sm:p-2 p-10 pb-10" id="About">
    <div class="w-full flex items-center justify-center">
      <div>
        <h2
            class="duration-200 w-min text-nowrap text-6xl max-sm:text-5xl text-white text-center mb-4"
            style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px black;">
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
      <div class="duration-200 text-3xl text-white max-sm:text-xl sm:p-2" style="max-width: 1002px;">
        <div v-if="english">
          <hgroup>
            <h2 class="mb-6">
              My name is Julian van Smirren, a second-year software development student at Landstede (born April 2006).
              My passion for creation and interest in web development, particularly using technologies like PHP and
              JavaScript, is rapidly growing.

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
              Ik ben Julian van Smirren, een tweedejaars student softwareontwikkeling bij Landstede (geboren april 2006).
              Mijn passie voor het maken van dingen in de digitale wereld is zeer sterk.
              Mijn interesse in webontwikkeling, met name in technologieën zoals PHP en JavaScript, groeit snel.
            </h2>

            <h3>
              Deze passie voor creatie gaat verder dan programmeren,
              getuige mijn toewijding aan het componeren van pianostukken.
              Naast mijn studie werk ik bij een lokale supermarkt.
              Deze baan heeft me een aantal geweldige praktische vaardigheden opgeleverd en me geleerd hoe ik goed kan
              werken in een drukke omgeving.
            </h3>
          </hgroup>
        </div>
      </div>
    </div>

  </div>
</template>

<script>
export default {
  props: {
    english: Boolean,
  },
};
</script>

<style scoped>

</style>