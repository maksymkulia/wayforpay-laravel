<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Refund;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Refund.
 * @group refund
 */
class RefundTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group refund-endpoint
     */
    public function refund_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}