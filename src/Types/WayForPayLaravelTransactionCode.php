<?php

namespace MaksymKulia\WayForPayLaravel\Types;

/**
 * Class WayForPayLaravelTransactionCode
 * list of all transaction codes:
 * https://wiki.wayforpay.com/en/view/852131
 *
 * @package MaksymKulia\WayForPayLaravel\Types
 */
final class WayForPayLaravelTransactionCode extends WayForPayLaravelBaseType
{
    const OK                                       = 1100;
    const DECLINED_TO_CARD_ISSUER                  = 1101;
    const BAD_CVV2                                 = 1102;
    const EXPIRED_CARD                             = 1103;
    const INSUFFICIENT_FUNDS                       = 1104;
    const INVALID_CARD                             = 1105;
    const EXCEED_WITHDRAWAL_FREQUENCY              = 1106;
    const THREE_DS_FAIL                            = 1108;
    const FORMAT_ERROR                             = 1109;
    const INVALID_CURRENCY                         = 1110;
    const DUPLICATE_ORDER_ID                       = 1112;
    const INVALID_SIGNATURE                        = 1113;
    const FRAUD                                    = 1114;
    const PARAMETER_NAME_IS_MISSING                = 1115;
    const TOKEN_NOT_FOUND                          = 1116;
    const API_NOT_ALLOWED                          = 1117;
    const MERCHANT_RESTRICTION                     = 1118;
    const AUTHENTICATION_UNAVAILABLE               = 1120;
    const ACCOUNT_NOT_FOUND                        = 1121;
    const GATE_DECLINED                            = 1122;
    const REFUND_NOT_ALLOWED                       = 1123;
    const CARDHOLDER_SESSION_EXPIRED               = 1124;
    const CARDHOLDER_CANCELED_REQUEST              = 1125;
    const ILLEGAL_ORDER_STATE                      = 1126;
    const ORDER_NOT_FOUND                          = 1127;
    const REFUND_LIMIT_EXCEEDED                    = 1128;
    const SCRIPT_ERROR                             = 1129;
    const INVALID_AMOUNT                           = 1130;
    const TRANSACTION_IN_PROCESSING                = 1131;
    const TRANSACTION_IS_DELAYED                   = 1132;
    const INVALID_COMMISSION                       = 1133;
    const TRANSACTION_IS_PENDING                   = 1134;
    const CARD_LIMITS_FAILED                       = 1135;
    const MERCHANT_BALANCE_IS_VERY_SMALL           = 1136;
    const INVALID_CONFIRMATION_AMOUNT              = 1137;
    const REFUND_IN_PROCESSING                     = 1138;
    const EXTERNAL_DECLINE_WHILE_CREDIT            = 1139;
    const EXCEED_WITHDRAWAL_FREQUENCY_WHILE_CREDIT = 1140;
    const PARTIAL_VOID_IS_NOT_SUPPORTED            = 1141;
    const REFUSED_CREDIT                           = 1142;
    const INVALID_PHONE_NUMBER                     = 1143;
    const TRANSACTION_IS_AWAITING_DELIVERY         = 1144;
    const TRANSACTION_IS_AWAITING_CREDIT_DECISION  = 1145;
    const WAIT_3DS_DATA                            = 5100;
}