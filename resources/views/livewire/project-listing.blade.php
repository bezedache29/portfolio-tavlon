<div>
    @foreach ($projects as $key => $project)
        @if ($key % 2 != 1)
            <div class="flex flex-col mb-8 sm:flex-row">
                <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12 sm:order-last">
                    <iframe class="rounded-sm" width="500" height="315" src="{{ $project['url'] }}">
                    </iframe>
                </div>
                <div class="flex flex-col justify-center mb-8 sm:w-1/2 md:w-7/12 sm:pr-16">
                    <p
                        class="mb-2 text-sm font-semibold leading-none text-center text-indigo-600 uppercase sm:text-left">
                        @forelse ($project['categories'] as $key => $category)
                            {{ $category['name'] }}
                            @if ($key + 1 != count($project['categories']))
                                -
                            @endif
                        @empty
                            Pas de catégories
                        @endforelse
                    </p>
                    <h3 class="title title-small sm:text-left md:text-4xl">
                        {{ $project['name'] }}
                    </h3>
                    <p class="text md:text-left">
                        {{ $project['description'] }}
                    </p>
                </div>
            </div>
        @else
            <div class="flex flex-col mb-8 sm:flex-row">
                <div class="flex items-center mb-8 sm:w-1/2 md:w-5/12">
                    <iframe class="rounded-sm" width="500" height="315" src="{{ $project['url'] }}"
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

    @if ($hasMorePages)
        <div class="flex flex-col justify-center max-w-xs mx-auto mb-12 sm:max-w-full sm:flex-row">
            <button wire:click="loadMore"
                class="w-full mb-4 whitespace-no-wrap bg-indigo-600 btn btn-tall md:w-auto hover:bg-indigo-500 sm:mr-2">
                Voir plus de projets
            </button>
        </div>
    @endif


</div>
