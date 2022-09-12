<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Invoices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document header elements
 */
class InvoiceHeader extends ClassStructure
{
    /** @var InvoiceHeaderInvoiceHeader Contains the commonly used fields in the header of the transaction */
    public $invoiceHeader;

    /** @var InvoiceHeaderPaymentTermsItems[]|array */
    public $paymentTerms;

    /** @var InvoiceHeaderDatesItems[]|array */
    public $dates;

    /** @var InvoiceHeaderContactsItems[]|array */
    public $contacts;

    /** @var InvoiceHeaderAddressItems[]|array */
    public $address;

    /** @var InvoiceHeaderReferencesItems[]|array */
    public $references;

    /** @var InvoiceHeaderNotesItems[]|array */
    public $notes;

    /** @var InvoiceHeaderCommodityItems[]|array */
    public $commodity;

    /** @var InvoiceHeaderTaxesItems[]|array */
    public $taxes;

    /** @var InvoiceHeaderChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var InvoiceHeaderFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var InvoiceHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var InvoiceHeaderQuantityTotalsItems[]|array */
    public $quantityTotals;

    /** @var InvoiceHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->invoiceHeader = InvoiceHeaderInvoiceHeader::schema();
        $ownerSchema->addPropertyMapping('InvoiceHeader', self::names()->invoiceHeader);
        $properties->paymentTerms = Schema::arr();
        $properties->paymentTerms->items = InvoiceHeaderPaymentTermsItems::schema();
        $ownerSchema->addPropertyMapping('PaymentTerms', self::names()->paymentTerms);
        $properties->dates = Schema::arr();
        $properties->dates->items = InvoiceHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = InvoiceHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = InvoiceHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->references = Schema::arr();
        $properties->references->items = InvoiceHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = InvoiceHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = InvoiceHeaderCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = InvoiceHeaderTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = InvoiceHeaderChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = InvoiceHeaderFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = InvoiceHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->quantityTotals = Schema::arr();
        $properties->quantityTotals->items = InvoiceHeaderQuantityTotalsItems::schema();
        $ownerSchema->addPropertyMapping('QuantityTotals', self::names()->quantityTotals);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = InvoiceHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document header elements";
        $ownerSchema->required = array(
            'InvoiceHeader',
        );
    }
}