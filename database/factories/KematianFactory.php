<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\kematian>
 */
class KematianFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nik' => $this->faker->bothify('################'),
            'nama' => $this->faker->name(),
            'umur' => $this->faker->randomDigit(),
            'jenis_kelamin' => $this->faker->randomElement(['L','P']),
            'tanggal_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'tanggal_meninggal' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'jam' => $this->faker->time('H:i:s'),
            'keterangan' => $this->faker->text()
        ];
    }
}
