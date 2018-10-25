<?php

use Illuminate\Database\Seeder;
use App\Kiosk;

class KioskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kiosks')->delete();

        Kiosk::create(array(
            'location' => 'Walmart in Chippewa',
            'address' => '100 Chippewa Town Center, Beaver Falls, PA 15010'
        ));
    }
}
