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
            I'm Julian van Smirren, a first-year software development student at Landstede (born April 2006).
            My passion for building things in the digital world is strong.
            My interest in web development, particularly using technologies like PHP and JavaScript, is rapidly growing.

          </h2>
          <h3>
            This passion for creation extends beyond programming,
            as evidenced by my dedication to composing piano pieces.
            Along with my studies, I've been working at a local grocery store.
            This job has given me some great hands-on skills and helped me learn how to work well in a busy place.

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