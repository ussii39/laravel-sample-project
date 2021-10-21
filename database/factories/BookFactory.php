<?php

namespace Database\Factories;

use App\Models\Book;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

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
        return [
            'title' => Str::random(10), 'library_id' => 1, 'created_at' => new DateTime(), 'updated_at' => new DateTime(),
        ];
    }
}
