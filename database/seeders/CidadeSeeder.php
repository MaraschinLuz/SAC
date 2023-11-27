<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Cidade;
use Illuminate\Support\Str;

class CidadeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cidade::create([
            'nomeCidade' => Str::random(10),
            'UF' => Str::random(2),
        ]);
    }
}
