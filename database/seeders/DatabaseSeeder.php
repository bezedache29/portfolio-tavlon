<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Project;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();

        User::factory()->create([
            'name' => 'Sébastien Joublot',
            'email' => 'exodeeffects@gmail.com',
        ]);

        $c1 = Category::create([
            'name' => 'Catégorie 1'
        ]);
        $c2 = Category::create([
            'name' => 'Catégorie 2'
        ]);
        $c3 = Category::create([
            'name' => 'Catégorie 3'
        ]);

        $p1 = Project::factory()->create([
            'name' => 'Projet 1',
            'url' => 'https://www.youtube.com/embed/CyDuqsZyGPg',
        ]);

        $p2 = Project::factory()->create([
            'name' => 'Projet 2',
            'url' => 'https://www.youtube.com/embed/ORmfCFiw6yY',
        ]);

        $p3 = Project::factory()->create([
            'name' => 'Projet 3',
            'url' => 'https://www.youtube.com/embed/_ldF4VlyN0o',
        ]);

        $p4 = Project::factory()->create([
            'name' => 'Projet 4',
            'url' => 'https://www.youtube.com/embed/1houOeXgIyk',
        ]);

        $p5 = Project::factory()->create([
            'name' => 'Projet 5',
            'url' => 'https://www.youtube.com/embed/WQK5TnNVXaw',
        ]);
    }
}
