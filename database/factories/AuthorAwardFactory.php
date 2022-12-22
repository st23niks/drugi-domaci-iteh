<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AuthorAward>
 */
class AuthorAwardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'award_name' => $this->faker->company(),
            'year' => $this->faker->year(),
        ];
    }

    public function setAuthor(Author $author)
    {
        return $this->state(fn(array $attributes) => [
            'author_id' => $author->id,
        ]);
    }
}
