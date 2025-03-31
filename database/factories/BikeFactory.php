<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bike>
 */
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // dd($this->storeLocalImage());
        return [
            'image' => $this->storeLocalImage(),
            'brand' => fake()->randomElement([
                'Yamaha', 'Honda', 'Kawasaki', 'Suzuki', 
                'Ducati', 'Harley-Davidson'
            ]),
            'color' => $this->faker->safeColorName,
            'price' => $this->faker->numberBetween(10000000, 100000000   ),
        ];
    }

    private function storeLocalImage(): string
    {
        $sourcePath = 'asset/img/sportbike.png'; // Path yang benar

        // Jika gambar tidak ditemukan, gunakan default
        return $sourcePath;
    }
}
