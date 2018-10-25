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
            'rating' => '4 out of 5',
            'length' => '121',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/avatar.jpg',
        ));

        Movie::create(array(
            'title' => 'Great Gatsby',
            'rating' => '4.5 out of 5',
            'length' => '123',
            'onDVD' => '1',
            'onBlueRay' => '0',
            'coverPhoto' => '/images/gatsby.jpg',
        ));

    }
}
