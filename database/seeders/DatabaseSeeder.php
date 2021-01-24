<?php

namespace Database\Seeders;

use App\Models\Bookable;
use Database\Factories\BookableFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('bookables')->truncate();

        Bookable::factory(100)->create();
    }
}
