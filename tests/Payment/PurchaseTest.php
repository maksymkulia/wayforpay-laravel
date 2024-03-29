<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Payment;

use MaksymKulia\WayForPayLaravel\Payments\Purchase;
use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Payment Purchase.
 * @group payment-purchase
 */
class PurchaseTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();

        $this->purchase = app(Purchase::class);
    }

    /**
     * @test
     * @group payment-purchase-endpoint
     */
    public function payment_purchase_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}
