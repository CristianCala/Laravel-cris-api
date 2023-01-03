<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $number = $this->command->ask('¿Cuántos usuarios desea crear?', 3);

        User::factory()->count($number)->create();
    }
}
