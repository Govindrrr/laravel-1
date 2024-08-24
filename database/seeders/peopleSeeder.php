<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\people;

class peopleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        people::create([
            'name'=>'govind roka',
            'email'=>'govein2@gmail.com',
              'age'=>'21',
             'city'=>'dang',
            'phone'=>'9823432432'
        ]);
    }
}
