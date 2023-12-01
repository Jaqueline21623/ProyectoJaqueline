<?php

namespace Database\Seeders;

use App\Models\FormularioPPP;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormularioPPPSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        FormularioPPP::factory(10)->create();
    }
}
