<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

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

            @foreach ($projects as $key => $project)
                @if ($key % 2 != 1)
                    <div class="flex flex-col mb-8 sm:flex-row">
                        <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                            <iframe class="rounded-sm" width="500" height="315" src="{{ $project->url }}">
                            </iframe>
                        </div>
                        <div class="flex flex-col justify-center mb-8 sm:w-1/2 md:w-7/12 sm:pr-16">
                            <p
                                class="mb-2 text-sm font-semibold leading-none text-center text-indigo-600 uppercase sm:text-left">
                                @forelse ($project->categories as $key => $category)
                                    {{ $category->name }}
                                    @if ($key + 1 != count($project->categories))
                                        -
                                    @endif
                                @empty
                                    Pas de catégories
                                @endforelse
                            </p>
                            <h3 class="title title-small sm:text-left md:text-4xl">
                                {{ $project->name }}
                            </h3>
                            <p class="text md:text-left">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>
                @else
                    <div class="flex flex-col mb-8 sm:flex-row">
                        <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                            <iframe class="rounded-sm" width="500" height="315" src="{{ $project->url }}"
                                allowfullscreen="allowfullscreen" mozallowfullscreen="mozallowfullscreen"
                                msallowfullscreen="msallowfullscreen" oallowfullscreen="oallowfullscreen"
                                webkitallowfullscreen="webkitallowfullscreen">
                            </iframe>
                        </div>
                        <div class="flex flex-col justify-center mb-8 sm:w-1/2 md:w-7/12 sm:pl-16">
                            <p
                                class="mb-2 text-sm font-semibold leading-none text-center text-indigo-600 uppercase sm:text-left">
                                @forelse ($project->categories as $key => $category)
                                    {{ $category->name }}
                                    @if ($key + 1 != count($project->categories))
                                        -
                                    @endif
                                @empty
                                    Pas de catégories
                                @endforelse
                            </p>
                            <h3 class="title title-small sm:text-left md:text-4xl">
                                {{ $project->name }}
                            </h3>
                            <p class="text md:text-left">
                                {{ $project->description }}
                            </p>
                        </div>
                    </div>
                @endif
            @endforeach
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
                            <svg class="fill-current" width="24" height="18" xmlns="http://www.w3.org/2000/svg">
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
        <div class="flex flex-col items-center sm:flex-row sm:justify-between">
            <a class="text-indigo-700" href="#">
                <img src="img/logo.svg" alt="" class="mx-auto mb-4" />
            </a>
            <div class="flex flex-row justify-center mb-4 -ml-4 -mr-4">
                <a href="#" class="p-4 text-indigo-700 hover:text-indigo-400">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M6.023 16L6 9H3V6h3V4c0-2.7 1.672-4 4.08-4 1.153 0 2.144.086 2.433.124v2.821h-1.67c-1.31 0-1.563.623-1.563 1.536V6H13l-1 3H9.28v7H6.023z"
                            fill="currentColor"></path>
                    </svg>
                </a>
                <a href="#" class="p-4 text-indigo-700 hover:text-indigo-400">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
                        xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M16 3c-.6.3-1.2.4-1.9.5.7-.4 1.2-1 1.4-1.8-.6.4-1.3.6-2.1.8-.6-.6-1.5-1-2.4-1-1.7 0-3.2 1.5-3.2 3.3 0 .3 0 .5.1.7-2.7-.1-5.2-1.4-6.8-3.4-.3.5-.4 1-.4 1.7 0 1.1.6 2.1 1.5 2.7-.5 0-1-.2-1.5-.4C.7 7.7 1.8 9 3.3 9.3c-.3.1-.6.1-.9.1-.2 0-.4 0-.6-.1.4 1.3 1.6 2.3 3.1 2.3-1.1.9-2.5 1.4-4.1 1.4H0c1.5.9 3.2 1.5 5 1.5 6 0 9.3-5 9.3-9.3v-.4C15 4.3 15.6 3.7 16 3z"
                            fill="currentColor"></path>
                    </svg>
                </a>
                <a href="#" class="p-4 text-indigo-700 hover:text-indigo-400">
                    <svg class="fill-current" width="16" height="16" viewBox="0 0 16 16"
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
        <div class="flex flex-col justify-between mb-8 text-center sm:flex-row">
            <p class="order-last mb-4 text-sm text-gray-500 sm:order-first">
                {{-- Designed by
                <a href="https://cruip.com/" class="text-white">Cruip</a>. Coded by
                <a href="https://michelegera.dev/" class="text-white">michelegera</a> --}}
            </p>
        </div>
    </div>
</body>

</html>
