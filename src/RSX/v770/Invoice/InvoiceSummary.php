<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Invoice;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class InvoiceSummary extends ClassStructure
{
    /** @var float Total amount of the transaction. Sum of the item qty * price +/- the charges, allowances, and taxes, if sent */
    public $totalAmount;

    /** @var float Total merchandise amount. Sum of price * quantity */
    public $totalSalesAmount;

    /** @var float */
    public $totalFreightCharges;

    /** @var float */
    public $totalNonFreightCharges;

    /** @var float Total tax and allowance/charges amount. This is the difference between TotalAmount and TotalSalesAmount */
    public $totalTaxesAndCharges;

    /** @var float Total amount of the discount subtracted from the net */
    public $totalTermsDiscountAmount;

    /** @var float */
    public $totalAllowancesAmount;

    /** @var float */
    public $totalCartonCount;

    /** @var int Sum of the total number of line items in this document */
    public $totalLineItemNumber;

    /** @var float Total amount of transaction if paid by the terms date */
    public $invoiceAmtDueByTermsDate;

    /** @var float Total amount of the charges */
    public $totalChargesAmount;

    /** @var string Electronic identity. Calculation algorithm obtained from the Uniform Code Council */
    public $signatureIdentification;

    /** @var string Free form text to describe the SignatureIdentification */
    public $signatureName;

    /** @var string Data element providing secure method for identifying authenticity of content. Value calculated by using CRC 16 algorithm */
    public $integrityCheckValue;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->totalAmount = Schema::number();
        $properties->totalAmount->description = "Total amount of the transaction. Sum of the item qty * price +/- the charges, allowances, and taxes, if sent";
        $ownerSchema->addPropertyMapping('TotalAmount', self::names()->totalAmount);
        $properties->totalSalesAmount = Schema::number();
        $properties->totalSalesAmount->description = "Total merchandise amount. Sum of price * quantity";
        $ownerSchema->addPropertyMapping('TotalSalesAmount', self::names()->totalSalesAmount);
        $properties->totalFreightCharges = Schema::number();
        $ownerSchema->addPropertyMapping('TotalFreightCharges', self::names()->totalFreightCharges);
        $properties->totalNonFreightCharges = Schema::number();
        $ownerSchema->addPropertyMapping('TotalNonFreightCharges', self::names()->totalNonFreightCharges);
        $properties->totalTaxesAndCharges = Schema::number();
        $properties->totalTaxesAndCharges->description = "Total tax and allowance/charges amount. This is the difference between TotalAmount and TotalSalesAmount";
        $ownerSchema->addPropertyMapping('TotalTaxesAndCharges', self::names()->totalTaxesAndCharges);
        $properties->totalTermsDiscountAmount = Schema::number();
        $properties->totalTermsDiscountAmount->description = "Total amount of the discount subtracted from the net";
        $ownerSchema->addPropertyMapping('TotalTermsDiscountAmount', self::names()->totalTermsDiscountAmount);
        $properties->totalAllowancesAmount = Schema::number();
        $ownerSchema->addPropertyMapping('TotalAllowancesAmount', self::names()->totalAllowancesAmount);
        $properties->totalCartonCount = Schema::number();
        $ownerSchema->addPropertyMapping('TotalCartonCount', self::names()->totalCartonCount);
        $properties->totalLineItemNumber = Schema::integer();
        $properties->totalLineItemNumber->description = "Sum of the total number of line items in this document";
        $ownerSchema->addPropertyMapping('TotalLineItemNumber', self::names()->totalLineItemNumber);
        $properties->invoiceAmtDueByTermsDate = Schema::number();
        $properties->invoiceAmtDueByTermsDate->description = "Total amount of transaction if paid by the terms date";
        $ownerSchema->addPropertyMapping('InvoiceAmtDueByTermsDate', self::names()->invoiceAmtDueByTermsDate);
        $properties->totalChargesAmount = Schema::number();
        $properties->totalChargesAmount->description = "Total amount of the charges";
        $ownerSchema->addPropertyMapping('TotalChargesAmount', self::names()->totalChargesAmount);
        $properties->signatureIdentification = Schema::string();
        $properties->signatureIdentification->description = "Electronic identity. Calculation algorithm obtained from the Uniform Code Council";
        $ownerSchema->addPropertyMapping('SignatureIdentification', self::names()->signatureIdentification);
        $properties->signatureName = Schema::string();
        $properties->signatureName->description = "Free form text to describe the SignatureIdentification";
        $ownerSchema->addPropertyMapping('SignatureName', self::names()->signatureName);
        $properties->integrityCheckValue = Schema::string();
        $properties->integrityCheckValue->description = "Data element providing secure method for identifying authenticity of content. Value calculated by using CRC 16 algorithm";
        $ownerSchema->addPropertyMapping('IntegrityCheckValue', self::names()->integrityCheckValue);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}