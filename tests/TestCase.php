<?php

namespace MaksymKulia\WayForPayLaravel\Tests;

use Orchestra\Testbench\TestCase as OrchestraTestCase;

/**
 * Class TestCase.
 */
class TestCase extends OrchestraTestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getPackageProviders($app): void
    {
        // package providers
    }

    /**
     * @param \Illuminate\Foundation\Application $app
     */
    protected function getEnvironmentSetUp($app): void
    {
        // perform environment setup
    }
}
