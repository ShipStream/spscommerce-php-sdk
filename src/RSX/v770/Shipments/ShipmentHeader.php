<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentHeader extends ClassStructure
{
    /** @var ShipmentHeaderShipmentHeader */
    public $shipmentHeader;

    /** @var ShipmentHeaderDatesItems[]|array */
    public $dates;

    /** @var ShipmentHeaderReferencesItems[]|array */
    public $references;

    /** @var ShipmentHeaderNotesItems[]|array */
    public $notes;

    /** @var ShipmentHeaderContactsItems[]|array */
    public $contacts;

    /** @var ShipmentHeaderAddressItems[]|array */
    public $address;

    /** @var ShipmentHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ShipmentHeaderQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var ShipmentHeaderCommodityItems[]|array */
    public $commodity;

    /** @var ShipmentHeaderCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var ShipmentHeaderTaxesItems[]|array */
    public $taxes;

    /** @var ShipmentHeaderChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ShipmentHeaderFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var ShipmentHeaderQuantityTotalsItems[]|array */
    public $quantityTotals;

    /** @var ShipmentHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->shipmentHeader = ShipmentHeaderShipmentHeader::schema();
        $ownerSchema->addPropertyMapping('ShipmentHeader', self::names()->shipmentHeader);
        $properties->dates = Schema::arr();
        $properties->dates->items = ShipmentHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = ShipmentHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ShipmentHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = ShipmentHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = ShipmentHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ShipmentHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = ShipmentHeaderQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = ShipmentHeaderCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = ShipmentHeaderCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ShipmentHeaderTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ShipmentHeaderChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = ShipmentHeaderFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->quantityTotals = Schema::arr();
        $properties->quantityTotals->items = ShipmentHeaderQuantityTotalsItems::schema();
        $ownerSchema->addPropertyMapping('QuantityTotals', self::names()->quantityTotals);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ShipmentHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'ShipmentHeader',
        );
    }
}