<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\QueryException;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

Public function run()
{
    \App\Models\Service::factory(20)->create();
}
}
