<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderAck;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderAckHeader extends ClassStructure
{
    /** @var OrderAckHeaderOrderHeader */
    public $orderHeader;

    /** @var OrderAckHeaderPaymentTermsItems[]|array */
    public $paymentTerms;

    /** @var OrderAckHeaderDatesItems[]|array */
    public $dates;

    /** @var OrderAckHeaderContactsItems[]|array */
    public $contacts;

    /** @var OrderAckHeaderAddressItems[]|array */
    public $address;

    /** @var OrderAckHeaderFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var OrderAckHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var OrderAckHeaderReferencesItems[]|array */
    public $references;

    /** @var OrderAckHeaderNotesItems[]|array */
    public $notes;

    /** @var OrderAckHeaderCommodityItems[]|array */
    public $commodity;

    /** @var OrderAckHeaderTaxesItems[]|array */
    public $taxes;

    /** @var OrderAckHeaderChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderAckHeaderMonetaryAmountsItems[]|array */
    public $monetaryAmounts;

    /** @var OrderAckHeaderQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var OrderAckHeaderQuantityTotalsItems[]|array */
    public $quantityTotals;

    /** @var OrderAckHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderHeader = OrderAckHeaderOrderHeader::schema();
        $ownerSchema->addPropertyMapping('OrderHeader', self::names()->orderHeader);
        $properties->paymentTerms = Schema::arr();
        $properties->paymentTerms->items = OrderAckHeaderPaymentTermsItems::schema();
        $ownerSchema->addPropertyMapping('PaymentTerms', self::names()->paymentTerms);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderAckHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = OrderAckHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = OrderAckHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = OrderAckHeaderFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = OrderAckHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->references = Schema::arr();
        $properties->references->items = OrderAckHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderAckHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderAckHeaderCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderAckHeaderTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderAckHeaderChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->monetaryAmounts = Schema::arr();
        $properties->monetaryAmounts->items = OrderAckHeaderMonetaryAmountsItems::schema();
        $ownerSchema->addPropertyMapping('MonetaryAmounts', self::names()->monetaryAmounts);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = OrderAckHeaderQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->quantityTotals = Schema::arr();
        $properties->quantityTotals->items = OrderAckHeaderQuantityTotalsItems::schema();
        $ownerSchema->addPropertyMapping('QuantityTotals', self::names()->quantityTotals);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderAckHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'OrderHeader',
        );
    }
}