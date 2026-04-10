<?php

namespace Database\Factories;

use App\Models\Artist;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Artist>
 */
class ArtistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->unique()->randomElement([
                'Daniel Thomas',
                'Laura Garcia',
                'James Miller',
                'Sophia Rodriguez',
                'Robert Moore',
                'Emily Kim',
                'Samora Lee',
                'Amir Ahmad',
                'Lee Chen',
                'Kimmy Nguyen',
                'Carlos Martinez',
                'Amani Hassan',
                'David Wilson',
                'Maria Lopez',
                'Kadir Yilmaz',
                'Maria Bambina',
            ]),
            'tattoo_style' => fake()->unique()->randomElement([
                'Traditional',
                'Realism',
                'Watercolor',
                'Tribal',
                'Neo-Traditional',
                'Japanese',
                'Blackwork',
                'Dotwork',
                'Geometric',
                'Minimalist',
                'Surrealism',
                'Biomechanical',
                'Lettering',
                'New School',
                'Old School', 
                'Fine Line',
                'Abstract',
                'Trash Polka',
            ]),
            'experience_years' => fake()->numberBetween(3, 20),
            'bio' => fake()->unique()->paragraph(),
            'portfolio_url' => fake()->unique()->url(),
            'fun_fact' => fake()->unique()->sentence(),
            'profile_img_url' => fake()->unique()->randomElement([
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_1.jpg',
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_2.jpg',
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_3.jpg',
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_4.jpg',
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_5.jpg',
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_6.jpg',
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_7.jpg',
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_8.jpg',
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_9.jpg',
                '/seif_laila_fip_inkinc/frontend/imgs/faces/face_10.jpg',
            ]),
        ];
    } 
}
