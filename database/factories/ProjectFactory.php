<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'image_url' => $this->faker->imageUrl(640, 480, 'projects', true),
            'video_url' => 'https://www.example.com/video.mp4', // Exemple statique
            'stack' => 'Laravel, Vue.js, Tailwind CSS',
            'value' => $this->faker->randomElement(['99%', '100%', '70%']),
            'age' => $this->faker->numberBetween(1, 12) . '+',
            'link' => $this->faker->url,
            'type' => $this->faker->randomElement(['Projet web', 'Projet mobile', 'Projet logiciel', 'Hobbies']),
        ];
    }
}
