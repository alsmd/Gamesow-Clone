<?php

namespace Database\Factories;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoriaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Categoria::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'nome' => $this->faker->title,
            'slug' => $this->faker->slug,
            'foto'=>'http://bbs.gamesow.com/attachments/month_1803/18030519031e16769914a66ea0.png'

        ];
    }
}
