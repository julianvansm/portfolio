@extends("layouts.viewnl", ['title' => 'HOME'] , ['lanfile' => '/'])
@section("content")
    @include('layouts.slideout',['lanset'=>'NL'])
    {{--welcome and about--}}
    <video class="opacity-20 w-screen h-screen object-cover fixed -z-10" autoplay muted loop id="background-video">
        <source src="./video/movingbackgroundbackup.mp4">
    </video>
    <div style="height: 2px; width: 0px; top: 0;" class="top-0 w-0" id="Home"></div>
    <div class="mt-20 flex items-center justify-center">
        <div style="box-shadow: 6px 6px 10px 2px black;" class="bg-white flex max-sm:flex-col border-red-600 border-2 rounded">
            <div class="flex flex-col justify-center text-white px-2 sm:mb-20">

                <p style="-webkit-text-stroke: 2px #000000; text-shadow: 2px 2px 2px black;" class="text-left max-sm:text-center max-sm:text-3xl text-4xl text-white">
                    Julian van Smirren<br>
                    Student software development<br>
                    bij Landstede
                </p>

            </div>
            <div class="w-auto flex justify-center">
                <img style=" height: 275px; min-width: 275px;" class="flex m-2 rounded-full border-black border-2 overflow-hidden" src="images/julianimg.jpg" alt="images/julianimg.jpg">
            </div>

        </div>
    </div>
    <div class="bg-gray-300 mt-20 max-sm:p-2 p-10 pb-10 border-black border-t-4 border-b-4" id="About">
        <h2 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px black;" class="text-6xl max-sm:text-5xl text-white text-center mb-4">
            Introductie
        </h2>
        <div class="flex flex-col justify-evenly items-center mb-4">
            <div style="max-width: 1002px;" class="about-container-color-extras p-4 sm:p-2">
                <p class="text-3xl max-sm:text-xl">
                    Mijn naam is Julian van Smirren geboren in april 2006. Ik ben eerstejaars student software developer
                    bij Landstede, ik kan nu html/css, php, lua en JavaScript.<br><br>
                    Ik studeer software development omdat het voor mij altijd belangrijk is geweest om dingen te creëren,
                    niet alleen met coderen maar, ook met hobby's als pianonummers composeren.
                    Hiernaast werk ik in een supermarkt om mijn geld te verdienen en werkervaring op te doen.
                </p>
            </div>
        </div>
    </div>
    {{--Project--}}
    <div style="background-color: rgba(66, 66, 66, 0.39);" class="" id="Projects">
        <h2 style=" text-shadow: 2px 2px 2px black;" class="text-5xl max-sm:text-3xl text-white text-center mb-2">Mijn Projecten</h2>
        <h3 style="text-shadow: 2px 2px 2px black;" class="text-3xl max-sm:text-xl text-white text-center mb-2"> Dit zijn alle projecten waar ik aan gewerkt heb.</h3>
        <div class="flex flex-row flex-wrap justify-center items-center overflow-hidden">
            {{--        Projecten\/--}}
            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="#Home" class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20" src="/images/fulllogojs.jpg" alt="/images/portfolioimg2.png">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;" class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;" class="text-white text-3xl">Portfolio</h1>
                        <h2 class="text-xl text-gray-600">Augustus 2022</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        Mijn portfolio is de eerste website waar ik aan heb gewerkt. Geloof het of niet, u bent nu op
                        die website!
                        Het doel is om deze website een schone en mooie uitstraling te geven. Simpel en duidelijk vind
                        ik altijd het beste. Dit project heeft mij het begin van coderen aangeleerd.
                    </p>
                </div>
            </div>
            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="https://theorder.newdeveloper.nl/" target="_blank" class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20" src="/images/theorder.jpg" alt="/images/theorder2.png">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;" class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;" class="text-white text-3xl">The Order of the Frontier</h1>
                        <h2 class="text-xl text-gray-600">Augustus 2022</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        The Order is mijn tweede project, het wordt gebruikt als een informatieplek voor drop-chances,
                        video-uitleg en nog veel meer.
                        Ook is dit het project waar ik veel mee geëxperimenteerd heb. The Order was een enorm
                        waardevolle leerervaring.<br>

                    </p>
                </div>
            </div>

            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="https://pecu.newdeveloper.nl/" target="_blank" class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20" src="/images/pecu.jpg" alt="/images/theorder2.png">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;" class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;" class="text-white text-3xl">Pecu</h1>
                        <h2 class="text-xl text-gray-600">Dec-Jan 2022-2023</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        Pecu was mijn tweede officiële project voor school. Mijn team kreeg de opdracht om een website
                        te bouwen om geldzaken bijtehouden.
                        Dit project heeft mij geleerd om in een team te werken en om op creatieve manieren
                        grafieken en database connecties te maken.<br>
                    </p>
                </div>
            </div>

            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="https://brainsinc.newdeveloper.nl/" target="_blank" class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20" src="/images/mastermind.png" alt="/images/mastermind.png">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;" class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;" class="text-white text-3xl">Mastermind</h1>
                        <h2 class="text-xl text-gray-600">Feb-Maart 2023</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        Mastermind was het derde schoolproject. Hierbij kregen een medeleerling en ik de opdracht om het spel Mastermind te maken.
                        Het spel moet makkelijk te begrijpen zijn met een scorebord en een uitlegpagina hebben. Dit project moest met minimale paginaverversing gemaakt worden en dus hebben wij JavaScript gebruikt.
                        Dit was voor mij de eerste keer dat ik met JavaScript heb gewerkt. Ik heb niet alleen veel over deze nieuwe taal geleerd, maar ook hoe belangrijk een goede voorbereiding is.
                    </p>
                </div>
            </div>

            <div class="project-container-extra p-3 m-3 rounded-xl border-2 border-red-600 flex flex-col items-stretch">
                <a href="https://omas-bordspellen.newdeveloper.nl/" target="_blank" class="bg-gray-700 relative rounded">
                    <img class="flex justify-center items-center rounded hover:opacity-20" src="/images/omasbordspellen.png" alt="not available">
                </a>
                <div style="box-shadow: #000 2px 2px 7px 2px;" class="mt-2 mt-4 h-max bg-white flex flex-col justify-between rounded-lg overflow-y-auto">
                    <div class="mb-3 p-2 border-gray-800 border-b-2">
                        <h1 style="-webkit-text-stroke: 1px #000000; text-shadow: 2px 2px 2px #000000;" class="text-white text-3xl">Oma's Bordspellen</h1>
                        <h2 class="text-xl text-gray-600">Apr-Jul 2023</h2>
                    </div>
                    <p class="p-2 pt-0 break-words text-lg">
                        Oma's Bordspellen is een Nederlandse webshop die een gevarieerd assortiment aan bordspellen te koop aanbiedt.
                        Als onderdeel van mijn verantwoordelijkheden kreeg ik de taak toegewezen om de productpagina's, favorietenpagina's en browsepagina's te maken, evenals het implementeren van de onderliggende functionaliteit voor deze pagina's.
                        Om dit te bereiken hebben we ervoor gekozen om gebruik te maken van ReactJS, een geavanceerd framework, en TypeScript, een krachtige programmeertaal.
                        Hoewel het in het begin uitdagend was vanwege het gebrek aan ervaring van ons team met dit nieuwe framework, heb ik mij snel aangepast en aanzienlijke vooruitgang geboekt in het beheersen van ReactJS.
                    </p>
                </div>
            </div>
            {{--        projecten/\--}}
        </div>
    </div>
    {{--Contact--}}
    <div class="bg-gray-400 border-t-4 border-black h-40 flex flex-col justify-between" id="Contact">
        <div class="flex flex-row flex-wrap">
            <div class="flex w-full justify-center h-20 px-3">
                <div>
                    <p class="text-xl pt-2">
                        Gemaakt door Julian van Smirren
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
            <a href="#About" class="underline"  onclick="closeNav()"> Introductie</a>
            <a href="#Projects" class="underline"  onclick="closeNav()">Projecten</a>
        </div>
    </div>

@endsection
