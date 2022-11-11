<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Suport\Facades\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        User::create([
        	"first_name" => 'Jovanka',
        	"last_name" => 'alexandro',
        	"username" => 'jovan',
        	"password" => bcrypt('123'),
        ]);
    }
}
