<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Header;
use App\Models\Skill;
use App\Models\About;
use App\Models\Contact;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::truncate();
        Type::truncate();
        Project::truncate();
        Header::truncate();
        Skill::truncate();
        About::truncate();
        Contact::truncate();
        
        User::factory()->count(4)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Header::factory()->count(5)->create();
        Skill::factory()->count(4)->create();
        About::factory()->count(1)->create();
        Contact::factory()->count(1)->create();
    }
}
