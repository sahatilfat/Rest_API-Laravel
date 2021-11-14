<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama' => $this->faker->name(),
            'jabatan' => $this->faker->jobTitle(),
            'deskripsi' => $this->faker->paragraph(mt_rand(5, 10)),
        ];
    }
}
