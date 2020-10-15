<div class="relative mt-3 md:mt-0" x-data="{ isOpen: true }" @click.away="isOpen  = false">
    <input
     wire:model.debounce.500ms="search"
     type="text"
     class="bg-blue-800 text-sm rounded-full w-64 px-4 pl-8 py-1 focus:outline-none focus:shadow-outline"
     placeholder="Search"
     x-ref="search"
     @keydown.window="
        if(event.keyCode === 191){
            event.preventDefault();
            $refs.search.focus();
        }
     "
     @focus="isOpen = true"
     @keydown="isOpen = true"
     @keydown.escape.window="isOpen = false"
     @keydown.shift.tab="isOpen = false"
     >
    <div class="absolute top-0">
        <svg class="fill-current w-4 ml-2 text-gray-500" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="28.931px" height="28.932px" viewBox="0 0 28.931 28.932" style="enable-background:new 0 0 28.931 28.932;"
        xml:space="preserve">
       <path d="M28.344,25.518l-6.114-6.115c1.486-2.067,2.303-4.537,2.303-7.137c0-3.275-1.275-6.355-3.594-8.672
           C18.625,1.278,15.543,0,12.266,0C8.99,0,5.909,1.275,3.593,3.594C1.277,5.909,0.001,8.99,0.001,12.266
           c0,3.276,1.275,6.356,3.592,8.674c2.316,2.316,5.396,3.594,8.673,3.594c2.599,0,5.067-0.813,7.136-2.303l6.114,6.115
           c0.392,0.391,0.902,0.586,1.414,0.586c0.513,0,1.024-0.195,1.414-0.586C29.125,27.564,29.125,26.299,28.344,25.518z M6.422,18.111
           c-1.562-1.562-2.421-3.639-2.421-5.846S4.86,7.983,6.422,6.421c1.561-1.562,3.636-2.422,5.844-2.422s4.284,0.86,5.845,2.422
           c1.562,1.562,2.422,3.638,2.422,5.845s-0.859,4.283-2.422,5.846c-1.562,1.562-3.636,2.42-5.845,2.42S7.981,19.672,6.422,18.111z"/>
        </svg>
    </div>

    <div wire:loading class="spinner top-0 right-0 mr-4 mt-3"></div>

    @if (strlen($search) > 2)
        <div
         class="z-50 absolute bg-blue-800 text-sm rounded w-64 mt-4"
         x-show.transition.opacity="isOpen"
         >
            @if ($searchResults->count() > 0)
                <ul>
                    @foreach ($searchResults as $result)
                        <li class="border-b border-blue-700">
                            <a
                            href="{{route('movies.show', $result['id'])}}"
                            class="hover:bg-blue-700 px-3 py-3 flex items-center transition ease-in-out duration-150"
                            @if ($loop->last) @keydown.tab="isOpen = false" @endif
                            >
                                @if ($result['poster_path'])
                                    <img src="https://image.tmdb.org/t/p/w92/{{$result['poster_path']}}" class="w-8" alt="{{$result['title']}}">
                                @else
                                    <img src="https://via.placeholder.com/50x75" alt="{{$result['title']}}" class="w-8">
                                @endif
                                <span class="ml-4">{{ $result['title'] }}</span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            @else
                <div class="px-3 py-3">No results for "{{ $search }}"</div>
            @endif
        </div>
    @endif
</div>
