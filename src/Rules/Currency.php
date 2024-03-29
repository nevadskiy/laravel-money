<?php

namespace Nevadskiy\Money\Rules;

use Illuminate\Contracts\Validation\Rule;
use Nevadskiy\Money\Registries\CurrencyRegistry;

class Currency implements Rule
{
    /**
     * @inheritdoc
     */
    public function passes($attribute, $value): bool
    {
        return static::getRegistry()->has($value);
    }

    /**
     * @inheritdoc
     * @todo check translation message.
     */
    public function message(): string
    {
        return 'The selected :attribute is invalid.';
    }

    /**
     * Get the currency registry.
     */
    protected static function getRegistry(): CurrencyRegistry
    {
        return resolve(CurrencyRegistry::class);
    }
}
