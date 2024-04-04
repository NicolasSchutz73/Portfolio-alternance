<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Project::create([
            'title' => 'Projet 1',
            'description' => 'Description du projet 1.',
            'video_url' => '/chemin/vers/image1.jpg',
            'image_url' => '/chemin/vers/image1.jpg',
            'stack' => 'Laravel Tailwind',
            'value' => '99.9%',
            'age' => '12+',
            'link' => 'monlien',
        ]);
    }
}
