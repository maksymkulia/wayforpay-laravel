<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Other;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Currency Rates.
 * @group currency-rates
 */
class CurrencyRatesTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group currency-rates-endpoint
     */
    public function currency_rates_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}
