<template>
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

    <div ref="intro" :class="{ transparent: this.transparentTitle === true}"
         class="duration-300 sticky h-screen flex items-center justify-center z-0">
      <div class=" flex max-sm:flex-col">
        <div class="flex flex-col justify-center text-white px-2 text-center">

          <hgroup style="-webkit-text-stroke: 2px #000000; text-shadow: 2px 2px 2px black;"
                  class=" max-sm:text-3xl text-4xl text-white">
            <h1 class="text-5xl">Julian van Smirren</h1>
            <h2 class="text-3xl">Software development</h2>
          </hgroup>
        </div>
      </div>
    </div>
    <div>

      <div ref="about"
           class=" duration-500"
      >
        <div>
          <div style="background: rgb(255, 255, 255);" class="box mask"></div>
          <div class="about-wrapper  duration-500">
            <AboutSection id="About"/>
          </div>
        </div>
      </div>
      <div style="max-height: 70vh; " class="z-0 relative bg-gray-300">
        <div class=" relative h-screen">
          <img :style="{ transform: `translateY(clamp(-30%, calc(-${(this.projectPos / 1000 * 60 )/2}%), 0%))` }"
               class="absolute top-0 opacity-35 w-screen" src="/images/software-bg.png" alt="noImg">


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
          <ProjectCard v-for="project in projects" :key="project.title" :project="project"/>
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


export default defineComponent({
  data() {
    return {
      scrollPos: 0,
      aboutPos: 0,
      projectPos: 0,
      contactPos: 0,
      transparentTitle: false,
      projects: [
        {
          title: 'Portfolio',
          date: 'August 2022',
          description: 'My very first project I\'ve worked on, and believe it or not you are on it right now! I went for the simple and not extensive look. This project taught me the basics of coding and website design.',
          image: '/images/fulllogojs.jpg',
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
    };
  },
  components: {
    ContactSection,
    AboutSection,
    ProjectCard,
  },
  mounted() {
    window.addEventListener('scroll', () => {
      this.getProjectRect();
      this.getAboutRect();
      this.getContactRect();

    });

  },
  setup() {
    const scrollPos = ref(0);

    return {
      scrollPos,
    };
  },

  methods: {
    async getContactRect() {
      const contact = await this.$refs.contact;
      if (contact) {
        this.contactPos = contact.getBoundingClientRect().top;
      }
      console.log(this.contactPos)
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
  },
});

</script>

<style scoped>

.transparent {
  opacity: 0;
}

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

.move-img {
  transform: translateY(-30%);
}

</style>
