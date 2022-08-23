<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsPackLevelItemsItemLevelItems extends ClassStructure
{
    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsShipmentLine */
    public $shipmentLine;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsDatesItems[]|array */
    public $dates;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsReferencesItems[]|array */
    public $references;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsNotesItems[]|array */
    public $notes;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsCommodityItems[]|array */
    public $commodity;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsAddressItems[]|array */
    public $address;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsSublineItems[]|array */
    public $subline;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsTaxesItems[]|array */
    public $taxes;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItems[]|array */
    public $itemLoadInfo;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->shipmentLine = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsShipmentLine::schema();
        $ownerSchema->addPropertyMapping('ShipmentLine', self::names()->shipmentLine);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->dates = Schema::arr();
        $properties->dates->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->address = Schema::arr();
        $properties->address->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->subline = Schema::arr();
        $properties->subline->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->itemLoadInfo = Schema::arr();
        $properties->itemLoadInfo->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItems::schema();
        $ownerSchema->addPropertyMapping('ItemLoadInfo', self::names()->itemLoadInfo);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}