<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsItemLevelItems extends ClassStructure
{
    /** @var ShipmentOrderLevelItemsItemLevelItemsShipmentLine */
    public $shipmentLine;

    /** @var ShipmentOrderLevelItemsItemLevelItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var ShipmentOrderLevelItemsItemLevelItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var ShipmentOrderLevelItemsItemLevelItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ShipmentOrderLevelItemsItemLevelItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var ShipmentOrderLevelItemsItemLevelItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var ShipmentOrderLevelItemsItemLevelItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var ShipmentOrderLevelItemsItemLevelItemsMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var ShipmentOrderLevelItemsItemLevelItemsDatesItems[]|array */
    public $dates;

    /** @var ShipmentOrderLevelItemsItemLevelItemsReferencesItems[]|array */
    public $references;

    /** @var ShipmentOrderLevelItemsItemLevelItemsNotesItems[]|array */
    public $notes;

    /** @var ShipmentOrderLevelItemsItemLevelItemsCommodityItems[]|array */
    public $commodity;

    /** @var ShipmentOrderLevelItemsItemLevelItemsAddressItems[]|array */
    public $address;

    /** @var ShipmentOrderLevelItemsItemLevelItemsSublineItems[]|array */
    public $subline;

    /** @var ShipmentOrderLevelItemsItemLevelItemsTaxesItems[]|array */
    public $taxes;

    /** @var ShipmentOrderLevelItemsItemLevelItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ShipmentOrderLevelItemsItemLevelItemsItemLoadInfoItems[]|array */
    public $itemLoadInfo;

    /** @var ShipmentOrderLevelItemsItemLevelItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->shipmentLine = ShipmentOrderLevelItemsItemLevelItemsShipmentLine::schema();
        $ownerSchema->addPropertyMapping('ShipmentLine', self::names()->shipmentLine);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = ShipmentOrderLevelItemsItemLevelItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = ShipmentOrderLevelItemsItemLevelItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ShipmentOrderLevelItemsItemLevelItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = ShipmentOrderLevelItemsItemLevelItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = ShipmentOrderLevelItemsItemLevelItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = ShipmentOrderLevelItemsItemLevelItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = ShipmentOrderLevelItemsItemLevelItemsMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->dates = Schema::arr();
        $properties->dates->items = ShipmentOrderLevelItemsItemLevelItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = ShipmentOrderLevelItemsItemLevelItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ShipmentOrderLevelItemsItemLevelItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = ShipmentOrderLevelItemsItemLevelItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->address = Schema::arr();
        $properties->address->items = ShipmentOrderLevelItemsItemLevelItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->subline = Schema::arr();
        $properties->subline->items = ShipmentOrderLevelItemsItemLevelItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ShipmentOrderLevelItemsItemLevelItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ShipmentOrderLevelItemsItemLevelItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->itemLoadInfo = Schema::arr();
        $properties->itemLoadInfo->items = ShipmentOrderLevelItemsItemLevelItemsItemLoadInfoItems::schema();
        $ownerSchema->addPropertyMapping('ItemLoadInfo', self::names()->itemLoadInfo);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ShipmentOrderLevelItemsItemLevelItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}