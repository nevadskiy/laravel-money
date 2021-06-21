<?php

namespace Nevadskiy\Money\Exceptions;

use InvalidArgumentException;

class InvalidRateException extends InvalidArgumentException
{
    /**
     * InvalidRateException constructor.
     */
    public function __construct()
    {
        parent::__construct('Currency rate cannot be negative or zero.');
    }
}
