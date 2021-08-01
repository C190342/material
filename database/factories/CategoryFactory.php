<?php

namespace Database\Factories;

use App\Models\Category;
use Faker\Factory as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        /*
        $factory->define(Category::class, function (Faker $faker) {
            return [
                'name'          =>  $faker->name,
                'description'   =>  $faker->realText(100),
                'parent_id'     =>  1,
                'menu'          =>  1,
            ];
        });
        */
        $faker = Faker::create();

        return [
            // Category Model ->> use HasFactory;
            'name'          =>  $faker->name,
            'description'   =>  $faker->realText(150),
            'parent_id'     =>  1,
            'menu'          =>  1,
        ];
    }

}
