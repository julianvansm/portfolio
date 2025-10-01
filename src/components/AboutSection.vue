<template>


    <div class=" font-semibold font-sans flex flex-col justify-evenly  items-center mb-6 pb-2">
      <div class="duration-200 text-2xl text-white overflow-hidden max-sm:text-sm sm:p-2" style="max-width: 1002px;">

        <div>
          <AboutMan class="max-md:hidden bg-white rounded-xl ml-1 w-1/2 md:float-right" style="box-shadow: -3px 6px 5px 1px rgba(0, 0, 0)"></AboutMan>

          <div v-if="english">
            <hgroup>

              <h2 class="mb-6">
                My name is Julian van Smirren, a second-year software development student at Landstede (born April
                2006).
                I have a strong and growing interest in web development, especially with technologies like ExpressJS,
                ReactJS, and JavaScript.
                Additionally, I bring experience with a range of frameworks and languages, including Laravel, PHP,
                Symfony, Node.js, Java, C#, HTML, and CSS.

              </h2>
              <h3>
                This passion for creation extends beyond programming,
                as evidenced by my dedication to composing piano pieces.
                Along with my studies, I've been working at a local grocery store.
                This job has given me some great hands-on skills and helped me learn how to work well in a busy work
                environment.

              </h3>
            </hgroup>

          </div>
          <div v-if="english === false">
            <hgroup>
              <h2 class="mb-6">
                Mijn naam is Julian van Smirren, een tweedejaars student softwareontwikkeling bij Landstede (geboren
                april 2006).
                Ik heb een grote en snelgroeiende interesse in webontwikkeling, vooral met ExpressJS, ReactJS en
                JavaScript.
                Daarnaast heb ik ervaring met verschillende frameworks en programmeertalen, waaronder Laravel, PHP,
                Symfony, Node.js, Java, C#, HTML en CSS.
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

  <div class="flex justify-start flex-grow flex-col items-start  ">
    <div class="max-w-[80vw] w-[80vw] flex flex-wrap gap-4 max-sm:gap-2 overflow-scroll max-h-[30vh] max-sm:text-sm justify-around bar-remove p-4">
      <div class="bg-white flex  justify-center items-center rounded-xl h-20  max-sm:p-3 sm:min-w-[300px] sm:w-[20vw] w-[30vw] max-w-[300px] max-sm:max-w-[130px] max-sm:min-w-[130px]" style="box-shadow: 3px 3px 5px 1px rgba(0, 0, 0)">
        <p class="flex gap-4 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 6.75 22.5 12l-5.25 5.25m-10.5 0L1.5 12l5.25-5.25m7.5-3-4.5 16.5" />
          </svg>
            Javascript
          </p>
      </div>
      <div class="bg-white flex  justify-center items-center rounded-xl h-20  max-sm:p-3 sm:min-w-[300px] sm:w-[20vw] w-[30vw] max-w-[300px] max-sm:max-w-[130px] max-sm:min-w-[130px]" style="box-shadow: 3px 3px 5px 1px rgba(0, 0, 0)">
        <p class="flex gap-4 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M1.5 6a2.25 2.25 0 0 1 2.25-2.25h16.5A2.25 2.25 0 0 1 22.5 6v12a2.25 2.25 0 0 1-2.25 2.25H3.75A2.25 2.25 0 0 1 1.5 18V6ZM3 16.06V18c0 .414.336.75.75.75h16.5A.75.75 0 0 0 21 18v-1.94l-2.69-2.689a1.5 1.5 0 0 0-2.12 0l-.88.879.97.97a.75.75 0 1 1-1.06 1.06l-5.16-5.159a1.5 1.5 0 0 0-2.12 0L3 16.061Zm10.125-7.81a1.125 1.125 0 1 1 2.25 0 1.125 1.125 0 0 1-2.25 0Z" clip-rule="evenodd" />
          </svg>

          Html/CSS
        </p>
      </div>
      <div class="bg-white flex  justify-center items-center rounded-xl h-20  max-sm:p-3 sm:min-w-[300px] sm:w-[20vw] w-[30vw] max-w-[300px] max-sm:max-w-[130px] max-sm:min-w-[130px]" style="box-shadow: 3px 3px 5px 1px rgba(0, 0, 0)">
        <p class="flex gap-4 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
            <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
          </svg>
          PHP
        </p>
      </div>
      <div class="bg-white flex  justify-center items-center rounded-xl h-20  max-sm:p-3 sm:min-w-[300px] sm:w-[20vw] w-[30vw] max-w-[300px] max-sm:max-w-[130px] max-sm:min-w-[130px]" style="box-shadow: 3px 3px 5px 1px rgba(0, 0, 0)">
      <p class="flex gap-4 items-center">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
          <path fill-rule="evenodd" d="M7.502 6h7.128A3.375 3.375 0 0 1 18 9.375v9.375a3 3 0 0 0 3-3V6.108c0-1.505-1.125-2.811-2.664-2.94a48.972 48.972 0 0 0-.673-.05A3 3 0 0 0 15 1.5h-1.5a3 3 0 0 0-2.663 1.618c-.225.015-.45.032-.673.05C8.662 3.295 7.554 4.542 7.502 6ZM13.5 3A1.5 1.5 0 0 0 12 4.5h4.5A1.5 1.5 0 0 0 15 3h-1.5Z" clip-rule="evenodd" />
          <path fill-rule="evenodd" d="M3 9.375C3 8.339 3.84 7.5 4.875 7.5h9.75c1.036 0 1.875.84 1.875 1.875v11.25c0 1.035-.84 1.875-1.875 1.875h-9.75A1.875 1.875 0 0 1 3 20.625V9.375ZM6 12a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V12Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 15a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V15Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75ZM6 18a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V18Zm2.25 0a.75.75 0 0 1 .75-.75h3.75a.75.75 0 0 1 0 1.5H9a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" />
        </svg>


        VueJs
      </p>
    </div>
      <div class="bg-white flex  justify-center items-center rounded-xl h-20  max-sm:p-3 sm:min-w-[300px] sm:w-[20vw] w-[30vw] max-w-[300px] max-sm:max-w-[130px] max-sm:min-w-[130px]" style="box-shadow: 3px 3px 5px 1px rgba(0, 0, 0)">
        <p class="flex gap-4 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path d="M12.378 1.602a.75.75 0 0 0-.756 0L3 6.632l9 5.25 9-5.25-8.622-5.03ZM21.75 7.93l-9 5.25v9l8.628-5.032a.75.75 0 0 0 .372-.648V7.93ZM11.25 22.18v-9l-9-5.25v8.57a.75.75 0 0 0 .372.648l8.628 5.033Z" />
          </svg>

          reactJs
        </p>
      </div>
      <div class="bg-white flex  justify-center items-center rounded-xl h-20  max-sm:p-3 sm:min-w-[300px] sm:w-[20vw] w-[30vw] max-w-[300px] max-sm:max-w-[130px] max-sm:min-w-[130px]" style="box-shadow: 3px 3px 5px 1px rgba(0, 0, 0)">
        <p class="flex gap-4 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path d="M4.5 3.75a3 3 0 0 0-3 3v.75h21v-.75a3 3 0 0 0-3-3h-15Z" />
            <path fill-rule="evenodd" d="M22.5 9.75h-21v7.5a3 3 0 0 0 3 3h15a3 3 0 0 0 3-3v-7.5Zm-18 3.75a.75.75 0 0 1 .75-.75h6a.75.75 0 0 1 0 1.5h-6a.75.75 0 0 1-.75-.75Zm.75 2.25a.75.75 0 0 0 0 1.5h3a.75.75 0 0 0 0-1.5h-3Z" clip-rule="evenodd" />
          </svg>
          java
        </p>
      </div>
      <div class="bg-white flex  justify-center items-center rounded-xl h-20  max-sm:p-3 sm:min-w-[300px] sm:w-[20vw] w-[30vw] max-w-[300px] max-sm:max-w-[130px] max-sm:min-w-[130px]" style="box-shadow: 3px 3px 5px 1px rgba(0, 0, 0)">
        <p class="flex gap-4 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path fill-rule="evenodd" d="M6.32 1.827a49.255 49.255 0 0 1 11.36 0c1.497.174 2.57 1.46 2.57 2.93V19.5a3 3 0 0 1-3 3H6.75a3 3 0 0 1-3-3V4.757c0-1.47 1.073-2.756 2.57-2.93ZM7.5 11.25a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H8.25a.75.75 0 0 1-.75-.75v-.008Zm.75 1.5a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75H8.25Zm-.75 3a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75H8.25a.75.75 0 0 1-.75-.75v-.008Zm.75 1.5a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V18a.75.75 0 0 0-.75-.75H8.25Zm1.748-6a.75.75 0 0 1 .75-.75h.007a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.007a.75.75 0 0 1-.75-.75v-.008Zm.75 1.5a.75.75 0 0 0-.75.75v.008c0 .414.335.75.75.75h.007a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75h-.007Zm-.75 3a.75.75 0 0 1 .75-.75h.007a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.007a.75.75 0 0 1-.75-.75v-.008Zm.75 1.5a.75.75 0 0 0-.75.75v.008c0 .414.335.75.75.75h.007a.75.75 0 0 0 .75-.75V18a.75.75 0 0 0-.75-.75h-.007Zm1.754-6a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 1.5a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75h-.008Zm-.75 3a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 1.5a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V18a.75.75 0 0 0-.75-.75h-.008Zm1.748-6a.75.75 0 0 1 .75-.75h.008a.75.75 0 0 1 .75.75v.008a.75.75 0 0 1-.75.75h-.008a.75.75 0 0 1-.75-.75v-.008Zm.75 1.5a.75.75 0 0 0-.75.75v.008c0 .414.336.75.75.75h.008a.75.75 0 0 0 .75-.75V13.5a.75.75 0 0 0-.75-.75h-.008Zm-8.25-6A.75.75 0 0 1 8.25 6h7.5a.75.75 0 0 1 .75.75v.75a.75.75 0 0 1-.75.75h-7.5a.75.75 0 0 1-.75-.75v-.75Zm9 9a.75.75 0 0 0-1.5 0V18a.75.75 0 0 0 1.5 0v-2.25Z" clip-rule="evenodd" />
          </svg>

          C#
        </p>
      </div>
      <div class="bg-white flex  justify-center items-center rounded-xl h-20  max-sm:p-3 sm:min-w-[300px] sm:w-[20vw] w-[30vw] max-w-[300px] max-sm:max-w-[130px] max-sm:min-w-[130px]" style="box-shadow: 3px 3px 5px 1px rgba(0, 0, 0)">
        <p class="flex gap-4 items-center">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6">
            <path d="M16.5 7.5h-9v9h9v-9Z" />
            <path fill-rule="evenodd" d="M8.25 2.25A.75.75 0 0 1 9 3v.75h2.25V3a.75.75 0 0 1 1.5 0v.75H15V3a.75.75 0 0 1 1.5 0v.75h.75a3 3 0 0 1 3 3v.75H21A.75.75 0 0 1 21 9h-.75v2.25H21a.75.75 0 0 1 0 1.5h-.75V15H21a.75.75 0 0 1 0 1.5h-.75v.75a3 3 0 0 1-3 3h-.75V21a.75.75 0 0 1-1.5 0v-.75h-2.25V21a.75.75 0 0 1-1.5 0v-.75H9V21a.75.75 0 0 1-1.5 0v-.75h-.75a3 3 0 0 1-3-3v-.75H3A.75.75 0 0 1 3 15h.75v-2.25H3a.75.75 0 0 1 0-1.5h.75V9H3a.75.75 0 0 1 0-1.5h.75v-.75a3 3 0 0 1 3-3h.75V3a.75.75 0 0 1 .75-.75ZM6 6.75A.75.75 0 0 1 6.75 6h10.5a.75.75 0 0 1 .75.75v10.5a.75.75 0 0 1-.75.75H6.75a.75.75 0 0 1-.75-.75V6.75Z" clip-rule="evenodd" />
          </svg>



          C++
        </p>
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
.bar-remove::-webkit-scrollbar {
  display: none;
}

.bar-remove {
  -ms-overflow-style: none;
  scrollbar-width: none;
}
</style>