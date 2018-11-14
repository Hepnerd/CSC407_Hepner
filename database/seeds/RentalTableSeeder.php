<?php

use Illuminate\Database\Seeder;
use App\Rental;
class RentalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('rentals')->delete();

        Rental::create(array(
            'Movie_ID' => '76',
            'Disk_ID' => '8',
            'Customer_ID' => '9',
            'Rent_Date' => '11-13-2018',
        ));
    }
}
