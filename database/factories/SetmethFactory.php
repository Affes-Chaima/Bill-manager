<?php

namespace Database\Factories;

use App\Models\Setmeth;
use Illuminate\Database\Eloquent\Factories\Factory;

class SetmethFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Setmeth::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
             'code_mod'=>$this->faker->numerify('###'),
             'lib_mod'=>$this->faker->word
        ];
    }
}
