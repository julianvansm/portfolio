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
                <h2 v-if="english === false" class="text-6xl max-sm:text-5xl text-white text-center pt-4"
                    style="background: #00343d; -webkit-text-stroke: 1px #000000;">
                  Projecten
                </h2>
                <h2 v-if="english === true" class="text-6xl max-sm:text-5xl text-white text-center pt-4"
                    style="background: #00343d; -webkit-text-stroke: 1px #000000;">
                  Projects
                </h2>
                <div class="container">
                  <div class="text-Purple">*</div>
                  <div class="line line-1"></div>
                  <div class="line line-2"></div>
                </div>
              </div>
            </div>

            <div style="background: #00343d; " class="box mask last"></div>
          </div>
          <div class="project-card-wrapper min-h-screen z-20 ">
            <ProjectCard v-if="english === true" v-for="project in projectsEnglish.slice().reverse()" :key="project.title"
                         :project="project"/>
            <ProjectCard v-if="english === false" v-for="project in projectsDutch.slice().reverse()" :key="project.title"
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
      contactPos: 0,
      english: undefined,
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
          description: 'Pecu was the second official school project, We were tasked with creating a website for money managing purposes.',
          image: '/images/pecu.jpg',
          link: 'https://pecu.newdeveloper.nl/',
          info: true,
          paragraph1:
              "We were tasked with creating a website for money managing purposes. This project taught me how to work in a team and how to come up with interesting and creative ways to create graphs and database connections.",
        },
        {
          title: 'Mastermind',
          date: 'Feb-March 2023',
          description: 'Mastermind was the third school project. In this project, a classmate and I were assigned to create the game Mastermind. The game had to be easy to understand.',
          image: '/images/mastermind.png',
          link: 'https://brainsinc.newdeveloper.nl/',
          info: true,
          paragraph1:
              "Mastermind was the third school project. In this project, a classmate and I were assigned to create the game Mastermind. The game had to be easy to understand. You can play it here:",
          paragraph2Title: "Details",
          paragraph2:
              " Mastermind required a scoreboard and an explanation page. We were also required to minimize page refreshing for this project, we did this by using JavaScript for all the game mechanics. This was my first time using this much JavaScript for a project. I not only learned a lot about JavaScript but also realized the importance of good preparation.",
        },
        {
          title: "Oma's Bordspellen",
          date: 'Apr-Jul 2023',
          description: 'Oma\'s Bordspellen is a Dutch webshop that offers a diverse range of board games for purchase.',
          image: '/images/omasbordspellen.png',
          link: 'https://omas-bordspellen.newdeveloper.nl/',
          info: true,
          paragraph1:
              "For 'oma's bordspellen' we needed to focus on the frontend a lot, I opted to utilize ReactJS (a cutting-edge frontend framework), and TypeScript (a powerful programming language). Whilst initially challenging due to our team's lack of prior experience with this framework, I swiftly adapted and made significant strides in mastering ReactJS.",
          paragraph2Title: "My Responsibilities",
          paragraph2:
              "I was assigned the task of developing the product, favorites, and browse pages, as well as implementing the underlying functionality for these pages.",
        },
        {
          title: 'Pokemon API',
          date: 'March 2024',
          description: "This project was my first look into creating my own server. The goal of the project was to make a functioning pokemon game with the use of a front and back end application. We used VueJS and ExpressJs.",
          image: '/images/pokemonapi.png',
          info: true,
          paragraph1:
              "The project Pokemon Api was an amazing learning experience. " +
              "School gave us their api, all the data of the pokemon are stored inside the api. " +
              "I took the required data and saved this into my local database. I used Express for the backend application and Vue for the frontend. " +
              "Luckily I didn't have any experience so I got to invest lots of time into experimenting and learning. I loved learning the twists and turns of the software. Along with express and vue I used websockets for the communication between the two applications." +
              "This project was a client-side project which means that all I can show you are the repositories:",
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
        {
          title: 'Fresh Air',
          date: 'May 2024',
          description: "Fresh air was a follow up project from the pokemonAPI. The difference this time was that we worked in a team and had to create a front and backend with that displays the quality of the air. ",
          image: '/images/fresh-air-pic1.png',
          info: true,
          paragraph1:
              "For the Fresh Air project we were given an air sensor called air-gradient-one. " +
              "We were tasked with pulling the data from the monitor's api and save that on our backend application, which then in return is displayed on the frontend for each user. " +
              "All the data is updated at a 10 second interval. Unfortunitely this project is in use by our school which prohibits me from sharing the source code.",
          paragraph2Title: "My Responsibilities",
          paragraph2:
              "I was tasked with creating the monitor page, this includes but is not limited to: " +
              "creating the connection between front and backend, setting up the api connections and requests, designing the frontend, setting up the database for the monitors, saving the correct sensors for each monitor and making the adding, deleting and editing functionalities.",
          paragraph3Title: "My Process",

          paragraph3:
              "The first task was to create the frontend project. " +
              "I started to designing of the website. " +
              "In the mean time my team mate was setting up the backend application, once this was done I set-up the front and back to frontend connections with the socket.io. " +
              "After this task was done I started researching the Air-monitor's api. As it turned out, it was quite simple, the data can be received with a simple axios request. I set up the connections in the backend application to get the values for the CO2, humidity and temperature sensors. " +
              "Once this value is received it gets sent to all the frontend applications at a 10 second interval " +
              "Now, I was in the last stretch. At this moment the frontend receives data from the backend application's database for the monitor's name, ip, locations, sensors and type. (the type is not very important. It is simply the difference between the outside or inside version of the monitor.) " +
              "The last thing to do now was to do a finishing check of my work. I tested all functionalities and tried overloading the server to see if there is a problematic bottleneck in the system. " +
              "Turns out, there was. " +
              "This was related to the frontend sending way to many individual requests to the server which slows it down significantly. " +
              "After combining many requests into a few big requests the problem was solved." +
              "I used this method because large requests are less demanding than many smaller requests.",
          paragraph3Image: '/images/fresh-air-pic2.png',
          paragraph4Title: "Finally, what have I learned?",

          paragraph4:
              "I have gained invaluable experience with ExpressJs and VueJs. Also, it was great to get a bit of memory refreshment with the database work. " +
              "Of course there is always the frontend design work that I enjoy very much and I keep learning more interesting tricks for my designs. " +
              "I am very pleased with the results of this project.",
          paragraph4Image: '/images/fresh-air-pic3.png',
        },
        {
          title: 'Microcontrollers exam',
          date: 'June 2024',
          description: "For my 3rd year exam, I was tasked with creating and programming a P1 meter. The data that was received from the P1 simulator had to be sent to my API to be reformatted and saved to a database.",
          image: '/images/microcontrollers1.jpg',
          alternateImage: '/images/microcontrollers2.png',
          info: true,
          paragraph1:
              "This project serves as an exam for my third year of software development. The assignment was to make a P1 Meter with an ESP32-Wifi to receive data from a P1 simulator. " +
              "This data would then be sent to my API which was made with Expressjs, the same way as with previous projects. " +
              "Once the api recieved the data, the Backend server processes the data which would come in a big block of text inside a string. " +
              "As soon as the data was processed it would be stored in a database with it's value and corresponding type.",
          paragraph2Title: "Preparation",
          paragraph2:
              "For my preperation the school gave me 6 other practice projects to learn the C++ language, Arduino IDE software and many different types of hardware like: Arduino Uno, ESP8266, LCD-screens, etc. " +
              "Another very important thing I had to practice and focus on was the documentation. " +
              "One of which was learning how to make a schematic in KiCad of the hardware configuration. " +
              "Once these practice projects were approved by a teacher I could officially start the exam. ",
          paragraph3Title: "The Exam",
          paragraph3:
              "And now for the official exam. I started of with the documentation, once I filled in all the preparation steps for the documentation I gathered all the required hardware. " +
              "I needed a USB A to micro USB calbe, 9 male to male jumper wires , 4 female to male jumper wires, an SN74AC04N Inverter, the D1 mini ESP8266, an LCD 1602 screen and it's LCD 1602 I2C adapter, a breadboard and an RJ11 cable. \n " +
              "Following this I started to develop the backend api server. " +
              "I had done this all before thus it was not a big challenge. " +
              "After the server was setup and running, I created a POST route which calls to a simple temporary function that saves data to the database to test if everything works correctly. " +
              "Now that the server was setup I built the hardware and started writing the code for the ESP-8266. " +
              "The first step was to create the connection with the database which was done with the ESP8266WiFi package. " +
              "This package allows the Microcontroller to connect to the Wi-Fi network. " +
              "This is where I encountered my first obstacle, I could not figure out how to send a request to my server which was running on my pc. " +
              "I figured out that the name of my server should not be http://localhost:3000 but http://10.0.3.85:3000." +
              "After the connection was sucured I used the SoftwareSerial package to receive data from the P1 simulator. " +
              "The data I got was a total mess, It was a simple string with a bunch of unorderd text from which I had to extract the correct data. " +
              "At first I wanted to do the processing of this code on the ESP8266, but I quickly realized that this task should be done by the server and thus sent the data straight to the server.",
          paragraph3Image: '/images/microcontrollers1.jpg',
          paragraph4Title: "Processing",

          paragraph4:
              "The processing was by far the most difficult part of this project due to my lack of knowledge on how to extract specific data from a block of text at the time. " +
              "The data string had the name of the software on the first line and a random pair of numbers at the end of the string with an exclamation mark. " +
              "My first step was to replace the name by using data.replace, This removed the brand's name from the string. " +
              "Unfortunately this method was not viable for the random numbers so I found a way to also remove this when processing the other data. " +
              "Between every bit of information I needed to extract there was a /n/n. (the slash is officially the other way around but this can't be displayed)" +
              "The array was never meant to have these double so I replaced all /n/n with a single /n. " +
              "This allowed me to split the array on each /n creating a line, these lines were stored in an array. " +
              "I looped through the lines array and for each line I checked if it was empty, if the line included an exclamation mark te remove the last line and which part of the data was the type and which was the value. " +
              "The type and value were seperated by parentheses so for each line I looked for the '(' symbol and sliced the line dividing it into it's type and value, these values were then sent to the database." +
              "However, there was one more thing that I needed to send back to the ESP8266 which was the value of the powerusage. " +
              "I did this by checking if the type was the same as the type that corresponds to the powerdata, if so it would be stored and later sent back to the ESP8266 and displayed on the LCDScreen.",
          paragraph5Title: "Finally, what have I learned?",

          paragraph5:
              "I have discoverd how much fun wroking with hardware and software together can be. " +
              "Also, it was great to get a bit of memory refreshment with the ExpressJs server. " +
              "and lastly I realized how important good preparation is.",
        },
      ],
      projectsDutch: [
        {
          title: 'Portfolio',
          date: 'Augustus 2022',
          description: "Mijn portfolio is het allereerste project waar ik aan heb gewerkt, en geloof het of niet, u bent er nu op! Ik koos voor de eenvoudige en niet-uitgebreide look. Dit project leerde me de basis van coderen en websiteontwerp. ",
          image: '/images/fulllogojs.jpg',
          link: '#Home',
          info: true,
          paragraph1:
              "In mijn eerste jaar softwareontwikkeling kreeg ik de opdracht om mijn portfolio te maken in phpStorm met behulp van het Laravel-framework, css en html. Ik heb er zelfs wat JavaScript ingestrooid dat onthoudt waar de lezer is gebleven bij het herladen van de pagina. " +
              " Destijds wist ik zo goed als niets van coderen, waardoor het resulteerde in een eenvoudige website. Deze website is hier te vinden: ",
          paragraph2Title: "Herontwerp",
          paragraph2:
              " Later in het tweede jaar besloot ik mijn portfolio opnieuw te maken, dat zou de website moeten zijn die u nu bekijkt. " +
              " Ik koos ervoor om vue.js te gebruiken, dit is een krachtig frontend-framework met behulp van javascript. " +
              " Ik heb geprobeerd veel meer schone animaties en ontwerpen te implementeren. ",
          extraLink: 'https://julian-van-smirren.newdeveloper.nl/welcomenl',
          extraLinkName: 'Portfolio',
        },
        {
          title: 'The Order of the Frontier',
          date: 'Augustus 2022',
          description: 'The Orde was mijn tweede project, het wordt gebruikt voor een informatieve gids bij een game en community. In dit project kreeg ik de kans kreeg om veel te experimenteren met JavaScript. ',
          image: '/images/theorder.jpg',
          link: 'https://theorder.newdeveloper.nl/',
          info: true,
          paragraph1:
              "Terwijl iedereen aan hun portfolio werkte, besloot ik aan een persoonlijke website te werken, dit is de Orde van de Frontier. Het is gemaakt in phpStorm met behulp van het Laravel-framework, css, html en wat JavaScript voor enkele animaties en overgangen. " +
              " Met dit project heb ik veel geleerd over de eenvoudige eigenaardigheden van JavaScript. ",
          paragraph2Title: "Fantastische Frontier",
          paragraph2:
              " De Orde van de Frontier is een website met veel informatie en gidsen over het spelen van een game genaamd Fantastic Frontier. " +
              " Helaas speel ik deze game niet veel meer, maar de herinneringen en ervaringen zullen niet vervagen. ",
        },
        {
          title: 'Pecu',
          date: 'Dec-Jan 2022-2023',
          description: 'Pecu was het tweede officiële schoolproject, we kregen de opdracht om een website te maken voor geldbeheerdoeleinden.',
          image: '/images/pecu.jpg',
          link: 'https://pecu.newdeveloper.nl/',
          info: true,
          paragraph1:
              "We kregen de opdracht om een website te maken voor geldbeheerdoeleinden. Dit project leerde me hoe ik in een team kan werken en hoe ik op interessante en creatieve manieren grafieken en databaseverbindingen kan maken.",
        },
        {
          title: 'Mastermind',
          date: 'Feb-Maart 2023',
          description: 'Mastermind was het derde schoolproject. In dit project kregen een klasgenoot en ik de opdracht om het spel Mastermind te maken. Het spel moest gemakkelijk te begrijpen zijn.',
          image: '/images/mastermind.png',
          link: 'https://brainsinc.newdeveloper.nl/',
          info: true,
          paragraph1:
              "Mastermind was het derde schoolproject. In dit project kregen een klasgenoot en ik de opdracht om het spel Mastermind te maken. Het spel moest gemakkelijk te begrijpen zijn. Je kunt het hier spelen:",
          paragraph2Title: "Details",
          paragraph2:
              " Mastermind vereiste een scorebord en een uitlegpagina. We moesten ook het vernieuwen van pagina's voor dit project minimaliseren, we deden dit door JavaScript te gebruiken voor alle spelmechanismen. Dit was de eerste keer dat ik zoveel JavaScript gebruikte voor een project. Ik leerde hierdoor niet alleen veel over JavaScript, maar realiseerde me ook het belang van een goede voorbereiding.",
        },
        {
          title: "Oma's Bordspellen",
          date: 'Apr-Jul 2023',
          description: 'Oma\'s Bordspellen is een Nederlandse webshop die een divers aanbod van bordspellen te koop aanbiedt.',
          image: '/images/omasbordspellen.png',
          link: 'https://omas-bordspellen.newdeveloper.nl/',
          info: true,
          paragraph1:
              "Voor 'oma's bordspellen moesten we ons veel op de frontend richten, ik koos ervoor om ReactJS (een geavanceerd frontend-framework) en TypeScript (een krachtige programmeertaal) te gebruiken. Hoewel dit in eerste instantie een uitdaging was vanwege het gebrek aan eerdere ervaring met dit framework binnen ons team, paste ik me snel aan en boekte ik grote vooruitgang in het onder de knie krijgen van ReactJS.",
          paragraph2Title: "Mijn Verantwoordelijkheden",
          paragraph2:
              "Ik kreeg de taak om de product-, favorieten- en browse-pagina's te ontwikkelen, evenals het implementeren van de onderliggende functionaliteit voor deze pagina's.",
        },

        {
          title: 'Pokemon API',
          date: 'Maart 2024',
          description: "Voor dit project werkte ik met een eigen server. Het doel van het project was om een functioneel pokemon-spel te maken met behulp van een front-end en back-end applicatie. We gebruikten VueJS en ExpressJs.",
          image: '/images/pokemonapi.png',
          info: true,
          paragraph1:
              "Het project Pokemon Api was een geweldige leerervaring. " +
              "De school gaf ons hun api, alle data van de pokemon zijn opgeslagen in de api. " +
              "Ik nam de benodigde data en slaagde dit op in mijn lokale database. Ik gebruikte Express voor de back-end applicatie en Vue voor de front-end. " +
              "Gelukkig had ik nog geen ervaring, dus ik kon veel tijd investeren in experimenteren en leren. Ik vond het heerlijk om de wendingen en kronkels van de software te leren. Naast express en vue gebruikte ik websockets voor de communicatie tussen de twee applicaties. " +
              "Dit project was een client-side project, wat betekent dat ik u alleen de repositories kan laten zien: ",
          paragraph2Title: "Gevechtsmechanisme",
          paragraph2:
              " Om wat meer informatie te geven over hoe de gevechten werken. Elke game vereist twee gebruikers, deze gebruikers bevinden zich in de lobby voordat het spel begint. Speler één klikt op een 'spelen'-knop, dit stuurt een uitnodiging naar alle andere spelers in de lobby. " +
              "De andere speler moet nu de uitnodiging accepteren en allebei de spelers worden naar het scherm voor pokemonselectie gestuurd. " +
              "Op het selectiescherm kan de gebruiker zijn eigen pokemon kiezen of een gokje wagen met een dobbelsteenworp. " +
              "Zodra beide spelers hun pokemon hebben gekozen en klaar zijn om te vechten, worden ze naar de vechtkamer gestuurd waar de schade van elke pokemon en hun gezondheid tegen elkaar worden afgezet. " +
              "De winnaar van het gevecht is de speler die nog een pokemon heeft met een gezondheidswaarde van meer dan nul. ",
          extraLink: 'https://github.com/julianvansm/pokedex-front',
          extraLinkName: 'Frontend',
          extraLink2: 'https://github.com/julianvansm/pokemon-api-main',
          extraLink2Name: 'Backend',
        },
        {
          title: 'Fresh Air',
          date: 'Mei 2024',
          description: "Fresh Air was een vervolgproject op het pokemonAPI. Het verschil was dit keer dat we in een team werkten en een front-end en back-end applicatie moesten creëren die de luchtkwaliteit weergeeft.",
          image: '/images/fresh-air-pic1.png',
          info: true,
          paragraph1:
              "Voor het Fresh Air project kregen we een luchtsensor genaamd air-gradient-one. " +
              "We kregen de opdracht om de data van de API van de monitor te halen en op onze back-end applicatie op te slaan, die vervolgens op de front-end voor elke gebruiker wordt weergegeven. " +
              "Alle data wordt om de 10 seconden geüpdatet. Helaas wordt dit project door onze school gebruikt, waardoor ik de broncode niet mag delen.",
          paragraph2Title: "Mijn Verantwoordelijkheden",
          paragraph2:
              "Ik was belast met het creëren van de monitorpagina, dit omvat, maar is niet beperkt tot: " +
              "het creëren van de verbinding tussen front-end en back-end, het instellen van de API-verbindingen en -aanvragen, het ontwerpen van de front-end, het instellen van de database voor de monitoren, het opslaan van de juiste sensoren voor elke monitor en het maken van de toevoegingen, verwijderingen en bewerkingsfunctionaliteiten.",
          paragraph3Title: "Mijn Werk",
          paragraph3:
              "De eerste taak was het creëren van het front-end project. " +
              "Ik begon met het ontwerpen van de website. " +
              "In de tussentijd was mijn teamgenoot bezig met het instellen van de back-end applicatie, zodra dit was gedaan, heb ik de front-end en back-end verbindingen ingesteld met socket.io. " +
              "Nadat deze taak was voltooid, ben ik gaan onderzoeken naar de API van de Air-monitor. Zoals bleek, was het vrij eenvoudig, de data kan worden ontvangen met een simpele axios-aanvraag. Ik heb de verbindingen in de back-end applicatie ingesteld om de waarden voor de CO2-, vochtigheids- en temperatuursensoren te verkrijgen. " +
              "Zodra deze waarde is ontvangen, wordt deze naar alle front-end applicaties gestuurd met een interval van 10 seconden. " +
              "Nu zat ik in de laatste fase. Op dit moment ontvangt de front-end data van de database van de back-end applicatie voor de naam, IP, locaties, sensoren en type van de monitor. (het type is niet erg belangrijk. Het is simpelweg het verschil tussen de buiten- of binnenversie van de monitor.) " +
              "Het laatste wat ik nu moest doen was een laatste controle uitvoeren van mijn werk. Ik heb alle functionaliteiten getest en geprobeerd de server te overbelasten om te zien of er een knelpunt in het systeem zit. " +
              "Het bleek dat de server op een plekje een probleem had. " +
              "Dit had te maken met de front-end die veel te veel individuele verzoeken naar de server stuurde, waardoor deze aanzienlijk vertraagde. " +
              "Nadat allerlei kleine verzoeken in een paar grote verzoeken waren gecombineerd, was het probleem opgelost. " +
              "Ik heb deze methode gebruikt omdat grote verzoeken minder belastend voor de server zijn dan veel kleine verzoeken.",
          paragraph3Image: '/images/fresh-air-pic2.png',
          paragraph4Title: "Tot slot, wat heb ik geleerd?",
          paragraph4:
              "Ik heb waardevolle ervaring opgedaan met ExpressJs en VueJs. Het was ook geweldig om mijn geheugen op te frissen met het databasewerk. " +
              "Natuurlijk is er altijd het front-end design werk waar ik erg van geniet en leer ik steeds meer interessante trucs voor mijn ontwerpen. " +
              "Ik ben erg tevreden met de resultaten van dit project.",
          paragraph4Image: '/images/fresh-air-pic3.png',
        },
        {
          title: 'Microcontrollers examen',
          date: 'Juni 2024',
          description: "Voor mijn derdejaarsexamen moest ik een P1-meter bouwen en programmeren. De gegevens van de p1 simulator werder via mijn API gerformateert en opgeslagen in een database.",
          image: '/images/microcontrollers1.jpg',
          alternateImage: '/images/microcontrollers2.png',
          info: true,
          paragraph1:
              "Dit project dient als examen voor mijn derde jaar software ontwikkeling. De opdracht was om een P1-meter te maken met een ESP32-Wifi om gegevens van een P1-simulator te ontvangen. " +
              "Deze gegevens werden vervolgens naar mijn API gestuurd, die net als bij eerdere projecten met Expressjs is gemaakt. " +
              "Zodra de API de gegevens ontving, verwerkte de backendserver de gegevens die in een grote blok tekst binnen een string zaten. " +
              "Zodra de gegevens verwerkt waren, werden ze in een database opgeslagen met hun waarde en het corresponderende type.",
          paragraph2Title: "Voorbereiding",
          paragraph2:
              "Voor mijn voorbereiding gaf de school me 6 andere oefenprojecten om de C++-taal, de Arduino IDE-software en allerlei soorten hardware te leren kennen, zoals: Arduino Uno, ESP8266, LCD-schermen, etc. " +
              "Een ander erg belangrijk punt waarop ik moest oefenen en me moest focussen, was de documentatie. " +
              "Een daarvan was het leren maken van een schema in KiCad van de hardwareconfiguratie. " +
              "Zodra deze oefenprojecten door een docent waren goedgekeurd, kon ik officieel aan het examen beginnen. ",
          paragraph3Title: "Het examen",
          paragraph3:
              "En nu voor het officiële examen. Ik begon met de documentatie, nadat ik alle voorbereidingstappen voor de documentatie had ingevuld, verzamelde ik alle benodigde hardware. " +
              "Ik had een USB A naar micro USB-kabel nodig, 9 mannelijke naar mannelijke jumperkabels, 4 vrouwelijke naar mannelijke jumperkabels, een SN74AC04N Inverter, de D1 mini ESP8266, een LCD 1602 scherm en zijn LCD 1602 I2C adapter, een breadboard en een RJ11 kabel. \n " +
              "Daarna ben ik begonnen met het ontwikkelen van de backend-api-server. " +
              "Dit had ik allemaal al eerder gedaan, dus het was geen grote uitdaging. " +
              "Nadat de server was ingesteld en draaide, heb ik een POST-route gemaakt die naar een eenvoudige tijdelijke functie roept die gegevens in de database opslaat om te testen of alles correct werkt. " +
              "Nu de server was ingesteld, heb ik de hardware gebouwd en ben ik begonnen met het schrijven van de code voor de ESP-8266. " +
              "De eerste stap was om de verbinding met de database te maken, wat is gedaan met het ESP8266WiFi-pakket. " +
              "Dit pakket stelt de microcontroller in staat om verbinding te maken met het Wi-Fi-netwerk. " +
              "Hier kwam ik mijn eerste obstakel tegen: ik kon niet achterhalen hoe ik een verzoek moest sturen naar mijn server die op mijn pc draaide. " +
              "Ik kwam erachter dat de naam van mijn server niet http://localhost:3000 maar http://10.0.3.85:3000 zou moeten zijn." +
              "Nadat de verbinding tot stand was gebracht, gebruikte ik het SoftwareSerial-pakket om gegevens van de P1-simulator te ontvangen. " +
              "De gegevens die ik kreeg waren een totale chaos. Het was een simpele string met een reeks ongeordende tekst waaruit ik de juiste gegevens moest extraheren. " +
              "In eerste instantie wilde ik deze code op de ESP8266 verwerken, maar ik realiseerde me al snel dat deze taak door de server moest worden uitgevoerd en stuurde de gegevens daarom rechtstreeks naar de server.",
          paragraph3Image: '/images/microcontrollers1.jpg',
          paragraph4Title: "Verwerking",

          paragraph4:
              "De verwerking was verreweg het moeilijkste onderdeel van dit project vanwege mijn toenmalige gebrek aan kennis over het extraheren van specifieke gegevens uit een blok tekst. " +
              "De datastring had de naam van de software op de eerste regel en een willekeurig paar cijfers aan het einde van de string met een uitroepteken. " +
              "Mijn eerste stap was het vervangen van de naam met behulp van data.replace. Dit verwijderde de merknaam uit de string. " +
              "Helaas was deze methode niet geschikt voor de willekeurige getallen, dus vond ik een manier om deze ook te verwijderen bij het verwerken van de andere gegevens. " +
              "Tussen elke bit informatie die ik moest extraheren stond er een /n/n. (de schuine streep staat officieel andersom, maar dit kan niet worden weergegeven) " +
              "De array was nooit bedoeld om deze dubbele waarden te hebben, dus verving ik alle /n/n door een enkele /n. " +
              "Hierdoor kon ik de array op elke /n splitsen, waardoor er regels ontstonden. Deze regels werden in een array opgeslagen. " +
              "Ik loopte door de array met regels en controleerde voor elke regel of deze leeg was, of de regel een uitroepteken bevatte om de laatste regel te verwijderen, en welk deel van de gegevens het type was en welk de waarde. " +
              "Het type en de waarde werden gescheiden door haakjes, dus voor elke regel zocht ik naar het symbool '(' en splitte ik de regel op om deze te verdelen in een type en waarde. Deze waarden werden vervolgens naar de database gestuurd." +
              "Er was echter nog één ding dat ik terug moest sturen naar de ESP8266, namelijk de waarde van het energieverbruik. " +
              "Dit deed ik door te controleren of het type hetzelfde was als het type dat overeenkomt met de energiegegevens. Zo ja, dan werd dit opgeslagen en later teruggestuurd naar de ESP8266 en weergegeven op het LCD-scherm.",
          paragraph5Title: "Tot slot, wat heb ik geleerd?",

          paragraph5:
              "Ik ben erachter gekomen hoe leuk het kan zijn om met hardware en software samen te werken. " +
              "Ook was het fijn om mijn geheugen even op te frissen met de ExpressJs-server. " +
              "En tot slot realiseerde ik me hoe belangrijk een goede voorbereiding is.",
        }
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
      localStorage.removeItem('scrollPosition');
    }
    console.log(localStorage.getItem('lan'))

    this.english = localStorage.getItem('lan') === 'true';
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
      localStorage.removeItem('lan');
      localStorage.setItem('lan', this.english);
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



.about-wrapper {
  background: #00343d;
  border-top: #0bd8a2 solid 3px;
  top: -3px;
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
