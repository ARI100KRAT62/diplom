<?php

namespace Database\Factories;

use App\Models\CorpInfo;
use Illuminate\Database\Eloquent\Factories\Factory;

class CorpInfoFactory extends Factory
{
    protected $model = CorpInfo::class;

    public function definition(): array
    {
        return [
            'phone'   => $this->faker->phoneNumber(),
            'address' => $this->faker->address(),
            'email'   => $this->faker->email(),
            'name'    => $this->faker->title(),
        ];
    }
}
