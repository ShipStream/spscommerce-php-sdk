<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetails;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierFreightDetailHeaderPaymentTermsItems extends ClassStructure
{
    /** @var string Code identifying type of payment terms */
    public $termsType;

    /** @var string Code identifying the beginning of the terms period */
    public $termsBasisDateCode;

    /** @var string Code relating the TermsBasisDateCode to a date, time, or period */
    public $termsTimeRelationCode;

    /** @var float Terms discount percentage available to the purchaser if an invoice is paid on or before the TermsDiscountDate. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00] */
    public $termsDiscountPercentage;

    /** @var string Date by which payment or invoice must be received in order to receive the discount noted */
    public $termsDiscountDate;

    /** @var int Number of days by which payment or invoice must be received in order to receive the discount noted */
    public $termsDiscountDueDays;

    /** @var string Date by which total invoice amount is due[discount not applicable] */
    public $termsNetDueDate;

    /** @var int Number of days until total invoice amount is due[discount not applicable] */
    public $termsNetDueDays;

    /** @var float Discount amount available to the purchaser if an invoice is paid on or before the TermsDiscountDate */
    public $termsDiscountAmount;

    /** @var string Date by which the payment is due if terms have been deferred */
    public $termsDeferredDueDate;

    /** @var float The monetary amount which the payment is due if terms may have been deferred */
    public $termsDeferredAmountDue;

    /** @var float Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00] */
    public $percentOfInvoicePayable;

    /** @var string A free-form description to clarify the terms */
    public $termsDescription;

    /** @var int Numeric value for day of month */
    public $termsDueDay;

    /** @var string Indication of the instrument of payment */
    public $paymentMethodCode;

    /** @var string Used to communicate the data of the PaymentMethodCode */
    public $paymentMethodID;

    /** @var float Indicates that this is the percentage applied to a base amount used to determine a late payment charge */
    public $latePaymentChargePercent;

    /** @var string Date from which payment terms are calculated */
    public $termsStartDate;

    /** @var string Code identifying the method to be used for payment in conjunction with due date */
    public $termsDueDateQual;

    /** @var float Monetary amount upon which the terms discount amount is calculated */
    public $amountSubjectToDiscount;

    /** @var float Amount due if all discount terms are met */
    public $discountAmountDue;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->termsType = Schema::string();
        $properties->termsType->description = "Code identifying type of payment terms";
        $ownerSchema->addPropertyMapping('TermsType', self::names()->termsType);
        $properties->termsBasisDateCode = Schema::string();
        $properties->termsBasisDateCode->description = "Code identifying the beginning of the terms period";
        $ownerSchema->addPropertyMapping('TermsBasisDateCode', self::names()->termsBasisDateCode);
        $properties->termsTimeRelationCode = Schema::string();
        $properties->termsTimeRelationCode->description = "Code relating the TermsBasisDateCode to a date, time, or period";
        $ownerSchema->addPropertyMapping('TermsTimeRelationCode', self::names()->termsTimeRelationCode);
        $properties->termsDiscountPercentage = Schema::number();
        $properties->termsDiscountPercentage->description = "Terms discount percentage available to the purchaser if an invoice is paid on or before the TermsDiscountDate. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00]";
        $ownerSchema->addPropertyMapping('TermsDiscountPercentage', self::names()->termsDiscountPercentage);
        $properties->termsDiscountDate = Schema::string();
        $properties->termsDiscountDate->description = "Date by which payment or invoice must be received in order to receive the discount noted";
        $properties->termsDiscountDate->format = "date";
        $ownerSchema->addPropertyMapping('TermsDiscountDate', self::names()->termsDiscountDate);
        $properties->termsDiscountDueDays = Schema::integer();
        $properties->termsDiscountDueDays->description = "Number of days by which payment or invoice must be received in order to receive the discount noted";
        $ownerSchema->addPropertyMapping('TermsDiscountDueDays', self::names()->termsDiscountDueDays);
        $properties->termsNetDueDate = Schema::string();
        $properties->termsNetDueDate->description = "Date by which total invoice amount is due[discount not applicable]";
        $properties->termsNetDueDate->format = "date";
        $ownerSchema->addPropertyMapping('TermsNetDueDate', self::names()->termsNetDueDate);
        $properties->termsNetDueDays = Schema::integer();
        $properties->termsNetDueDays->description = "Number of days until total invoice amount is due[discount not applicable]";
        $ownerSchema->addPropertyMapping('TermsNetDueDays', self::names()->termsNetDueDays);
        $properties->termsDiscountAmount = Schema::number();
        $properties->termsDiscountAmount->description = "Discount amount available to the purchaser if an invoice is paid on or before the TermsDiscountDate";
        $ownerSchema->addPropertyMapping('TermsDiscountAmount', self::names()->termsDiscountAmount);
        $properties->termsDeferredDueDate = Schema::string();
        $properties->termsDeferredDueDate->description = "Date by which the payment is due if terms have been deferred";
        $properties->termsDeferredDueDate->format = "date";
        $ownerSchema->addPropertyMapping('TermsDeferredDueDate', self::names()->termsDeferredDueDate);
        $properties->termsDeferredAmountDue = Schema::number();
        $properties->termsDeferredAmountDue->description = "The monetary amount which the payment is due if terms may have been deferred";
        $ownerSchema->addPropertyMapping('TermsDeferredAmountDue', self::names()->termsDeferredAmountDue);
        $properties->percentOfInvoicePayable = Schema::number();
        $properties->percentOfInvoicePayable->description = "Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00]";
        $ownerSchema->addPropertyMapping('PercentOfInvoicePayable', self::names()->percentOfInvoicePayable);
        $properties->termsDescription = Schema::string();
        $properties->termsDescription->description = "A free-form description to clarify the terms";
        $ownerSchema->addPropertyMapping('TermsDescription', self::names()->termsDescription);
        $properties->termsDueDay = Schema::integer();
        $properties->termsDueDay->description = "Numeric value for day of month";
        $ownerSchema->addPropertyMapping('TermsDueDay', self::names()->termsDueDay);
        $properties->paymentMethodCode = Schema::string();
        $properties->paymentMethodCode->description = "Indication of the instrument of payment";
        $ownerSchema->addPropertyMapping('PaymentMethodCode', self::names()->paymentMethodCode);
        $properties->paymentMethodID = Schema::string();
        $properties->paymentMethodID->description = "Used to communicate the data of the PaymentMethodCode";
        $ownerSchema->addPropertyMapping('PaymentMethodID', self::names()->paymentMethodID);
        $properties->latePaymentChargePercent = Schema::number();
        $properties->latePaymentChargePercent->description = "Indicates that this is the percentage applied to a base amount used to determine a late payment charge";
        $ownerSchema->addPropertyMapping('LatePaymentChargePercent', self::names()->latePaymentChargePercent);
        $properties->termsStartDate = Schema::string();
        $properties->termsStartDate->description = "Date from which payment terms are calculated";
        $properties->termsStartDate->format = "date";
        $ownerSchema->addPropertyMapping('TermsStartDate', self::names()->termsStartDate);
        $properties->termsDueDateQual = Schema::string();
        $properties->termsDueDateQual->description = "Code identifying the method to be used for payment in conjunction with due date";
        $ownerSchema->addPropertyMapping('TermsDueDateQual', self::names()->termsDueDateQual);
        $properties->amountSubjectToDiscount = Schema::number();
        $properties->amountSubjectToDiscount->description = "Monetary amount upon which the terms discount amount is calculated";
        $ownerSchema->addPropertyMapping('AmountSubjectToDiscount', self::names()->amountSubjectToDiscount);
        $properties->discountAmountDue = Schema::number();
        $properties->discountAmountDue->description = "Amount due if all discount terms are met";
        $ownerSchema->addPropertyMapping('DiscountAmountDue', self::names()->discountAmountDue);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}