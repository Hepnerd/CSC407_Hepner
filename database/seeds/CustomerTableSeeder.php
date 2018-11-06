<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('customers')->delete();

        Customer::create(array(
            'name' => 'Jack',
            'email' => 'mynamesjack@gmail.com',
            'password' => '123123',

        ));

    }
}
