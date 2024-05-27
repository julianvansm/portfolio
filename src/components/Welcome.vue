<template>
  <animation-tester class="-z-10 fixed"></animation-tester>

  <span class="z-50 fixed top-0 right-0 m-2  border-white border-2 rounded overflow-hidden">
        <a class="hover:cursor-pointer" @click="lan()">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
               stroke="white" class="w-8 h-8" style="filter: drop-shadow(2px 2px 2px black)">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m10.5 21 5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 0 1 6-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 0 1-3.827-5.802"/>
          </svg>

        </a>

    </span>
<div>
  <p v-if="english === true" style="filter: drop-shadow(2px 2px 1px black)"  class="text-white lan-animation fixed -top-20 right-14 z-50">
    English
  </p>
  <p v-if="english === false" style="filter: drop-shadow(2px 2px 1px black)" class="text-white lan-animation fixed -top-20 right-14 z-50">
    Nederlands
  </p>
</div>
  <div  id="app">
    <div id="Home" class="top-0 w-0"></div>
    <div ref="intro"
         class="duration-300 sticky h-screen flex items-center justify-center z-0">
      <div class="w-full h-full relative">
        <div :class="{'opacity-0': top === false}" class=" absolute duration-1000 bottom-32  left-1/2 ">
          <a href="#about" style="transform: rotate(180deg)" class=" btn--page_top z-50">
            <span :class="{animation: top === true}" class="btn__arrow btn__arrow--top"
                  style="opacity: 1; transform: matrix(0.7071, 0.7071, -0.7071, 0.7071, -5, 0);"></span>
            <span :class="{animation: top === true}" class="btn__arrow btn__arrow--bottom"
                  style="opacity: 1; transform: matrix(0.7071, 0.7071, -0.7071, 0.7071, -5, 0);"></span>
          </a>
        </div>
        <div :class="{ 'loadIn': loadIn, }"
            class="absolute top-0 flex-col md:top-1/2 flex md:justify-between md:flex-row flex-nowrap w-full px-10">
          <div class="w-full">
            <hgroup v-if="english === true" style=""
                    class=" max-md:pt-20 sm:text-3xl text-xl text-white">
              <h1 class="max-sm:text-3xl text-5xl">Hi,</h1>
              <h2 class="text-animaton max-sm:text-3xl text-5xl">I'm <span>Julian</span>,</h2>
              <h3 class="max-sm:text-2xl text-3xl">Software developer</h3>
            </hgroup>
            <hgroup v-if="english === false" style=""
                    class=" max-md:pt-20 sm:text-3xl text-xl text-white">
              <h1 class="max-sm:text-3xl text-5xl">Hoi,</h1>
              <h2 class="text-animaton max-sm:text-3xl text-5xl">Ik ben <span>Julian</span>,</h2>
              <h3 class="max-sm:text-2xl text-3xl">Software developer</h3>
            </hgroup>
          </div>
          <div style="" class="cat-responsive absolute right-0 top-1/2">
            <svg-man></svg-man>

          </div>
        </div>
      </div>

    </div>
    <div class="about-wrapper sticky about top-0 min-h-full h-screen overflow-y-auto">
      <div id="about" class="">
        <AboutSection :english="english" id="About"/>
      </div>
    </div>


    <div ref="project"
         class="relative duration-1000 pt-20 ">
      <div class="relative">
        <div style=" border-top: 3px solid #0bd8a2; background: #00343d" class="project-list-wrapper">
          <div class="sticky z-30">
            <div style="background: #00343d;" class=" w-full flex justify-center">
              <div class="w-min">
                <h2 class="text-6xl max-sm:text-5xl text-white text-center pt-4"
                    style="background: #00343d; -webkit-text-stroke: 1px #000000;">
                  Projects
                </h2>
                <div class="container">
                  <div class="text-red-500">*</div>
                  <div class="line line-1"></div>
                  <div class="line line-2"></div>
                </div>
              </div>
            </div>

            <div style="background: #00343d; " class="box mask last"></div>
          </div>
          <div class="project-card-wrapper min-h-screen z-20 ">
            <ProjectCard v-if="english === true" v-for="project in projectsEnglish" :key="project.title"
                         :project="project"/>
            <ProjectCard v-if="english === false" v-for="project in projectsDutch" :key="project.title"
                         :project="project"/>


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
import SvgMan from "@/components/SvgMan.vue";
import anime from "animejs/lib/anime.es.js";
import AnimationTester from "@/components/AnimationTester.vue";

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
      english: true,
      top: true,
      loadIn: true,
      projectsEnglish: [
        {
          title: 'Portfolio',
          date: 'August 2022',
          description: "My Portfolio is the very first project I've worked on, and believe it or not you are on it right now! I went for the simple and not extensive look. This project taught me the basics of coding and website design.",
          image: '/images/fulllogojs.jpg',
          link: '#Home',
          info: true,
          paragraph1:
              "In my first year of software development I was tasked with making my portfolio in phpStorm using the Laravel framework, css and html. I even sprinkled in some JavaScript that remembers where the reader left off when they reload the page." +
              " At the time I knew near nothing of coding thus it resulted in a simple website. This website can be found here: ",
          paragraph2Title: "Redesign",
          paragraph2:
              " Later in the second year I decided to remake my portfolio, that should be the website you are viewing right now." +
              " I decided to use vue.js, this is a powerfull frontend framework using javascript." +
              " I tried to implement many more clean animations and designs.",
          extraLink: 'https://julian-van-smirren.newdeveloper.nl/welcomenl',
          extraLinkName: 'Portfolio',
        },
        {
          title: 'The Order of the Frontier',
          date: 'August 2022',
          description: 'The Order was my second project, it is used for an informational guide to a game and community. This also is the project where I got the chance to experiment a lot. The Order was a great learning experience.',
          image: '/images/theorder.jpg',
          link: 'https://theorder.newdeveloper.nl/',
          info: true,
          paragraph1:
              "While everyone was working on their portfolio, I decided to work on a personal website, this is the Order of the Frontier. Its made in phpStorm using the Laravel framework, css, html and some JavaScript for some animations and transitions." +
              "With this project I learned alot of the simple quirks in JavaScript.",
          paragraph2Title: "Fantastic Frontier",
          paragraph2:
              " The Order of the Frontier is a website that provides lots of information and guides on how to play a game called Fantastic Frontier." +
              " Unfortunately I no longer play this game much yet, the memories and experiences won't fade",
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
        {
          title: 'Pokemon API',
          date: 'March 2024',
          description: "This project was my first look into creating my own server. The goal of the project was to make a functioning pokemon game with the use of a front and back end application. We used VueJS for the frontend and ExpressJs for the backend. I had a lot of fun with this project and learned a bunch about API applications",
          image: '/images/pokemonapi.png',
          info: true,
          paragraph1:
              "The project Pokemon Api was an amazing learning experience. " +
              "School gave us their api, all the data of the pokemon are stored inside the api. " +
              "I took the required data and saved this into my local database. I used Express for the backend application and Vue for the frontend. " +
              "Luckily I didn't have any experience so I got to invest lots of time into experimenting and learning. I loved learning the twists and turns of the software. Along with express and vue I used websockets for the communication between the two applications." +
              "This project was a client-side project which means that all I can show you are the repositories",
          paragraph2Title: "Battle Mechanism",
          paragraph2:
              " To give a little more information as to how the battles work. Each game requires two users, these users are in the lobby before the game starts. Player one clicks on a 'play' button, this sends an invite to all other players in the lobby." +
              "The other player is now required to accept the invitation and all both the players get sent to the pokemon selection screen. " +
              "In the selection screen the user can choose their own pokemon or take a chance with a dice roll." +
              "As soon as both players how chosen their pokemon and are ready to fight, they get sent to the battle room where the damage of each pokemon and their health is put against eachother." +
              "The battle is won by the player that still has a pokemon with a health value of more than zero.",
          extraLink: 'https://github.com/julianvansm/pokedex-front',
          extraLinkName: 'Frontend',
          extraLink2: 'https://github.com/julianvansm/pokemon-api-main',
          extraLink2Name: 'Backend',

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
    AnimationTester,
    ContactSection,
    AboutSection,
    ProjectCard,
    SvgMan,

  },
  beforeUnmount() {
    localStorage.setItem('scrollPosition', window.scrollY);

  },
  mounted() {
    this.getProjectRect();
    this.getAboutRect();
    this.getContactRect();
    const savedPosition = localStorage.getItem('scrollPosition');
    if (savedPosition) {
      window.scrollTo(0, parseInt(savedPosition));
      localStorage.removeItem('scrollPosition'); // Optional: Clear storage after use
    }
    window.addEventListener("scroll", () => {
      this.scrollPos.value = window.scrollY;
    });

    const wavyLine = this.$refs.wavyLine;

    anime({
      targets: wavyLine,
      translateX: [-5, 5],
      easing: 'easeInOutSine',
      duration: 1500,
      loop: true,
      direction: 'alternate',
    });

  },

  methods: {

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
    async lan() {
      this.english = this.english !== true;
    }
  },
});
</script>

<style scoped>
.loadIn {
  animation-name: load;
  animation-duration: 500ms;
}

@keyframes load {
  from {
    transform: translate(0%, 100%);
    opacity: 0;
  }
  to {
    transform: translate(0%, 0%);
    opacity: 100;
  }
}

.lan-animation {
  animation-name: lani;
  animation-duration: 3s;
}
@keyframes lani {
  0%  {top: -20%}
  10% {top: 2%}
  90% {top: 2%}
  100% {top: -20%}
}
.sticky {
  position: sticky;
  top: 0;
  font-size: 20px;
}

.about-wrapper.sticky {
  top: -3px;

}

.about-wrapper {
  background: #00343d;
  border-top: #0bd8a2 solid 3px;
}

.project-card-wrapper {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-around;
  background: #00343d;
}

.project-list-wrapper {
  z-index: 20;
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
  filter: drop-shadow(1px 1px 1px black);


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
  filter: drop-shadow(2px 2px 2px black);
}

.btn--page_top .btn__arrow--top {
  top: -4px;
}

.btn--page_top .btn__arrow--bottom {
  top: 6px;
}

.text-animaton span {
  --c1: #ec50ef;
  --c2: #ff8eec;

  --_p: 93% 83.5% at;
  --_g1: radial-gradient(var(--_p) bottom, var(--c1) 79.5%, #0000 80%) no-repeat;
  --_g2: radial-gradient(var(--_p) top, #0000 79.5%, var(--c1) 80%) no-repeat;
  --_g3: radial-gradient(var(--_p) bottom, var(--c2) 79.5%, #0000 80%) no-repeat;
  --_g4: radial-gradient(var(--_p) top, #0000 79.5%, var(--c2) 80%) no-repeat;
  background: var(--_g1), var(--_g2), var(--_g1), var(--_g2),
  var(--_g3), var(--_g4), var(--_g3), var(--_g4);
  -webkit-background-clip: text;
  background-clip: text;
  color: #0000;
  -webkit-text-stroke: 0.1rem white;
  -webkit-box-decoration-break: clone;
  box-decoration-break: clone;
  animation: s 2s infinite alternate,
  m 3s infinite linear;
}

.cat-responsive {
  transform: translate(0%, -50%)
}

@keyframes m {
  0% {
    background-position: -200% 100%, -100% 100%, 0% 100%, 100% 100%,
    0% 100%, 100% 100%, 200% 100%, 300% 100%
  }
  100% {
    background-position: 0% 100%, 100% 100%, 200% 100%, 300% 100%,
    -200% 100%, -100% 100%, 0% 100%, 100% 100%
  }
}

@keyframes s {
  0% {
    background-size: 50.5% 60%, 50.5% 60%, 50.5% 60%, 50.5% 60%,
    50.5% 90%, 50.5% 90%, 50.5% 90%, 50.5% 90%
  }
  33% {
    background-size: 50.5% 70%, 50.5% 70%, 50.5% 70%, 50.5% 70%,
    50.5% 75%, 50.5% 75%, 50.5% 75%, 50.5% 75%
  }
  66% {
    background-size: 50.5% 55%, 50.5% 55%, 50.5% 55%, 50.5% 55%,
    50.5% 80%, 50.5% 80%, 50.5% 80%, 50.5% 80%
  }
  100% {
    background-size: 50.5% 90%, 50.5% 90%, 50.5% 90%, 50.5% 90%,
    50.5% 95%, 50.5% 95%, 50.5% 95%, 50.5% 95%
  }
}

@media screen and (max-width: 768px) {
  .cat-responsive {
    transform: translate(0%, 30%)
  }
}
</style>
