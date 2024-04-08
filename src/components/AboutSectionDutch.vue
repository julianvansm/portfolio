<template>

  <div class="  max-sm:p-2 p-10 pb-10" id="About">
    <div class="w-full flex justify-center">
      <div>
        <h2
            class="duration-200 w-min text-nowrap text-6xl max-sm:text-5xl text-white text-center mb-4"
            style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px black;">

          About me
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
        <hgroup
            class="duration-200  text-3xl max-sm:text-xl">
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
</template>

<script>
export default {
  props: {
    scrollPos: Number,
  },
};
</script>

<style scoped>
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