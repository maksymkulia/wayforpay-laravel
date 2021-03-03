<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Invoice;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Invoice.
 * @group invoice
 */
class InvoiceTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group invoice-endpoint
     */
    public function invoice_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }

    /**
     * @test
     * @group invoice-create
     */
    public function invoice_create()
    {
        $this->markTestSkipped('Need to create functionality');
    }

    /**
     * @test
     * @group invoice-delete
     */
    public function invoice_delete()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}
