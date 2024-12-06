<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
Use faker\Factory as Faker;
class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Siswa::create([
                'nis' => $faker->unique()->numberBetween(100000, 999999), // Generate a unique NIS number
                'nama' => $faker->name,
                'alamat' => $faker->address,
                'no_hp' => $faker->phoneNumber,
                'jenis_kelamin' => $faker->randomElement(['L', 'P']), // Randomly choose 'L' for male or 'P' for female
                'hobi' => $faker->randomElement(['Berenang', 'Membaca', 'Bermain Musik', 'Olahraga', 'Menggambar']), // Randomly choose a hobby
            ]);
        }
    }
}
