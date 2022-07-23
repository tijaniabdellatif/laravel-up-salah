<?php

namespace Database\Seeders;

use App\Models\BiblioItem;
use Illuminate\Database\Seeder;

class BiblioItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BiblioItem::factory(30)->create()->count();
    }
}
