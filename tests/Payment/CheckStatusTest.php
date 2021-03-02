<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Payment;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Payment Check Status.
 * @group payment-check-status
 */
class CheckStatusTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group payment-check-status-endpoint
     */
    public function payment_check_status_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}