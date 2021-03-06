<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProjectFactory extends Factory
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
            'content' => $this->faker->paragraph,
            'technology' => $this->faker->word,
            'url1' => $this->faker->url,
            'url2' => $this->faker->url,
            'user_id' => User::all()->random(),
            // 'type_id' => Type::all()->random(),
        ];
    }

}
