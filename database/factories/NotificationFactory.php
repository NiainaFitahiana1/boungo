<?php

namespace Database\Factories;

use App\Models\Notification;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Notification>
 */
class NotificationFactory extends Factory
{
    protected $model = Notification::class;

    public function definition(): array
    {
        return [
            'user_id' => null,
            'type' => $this->faker->randomElement(['apply','system','message']),
            'content' => $this->faker->sentence(),
            'read_at' => null,
        ];
    }
}
