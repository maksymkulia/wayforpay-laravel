<?php

namespace MaksymKulia\WayForPayLaravel\Models\Card;

/**
 * Model, that describes attributes and methods related to bank card
 * used for Purchase
 *
 * Class PurchaseCard
 * @package MaksymKulia\WayForPayLaravel\Models
 */
class PurchaseCard extends Root
{
    /**
     * Mask of card number.
     * @example 42****4242
     * @var string $pan
     */
    private $pan;

    /**
     * Payment system.
     * @example Visa
     * @var string $paymentSystem
     */
    private $paymentSystem;

    /**
     * Country of bank that issued card
     * @example Ukraine
     * @var string $issuerBankCountry
     */
    private $issuerBankCountry;

    /**
     * Name of bank that issued card
     * @example PrivatBank
     * @var string $issuerBankName
     */
    private $issuerBankName;

    /**
     * Card constructor.
     * @param string $pan
     * @param string $paymentSystem
     * @param string $issuerBankCountry
     * @param string $issuerBankName
     */
    public function __construct(
        string $pan,
        string $paymentSystem,
        string $issuerBankCountry,
        string $issuerBankName
    )
    {
        $this->pan = $pan;
        $this->paymentSystem = $paymentSystem;
        $this->issuerBankCountry = $issuerBankCountry;
        $this->issuerBankName = $issuerBankName;
    }

}