<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kelahiran>
 */
class KelahiranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'jenis_kelamin' => $this->faker->randomElement(['L','P']),
            'tanggal' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tempat' => $this->faker->city,
            'nama_ayah' => $this->faker->name(),
            'nama_ibu' => $this->faker->name(),
            'alamat' => $this->faker->address()
        ];
    }
}
