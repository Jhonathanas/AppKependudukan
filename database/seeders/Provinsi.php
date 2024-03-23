<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Provinsi extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $provinsis = [
            ['provinsi' => 'Aceh'],
            ['provinsi' => 'Sumatera Utara'],
            ['provinsi' => 'Sumatera Barat'],
            ['provinsi' => 'Riau'],
            ['provinsi' => 'Jambi'],
            ['provinsi' => 'Sumatera Selatan'],
            ['provinsi' => 'Bengkulu'],
            ['provinsi' => 'Lampung'],
            ['provinsi' => 'Bangka Belitung'],
            ['provinsi' => 'Kepulauan Riau']
            // Menambahkan data provinsi lainnya sesuai kebutuhan
        ];

        DB::table('provinsis')->insert($provinsis);
    }
}
