<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItems extends ClassStructure
{
    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsShipmentLine */
    public $shipmentLine;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsDatesItems[]|array */
    public $dates;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsReferencesItems[]|array */
    public $references;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsNotesItems[]|array */
    public $notes;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsCommodityItems[]|array */
    public $commodity;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsAddressItems[]|array */
    public $address;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsSublineItems[]|array */
    public $subline;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsTaxesItems[]|array */
    public $taxes;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItems[]|array */
    public $itemLoadInfo;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->shipmentLine = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsShipmentLine::schema();
        $ownerSchema->addPropertyMapping('ShipmentLine', self::names()->shipmentLine);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->dates = Schema::arr();
        $properties->dates->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->address = Schema::arr();
        $properties->address->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->subline = Schema::arr();
        $properties->subline->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->itemLoadInfo = Schema::arr();
        $properties->itemLoadInfo->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItems::schema();
        $ownerSchema->addPropertyMapping('ItemLoadInfo', self::names()->itemLoadInfo);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}