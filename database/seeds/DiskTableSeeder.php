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
            'movie_ID' => '70',
            'type' => 'DVD',
            'kiosk_ID' => '26',
        ));
        Disk::create(array(
            'movie_ID' => '70',
            'type' => 'DVD',
            'kiosk_ID' => '27',
        ));

        Disk::create(array(
            'movie_ID' => '72',
            'type' => 'DVD',
            'kiosk_ID' => '28',
        ));

        Disk::create(array(
            'movie_ID' => '73',
            'type' => 'DVD',
            'kiosk_ID' => '29',
        ));

        Disk::create(array(
            'movie_ID' => '74',
            'type' => 'DVD',
            'kiosk_ID' => '30',
        ));
        Disk::create(array(
            'movie_ID' => '74',
            'type' => 'DVD',
            'kiosk_ID' => '27',
        ));

        Disk::create(array(
            'movie_ID' => '76',
            'type' => 'DVD',
            'kiosk_ID' => '26',
        ));
        Disk::create(array(
            'movie_ID' => '76',
            'type' => 'BlueRay',
            'kiosk_ID' => '29',
        ));

        Disk::create(array(
            'movie_ID' => '77',
            'type' => 'DVD',
            'kiosk_ID' => '30',
        ));
        Disk::create(array(
            'movie_ID' => '77',
            'type' => 'BlueRay',
            'kiosk_ID' => '28',
        ));

        Disk::create(array(
            'movie_ID' => '78',
            'type' => 'DVD',
            'kiosk_ID' => '26',
        ));
        Disk::create(array(
            'movie_ID' => '78',
            'type' => 'BlueRay',
            'kiosk_ID' => '27',
        ));

        Disk::create(array(
            'movie_ID' => '79',
            'type' => 'DVD',
            'kiosk_ID' => '26',
        ));
        Disk::create(array(
            'movie_ID' => '79',
            'type' => 'DVD',
            'kiosk_ID' => '27',
        ));
        Disk::create(array(
            'movie_ID' => '79',
            'type' => 'BlueRay',
            'kiosk_ID' => '26',
        ));
        Disk::create(array(
            'movie_ID' => '79',
            'type' => 'BlueRay',
            'kiosk_ID' => '29',
        ));
        Disk::create(array(
            'movie_ID' => '79',
            'type' => 'BlueRay',
            'kiosk_ID' => '30',
        ));

        Disk::create(array(
            'movie_ID' => '80',
            'type' => 'BlueRay',
            'kiosk_ID' => '28',
        ));

        Disk::create(array(
            'movie_ID' => '81',
            'type' => 'DVD',
            'kiosk_ID' => '26',
        ));
    }
}
