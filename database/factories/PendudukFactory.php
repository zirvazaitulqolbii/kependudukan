<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\penduduk>
 */
class PendudukFactory extends Factory
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
            'jenis_kelamin' => $this->faker->randomElement(['L','P']),
            'tanggal_lahir' => $this->faker->date($format = 'Y-m-d', $max = 'now'),
            'agama_id' => mt_rand(1,2),
            'status_kawin_id' => mt_rand(1,2),
            'alamat' => $this->faker->address(),
            'telp' => $this->faker->phoneNumber(),
            'kelurahan_id' => mt_rand(1,2)
        ];
    }
}
