<?php

namespace Database\Factories;

use App\Models\settlement;
use Illuminate\Database\Eloquent\Factories\Factory;

class SettlementFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Settlement::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code_reg'=>$this->faker->numerify('########'),
            'date_reg'=>$this->faker->date('Y-m-d'),
            'comment_reg'=>$this->faker->word,
            'montant_reg'=>$this->faker->numerify('########'),
            'IDMODREG'=>$this->faker->numerify('#')
        ];
    }
}
