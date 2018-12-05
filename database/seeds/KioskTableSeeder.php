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

        Kiosk::create(array(
            'location' => 'Sheetz in Beaver Falls',
            'address' => '3611 4th Ave, Beaver Falls, PA 15010'
        ));

        Kiosk::create(array(
            'location' => 'Giant Eagle in Rochester',
            'address' => '111 W Madison St, Rochester, PA 15074'
        ));

        Kiosk::create(array(
            'location' => 'Get Go in Sarver',
            'address' => '710 S Pike Rd, Sarver, PA 16055'
        ));

        Kiosk::create(array(
            'location' => 'Target in Harmarville',
            'address' => '2661 Freeport Rd, Pittsburgh, PA 15238'
        ));

    }
}
