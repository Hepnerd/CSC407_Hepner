<?php

use Illuminate\Database\Seeder;
use App\Disk;

class DiskTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('disks')->delete();

        Disk::create(array(
            'movie_ID' => '1',
            'type' => 'BlueRay',
            'kiosk_ID' => '1',
        ));
    }
}
