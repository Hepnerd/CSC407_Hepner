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
            'title' => 'Lone Survivor',
            'rating' => '4 out of 5',
            'length' => '121',
            'onDVD' => '1',
            'onBlueRay' => '0'
        ));

    }
}
