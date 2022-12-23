<?php

namespace Database\Seeders;

use App\Models\Prestador;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrestadorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prestador::create([
            'name' => 'Rodrigo',
            'active' => true,
        ], [
            'name' => 'Eduardo',
            'active' => true,
        ]);
    }
}
