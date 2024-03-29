<?php

namespace Nevadskiy\Money\Converters;

use Nevadskiy\Money\Exceptions\TargetCurrencyRateMissingException;
use Nevadskiy\Money\Money;

class FallbackConverter implements Converter
{
    /**
     * The rate converter instance.
     *
     * @var Converter
     */
    protected $converter;

    /**
     * The fallback currency.
     *
     * @var string
     */
    protected $fallbackCurrency;

    /**
     * Make a new converter instance.
     */
    public function __construct(Converter $converter, string $fallbackCurrency)
    {
        $this->converter = $converter;
        $this->fallbackCurrency = $fallbackCurrency;
    }

    /**
     * @inheritDoc
     */
    public function convert(Money $money, string $currency): Money
    {
        try {
            return $this->converter->convert($money, $currency);
        } catch (TargetCurrencyRateMissingException $e) {
            return $this->converter->convert($money, $this->fallbackCurrency);
        }
    }
}
