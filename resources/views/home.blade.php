<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Compétences et portfolio de Sébastien Joublot - Monteur Vidéaste Davinci Resolve">
    <meta name="robots" content="index, follow">
    <meta name="author" content="Sébastien Joublot">

    <!-- Open Graph / Facebook / LinkedIn -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://portfolio-ee.bezedache.com" />
    <meta property="og:locale" content="fr" />
    <meta property="og:title" content="Portfolio de Sébastien Joublot" />
    <meta property="og:description"
        content="Compétences et Portfolio de Sébastien Joublot - Monteur Vidéaste Davinci Resolve">
    <meta property="og:image" content="https://portfolio-ee.bezedache.com/storage/images/portfolio-ee.png">

    <!-- Twitter Card  -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:url" content="https://portfolio-ee.bezedache.com">
    <meta name="twitter:title" content="Portfolio de Sébastien Joublot">
    <meta name="twitter:description"
        content="Compétences et Portfolio de Sébastien Joublot - Monteur Vidéaste Davinci Resolve">
    <meta name="twitter:image" content="https://portfolio-ee.bezedache.com/storage/images/portfolio-ee.png">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Portfolio de Sébastien Joublot</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <script src="{{ mix('js/app.js') }}" defer></script>
    @livewireStyles
    <script async defer data-domain="open.michelegera.dev" src="https://plausible.io/js/plausible.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>

    <style>
        [x-cloak] {
            display: none !important;
        }

        html {
            scroll-behavior: smooth
        }
    </style>
</head>

<body class="relative antialiased tracking-tight text-gray-500 bg-black font-inter">
    <div class="absolute inset-0 bg-top bg-no-repeat bg-illustration-01"></div>
    <div class="absolute inset-0 bg-center bg-no-repeat bg-illustration-02"></div>
    <div class="container relative">

        <!-- Alert Messages Session Success --->
        @if (session()->has('success'))
            <div class="px-4 py-3 mt-5 -mb-10 text-teal-900 bg-teal-100 border-t-4 border-teal-500 rounded-b shadow-md"
                role="alert">
                <div class="flex">
                    <div class="py-1"><svg class="w-6 h-6 mr-4 text-teal-500 fill-current"
                            xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M2.93 17.07A10 10 0 1 1 17.07 2.93 10 10 0 0 1 2.93 17.07zm12.73-1.41A8 8 0 1 0 4.34 4.34a8 8 0 0 0 11.32 11.32zM9 11V9h2v6H9v-4zm0-6h2v2H9V5z" />
                        </svg></div>
                    <div>
                        <p class="font-bold">{{ session()->get('success') }}</p>
                        <p class="text-sm">Merci, je reviens vers vous le plus rapidement possible.</p>
                    </div>
                </div>
            </div>
        @endif

        <h1 class="px-8 mt-16 mb-4 text-5xl font-extrabold leading-tight text-center text-white xl:text-6xl">
            Sébastien <span class="text-indigo-700">Joublot</span>
        </h1>
        <p class="max-w-xl mx-auto mb-8 text-xl text-center xl:max-w-2xl">
            Monteur vidéaste, je maîtrise Davinci Resolve, j'adore le montage vidéo, raconter une histoire à partir de
            rien est une vrai passion, transmettre des émotions est un vrai plaisir.
        </p>
        <div class="flex flex-col justify-center max-w-xs mx-auto mb-12 sm:max-w-full sm:flex-row">
            <a class="w-full mb-4 whitespace-no-wrap bg-indigo-600 btn btn-tall md:w-auto hover:bg-indigo-500 sm:mr-2"
                href="#contact">
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
                Mes compétences
            </h2>
            <div class="flex flex-wrap justify-center mb-20">
                @foreach ($skills as $skill)
                    <div class="w-full mt-10 sm:px-10 sm:w-1/2">
                        <p class="mb-2">{{ $skill->name }} - {{ $skill->per_cent }}%</p>
                        <div class="w-full bg-gray-200 rounded-full h-2.5 dark:bg-gray-700">
                            <div class="bg-indigo-500 h-2.5 rounded-full" style="width: {{ $skill->per_cent }}%"></div>
                        </div>
                    </div>
                @endforeach
            </div>

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
                    <svg class="fill-current" width="80" height="80" version="1.1" id="Capa_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="97.75px"
                        height="97.75px" viewBox="0 0 97.75 97.75" style="enable-background:new 0 0 97.75 97.75;"
                        xml:space="preserve">
                        <g>
                            <g>
                                <polygon fill="currentColor"
                                    points="25.676,52.482 29.551,52.482 29.551,73.455 33.217,73.455 33.217,52.482 37.164,52.482 37.164,49.047 
			25.676,49.047 		" />
                                <path fill="currentColor"
                                    d="M56.674,55.046c-1.212,0-2.343,0.662-3.406,1.972v-7.972h-3.295v24.409h3.295v-1.762c1.103,1.361,2.233,2.013,3.406,2.013
			c1.311,0,2.193-0.69,2.633-2.044c0.221-0.771,0.334-1.982,0.334-3.665v-7.242c0-1.722-0.113-2.924-0.334-3.655
			C58.868,55.736,57.984,55.046,56.674,55.046z M56.344,68.255c0,1.644-0.482,2.454-1.434,2.454c-0.541,0-1.092-0.259-1.643-0.811
			V58.814c0.551-0.545,1.102-0.803,1.643-0.803c0.951,0,1.434,0.842,1.434,2.482V68.255z" />
                                <path fill="currentColor"
                                    d="M43.824,69.167c-0.731,1.033-1.422,1.542-2.084,1.542c-0.44,0-0.691-0.259-0.771-0.771c-0.03-0.106-0.03-0.508-0.03-1.28
			v-13.39h-3.296v14.379c0,1.285,0.111,2.153,0.291,2.705c0.331,0.922,1.063,1.354,2.123,1.354c1.213,0,2.457-0.732,3.767-2.234
			v1.984h3.298V55.268h-3.298V69.167z" />
                                <path fill="currentColor"
                                    d="M46.653,38.466c1.073,0,1.588-0.851,1.588-2.551v-7.731c0-1.701-0.515-2.548-1.588-2.548c-1.074,0-1.59,0.848-1.59,2.548
			v7.731C45.063,37.616,45.579,38.466,46.653,38.466z" />
                                <path fill="currentColor"
                                    d="M48.875,0C21.882,0,0,21.882,0,48.875S21.882,97.75,48.875,97.75S97.75,75.868,97.75,48.875S75.868,0,48.875,0z
			 M54.311,22.86h3.321v13.532c0,0.781,0,1.186,0.04,1.295c0.073,0.516,0.335,0.78,0.781,0.78c0.666,0,1.365-0.516,2.104-1.559
			V22.86h3.33v18.379h-3.33v-2.004c-1.326,1.52-2.59,2.257-3.805,2.257c-1.072,0-1.812-0.435-2.146-1.365
			c-0.184-0.557-0.295-1.436-0.295-2.733V22.86L54.311,22.86z M41.733,28.853c0-1.965,0.334-3.401,1.042-4.33
			c0.921-1.257,2.218-1.885,3.878-1.885c1.668,0,2.964,0.628,3.885,1.885c0.698,0.928,1.032,2.365,1.032,4.33v6.436
			c0,1.954-0.334,3.403-1.032,4.322c-0.921,1.254-2.217,1.881-3.885,1.881c-1.66,0-2.957-0.627-3.878-1.881
			c-0.708-0.919-1.042-2.369-1.042-4.322V28.853z M32.827,16.576l2.622,9.685l2.519-9.685h3.735L37.26,31.251v9.989h-3.692v-9.989
			c-0.335-1.77-1.074-4.363-2.259-7.803c-0.778-2.289-1.589-4.585-2.367-6.872H32.827z M75.186,75.061
			c-0.668,2.899-3.039,5.039-5.894,5.358c-6.763,0.755-13.604,0.759-20.42,0.755c-6.813,0.004-13.658,0-20.419-0.755
			c-2.855-0.319-5.227-2.458-5.893-5.358c-0.951-4.129-0.951-8.638-0.951-12.89s0.012-8.76,0.962-12.89
			c0.667-2.9,3.037-5.04,5.892-5.358c6.762-0.755,13.606-0.759,20.421-0.755c6.813-0.004,13.657,0,20.419,0.755
			c2.855,0.319,5.227,2.458,5.896,5.358c0.948,4.13,0.942,8.638,0.942,12.89S76.137,70.932,75.186,75.061z" />
                                <path fill="currentColor"
                                    d="M67.17,55.046c-1.686,0-2.995,0.619-3.947,1.864c-0.699,0.92-1.018,2.342-1.018,4.285v6.371
			c0,1.933,0.357,3.365,1.059,4.276c0.951,1.242,2.264,1.863,3.988,1.863c1.721,0,3.072-0.651,3.984-1.972
			c0.4-0.584,0.66-1.245,0.77-1.975c0.031-0.33,0.07-1.061,0.07-2.124v-0.479h-3.361c0,1.32-0.043,2.053-0.072,2.232
			c-0.188,0.881-0.662,1.321-1.473,1.321c-1.132,0-1.686-0.84-1.686-2.522v-3.226h6.592v-3.767c0-1.943-0.329-3.365-1.02-4.285
			C70.135,55.666,68.824,55.046,67.17,55.046z M68.782,62.218h-3.296v-1.683c0-1.682,0.553-2.523,1.654-2.523
			c1.09,0,1.642,0.842,1.642,2.523V62.218z" />
                            </g>
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
                            <path style="fill:#151719;"
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
                    <svg class="fill-current" width="80" height="80" version="1.1" id="Layer_1"
                        xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                        viewBox="0 0 291.319 291.319" style="enable-background:new 0 0 291.319 291.319;"
                        xml:space="preserve">
                        <g>
                            <path fill="currentColor"
                                d="M145.659,0c80.44,0,145.66,65.219,145.66,145.66S226.1,291.319,145.66,291.319S0,226.1,0,145.66
		S65.21,0,145.659,0z" />
                            <path style="fill:#151719;"
                                d="M195.93,63.708H95.38c-17.47,0-31.672,14.211-31.672,31.672v100.56
		c0,17.47,14.211,31.672,31.672,31.672h100.56c17.47,0,31.672-14.211,31.672-31.672V95.38
		C227.611,77.919,213.4,63.708,195.93,63.708z M205.908,82.034l3.587-0.009v27.202l-27.402,0.091l-0.091-27.202
		C182.002,82.116,205.908,82.034,205.908,82.034z M145.66,118.239c22.732,0,27.42,21.339,27.42,27.429
		c0,15.103-12.308,27.411-27.42,27.411c-15.121,0-27.42-12.308-27.42-27.411C118.23,139.578,122.928,118.239,145.66,118.239z
		 M209.65,193.955c0,8.658-7.037,15.704-15.713,15.704H97.073c-8.667,0-15.713-7.037-15.713-15.704v-66.539h22.759
		c-2.112,5.198-3.305,12.299-3.305,18.253c0,24.708,20.101,44.818,44.818,44.818s44.808-20.11,44.808-44.818
		c0-5.954-1.193-13.055-3.296-18.253h22.486v66.539L209.65,193.955z" />
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
                <a href="https://www.malt.fr/profile/sebastienjoublot"
                    class="p-4 text-indigo-700 hover:text-indigo-400">
                    <svg class="fill-current" width="80" height="80" xmlns="http://www.w3.org/2000/svg"
                        aria-label="Malt" role="img" viewBox="0 0 512 512">
                        <rect width="512" height="512" rx="15%" fill="#151719" />
                        <path fill="currentColor"
                            d="m408.4 103.8c-32.5-32.4-67.1-11.4-88.8 10.2L114.8 318.8c-21.7 21.7-44.4 54.7-10.2 88.8c34.1 34.1 67 11.4 88.7-10.3l204.8-204.8c21.7-21.6 42.7-56.3 10.3-88.7zm-195.7-8.4 43.4 43.4 44.1-44.2c3-3 6-5.8 9.1-8.4c-4.6-23.3-17.9-44.4-53.3-44.4c-35.4 0-48.7 21.2-53.2 44.5c3.3 2.9 6.6 5.8 9.9 9.1zm87.5 322.1-44.1-44.1-43.4 43.3c-3.3 3.3-6.5 6.4-9.8 9.2c5 23.8 19 45.5 53.1 45.5c34.2 0 48.3-21.9 53.2-45.7c-3-2.6-6-5.2-9-8.2zm-105.9-217h-83.6c-30.7 0-70 9.7-70 55.5c0 34.3 21.9 48.3 45.8 53.2c2.8-3.2 107.8-108.7 107.8-108.7zm231.5 2.3c-2.6 3-107.9 108.8-107.9 108.8h82.4c30.7 0 70-7.3 70-55.6c0-35.3-21.1-48.6-44.5-53.2zm-204.1-29.7 14.9-14.9-43.3-43.4c-21.7-21.7-54.6-44.4-88.8-10.2c-25 25-19.4 49.4-6.2 69.1c4.1-.3 123.4-.6 123.4-.6zm68.7 165.9-15 15 44.2 44.1c21.7 21.7 56.3 42.7 88.7 10.3c24.2-24.2 18.7-49.7 5.3-70c-4.3.3-123.2.6-123.2.6z" />
                    </svg>
                </a>
            </div>
        </div>

        <div class="mb-16 border-b border-gray-800">
            <h2 class="title sm:text-4xl md:text-5xl">Mes recommandations</h2>
            {{-- <p class="mx-auto intro sm:max-w-xl">
                Vitae aliquet nec ullamcorper sit amet risus nullam eget felis semper
                quis lectus nulla at volutpat diam ut venenatis tellus—in ornare.
            </p> --}}
            <div class="flex flex-col justify-center -ml-4 -mr-4 md:flex-row md:flex-wrap">
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
                            — Sébastien est : professionnel, excellent sur tous les aspects prise de
                            vue / son / cadrage / montage / mixage / rendu final, force de proposition et capable
                            d'organiser le
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


        <div class="mb-16 border-b border-gray-800" id="contact">
            <h2 class="title sm:text-4xl md:text-5xl">Formulaire de contact</h2>
            <div class="bg-gray-800">
                <form method="POST" action="{{ route('contact.send-email') }}" class="py-6">
                    @csrf
                    <div class="px-6 mt-2">
                        <div class="mb-5">
                            <label for="email" class="block mb-1 text-base font-medium">
                                Adresse e-mail :
                            </label>
                            <input type="email" name="email" id="email" placeholder="example@domain.com"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#5658dd] focus:shadow-md" />
                            <p class="text-red-500">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="mb-5">
                            <label for="object" class="block mb-1 text-base font-medium">
                                Objet :
                            </label>
                            <input type="text" name="object" id="object" placeholder="Objet du message"
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#5658dd] focus:shadow-md" />
                            <p class="text-red-500">{{ $errors->first('email') }}</p>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="block mb-1 text-base font-medium">
                                Message :
                            </label>
                            <textarea
                                class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#5658dd] focus:shadow-md"
                                id="message" name="message" rows="5" cols="33" placeholder="Votre message ici..."></textarea>
                        </div>
                        <p class="mb-3 text-sm italic">J'accepte ce site à conserver mes données
                            personnelles transmises via ce formulaire. Aucun exploitation commerciale ne
                            sera faite des données conservées.</p>
                        <p class="text-red-500">{{ $errors->first('email') }}</p>
                    </div>
                    <div class="px-4 pt-5 bg-gray-50 sm:flex sm:flex-row-reverse sm:px-6">
                        <button type="submit"
                            class="w-full whitespace-no-wrap bg-indigo-600 w-100 btn btn-tall md:w-auto hover:bg-indigo-500 sm:ml-2">
                            Envoyer
                        </button>
                    </div>
                </form>
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

    {{-- <div role="dialog" aria-labelledby="modal1_label" aria-modal="true" tabindex="0" x-show="isModalOpen"
        x-on:click="isModalOpen = false; $refs.modal1_button.focus()" x-on:click.away="isModalOpen = false"
        class="fixed top-0 left-0 flex items-center justify-center w-full h-screen">
        <div aria-hidden="true" class="absolute top-0 left-0 w-full h-screen transition duration-300 bg-black"
            :class="{ 'opacity-80': isModalOpen, 'opacity-0': !isModalOpen }" x-show="isModalOpen"
            x-transition:leave="delay-150"></div>
        <div data-modal-document x-on:click.stop="" x-show="isModalOpen"
            x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="transform scale-50 opacity-0"
            x-transition:enter-end="transform scale-100 opacity-100"
            x-transition:leave="transition ease-out duration-300"
            x-transition:leave-start="transform scale-100 opacity-100"
            x-transition:leave-end="transform scale-50 opacity-0"
            class="z-10 flex flex-col overflow-hidden bg-white rounded-lg shadow-lg lg:w-3/5 sm:w-4/5">
            <div class="p-6 border-b">
                <h2 id="modal1_label" x-ref="modal1_label"
                    class="text-3xl font-medium leading-6 text-center text-gray-800">
                    Formulaire de contact</h2>
            </div>
            <form method="POST" action="{{ route('contact.send-email') }}" class="py-6">
                @csrf
                <div class="px-6 mt-2">
                    <div class="mb-5">
                        <label for="email" class="mb-1 block text-base font-medium text-[#07074D]">
                            Adresse e-mail :
                        </label>
                        <input type="email" name="email" id="email" placeholder="example@domain.com"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#5658dd] focus:shadow-md" />
                    </div>
                    <div class="mb-5">
                        <label for="object" class="mb-1 block text-base font-medium text-[#07074D]">
                            Objet :
                        </label>
                        <input type="text" name="object" id="object" placeholder="Objet du message"
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#5658dd] focus:shadow-md" />
                    </div>
                    <div class="mb-3">
                        <label for="message" class="mb-1 block text-base font-medium text-[#07074D]">
                            Message :
                        </label>
                        <textarea
                            class="w-full rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#5658dd] focus:shadow-md"
                            id="message" name="message" rows="5" cols="33" placeholder="Votre message ici..."></textarea>
                    </div>
                    <p class="mb-3 text-sm italic text-gray-700">J'accepte ce site à conserver mes données
                        personnelles transmises via ce formulaire. Aucun exploitation commerciale ne
                        sera faite des données conservées.</p>
                </div>
                <div class="px-4 pt-5 border-t bg-gray-50 sm:flex sm:flex-row-reverse sm:px-6">
                    <button type="submit"
                        class="w-full whitespace-no-wrap bg-indigo-600 w-100 btn btn-tall md:w-auto hover:bg-indigo-500 sm:ml-2">
                        Envoyer
                    </button>
                    <button x-on:click="isModalOpen = false" type="button"
                        class="w-full whitespace-no-wrap bg-gray-800 btn btn-tall md:w-auto hover:bg-gray-600 sm:mr-2">
                        Annuler
                    </button>
                </div>
            </form>
        </div>
    </div> --}}



    @livewireScripts
</body>

</html>
