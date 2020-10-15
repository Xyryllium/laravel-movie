<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ViewMoviesTest extends TestCase
{
    /** @test */
    public function the_main_page_shows_correct_info()
    {
        Http::fake([
            'https://api.themoviedb.org/3/movie/popular' => $this->fakePopularMovies(),
            'https://api.themoviedb.org/3/movie/now_playing' => $this->fakeNowPlayingMovies(),
        ]);
        $response = $this->get(route('movies.index'));

        $response->assertStatus(200);
        $response->assertSee('Popular Movies');
        $response->assertSee('Fake Movie');

        $response->assertSee('Now Playing');
        $response->assertSee('Now Playing Fake Movie');
    }

    private function fakePopularMovies()
    {
        return  Http::response([
            'results' => [
                [
                    "popularity" => 444.534,
                    "vote_count" => 49,
                    "video" => false,
                    "poster_path" => "/hIkKM1nlzk8DThFT4vxgW1KoofL.jpg",
                    "id" => 715658,
                    "adult" => false,
                    "backdrop_path" => "/ovwN1JDPvllWZaH3xtKp7txRWDj.jpg",
                    "original_language" => "en",
                    "original_title" => "Fake Movie",
                    "genre_ids" =>[
                      27
                    ],
                    "title" => "Fake Movie",
                    "vote_average" => 6.5,
                    "overview" => "Fake movie description. An unconventional scientist, struggling to care for his terminally-ill wife, embarks
                on a journey to develop a cure for her. However, his methods of treatment and tampering with human DNA,
                could lead to the extinction of humanity.",
                    "release_date" => "2020-09-21",
                  ]
            ]
        ], 200);
    }

    private function fakeNowPlayingMovies()
    {
        return  Http::response([
            'results' => [
                [
                    "popularity" => 444.534,
                    "vote_count" => 49,
                    "video" => false,
                    "poster_path" => "/hIkKM1nlzk8DThFT4vxgW1KoofL.jpg",
                    "id" => 715658,
                    "adult" => false,
                    "backdrop_path" => "/ovwN1JDPvllWZaH3xtKp7txRWDj.jpg",
                    "original_language" => "en",
                    "original_title" => "Now Playing Fake Movie",
                    "genre_ids" =>[
                      27
                    ],
                    "title" => "Now Playing Fake Movie",
                    "vote_average" => 6.5,
                    "overview" => "Fake movie description. An unconventional scientist, struggling to care for his terminally-ill wife, embarks
                on a journey to develop a cure for her. However, his methods of treatment and tampering with human DNA,
                could lead to the extinction of humanity.",
                    "release_date" => "2020-09-21",
                  ]
            ]
        ], 200);
    }
}
