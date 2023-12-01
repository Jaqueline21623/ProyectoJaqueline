<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FormularioPPP>
 */
class FormularioPPPFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     public function definition(): array
     {
         $name=$this->faker->unique()->word(20);
         $number=$this->faker->unique()->numberBetween(900000000,999999999);
         $ruc=$this->faker->unique()->numberBetween(10000000000,99999999999);
         return [
             'razonsocial'=> $name,
         ];
     }

}
