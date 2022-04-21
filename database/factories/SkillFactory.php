<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
use Illuminate\Support\Str;

class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'title' => $this->faker->sentence,
            // 'percent' => $this->faker->word,
            'icon' => $this->faker->word,
            'user_id' => User::all()->random(),
        ];
    }
}
