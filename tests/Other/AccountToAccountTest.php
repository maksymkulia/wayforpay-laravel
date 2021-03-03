<?php

namespace MaksymKulia\WayForPayLaravel\Tests\Other;

use MaksymKulia\WayForPayLaravel\Tests\TestCase;

/**
 * This is a group of tests related to Account to Account.
 * @group account-to-account
 */
class AccountToAccountTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @test
     * @group account-to-account-endpoint
     */
    public function account_to_account_endpoint_exist()
    {
        $this->markTestSkipped('Need to create functionality');
    }
}
