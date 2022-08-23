<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChangeAck;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeAckHeader extends ClassStructure
{
    /** @var OrderChangeAckHeaderOrderHeader */
    public $orderHeader;

    /** @var OrderChangeAckHeaderPaymentTermsItems[]|array */
    public $paymentTerms;

    /** @var OrderChangeAckHeaderDatesItems[]|array */
    public $dates;

    /** @var OrderChangeAckHeaderContactsItems[]|array */
    public $contacts;

    /** @var OrderChangeAckHeaderAddressItems[]|array */
    public $address;

    /** @var OrderChangeAckHeaderFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var OrderChangeAckHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var OrderChangeAckHeaderReferencesItems[]|array */
    public $references;

    /** @var OrderChangeAckHeaderNotesItems[]|array */
    public $notes;

    /** @var OrderChangeAckHeaderCommodityItems[]|array */
    public $commodity;

    /** @var OrderChangeAckHeaderTaxesItems[]|array */
    public $taxes;

    /** @var OrderChangeAckHeaderChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderChangeAckHeaderMonetaryAmountsItems[]|array */
    public $monetaryAmounts;

    /** @var OrderChangeAckHeaderQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var OrderChangeAckHeaderQuantityTotalsItems[]|array */
    public $quantityTotals;

    /** @var OrderChangeAckHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderHeader = OrderChangeAckHeaderOrderHeader::schema();
        $ownerSchema->addPropertyMapping('OrderHeader', self::names()->orderHeader);
        $properties->paymentTerms = Schema::arr();
        $properties->paymentTerms->items = OrderChangeAckHeaderPaymentTermsItems::schema();
        $ownerSchema->addPropertyMapping('PaymentTerms', self::names()->paymentTerms);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderChangeAckHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = OrderChangeAckHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = OrderChangeAckHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = OrderChangeAckHeaderFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = OrderChangeAckHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->references = Schema::arr();
        $properties->references->items = OrderChangeAckHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderChangeAckHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderChangeAckHeaderCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderChangeAckHeaderTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderChangeAckHeaderChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->monetaryAmounts = Schema::arr();
        $properties->monetaryAmounts->items = OrderChangeAckHeaderMonetaryAmountsItems::schema();
        $ownerSchema->addPropertyMapping('MonetaryAmounts', self::names()->monetaryAmounts);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = OrderChangeAckHeaderQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->quantityTotals = Schema::arr();
        $properties->quantityTotals->items = OrderChangeAckHeaderQuantityTotalsItems::schema();
        $ownerSchema->addPropertyMapping('QuantityTotals', self::names()->quantityTotals);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderChangeAckHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'OrderHeader',
        );
    }
}