<?php

namespace Database\Factories;

use App\Models\Apply;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Apply>
 */
class ApplyFactory extends Factory
{
    protected $model = Apply::class;

    public function definition(): array
    {
        return [
            'user_id' => null,
            'ads_id' => null,
            'message' => $this->faker->paragraph(),
            'status' => 'pending',
        ];
    }
}
