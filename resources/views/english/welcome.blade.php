@extends("layouts.view", ['title' => 'HOME'] , ['lanfile' => '/welcomenl'])
@section('content')
    @include('layouts.slideout',['lanset'=>''])
    <video class="opacity-20 w-screen h-screen object-cover fixed -z-10" autoplay muted loop id="background-video">
        <source src="./video/movingbackgroundbackup.mp4">
    </video>
    <div style="height: 2px; width: 0px; top: 0;" class="top-0 w-0" id="Home"></div>
    <div class="mt-20 flex items-center justify-center">
        <div style="box-shadow: 6px 6px 10px 2px black;"
             class="bg-white flex max-sm:flex-col border-red-600 border-2 rounded">
            <div class="flex flex-col justify-center text-white px-2 sm:mb-20">

                <p style="-webkit-text-stroke: 2px #000000; text-shadow: 2px 2px 2px black;"
                   class="text-left max-sm:text-center max-sm:text-3xl text-4xl text-white">
                    Julian van Smirren<br>
                    Studying software development<br>
                    at Landstede
                </p>

            </div>
            <div class="w-auto flex justify-center">
                <img style=" height: 275px; min-width: 275px;"
                     class="flex m-2 rounded-full border-black border-2 overflow-hidden" src="images/julianimg.jpg"
                     alt="images/julianimg.jpg">
            </div>
        </div>
    </div>
    <div class="bg-gray-300 mt-20 max-sm:p-2 p-10 pb-10 border-black border-t-4 border-b-4" id="About">
        <h2 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px black;"
            class="text-6xl max-sm:text-5xl text-white text-center mb-4">
            About me
        </h2>
        <div class="flex flex-col justify-evenly items-center mb-4">
            <div style="max-width: 1002px;" class="about-container-color-extras p-4 sm:p-2">
                <p class="text-3xl max-sm:text-xl">
                    My name is Julian van Smirren born in april 2006. I am in my first year of studying software
                    development at Landstede, I now understand
                    html/css, php, lua and JavaScript.<br><br>
                    I study software development because I love creating things with or without coding, like
                    composing piano pieces. This has always been a hobby of mine.
                    I also work in a grocery store to have an income and to get work experience.
                </p>
            </div>
        </div>
    </div>
    {{--projects--}}
    <div style="background-color: rgba(66, 66, 66, 0.39);" class="" id="Projects">
        <h2 style=" text-shadow: 2px 2px 2px black;" class="text-5xl max-sm:text-3xl text-white text-center mb-2">My
            projects</h2>
        <h3 style="text-shadow: 2px 2px 2px black;" class="text-3xl max-sm:text-xl text-white text-center mb-2"> These
            are All the projects I worked on</h3>
        <div class="flex flex-row flex-wrap justify-center items-center overflow-hidden">
            {{--        projects\/--}}
            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="#Home" class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20" src="/images/fulllogojs.jpg"
                         alt="/images/portfolioimg2.png">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;"
                     class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;"
                            class="text-white text-3xl">Portfolio</h1>
                        <h2 class="text-xl text-gray-600">August 2022</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        My Portfolio is my very first project I've worked on, and believe it or not you are on it right
                        now!
                        I went for the simple and not extensive look. This project taught me the basics of coding and
                        website design.

                    </p>
                </div>
            </div>
            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="https://theorder.newdeveloper.nl/" target="_blank" class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20" src="/images/theorder.jpg"
                         alt="/images/theorder2.png">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;"
                     class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;"
                            class="text-white text-3xl">The Order of the Frontier</h1>
                        <h2 class="text-xl text-gray-600">August 2022</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        The Order was my second project, it is used for an informational guide to a game and community.
                        This also is the project where I got the chance to experiment a lot. The Order was a great
                        learning experience.<br>
                    </p>
                </div>
            </div>
            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="https://pecu.newdeveloper.nl/" target="_blank" class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20" src="/images/pecu.jpg"
                         alt="/images/theorder2.png">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;"
                     class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;"
                            class="text-white text-3xl">Pecu</h1>
                        <h2 class="text-xl text-gray-600">Dec-Jan 2022-2023</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        Pecu was the second official school project, We were tasked with creating a website for money
                        managing purposes.
                        This project taught me how to work in a team and how to come up with interesting and creative
                        ways to create graphs and database connections.<br>
                    </p>
                </div>
            </div>

            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="https://brainsinc.newdeveloper.nl/" target="_blank" class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20" src="/images/mastermind.png"
                         alt="/images/mastermind.png">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;"
                     class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;"
                            class="text-white text-3xl">Mastermind</h1>
                        <h2 class="text-xl text-gray-600">Feb-Maart 2023</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        Mastermind was the third school project. In this project, a classmate and I were assigned to
                        create the game Mastermind. The game had to be easy to understand, with a scoreboard and an
                        explanation page. We were required to minimize page refreshing for this project, so we used
                        JavaScript.

                        This was my first time working with JavaScript. I not only learned a lot about JavaScript but
                        also realized the importance of good preparation.
                    </p>
                </div>
            </div>

            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="https://omas-bordspellen.newdeveloper.nl/" target="_blank"
                   class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20"
                         src="/images/omasbordspellen.png" alt="not available">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;"
                     class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;"
                            class="text-white text-3xl">Oma's Bordspellen</h1>
                        <h2 class="text-xl text-gray-600">Apr-Jul 2023</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        Oma's Bordspellen is a Dutch webshop that offers a diverse range of board games for purchase.
                        As part of my responsibilities, I was assigned the task of developing the product, favorites,
                        and browse pages, as well as implementing the underlying functionality for these pages.
                        To accomplish this, we opted to utilize ReactJS, a cutting-edge framework, and TypeScript, a
                        powerful programming language.
                        While initially challenging due to our team's lack of prior experience with this framework, I
                        swiftly adapted and made significant strides in mastering ReactJS.
                    </p>
                </div>
            </div>

        </div>
    </div>
    {{--contact--}}
    <div class="bg-gray-400 border-t-4 border-black h-40 flex flex-col justify-between" id="Contact">
        <div class="flex flex-row flex-wrap">
            <div class="flex w-full justify-center h-20 px-3">
                <div>
                    <p class="text-xl pt-2">
                        Created by Julian van Smirren
                    </p>

                    <div class="flex justify-between">
                        <a class="mt-2" href="mailto:julianvansm@gmail.com">
                            <img class="h-12  rounded hover:drop-shadow-lg" src="/images/mail.png">
                        </a>
                        <a class="mt-2" href="https://www.linkedin.com/in/julian-van-smirren-9b60b6256/" target="_blank">
                            <img class="h-12 rounded hover:drop-shadow-lg" src="/images/linkedin.png" alt="not available">
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="h-fit flex justify-end gap-2 px-2">
            <a href="#Home" class="underline" onclick="closeNav()">Home</a>
            <a href="#About" class="underline"  onclick="closeNav()"> About  </a>
            <a href="#Projects" class="underline"  onclick="closeNav()">Projects</a>
        </div>
    </div>

@endsection
