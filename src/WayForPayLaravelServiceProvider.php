<?php

namespace MaksymKulia\WayForPayLaravel;

use Illuminate\Support\ServiceProvider;

class WayForPayLaravelServiceProvider extends ServiceProvider
{
    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return ['wayforpaylaravel'];
    }
}
