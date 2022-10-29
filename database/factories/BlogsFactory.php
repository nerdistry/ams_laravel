<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blogs_Entries; // You have to import the model.

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BlogsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = Blogs_Entries::class; // Hooks up your factory to the appropriate model class (Blog_Entries class).
    public function definition()
    {
        return [
            // Where we define the fake data we are going to add in our database.

            // Utilizing the fakers class.

            "Article_Title" =>$this->faker->word(),
            "Article_Content" =>$this->faker->sentence(7),
        ];
    }
}
