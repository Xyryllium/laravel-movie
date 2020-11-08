# Movie App using Laravel and TMDb API

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. See deployment for notes on how to deploy the project on a live system.

### Prerequisites

What things you need to install the software and how to install them

<p> First, download the Laravel installer using Composer:<p>
    <code>composer global require laravel/installer</code>

### Installing

A step by step series of examples that tell you how to get a development env running

1. Clone the repo and `cd` into it
1. `composer install`
1. Rename or copy `.env.example` file to `.env`
1. `php artisan key:generate`
1. Set your database credentials in your `.env` file
1. Set your TMDB credentials in your `.env` file. Specifically `TMDB_API_KEY` and `TMDB_BASE_URL`
1. `npm install`
1. `npm run dev`
1. `php artisan serve` or use Laravel Valet or Laravel Homestead
1. Visit `localhost:8000` in your browser


## Built With

* [Laravel](https://laravel.com/docs/8.x) - The web framework used
* <img src"https://www.markusantonwolf.com/media/pages/blog/tailwind-css/265298487-1596675041/tailwind-css-logo.svg" height="80" width="80"> (https://tailwindcss.com/) - A utility-first CSS framework
* [Composer](https://getcomposer.org/) - Dependency Manager
* [NPM](https://www.npmjs.com/) - Package Manager


## Authors

* **Xyryl Aranza** - *Initial work* - [Xyryllium](https://github.com/Xyryllium)

See also the list of [contributors](https://github.com/Xyryllium/laravel-chat/contributors) who participated in this project.
