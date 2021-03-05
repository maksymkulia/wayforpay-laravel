<?php

namespace MaksymKulia\WayForPayLaravel\Models\Card;

/**
 * Model, that describes attributes and methods related to bank card
 * used for Purchase.
 *
 * Class PurchaseCard
 */
class PurchaseCard extends Root
{
    /**
     * Mask of card number.
     * @example 42****4242
     * @var string
     */
    private $pan;

    /**
     * Payment system.
     * @example Visa
     * @var string
     */
    private $paymentSystem;

    /**
     * Country of bank that issued card.
     * @example Ukraine
     * @var string
     */
    private $issuerBankCountry;

    /**
     * Name of bank that issued card.
     * @example PrivatBank
     * @var string
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
    ) {
        $this->pan = $pan;
        $this->paymentSystem = $paymentSystem;
        $this->issuerBankCountry = $issuerBankCountry;
        $this->issuerBankName = $issuerBankName;
    }
}
