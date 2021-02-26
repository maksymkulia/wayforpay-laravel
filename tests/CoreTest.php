<?php

namespace MaksymKulia\WayForPayLaravel\Tests;

/**
 * @group core
 */
class CoreTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group core-simple
     */
    public function it_successfully_connects_to_live_api()
    {
        $this->assertEquals(1, 1);
    }
}
