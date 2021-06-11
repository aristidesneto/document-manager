<?php

namespace Database\Factories;

use App\Models\Department;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Tenant;
use Illuminate\Support\Str;

class DepartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Department::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->unique()->name();

        return [
            'tenant_id' => Tenant::inRandomOrder()->first()->id,
            'name' => $name,
            'slug' => Str::slug($name),
        ];
    }
}
