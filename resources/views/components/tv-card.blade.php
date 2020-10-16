<div class="mt-8">
    <a href="{{ route('tv.show', $tvshow['id'])}}">
        <img src="{{ $tvshow['poster_path'] }}" alt="{{ $tvshow['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
    </a>
    <div class="mt-2">
        <a href="{{ route('tv.show', $tvshow['id'])}}" class="text-lg mt-2 hover:text-gray-300">{{ $tvshow['name'] }}</a>
        <div class="flex items-center text-gray-400 text-sm mt-1">
            <span>
                <svg class="fill-current text-orange-500 w-4" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                    <polygon style="fill:#EFCE4A;" points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798
                    10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
                </svg>
            </span>
            <span class="ml-1">{{ $tvshow['vote_average'] }}</span>
            <span class="mx-2">|</span>
            <span>{{ $tvshow['first_air_date']  }}</span>
        </div>
        <div class="text-gray-400 text-sm">
           {{ $tvshow['genres'] }}
        </div>
    </div>
</div>
