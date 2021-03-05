<?php

namespace MaksymKulia\WayForPayLaravel\Types;

/**
 * Class WayForPayLaravelPaymentMethod
 * with all payment methods.
 */
final class WayForPayLaravelPaymentMethod extends WayForPayLaravelBaseType
{
    const CARD = 'card';
    const GOOGLE_PAY = 'googlePay';
    const APPLE_PAY = 'applePay';
    const PRIVAT24 = 'privat24';
    const TERMINAL = 'lpTerminal';
    const DELAY = 'delay';
    const BANK_CASH = 'bankCash';
    const CREDIT = 'credit';
    const QRCODE = 'qrCode';
    const MASTER_PASS = 'masterPass';
    const VISA_CHECKOUT = 'visaCheckout';
    const BOT = 'bot';
    const PAY_PARTS = 'payParts';
    const PAY_PARTS_MONO = 'payPartsMono';
    const PAY_PARTS_PRIVAT = 'payPartsPrivat';
    const PAY_PARTS_ABANK = 'payPartsAbank';
    const INSTANT_ABANK = 'instantAbank';
}
