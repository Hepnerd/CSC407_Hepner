<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UsersTableSeeder::class);
        //$this->call(MovieTableSeeder::class);
       // $this->call(KioskTableSeeder::class);
        //$this->call(GenreTableSeeder::class);
        //$this->call(CustomerTableSeeder::class);
        //$this->call(DiskTableSeeder::class);
        $this->call(RentalTableSeeder::class);
    }
}
