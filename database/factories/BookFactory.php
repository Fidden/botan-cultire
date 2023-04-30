<?php

namespace Database\Factories;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    protected $model = Book::class;

    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'preview' => $this->faker->imageUrl,
            'poster' => $this->faker->imageUrl,
            'description' => $this->faker->text,
            'url' => $this->faker->url
        ];
    }
}
