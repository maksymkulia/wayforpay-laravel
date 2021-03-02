<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Payment;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Payment Settle.
 * @group payment-settle
 */
class SettleTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group payment-settle-endpoint
     */
    public function payment_settle_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}