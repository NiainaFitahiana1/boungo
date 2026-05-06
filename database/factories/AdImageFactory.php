<?php

namespace Database\Factories;

use App\Models\AdImage;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<AdImage>
 */
class AdImageFactory extends Factory
{
    protected $model = AdImage::class;

    public function definition(): array
    {
        return [
            'ads_id' => null, // set in seeder
            'url' => $this->faker->imageUrl(800,600),
        ];
    }
}
