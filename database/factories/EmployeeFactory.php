<?php

namespace Database\Factories;
use Faker\Factory as Faker;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = Faker::create();
        return [
            'anrede' => $faker->title(),
            'vorname' => $faker->firstName(),
            'nachname' => $faker->lastName(),
            'email' => $faker->email(),
            'telefon' => $faker->phoneNumber(),
            'handy' => $faker->phoneNumber(),
            'firma' => (int) $faker->numberBetween(1,20),
    ];
    }
}
