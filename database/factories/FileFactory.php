<?php

namespace Database\Factories;

use App\Models\Department;
use App\Models\File;
use App\Models\Tenant;
use Illuminate\Database\Eloquent\Factories\Factory;

class FileFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = File::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        Tenant::find(1)->makeCurrent();

        $department = Department::inRandomOrder()->toSql();

        dd($department);

        dd(Tenant::first()->id);

        return [
            'tenant_id' => Tenant::first()->id,
            'department_id' => $department->id,
            'category_id' => $department->categories->map->id->random(),
            'name' => $this->faker->unique()->name(),
            'description' => $this->faker->sentence(15),
            'url' => $this->faker->url(),
        ];
    }
}
