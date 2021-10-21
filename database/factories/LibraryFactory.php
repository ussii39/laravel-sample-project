<?php

namespace Database\Factories;

use App\Models\Library;
use DateTime;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LibraryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Library::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
        'name' => Str::random(10), 'created_at' => new DateTime(),'updated_at' => new DateTime(),
        ];
    }
}
