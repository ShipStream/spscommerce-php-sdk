<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document subline elements
 */
class ShipmentOrderLevelItemsItemLevelItemsSublineItems extends ClassStructure
{
    /** @var ShipmentOrderLevelItemsItemLevelItemsSublineItemsSublineItemDetail Contains the commonly used fields in the subline level of the transaction */
    public $sublineItemDetail;

    /** @var ShipmentOrderLevelItemsItemLevelItemsSublineItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var ShipmentOrderLevelItemsItemLevelItemsSublineItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var ShipmentOrderLevelItemsItemLevelItemsSublineItemsCommodityItems[]|array */
    public $commodity;

    /** @var ShipmentOrderLevelItemsItemLevelItemsSublineItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sublineItemDetail = ShipmentOrderLevelItemsItemLevelItemsSublineItemsSublineItemDetail::schema();
        $ownerSchema->addPropertyMapping('SublineItemDetail', self::names()->sublineItemDetail);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = ShipmentOrderLevelItemsItemLevelItemsSublineItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = ShipmentOrderLevelItemsItemLevelItemsSublineItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = ShipmentOrderLevelItemsItemLevelItemsSublineItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ShipmentOrderLevelItemsItemLevelItemsSublineItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document subline elements";
        $ownerSchema->required = array(
        );
    }
}