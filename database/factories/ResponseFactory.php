<?php

namespace Database\Factories;

use App\Response;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Faker\Generator as Faker;


class ResponseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Response::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'email' => $this->faker->email,
            'age'=> $this->faker->numberBetween(0,99),
            'genre' => $this->faker->randomElement(['MA', 'FE', 'NG']),
        ];
    }
}
