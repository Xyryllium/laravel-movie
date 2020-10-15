<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Movie App</title>

    <link rel="stylesheet" href="/css/main.css">
    @livewireStyles
</head>
<body class="font-sans bg-blue-900 text-white">
    <nav class="border-b border-blue-800">
        <div class="container mx-auto flex flex-col md:flex-row items-center justify-between px-4 py-6">
            <ul class="flex flex-col md:flex-row items-center">
                <li>
                    <a href="{{ route('movies.index') }}">Logo</a>
                </li>
                <li class="md:ml-16 mt-3 md:mt-0">
                    <a href="{{ route('movies.index') }}" class="hover:text-gray-300">Movies</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">TV Shows</a>
                </li>
                <li class="md:ml-6 mt-3 md:mt-0">
                    <a href="" class="hover:text-gray-300">Actors</a>
                </li>
            </ul>
            <ul>
               <div class="flex flex-col md:flex-row items-center">
                    <livewire:search-dropdown />
                    <div class="md:ml-4 mt-3 md:mt-0">
                        <a href="">
                            <img src="https://picsum.photos/200" alt="avatar" class="rounded-full w-8 h-8">
                        </a>
                    </div>
                </div>
            </ul>
        </div>
    </nav>
    @yield('content')
    @livewireScripts
</body>
</html>
