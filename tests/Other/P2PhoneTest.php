<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Other;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to P2Phone.
 * @group p2phone
 */
class P2PhoneTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group p2phone-endpoint
     */
    public function p2phone_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}
