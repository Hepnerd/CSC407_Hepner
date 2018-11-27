<?php

use Illuminate\Database\Seeder;
use App\Review;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      //
      DB::table('reviews')->delete();

      Review::create(array(
          'customer_id' => '76',
          'movie_id' => '8',
          'review' => '9',
          'rating' => '11',
      ));
    }
}
