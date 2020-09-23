<?php

declare(strict_types=1);

namespace Jeka\Money\Converter;

use InvalidArgumentException;
use Jeka\Money\Models\Currency;
use Jeka\Money\Money;

class DefaultConverter implements Converter
{
    /**
     * @inheritDoc
     */
    public function setDefaultCurrency(Currency $currency): void
    {
        // TODO: Implement setDefaultCurrency() method.
    }

    /**
     * @inheritDoc
     */
    public function convert(Money $money, Currency $currency): Money
    {
        $this->assertNoZeroRates($money->getCurrency(), $currency);

        return new Money($this->getConvertedAmount($money, $currency), $currency);
    }

    /**
     * Get the converted money amount.
     *
     * @param Money $money
     * @param Currency $currency
     * @return float|int
     */
    private function getConvertedAmount(Money $money, Currency $currency)
    {
        return ($money->getAmount() * $currency->rate) / $money->getCurrency()->rate;
    }

    /**
     * Assert that currency rates don't equal to zero.
     *
     * @param Currency $sourceCurrency
     * @param Currency $targetCurrency
     */
    private function assertNoZeroRates(Currency $sourceCurrency, Currency $targetCurrency): void
    {
        if ($sourceCurrency->rate === 0 || $targetCurrency->rate === 0) {
            throw new InvalidArgumentException('Currency rate cannot be equal to zero.');
        }
    }
}
