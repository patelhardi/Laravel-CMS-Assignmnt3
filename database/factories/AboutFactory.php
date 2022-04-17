<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence,
            'content1' => $this->faker->paragraph,
            'content2' => $this->faker->paragraph,
            'url' => $this->faker->url,
            'user_id' => User::all()->random(),
        ];
    }
}
