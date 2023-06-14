<?php

namespace Nevadskiy\Money\Registry;

class IsoCurrencyRegistry implements CurrencyRegistry
{
    /**
     * The registered currency list.
     */
    protected $currencies = [
        'AED' => ['scale' => 2],
        'AFN' => ['scale' => 2],
        'ALL' => ['scale' => 2],
        'AMD' => ['scale' => 2],
        'ANG' => ['scale' => 2],
        'AOA' => ['scale' => 2],
        'ARS' => ['scale' => 2],
        'AUD' => ['scale' => 2],
        'AWG' => ['scale' => 2],
        'AZN' => ['scale' => 2],
        'BAM' => ['scale' => 2],
        'BBD' => ['scale' => 2],
        'BDT' => ['scale' => 2],
        'BGN' => ['scale' => 2],
        'BHD' => ['scale' => 3],
        'BIF' => ['scale' => 0],
        'BMD' => ['scale' => 2],
        'BND' => ['scale' => 2],
        'BOB' => ['scale' => 2],
        'BOV' => ['scale' => 2],
        'BRL' => ['scale' => 2],
        'BSD' => ['scale' => 2],
        'BTN' => ['scale' => 2],
        'BWP' => ['scale' => 2],
        'BYN' => ['scale' => 2],
        'BZD' => ['scale' => 2],
        'CAD' => ['scale' => 2],
        'CDF' => ['scale' => 2],
        'CHE' => ['scale' => 2],
        'CHF' => ['scale' => 2],
        'CHW' => ['scale' => 2],
        'CLF' => ['scale' => 4],
        'CLP' => ['scale' => 0],
        'COP' => ['scale' => 2],
        'COU' => ['scale' => 2],
        'CRC' => ['scale' => 2],
        'CUC' => ['scale' => 2],
        'CUP' => ['scale' => 2],
        'CVE' => ['scale' => 2],
        'CZK' => ['scale' => 2],
        'DJF' => ['scale' => 0],
        'DKK' => ['scale' => 2],
        'DOP' => ['scale' => 2],
        'DZD' => ['scale' => 2],
        'EGP' => ['scale' => 2],
        'ERN' => ['scale' => 2],
        'ETB' => ['scale' => 2],
        'EUR' => ['scale' => 2],
        'FJD' => ['scale' => 2],
        'FKP' => ['scale' => 2],
        'GBP' => ['scale' => 2],
        'GEL' => ['scale' => 2],
        'GHS' => ['scale' => 2],
        'GIP' => ['scale' => 2],
        'GMD' => ['scale' => 2],
        'GNF' => ['scale' => 0],
        'GTQ' => ['scale' => 2],
        'GYD' => ['scale' => 2],
        'HKD' => ['scale' => 2],
        'HNL' => ['scale' => 2],
        'HTG' => ['scale' => 2],
        'HUF' => ['scale' => 2],
        'IDR' => ['scale' => 2],
        'ILS' => ['scale' => 2],
        'INR' => ['scale' => 2],
        'IQD' => ['scale' => 3],
        'IRR' => ['scale' => 2],
        'ISK' => ['scale' => 0],
        'JMD' => ['scale' => 2],
        'JOD' => ['scale' => 3],
        'JPY' => ['scale' => 0],
        'KES' => ['scale' => 2],
        'KGS' => ['scale' => 2],
        'KHR' => ['scale' => 2],
        'KMF' => ['scale' => 0],
        'KPW' => ['scale' => 2],
        'KRW' => ['scale' => 0],
        'KWD' => ['scale' => 3],
        'KYD' => ['scale' => 2],
        'KZT' => ['scale' => 2],
        'LAK' => ['scale' => 2],
        'LBP' => ['scale' => 2],
        'LKR' => ['scale' => 2],
        'LRD' => ['scale' => 2],
        'LSL' => ['scale' => 2],
        'LYD' => ['scale' => 3],
        'MAD' => ['scale' => 2],
        'MDL' => ['scale' => 2],
        'MGA' => ['scale' => 2],
        'MKD' => ['scale' => 2],
        'MMK' => ['scale' => 2],
        'MNT' => ['scale' => 2],
        'MOP' => ['scale' => 2],
        'MRU' => ['scale' => 2],
        'MUR' => ['scale' => 2],
        'MVR' => ['scale' => 2],
        'MWK' => ['scale' => 2],
        'MXN' => ['scale' => 2],
        'MXV' => ['scale' => 2],
        'MYR' => ['scale' => 2],
        'MZN' => ['scale' => 2],
        'NAD' => ['scale' => 2],
        'NGN' => ['scale' => 2],
        'NIO' => ['scale' => 2],
        'NOK' => ['scale' => 2],
        'NPR' => ['scale' => 2],
        'NZD' => ['scale' => 2],
        'OMR' => ['scale' => 3],
        'PAB' => ['scale' => 2],
        'PEN' => ['scale' => 2],
        'PGK' => ['scale' => 2],
        'PHP' => ['scale' => 2],
        'PKR' => ['scale' => 2],
        'PLN' => ['scale' => 2],
        'PYG' => ['scale' => 0],
        'QAR' => ['scale' => 2],
        'RON' => ['scale' => 2],
        'RSD' => ['scale' => 2],
        'CNY' => ['scale' => 2],
        'RUB' => ['scale' => 2],
        'RWF' => ['scale' => 0],
        'SAR' => ['scale' => 2],
        'SBD' => ['scale' => 2],
        'SCR' => ['scale' => 2],
        'SDG' => ['scale' => 2],
        'SEK' => ['scale' => 2],
        'SGD' => ['scale' => 2],
        'SHP' => ['scale' => 2],
        'SLE' => ['scale' => 2],
        'SLL' => ['scale' => 2],
        'SOS' => ['scale' => 2],
        'SRD' => ['scale' => 2],
        'SSP' => ['scale' => 2],
        'STN' => ['scale' => 2],
        'SVC' => ['scale' => 2],
        'SYP' => ['scale' => 2],
        'SZL' => ['scale' => 2],
        'THB' => ['scale' => 2],
        'TJS' => ['scale' => 2],
        'TMT' => ['scale' => 2],
        'TND' => ['scale' => 3],
        'TOP' => ['scale' => 2],
        'TRY' => ['scale' => 2],
        'TTD' => ['scale' => 2],
        'TWD' => ['scale' => 2],
        'TZS' => ['scale' => 2],
        'UAH' => ['scale' => 2],
        'UGX' => ['scale' => 0],
        'USD' => ['scale' => 2],
        'USN' => ['scale' => 2],
        'UYI' => ['scale' => 0],
        'UYU' => ['scale' => 2],
        'UYW' => ['scale' => 4],
        'UZS' => ['scale' => 2],
        'VED' => ['scale' => 2],
        'VES' => ['scale' => 2],
        'VND' => ['scale' => 0],
        'VUV' => ['scale' => 0],
        'WST' => ['scale' => 2],
        'XAF' => ['scale' => 0],
        // 'XAG' => ['scale' => .],
        // 'XAU' => ['scale' => .],
        // 'XBA' => ['scale' => .],
        // 'XBB' => ['scale' => .],
        // 'XBC' => ['scale' => .],
        // 'XBD' => ['scale' => .],
        'XCD' => ['scale' => 2],
        // 'XDR' => ['scale' => .],
        'XOF' => ['scale' => 0],
        // 'XPD' => ['scale' => .],
        'XPF' => ['scale' => 0],
        // 'XPT' => ['scale' => .],
        // 'XSU' => ['scale' => .],
        // 'XTS' => ['scale' => .],
        // 'XUA' => ['scale' => .],
        // 'XXX' => ['scale' => .],
        'YER' => ['scale' => 2],
        'ZAR' => ['scale' => 2],
        'ZMW' => ['scale' => 2],
        'ZWL' => ['scale' => 2],
    ];

    /**
     * @inheritdoc
     */
    public function set(string $currency, array $options = []): void
    {
        $this->currencies[$currency] = $options;
    }

    /**
     * @inheritdoc
     */
    public function get(string $currency): array
    {
        return $this->currencies[$currency];
    }

    /**
     * @inheritdoc
     */
    public function has(string $currency): bool
    {
        return isset($this->currencies[$currency]);
    }

    /**
     * @inheritdoc
     */
    public function all(): array
    {
        return $this->currencies;
    }
}
