<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Type;
use App\Models\Project;
use App\Models\Header;
<<<<<<< HEAD
use App\Models\Skill;
=======
use App\Models\About;
use App\Models\Contact;
>>>>>>> 87edd974a752941c6b4021e76187dc6c91e06a69
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
<<<<<<< HEAD
        Skill::truncate();
=======
        About::truncate();
        Contact::truncate();
>>>>>>> 87edd974a752941c6b4021e76187dc6c91e06a69
        
        User::factory()->count(4)->create();
        Type::factory()->count(3)->create();
        Project::factory()->count(4)->create();
        Header::factory()->count(5)->create();
<<<<<<< HEAD
        Skill::factory()->count(4)->create();
=======
        About::factory()->count(1)->create();
        Contact::factory()->count(1)->create();
>>>>>>> 87edd974a752941c6b4021e76187dc6c91e06a69
    }
}
