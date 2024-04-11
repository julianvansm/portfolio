<template>
    <span class="z-50 fixed top-0 right-0 m-2 border-black border-2 rounded overflow-hidden">
        <a class="hover:cursor-pointer" @click="lan()" >
                <img v-if="english === true" src="../../public/images/nl.png" alt="images/nl2.png"
                     height="40"
                     width="40">
              <img v-if="english === false" src="../../public/images/en.png" alt="images/nl2.png"
                   height="40"
                   width="40">
        </a>
    </span>
  <div id="app">
    <video
        class="opacity-20 w-screen h-screen object-cover fixed -z-10"
        autoplay
        muted
        loop
        id="background-video"
    >
      <source src="../../public/video/movingbackgroundbackup.mp4"/>
    </video>

    <div id="Home" class="top-0 w-0" style="height: 2px;"></div>
    <div ref="intro"
         class="duration-300 sticky h-screen flex items-center justify-center z-0">
      <div class="w-full h-full relative">
        <div style="transform: translate(-50%, -50%)"
             class="absolute top-1/2 left-1/2"
             :style="{ transform: `translate(-50%, calc(-100% + ${this.aboutPos * 0.1}% ))`,
              opacity: this.aboutPos > 700 ? 1 : Math.max(0, (this.aboutPos - 200) / 500) }"
        >
          <div  class="text-white px-2 text-center text-nowrap ">
           <div  :class="{'opacity-0': top === false}" class=" absolute duration-1000 -bottom-36 left-1/2 ">
             <a href="#about" style="transform: rotate(180deg)" class=" btn--page_top">
            <span  :class="{animation: top === true}"  class="btn__arrow btn__arrow--top"
                  style="opacity: 1; transform: matrix(0.7071, 0.7071, -0.7071, 0.7071, -5, 0);"></span>
               <span :class="{animation: top === true}" class="btn__arrow btn__arrow--bottom"
                     style="opacity: 1; transform: matrix(0.7071, 0.7071, -0.7071, 0.7071, -5, 0);"></span>
             </a>
           </div>
            <hgroup style="-webkit-text-stroke: 2px #000000; text-shadow: 2px 2px 2px black;"
                    class=" sm:text-3xl text-xl text-white">
              <h1 class="max-sm:text-3xl text-5xl">Julian van Smirren</h1>
              <h2 class="max-sm:text-2xl text-3xl">Software development</h2>
            </hgroup>

          </div>
        </div>
      </div>

    </div>
    <div>

      <div ref="about" id="about"
           class=" duration-500"
      >
        <div>
          <div style="background: rgb(255, 255, 255);" class="box mask"></div>
          <div class="about-wrapper  duration-500">
            <AboutSection v-if="english === true" id="About"/>
            <about-section-dutch v-if="english === false" id="About"/>

          </div>
        </div>
      </div>
      <div style="max-height: 70vh; " class="z-0 relative bg-gray-300">
        <div class=" relative h-screen">
          <img :style="{ transform: `translateY(clamp(-30%, calc(-${(this.projectPos / 1000 * 60 )/2}%), 0%))` }"
               class="absolute top-0 h-screen w-screen object-cover overflow-hidden" src="/images/software-bg.png"
               alt="noImg">


        </div>
        <div style="background: rgb(255, 255, 255);" class=" box mask last absolute top-0 left-0 w-full h-full"></div>
        <div style="background: rgb(255, 255, 255);" class="box mask absolute bottom-0 left-0 w-full h-full"></div>

      </div>
    </div>


    <div ref="project"
         class="relative duration-1000 ">
      <div class="relative">
        <div class="project-list-wrapper">
          <div class="sticky z-20">
            <h2 class="text-6xl max-sm:text-5xl text-white text-center py-4"
                style="background: rgb(255, 255, 255); -webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px black;">
              Projects
            </h2>
            <div style="background: rgb(255, 255, 255);" class="box mask last"></div>
          </div>
          <div class="project-card-wrapper min-h-screen ">
            <ProjectCard v-if="english === true" v-for="project in projectsEnglish" :key="project.title" :project="project"/>
            <ProjectCard v-if="english === false" v-for="project in projectsDutch" :key="project.title" :project="project"/>


          </div>
        </div>
      </div>

    </div>

    <div ref="" class="">
      <div class="contact-wrapper duration-500">
        <ContactSection id="Contact"/>
      </div>
    </div>
    <div ref="contact" class=""></div>
  </div>
</template>

<script>
import {defineComponent, onMounted, ref} from "vue";
import AboutSection from "./AboutSection.vue";
import ProjectCard from "./ProjectCard.vue";
import ContactSection from "./ContactSection.vue";
import AboutSectionDutch from "./AboutSectionDutch.vue";


function debounce(func, delay) {
  let timeout;
  return (...args) => {
    clearTimeout(timeout);
    timeout = setTimeout(() => func.apply(this, args), delay);
  };
}

export default defineComponent({
  data() {
    return {
      scrollPos: 0,
      aboutPos: 0,
      projectPos: 0,
      contactPos: 0,
      transparentTitle: false,
      english: true,
      top: true,
      projectsEnglish: [
        {
          title: 'Portfolio',
          date: 'August 2022',
          description: "My Portfolio is the very first project I've worked on, and believe it or not you are on it right now! I went for the simple and not extensive look. This project taught me the basics of coding and website design.",
          image: '/images/fulllogojs.jpg',
          info: true,
          paragraph1:
              "In my first year of software development I was tasked with making my portfolio in phpStorm using css and html." +
              " At the time I knew near nothing of coding thus it resulted in a simple website. This website can be found here: ",
          paragraph2Title: "Redesign",
          paragraph2:
              " Later in the second year I decided to remake my portfolio, that should be the website you are viewing right now." +
              " I decided to use vue.js, this is a powerfull frontend framework using javascript." +
              " I tried to implement many more clean animations and designs.",
          oldLink: 'https://julian-van-smirren.newdeveloper.nl/welcomenl',
          link: '#Home',
        },
        {
          title: 'The Order of the Frontier',
          date: 'August 2022',
          description: 'The Order was my second project, it is used for an informational guide to a game and community. This also is the project where I got the chance to experiment a lot. The Order was a great learning experience.',
          image: '/images/theorder.jpg',
          link: 'https://theorder.newdeveloper.nl/',
        },
        {
          title: 'Pecu',
          date: 'Dec-Jan 2022-2023',
          description: 'Pecu was the second official school project, We were tasked with creating a website for money managing purposes. This project taught me how to work in a team and how to come up with interesting and creative ways to create graphs and database connections.',
          image: '/images/pecu.jpg',
          link: 'https://pecu.newdeveloper.nl/',
        },
        {
          title: 'Mastermind',
          date: 'Feb-Maart 2023',
          description: 'Mastermind was the third school project. In this project, a classmate and I were assigned to create the game Mastermind. The game had to be easy to understand, with a scoreboard and an explanation page. We were required to minimize page refreshing for this project, so we used JavaScript. This was my first time working with JavaScript. I not only learned a lot about JavaScript but also realized the importance of good preparation.',
          image: '/images/mastermind.png',
          link: 'https://brainsinc.newdeveloper.nl/',
        },
        {
          title: "Oma's Bordspellen",
          date: 'Apr-Jul 2023',
          description: 'Oma\'s Bordspellen is a Dutch webshop that offers a diverse range of board games for purchase. As part of my responsibilities, I was assigned the task of developing the product, favorites, and browse pages, as well as implementing the underlying functionality for these pages. To accomplish this, we opted to utilize ReactJS, a cutting-edge framework, and TypeScript, a powerful programming language. While initially challenging due to our team\'s lack of prior experience with this framework, I swiftly adapted and made significant strides in mastering ReactJS.',
          image: '/images/omasbordspellen.png',
          link: 'https://omas-bordspellen.newdeveloper.nl/',
        },
      ],
      projectsDutch: [
        {
          title: 'Portfolio',
          date: 'Augustus 2022',
          description: "Dit is mijn allereerste project: de portfolio die je nu doorbladert! Ik heb het voor deze clean en functioneel gehouden, maar het was een geweldige springplank om de basis van coderen en webdesign te leren.",
          image: '/images/fulllogojs.jpg',
          link: '#Home',
        },
        {
          title: 'De Orde van de Frontier',
          date: 'Augustus 2022',
          description: 'The Order was mijn tweede project. Het is een informatieve gids voor een game en zijn community. Dit is ook het project waar ik de kans kreeg om veel te experimenteren. The Order was een geweldige leerervaring.',
          image: '/images/theorder.jpg',
          link: 'https://theorder.newdeveloper.nl/',
        },
        {
          title: 'Pecu',
          date: 'Dec-Jan 2022-2023',
          description: 'Pecu was het tweede officiële schoolproject. We kregen de opdracht om een website te maken voor geldbeheer. Dit project leerde me hoe ik in een team kan werken en hoe ik op interessante en creatieve manieren grafieken en databaseverbindingen kan maken.',
          image: '/images/pecu.jpg',
          link: 'https://pecu.newdeveloper.nl/',
        },
        {
          title: 'Mastermind',
          date: 'Feb-Maart 2023',
          description: 'Mastermind was het derde schoolproject. In dit project moesten mijn klasgenoot en ik het spel Mastermind creëren. Het spel moest gemakkelijk te begrijpen zijn, met een scorebord en een uitlegpagina. We moesten voor dit project het vernieuwen van de pagina minimaliseren, dus gebruikten we JavaScript. Dit was mijn eerste keer dat ik met JavaScript werkte. Ik leerde niet alleen veel over JavaScript, maar realiseerde me ook het belang van een goede voorbereiding.',
          image: '/images/mastermind.png',
          link: 'https://brainsinc.newdeveloper.nl/',
        },
        {
          title: "Oma's Bordspellen",
          date: 'Apr-Jul 2023',
          description: "Oma's Bordspellen is een Nederlandse webshop die een divers aanbod aan bordspellen te koop aanbiedt. Als onderdeel van mijn verantwoordelijkheden kreeg ik de taak om de product-, favorieten- en browse-pagina's te ontwikkelen, evenals de onderliggende functionaliteit voor deze pagina's te implementeren. Om dit te bereiken, hebben we gekozen voor ReactJS, een modern framework, en TypeScript, een krachtige programmeertaal. Hoewel het in het begin een uitdaging was vanwege het gebrek aan ervaring van ons team met dit framework, paste ik me snel aan en boekte ik grote vooruitgang in het beheersen van ReactJS.",
          image: '/images/omasbordspellen.png',
          link: 'https://omas-bordspellen.newdeveloper.nl/',
        },
      ],

    };
  },
  components: {
    AboutSectionDutch,
    ContactSection,
    AboutSection,
    ProjectCard,
  },
  mounted() {
    this.getProjectRect();
    this.getAboutRect();
    this.getContactRect();
    const updateScrollPositions = debounce(() => { //use debounce for performance
      this.getProjectRect();
      this.getAboutRect();
      this.getContactRect();
    }, 10);

    window.addEventListener("scroll", updateScrollPositions);
    window.addEventListener('scroll', this.handleScroll);

  },
  setup() {
    const scrollPos = ref(0);

    return {
      scrollPos,
    };
  },

  methods: {
    handleScroll() {
      const scrollHeight = document.documentElement.scrollHeight;
      const clientHeight = window.innerHeight;
      const scrollTop = window.scrollY;
      console.log('scrollTop', scrollTop)
      console.log('clientHeight', clientHeight)
      console.log('scrollHeight', scrollHeight)


      this.top = scrollTop >= 0 && scrollTop <= 100;
      console.log('top',this.top)
    },
    async getContactRect() {
      const contact = await this.$refs.contact;
      if (contact) {
        this.contactPos = contact.getBoundingClientRect().top;
      }
    },
    async getAboutRect() {
      const about = await this.$refs.about;
      if (about) {
        this.aboutPos = about.getBoundingClientRect().top;
      }
      this.transparentTitle = this.aboutPos < 500;
    },
    async getProjectRect() {
      const project = await this.$refs.project;
      if (project) {
        this.projectPos = project.getBoundingClientRect().top;
      }
    },
    async lan(){
      this.english = this.english !== true;
    }
  },
});
</script>


<style scoped>

div.sticky {
  position: sticky;
  top: -10px;
  font-size: 20px;
}

.about-wrapper {
  z-index: 10;
  display: flex;
  position: sticky;
  top: 0;
  flex-wrap: wrap;
  justify-content: space-around;
  background: rgb(255, 255, 255);

}

.project-card-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
}

.project-list-wrapper {
  z-index: 20;
  position: sticky;
  top: 0;
  background: rgb(255, 255, 255);
}

.contact-wrapper {
  z-index: 30;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;

}


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
  from {height: 50px}
  from {width: 50px}
  from  {opacity: 0;}
  from  {transform: translate(-5px, -1000%) rotate(45deg) ;}
  to {opacity: 100%}
  to  {transform: translate(-5px, 0%) rotate(45deg);}
  to  {height: 15px;}
  to {width: 15px;}

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
