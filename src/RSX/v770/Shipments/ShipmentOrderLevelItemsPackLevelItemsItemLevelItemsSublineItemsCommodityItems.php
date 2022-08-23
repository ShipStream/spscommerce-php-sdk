<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsSublineItemsCommodityItems extends ClassStructure
{
    /** @var string Code identifying the commodity coding system used for Commodity Code */
    public $commodityCodeQualifier;

    /** @var string Code describing a commodity or group of commodities */
    public $commodityCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->commodityCodeQualifier = Schema::string();
        $properties->commodityCodeQualifier->description = "Code identifying the commodity coding system used for Commodity Code";
        $ownerSchema->addPropertyMapping('CommodityCodeQualifier', self::names()->commodityCodeQualifier);
        $properties->commodityCode = Schema::string();
        $properties->commodityCode->description = "Code describing a commodity or group of commodities";
        $ownerSchema->addPropertyMapping('CommodityCode', self::names()->commodityCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}