<?php

namespace Database\Factories;

use App\Models\Usuario;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuarioFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Usuario::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ciudad_id' => $this->faker->randomDigitNotNull,
        'nombre' => $this->faker->word,
        'apellido' => $this->faker->word,
        'cedula' => $this->faker->word,
        'celular' => $this->faker->word,
        'correo' => $this->faker->word,
        'habeas_data' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
