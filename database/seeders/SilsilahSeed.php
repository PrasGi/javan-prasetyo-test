<?php

namespace Database\Seeders;

use App\Models\Silsilah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SilsilahSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Silsilah::create([
            'nama' => 'Budi',
            'jenis_kelamin' => 'Laki-laki',
        ]);

        Silsilah::create([
            'nama' => 'Dedi',
            'jenis_kelamin' => 'laki-laki',
            'ayah_id' => 1,
        ]);

        Silsilah::create([
            'nama' => 'Dodi',
            'jenis_kelamin' => 'laki-laki',
            'ayah_id' => 1,
        ]);

        Silsilah::create([
            'nama' => 'Dede',
            'jenis_kelamin' => 'laki-laki',
            'ayah_id' => 1,
        ]);

        Silsilah::create([
            'nama' => 'Dewi',
            'jenis_kelamin' => 'perempuan',
            'ayah_id' => 1,
        ]);

        Silsilah::create([
            'nama' => 'Feri',
            'jenis_kelamin' => 'laki-laki',
            'ayah_id' => 2,
        ]);

        Silsilah::create([
            'nama' => 'Farah',
            'jenis_kelamin' => 'perempuan',
            'ayah_id' => 2,
        ]);

        Silsilah::create([
            'nama' => 'Gugus',
            'jenis_kelamin' => 'laki-laki',
            'ayah_id' => 3,
        ]);

        Silsilah::create([
            'nama' => 'Gandi',
            'jenis_kelamin' => 'laki-laki',
            'ayah_id' => 3,
        ]);

        Silsilah::create([
            'nama' => 'Hani',
            'jenis_kelamin' => 'perempuan',
            'ayah_id' => 4,
        ]);

        Silsilah::create([
            'nama' => 'Hana',
            'jenis_kelamin' => 'perempuan',
            'ayah_id' => 4,
        ]);
    }
}
