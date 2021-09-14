<?php

namespace Nevadskiy\Money\Tests\Unit\Models;

use Nevadskiy\Money\Database\Factories\CurrencyFactory;
use Nevadskiy\Money\Tests\TestCase;
use Nevadskiy\Money\ValueObjects\Rate;

class CurrencyTest extends TestCase
{
    public function test_it_stores_code_in_uppercase(): void
    {
        $currency = CurrencyFactory::new()->create(['code' => 'usd']);

        self::assertSame('USD', $currency->code);
    }

    public function test_it_has_rate_cast(): void
    {
        $currency = CurrencyFactory::new()->create([
            'rate' => new Rate(1.05)
        ]);

        self::assertInstanceOf(Rate::class, $currency->rate);
        self::assertEquals(1.05, $currency->rate->getValue());
    }
}
