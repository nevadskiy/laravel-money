<?php

declare(strict_types=1);

namespace Jeka\Money\Tests\Support\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Jeka\Money\Database\Factories\CurrencyFactory;
use Jeka\Money\Tests\Support\Models\Product;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->sentence(2),
            'price_amount' => $this->faker->randomNumber(4),
            'price_currency_id' => CurrencyFactory::new(),
        ];
    }
}
