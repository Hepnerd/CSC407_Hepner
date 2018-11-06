<?php

use Illuminate\Database\Seeder;
use App\Movie;
class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->delete();

        Movie::create(array(
            'title' => 'Avatar',
            'length' => '121',
            'genreID' => '8',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/avatar.jpg',
        ));

        Movie::create(array(
            'title' => 'Great Gatsby',
            'length' => '123',
            'genreID' => '1',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/gatsby.jpg',
        ));

        Movie::create(array(
            'title' => 'Fellowship of the Ring',
            'length' => '123',
            'genreID' => '8',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/Fellowship-of-the-Ring.jpg',
        ));

        Movie::create(array(
            'title' => 'Hunger Games',
            'length' => '123',
            'genreID' => '1',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/hunger-games.jpg',
        ));

        Movie::create(array(
            'title' => 'The Hobbit',
            'length' => '123',
            'genreID' => '8',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/The-hobbit.jpg',
        ));

    }
}
