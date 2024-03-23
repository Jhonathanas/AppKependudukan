<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
class Penduduk extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 15; $i++) {
            DB::table('penduduks')->insert([
                'nama' => $faker->name,
                'NIK' => $faker->nik,
                'tanggal_lahir' => $faker->date,
                'alamat' => $faker->address,
                'jenis_kelamin' => $faker->randomElement(['L', 'P']),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
