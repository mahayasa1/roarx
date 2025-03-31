<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Car>
 */
class CarFactory extends Factory
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
                'Toyota', 'Honda', 'Ford', 'BMW', 'Mercedes', 'Audi', 
                'Tesla', 'Chevrolet', 'Nissan', 'Hyundai', 'Kia', 'Mazda'
            ]),
            'color' => $this->faker->safeColorName,
            'price' => $this->faker->numberBetween(10000000, 100000000   ),
        ];
    }

    private function storeLocalImage(): string
    {
        $sourcePath = 'asset/img/car.png'; // Path yang benar

        // Jika gambar tidak ditemukan, gunakan default
        return $sourcePath;
    }
}
