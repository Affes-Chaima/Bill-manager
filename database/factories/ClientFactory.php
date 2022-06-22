<?php

namespace Database\Factories;

use App\Models\client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'code_clt'=>$this->faker->word,
            'nom_clt'=>$this->faker->word,
            'prenom_clt'=>$this->faker->word,
            'rais_soc_clt'=>$this->faker->word,
            'numtel1_clt'=>$this->faker->numerify('########'),
            'numtel2_clt'=>$this->faker->numerify('########'),
            'email_clt'=>$this->faker->email(),
            'adr_clt'=>$this->faker->word,
            'mf_clt'=>$this->faker->word,
            'rc_clt'=>$this->faker->word
        ];
    }
}
