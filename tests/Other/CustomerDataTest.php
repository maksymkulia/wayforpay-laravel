<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Other;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Customer data.
 * @group customer-data
 */
class CustomerDataTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group customer-data-endpoint
     */
    public function customer_data_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}
