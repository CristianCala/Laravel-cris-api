<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number = $this->command->ask('¿Cuántas categorías desea crear?', 3);

        Category::factory()->count($number)->create();
    }
}
