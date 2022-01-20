<?php

namespace Database\Seeders;

use app\Models\cats_trying_api;
use Illuminate\Database\Seeder;

class CatsTryingApiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        cats_trying_api::factory()
            ->count(5)
            ->create();
        
    }
}
