<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $author_ids = Author::pluck('id');
        return [
            'name' => $this->faker->name,
            'description' => $this->faker->realText(50),
            'price' => $this->faker->numberBetween(5000, 40000),
            'author_id' => $this->faker->randomElement($author_ids->toArray())
        ];
    }
}
