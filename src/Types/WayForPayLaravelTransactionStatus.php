<?php

namespace MaksymKulia\WayForPayLaravel\Types;

/**
 * Class WayForPayLaravelTransactionStatus
 * with all Transaction statuses.
 */
final class WayForPayLaravelTransactionStatus extends WayForPayLaravelBaseType
{
    const IN_PROCESSING = 'inProcessing';
    const WAITING_AUTH_COMPLETE = 'WaitingAuthComplete';
    const APPROVED = 'Approved';
    const PENDING = 'Pending';
    const EXPIRED = 'Expired';
    const REFUND = 'Refunded';
    const DECLINED = 'Declined';
    const REFUND_IN_PROCESSING = 'RefundInProcessing';
}
