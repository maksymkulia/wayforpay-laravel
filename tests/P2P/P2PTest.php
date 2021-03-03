<?php

namespace MaksymKulia\WayForPayLaravel\Tests\P2P;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to P2P.
 * @group p2p
 */
class P2PTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group p2p-endpoint
     */
    public function p2p_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}
