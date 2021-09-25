<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition(): array
    {
        $users_id = User::query()->pluck('id');
        return [
            'user_id' => $this->faker->randomElement($users_id),
            'uuid' => $this->faker->uuid(),
            'title' => $this->faker->jobTitle(),
            'description' => $this->faker->paragraph(),
            'image' => 'https://picsum.photos/id/' . $this->faker->numberBetween(1, 300) . '/400'
        ];
    }
}
