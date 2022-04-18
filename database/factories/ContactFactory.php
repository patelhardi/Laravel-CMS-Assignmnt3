<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'email' => $this->faker->safeEmail(),
            'phone' => $this->faker->numerify('###-###-####'),
            'message' => $this->faker->paragraph,
            'url' => $this->faker->url,
            'user_id' => User::all()->random(),
        ];
    }
}
