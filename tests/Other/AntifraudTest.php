<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Other;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Antifraud.
 * @group antifraud
 */
class AntifraudTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group antifraud-endpoint
     */
    public function antifraud_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}
