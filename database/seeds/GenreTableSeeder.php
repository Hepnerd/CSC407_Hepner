<?php

use Illuminate\Database\Seeder;
use App\Genre;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('genres')->delete();

        Genre::create(array(
            'name' => 'Action',
        ));

        Genre::create(array(
            'name' => 'Comedy',
        ));

        Genre::create(array(
            'name' => 'Horror',
        ));

        Genre::create(array(
            'name' => 'Drama',
        ));

        Genre::create(array(
            'name' => 'Romantic',
        ));

        Genre::create(array(
            'name' => 'Documentary',
        ));

        Genre::create(array(
            'name' => 'Western',
        ));

        Genre::create(array(
            'name' => 'Fiction',
        ));

        Genre::create(array(
            'name' => 'Animation',
        ));
    }
}
