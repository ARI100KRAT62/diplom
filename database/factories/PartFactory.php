<?php

namespace Database\Factories;

use App\Models\Part;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartFactory extends Factory
{
    protected $model = Part::class;

    public function definition(): array
    {
        return [
            'name'           => $this->faker->title(),
            'type_id'        => $this->faker->numberBetween(1),
            'description'    => $this->faker->text(),
            'country_id'     => $this->faker->numberBetween(1),
            'price'          => $this->faker->randomFloat(),
            'sku'            => $this->faker->numberBetween(1),
            'specifications' => [
                'lens_size'     => [3],
                'plinth'        => ['H4'],
                'mounting_type' => ['Koito Q5'],
            ],
        ];
    }
}
