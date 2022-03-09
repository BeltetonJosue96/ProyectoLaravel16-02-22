<?php

namespace Database\Factories;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Student::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'Nombres'=>$this->faker->firstName(),
            'PrimerApellido'=>$this->faker->lastName(),
            'SegundoApellido'=>$this->faker->lastName(),
            'CorreoElectronico'=>$this->faker->freeEmail(),
            'Celular'=>$this->faker->phoneNumber,
            'Direccion'=>$this->faker->address(),
            'Roles'=>$this->faker->randomElement(['Nuevo', 'Repitente']),
            'Curso'=>$this->faker->randomElement(['Mates1', 'Progra3'])
        ];
    }
}
