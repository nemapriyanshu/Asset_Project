<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class firstseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=>'Priyanshu',
            'password'=>Hash::make("12345678"),
            'email'=>'pp@gmail.com',
            'image'=>'priyanshu/'.'p1.jpeg'
        ]);
    }
}
