<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use DateTime as GlobalDateTime;

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
        return [
            'first_name' => Str::random(10), 'last_name' =>  Str::random(10), 'company_id' => 1, 'created_at' => new GlobalDateTime(),'updated_at' => new GlobalDateTime(),
        ];
    }
}
