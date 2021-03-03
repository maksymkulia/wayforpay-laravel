<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Other;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Account to Card.
 * @group account-to-card
 */
class AccountToCardTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group account-to-card-endpoint
     */
    public function account_to_card_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}
