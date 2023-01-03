<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number = $this->command->ask('¿Cuántos productos desea crear?', 3);

        Product::factory()->count($number)->create();
    }
}
