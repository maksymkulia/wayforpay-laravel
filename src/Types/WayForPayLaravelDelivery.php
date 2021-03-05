<?php

namespace MaksymKulia\WayForPayLaravel\Types;

/**
 * Class WayForPayLaravelDelivery
 * with all delivery options.
 */
final class WayForPayLaravelDelivery extends WayForPayLaravelBaseType
{
    const NOVA_POSHTA = 'nova';
    const MEEST_EXPRESS = 'meest';
    const JUSTIN = 'justin';
    const URKPOSHTA = 'ukrpost';
    const OTHER = 'other';
}
