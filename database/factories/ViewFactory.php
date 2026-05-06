<?php

namespace Database\Factories;

use App\Models\View;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<View>
 */
class ViewFactory extends Factory
{
    protected $model = View::class;

    public function definition(): array
    {
        return [
            'user_id' => null,
            'ads_id' => null,
            'ip_address' => $this->faker->ipv4,
        ];
    }
}
