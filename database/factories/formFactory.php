<?php

namespace Database\Factories;

use App\Models\form;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class formFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = form::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $varNames = array('option1','option2');
        $var = array_rand($varNames);

        return [
            'question' => $this->faker->sentence() ,
            'answer' => $varNames[$var],
            'option1' => $this->faker->word(2),
            'option2' => $this->faker->word(4),
        ];
    }
}
