<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;
use App\Models\User;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'price' => $this->faker->numberBetween(10000, 60000),
            'category_id' => function () {
                return Category::query()->inRandomOrder()->first()->id;
            },
            'created_by' => function () {
                return User::query()->inRandomOrder()->first()->id;
            },
        ];
    }
}
