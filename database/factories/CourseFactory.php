<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;

class CourseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Course::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'image' => $this->faker->imageUrl(1280, 720), //Medida de la imagen puede incluirse
            'description' => $this->faker->text(800), //800 caracteres
            'user_id' => rand(1,5), //metodo de php para generar numero aleatorio de hasta 5 digitos
            'category_id' => rand(1,3)
        ];
    }
}
