<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\client;
use App\Models\bill;
use App\Models\tva;
use App\Models\article;
use App\Models\company;
use App\Models\setmeth;
use App\Models\settlement;
use App\Models\bline;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // tva::factory(10)->create();
         //client::factory(10)->create();

        // setmeth::factory(10)->create();
        // settlement::factory(10)->create();
        // article::factory(10)->create();
         bill::factory(10)->create();
    }
}
