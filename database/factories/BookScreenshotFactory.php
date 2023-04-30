<?php

namespace Database\Factories;

use App\Models\BookScreenshot;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookScreenshotFactory extends Factory
{
    protected $model = BookScreenshot::class;

    public function definition()
    {
        return [
            'src' => $this->faker->imageUrl
        ];
    }
}
