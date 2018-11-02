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

    }
}
