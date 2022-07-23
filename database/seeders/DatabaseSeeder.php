<?php

namespace Database\Seeders;

use App\Models\BiblioItem;
use Illuminate\Database\Seeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\BiblioSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

         $this->call([

              UserSeeder::class,
              BiblioItemsSeeder::class,

         ]);
    }
}
