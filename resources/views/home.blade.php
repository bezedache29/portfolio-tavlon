<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')
    @livewireStyles
    <script async defer data-domain="open.michelegera.dev" src="https://plausible.io/js/plausible.js"></script>
</head>

<body class="relative antialiased tracking-tight text-gray-500 bg-black font-inter">
    <div class="absolute inset-0 bg-top bg-no-repeat bg-illustration-01"></div>
    <div class="absolute inset-0 bg-center bg-no-repeat bg-illustration-02"></div>
    <div class="container relative">
        <h1 class="px-8 mt-16 mb-4 text-5xl font-extrabold leading-tight text-center text-white xl:text-6xl">
            Sébastien <span class="text-indigo-700">Joublot</span>
        </h1>
        <p class="max-w-xl mx-auto mb-8 text-xl text-center xl:max-w-2xl">
            Monteur vidéaste, je maîtrise Davinci Resolve, j'adore le montage vidéo, raconter une histoire à partir de
            rien est une vrai passion, transmettre des émotions est un vrai plaisir.
        </p>
        <div class="flex flex-col justify-center max-w-xs mx-auto mb-12 sm:max-w-full sm:flex-row">
            <a class="w-full mb-4 whitespace-no-wrap bg-indigo-600 btn btn-tall md:w-auto hover:bg-indigo-500 sm:mr-2"
                href="#">
                Me contacter
            </a>
        </div>
        <div>
            <p class="mx-auto mb-16 italic intro sm:max-w-xl">
                "De la contrainte nait l'imagination et la créativité !"
            </p>
            <ul class="flex flex-col flex-wrap justify-center mb-20 text-center border-b border-gray-900 sm:flex-row">
                <li class="w-full px-6 mb-8 sm:mb-16 md:w-1/2 lg:w-1/3">
                    <span
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-4 text-3xl text-white bg-indigo-700 rounded-full">
                        <img class="w-10 h-10" src="{{ asset('storage/icons/montage.png') }}" alt="" />
                    </span>
                    <h3 class="mb-2 text-2xl font-bold text-white">Montage vidéo</h3>
                    <p class="max-w-xs mx-auto text-lg text-gray-500">
                        Montage vidéo institutionnelle
                    </p>
                </li>
                <li class="w-full px-6 mb-8 sm:mb-16 md:w-1/2 lg:w-1/3">
                    <span
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-4 text-3xl text-white bg-indigo-700 rounded-full">
                        <img class="w-10 h-10" src="{{ asset('storage/icons/davinci.png') }}" alt="" />
                    </span>
                    <h3 class="mb-2 text-2xl font-bold text-white">Davinci Resolve</h3>
                    <p class="max-w-xs mx-auto text-lg text-gray-500">
                        Permet la post production
                    </p>
                </li>
                <li class="w-full px-6 mb-8 sm:mb-16 md:w-1/2 lg:w-1/3">
                    <span
                        class="flex items-center justify-center w-16 h-16 mx-auto mb-4 text-3xl text-white bg-indigo-700 rounded-full">
                        <img class="w-15 h-15" src="{{ asset('storage/icons/artlist.png') }}" alt="" />
                    </span>
                    <h3 class="mb-2 text-2xl font-bold text-white">Artlist</h3>
                    <p class="max-w-xs mx-auto text-lg text-gray-500">
                        Base de donnée pour musique
                    </p>
                </li>
            </ul>
        </div>

        <div class="mb-16 border-b border-gray-800">
            <h2 class="mb-2 title sm:text-4xl md:text-5xl">
                Mes réalisations
            </h2>
            <p class="mx-auto mb-20 intro sm:max-w-xl">
                Ici se cachent mes plus belles réalisations de montage vidéo. Retrouvez un peu de mon travail, ma
                passion, mon style et surtout mon univers.
            </p>

            <livewire:project-listing />

        </div>

        <div class="mb-16 border-b border-gray-800">
            <h2 class="mb-2 title sm:text-4xl md:text-5xl">
                Mes réseaux sociaux
            </h2>

            <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4">
                <a href="https://www.youtube.com/channel/UC5tWpMmzIcfA7PPzh3I2l-w"
                    class="p-4 text-indigo-700 hover:text-indigo-400">
                    <svg class="fill-current" width="80" height="80" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 461.001 461.001" style="enable-background:new 0 0 461.001 461.001;"
                        xml:space="preserve">
                        <g>
                            <path fill="currentColor"
                                d="M365.257,67.393H95.744C42.866,67.393,0,110.259,0,163.137v134.728
		c0,52.878,42.866,95.744,95.744,95.744h269.513c52.878,0,95.744-42.866,95.744-95.744V163.137
		C461.001,110.259,418.135,67.393,365.257,67.393z M300.506,237.056l-126.06,60.123c-3.359,1.602-7.239-0.847-7.239-4.568V168.607
		c0-3.774,3.982-6.22,7.348-4.514l126.06,63.881C304.363,229.873,304.298,235.248,300.506,237.056z" />
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>
                </a>
                <a href="https://www.linkedin.com/in/exode-effects-45b44b242/"
                    class="p-4 text-indigo-700 hover:text-indigo-400">
                    <svg class="fill-current" width="80" height="80" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 291.319 291.319" style="enable-background:new 0 0 291.319 291.319;"
                        xml:space="preserve">
                        <g>
                            <path fill="currentColor"
                                d="M145.659,0c80.45,0,145.66,65.219,145.66,145.66s-65.21,145.659-145.66,145.659S0,226.1,0,145.66
		S65.21,0,145.659,0z" />
                            <path
                                d="M82.079,200.136h27.275v-90.91H82.079V200.136z M188.338,106.077
		c-13.237,0-25.081,4.834-33.483,15.504v-12.654H127.48v91.21h27.375v-49.324c0-10.424,9.55-20.593,21.512-20.593
		s14.912,10.169,14.912,20.338v49.57h27.275v-51.6C218.553,112.686,201.584,106.077,188.338,106.077z M95.589,100.141
		c7.538,0,13.656-6.118,13.656-13.656S103.127,72.83,95.589,72.83s-13.656,6.118-13.656,13.656S88.051,100.141,95.589,100.141z" />
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                        <g>
                        </g>
                    </svg>
                </a>
                <a href="https://www.instagram.com/exodeeffects/?hl=fr"
                    class="p-4 text-indigo-700 hover:text-indigo-400">
                    <svg class="fill-current" width="80" height="80" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <g>
                            <circle cx="12.145" cy="3.892" r="1"></circle>
                            <path
                                d="M8 12c-2.206 0-4-1.794-4-4s1.794-4 4-4 4 1.794 4 4-1.794 4-4 4zm0-6c-1.103 0-2 .897-2 2s.897 2 2 2 2-.897 2-2-.897-2-2-2z"
                                fill="currentColor"></path>
                            <path
                                d="M12 16H4c-2.056 0-4-1.944-4-4V4c0-2.056 1.944-4 4-4h8c2.056 0 4 1.944 4 4v8c0 2.056-1.944 4-4 4zM4 2c-.935 0-2 1.065-2 2v8c0 .953 1.047 2 2 2h8c.935 0 2-1.065 2-2V4c0-.935-1.065-2-2-2H4z"
                                fill="currentColor"></path>
                        </g>
                    </svg>
                </a>
            </div>
        </div>

        <div class="mb-16">
            <h2 class="title sm:text-4xl md:text-5xl">Mes recommandations</h2>
            {{-- <p class="mx-auto intro sm:max-w-xl">
                Vitae aliquet nec ullamcorper sit amet risus nullam eget felis semper
                quis lectus nulla at volutpat diam ut venenatis tellus—in ornare.
            </p> --}}
            <div class="flex flex-col justify-center -ml-4 -mr-4 md:flex-row md:flex-wrap">
                <div class="max-w-sm p-4 mx-auto md:max-w-full md:mx-0 md:w-1/2 lg:w-1/3">
                    <div class="p-8 bg-gray-800">
                        <div class="mb-8 text-indigo-600">
                            <svg class="fill-current" width="24" height="18" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 13.481c0-2.34.611-4.761 1.833-7.263C3.056 3.716 4.733 1.643 6.865 0L11 2.689C9.726 4.382 8.777 6.093 8.152 7.824c-.624 1.73-.936 3.578-.936 5.545V18H0v-4.519zm13 0c0-2.34.611-4.761 1.833-7.263 1.223-2.502 2.9-4.575 5.032-6.218L24 2.689c-1.274 1.693-2.223 3.404-2.848 5.135-.624 1.73-.936 3.578-.936 5.545V18H13v-4.519z"
                                    fill-rule="nonzero" fill="currentColor" />
                            </svg>
                        </div>
                        <blockquote class="pb-8 mb-4 -mt-4 text-lg border-b border-gray-700">
                            — Sébastien est : professionnel, excellent sur tous les aspects prise de
                            vue/son/cadrage/montage/mixage/rendu final, force de proposition et capable d'organiser le
                            bon déroulement et la réalisation global d'un cas client - très sympa et a un très bon
                            relationnel avec les gens qu'il filme
                            C'était un plaisir de travailler ensemble, je recommande.
                        </blockquote>
                        <p class="font-semibold">
                            <span class="text-white">Christine Devost</span>
                            {{-- <span class="text-gray-700">/</span>
                            <a href="#" class="text-green-400 hover:text-green-300">AppName</a> --}}
                        </p>
                    </div>
                </div>
                <div class="max-w-sm p-4 mx-auto md:max-w-full md:mx-0 md:w-1/2 lg:w-1/3">
                    <div class="p-8 bg-gray-800">
                        <div class="mb-8 text-indigo-600">
                            <svg class="fill-current" width="24" height="18"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 13.481c0-2.34.611-4.761 1.833-7.263C3.056 3.716 4.733 1.643 6.865 0L11 2.689C9.726 4.382 8.777 6.093 8.152 7.824c-.624 1.73-.936 3.578-.936 5.545V18H0v-4.519zm13 0c0-2.34.611-4.761 1.833-7.263 1.223-2.502 2.9-4.575 5.032-6.218L24 2.689c-1.274 1.693-2.223 3.404-2.848 5.135-.624 1.73-.936 3.578-.936 5.545V18H13v-4.519z"
                                    fill-rule="nonzero" fill="currentColor" />
                            </svg>
                        </div>
                        <blockquote class="pb-8 mb-4 -mt-4 text-lg border-b border-gray-700">
                            — Sébastien a fait du super boulot, avec beaucoup de passion, d'enthousiasme et une très
                            grande réactivité! Ils s'est adaptés sans problème aux changements et imprévus dans la
                            mission avec zèle et a produit un résultat excellent, aussi bien sur la vidéo d'aftermovie
                            que sur les photos de l'événement. Une valeur sûre pour avoir des visuels d'enfer 🔥
                        </blockquote>
                        <p class="font-semibold">
                            <span class="text-white">André Fecteau</span>
                            {{-- <span class="text-gray-700">/</span>
                            <a href="#" class="text-green-400 hover:text-green-300">AppName</a> --}}
                        </p>
                    </div>
                </div>
                <div class="max-w-sm p-4 mx-auto md:max-w-full md:mx-0 md:w-1/2 lg:w-1/3">
                    <div class="p-8 bg-gray-800">
                        <div class="mb-8 text-indigo-600">
                            <svg class="fill-current" width="24" height="18"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M0 13.481c0-2.34.611-4.761 1.833-7.263C3.056 3.716 4.733 1.643 6.865 0L11 2.689C9.726 4.382 8.777 6.093 8.152 7.824c-.624 1.73-.936 3.578-.936 5.545V18H0v-4.519zm13 0c0-2.34.611-4.761 1.833-7.263 1.223-2.502 2.9-4.575 5.032-6.218L24 2.689c-1.274 1.693-2.223 3.404-2.848 5.135-.624 1.73-.936 3.578-.936 5.545V18H13v-4.519z"
                                    fill-rule="nonzero" fill="currentColor" />
                            </svg>
                        </div>
                        <blockquote class="pb-8 mb-4 -mt-4 text-lg border-b border-gray-700">
                            — J'ai pu apprécier le travail de Sébastien pendant plusieurs mois. Il est motivé et
                            compétent tant en travaux graphiques (maîtrise de Davinci Resolve Studio) qu'en vidéo (prise
                            de vue, montage, habillage).
                            Motivé, créatif et sympathique, c'est un vrai plaisir de travailler avec lui. Excellent
                            travail ! Sérieux, autonome et disponible. Je recommande vivement !
                        </blockquote>
                        <p class="font-semibold">
                            <span class="text-white">Xavier Tardif</span>
                            {{-- <span class="text-gray-700">/</span>
                            <a href="#" class="text-green-400 hover:text-green-300">AppName</a> --}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col justify-center mb-8 text-center sm:flex-row">
            <p class="order-last mb-4 text-sm text-gray-500 sm:order-first">
                Créé avec ❤️ par
                <a href="https://portfolio.ripley.eu" class="text-white">Bezedache</a>. <span class="ml-3">©
                    <a href="https://www.youtube.com/channel/UC5tWpMmzIcfA7PPzh3I2l-w" class="text-white"> Exode
                        Effects
                    </a>2022 - Tous droits réservés</span>
            </p>
        </div>
    </div>
    @livewireScripts
</body>

</html>
