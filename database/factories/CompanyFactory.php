<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Company::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            'name' => $this->faker->company,
            'unterzeile' => $this->faker->company,
            'strasse' => $this->faker->streetName,
            'hausnummer' => $this->faker->randomDigit,
            'plz' => $this->faker->postcode,
            'ort' => $this->faker->city,
            'telefon' => $this->faker->phoneNumber,
            'fax' => $this->faker->phoneNumber,
            'web' => $this->faker->email,
        ];
    }
}
