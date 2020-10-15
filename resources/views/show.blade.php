@extends('layouts.main')

@section('content')
    <div class="movie-info border-b border-blue-800">
        <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
            <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $movie['poster_path'] }}" alt="{{$movie['title']}}" class="w-64 lg:w-96">
            <div class="md:ml-24">
                <h2 class="text-4xl font-semibold">{{$movie['title']}}</h2>
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span>
                        <svg class="fill-current text-orange-500 w-4" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                            viewBox="0 0 53.867 53.867" style="enable-background:new 0 0 53.867 53.867;" xml:space="preserve">
                            <polygon style="fill:#EFCE4A;" points="26.934,1.318 35.256,18.182 53.867,20.887 40.4,34.013 43.579,52.549 26.934,43.798
                            10.288,52.549 13.467,34.013 0,20.887 18.611,18.182 "/>
                        </svg>
                    </span>
                    <span class="ml-1">{{$movie['vote_average'] * 10 . '%'}}</span>
                    <span class="mx-2">|</span>
                    <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y')  }}</span>
                    <span class="mx-2">|</span>
                    <span>
                        @foreach ($movie['genres'] as $genre)
                        {{ $genre['name'] }}@if (!$loop->last),@endif
                        @endforeach
                    </span>
                </div>

                <h3 class="text-2xl font-semibold mt-8">Overview</h3>

                <p class="text-gray-300">
                    {{ $movie['overview'] }}
                </p>

                <div class="mt-12">
                    <h4 class="text-white font-semibold">Featured Crew</h4>
                    <div class="flex mt-4">
                        @foreach ($movie['credits']['crew'] as $crew)
                            @if ($loop->index < 2)
                                <div class="mr-8">
                                    <div>{{$crew['name']}}</div>
                                    <div class="text-sm text-gray-400">{{$crew['job']}}</div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>

                @if (count($movie['videos']['results']) > 0)
                    <div class="mt-12">
                        <a target="_blank" href="https://youtube.com/watch?v={{ $movie['videos']['results'][0]['key'] }}" class="inline-flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                            <svg class="w-6 fill-current" viewBox="0 0 24 24"><path d="M0 0h24v24H0z" fill="none"/><path d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
                            <span class="ml-2">Play Trailer</span>
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </div> <!-- end movie info -->

    <div class="movie-cast border-b border-blue-800">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Cast</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
                @foreach ($movie['credits']['cast'] as $cast)
                    @if ($loop->index < 5)
                        <div class="mt-8">
                            <a href="">
                                <img src="{{ 'https://image.tmdb.org/t/p/w300/' . $cast['profile_path'] }}" alt="{{ $cast['name'] }}" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                            <div class="mt-2">
                                <a href="" class="text-lg mt-2 hover:text-gray-300">{{ $cast['name'] }}</a>
                                <div class="text-gray-400 text-sm">
                                    {{ $cast['character'] }}
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> <!-- end movie cast -->

    <div class="movie-images">
        <div class="container mx-auto px-4 py-16">
            <h2 class="text-4xl font-semibold">Images</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
                @foreach ($movie['images']['backdrops'] as $image)
                    @if ($loop->index < 9)
                        <div class="mt-8">
                            <a href="">
                                <img src="{{ 'https://image.tmdb.org/t/p/w500/' . $image['file_path'] }}" alt="{{ $loop->index }}" class="hover:opacity-75 transition ease-in-out duration-150">
                            </a>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div> <!-- end movie images -->
@endsection
