<?php

namespace Database\Factories;

use App\Models\article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
            'code_art'=>$this->faker->word,
            'lib_art'=>$this->faker->word,
            'puht_art'=>$this->faker->numerify('#####'),
            'puttc_art'=>$this->faker->numerify('#####'),
            'maxremise_art'=>$this->faker->numerify('#####'),
            'stockable_art'=>$this->faker->boolean,
            'actif_art'=>$this->faker->boolean,
            'depstsk_art'=>$this->faker->numerify('####'),
            'codebarre_art'=>$this->faker->numerify('619######'),
            'prixcash_art'=>$this->faker->numerify('######'),
            'IDTVA'=>$this->faker->numerify('#')
        ];
    }
}
