<?php

namespace Database\Factories;

use App\Models\bill;
use Illuminate\Database\Eloquent\Factories\Factory;

class BillFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = bill::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            
            'code_fact'=>$this->faker->word,
            'date_fact'=>$this->faker->date('Y-m-d'),
            'totalht_fact'=>$this->faker->numerify('######'),
            'totaltva_fact'=>$this->faker->numerify('######'),
            'totalttc_fact'=>$this->faker->numerify('######'),
            'totremise_fact'=>$this->faker->numerify('######'),
            'solde_fact'=>$this->faker->numerify('######'),
            'IDCLT'=>$this->faker->numerify('#'),
            'IDREG'=>$this->faker->numerify('#')
        ];
    }
}
