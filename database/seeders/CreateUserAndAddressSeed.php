<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class CreateUserAndAddressSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users')->insert([
            "name" => "teste da silva",
	        "email" => "teste@teste.com",
	        "password" => Hash::make("senhaforte123")
            ]);
        DB::table('addresses')->insert([
            "address" => "Rua dos testes, nº0"
        ]);

    }
}
