<?php

namespace MaksymKulia\WayForPayLaravel\Models\Card;

/**
 * Model, that describes attributes and methods related to bank card
 * with full info for Card
 *
 * Class PurchaseCard
 * @package MaksymKulia\WayForPayLaravel\Models
 */
class FullCard extends Root
{
    /**
     * Full card number.
     * @example 1111 1111 1111 1111
     * @var integer $number
     */
    private $number;

    /**
     * Expiration month.
     * @example 10
     * @var integer $expMonth
     */
    private $expMonth;

    /**
     * Expiration year.
     * @example 2025
     * @var integer $expYear
     */
    private $expYear;

    /**
     * CVV/CVV2 of card
     * @example 333
     * @var integer $cvv
     */
    private $cvv;

    /**
     * Card holder name
     * @example John Doe
     * @var string $holderName
     */
    private $holderName;

    /**
     * Card constructor.
     * @param int $number
     * @param int $expMonth
     * @param int $expYear
     * @param int $cvv
     * @param string $holderName
     */
    public function __construct(
        int $number,
        int $expMonth,
        int $expYear,
        int $cvv,
        string $holderName
    )
    {
        $this->number = $number;
        $this->expMonth = $expMonth;
        $this->expYear = $expYear;
        $this->cvv = $cvv;
        $this->holderName = $holderName;
    }

}