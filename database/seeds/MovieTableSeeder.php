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
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/avatar.jpg',
        ));

        Movie::create(array(
            'title' => 'Great Gatsby',
            'length' => '123',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/gatsby.jpg',
        ));

        Movie::create(array(
            'title' => 'Fellowship of the Ring',
            'rating' => '4.5 out of 5',
            'length' => '123',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/Fellowship-of-the-Ring.jpg',
        ));

        Movie::create(array(
            'title' => 'Hunger Games',
            'rating' => '4.5 out of 5',
            'length' => '123',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/hunger-games.jpg',
        ));

        Movie::create(array(
            'title' => 'The Hobbit',
            'rating' => '4.5 out of 5',
            'length' => '123',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/The-hobbit.jpg',
        ));

    }
}
