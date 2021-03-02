<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Payment;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Payment Charge.
 * @group payment-charge
 */
class ChargeTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group payment-charge-endpoint
     */
    public function payment_charge_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}