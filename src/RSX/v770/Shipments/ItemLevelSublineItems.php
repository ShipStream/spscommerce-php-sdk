<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ItemLevelSublineItems extends ClassStructure
{
    /** @var ItemLevelSublineItemsSublineItemDetail */
    public $sublineItemDetail;

    /** @var ItemLevelSublineItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var ItemLevelSublineItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var ItemLevelSublineItemsCommodityItems[]|array */
    public $commodity;

    /** @var ItemLevelSublineItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sublineItemDetail = ItemLevelSublineItemsSublineItemDetail::schema();
        $ownerSchema->addPropertyMapping('SublineItemDetail', self::names()->sublineItemDetail);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = ItemLevelSublineItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = ItemLevelSublineItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = ItemLevelSublineItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ItemLevelSublineItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}