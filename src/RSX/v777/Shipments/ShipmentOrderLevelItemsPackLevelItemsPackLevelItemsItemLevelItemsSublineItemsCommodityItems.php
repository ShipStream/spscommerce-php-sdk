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
 * Code used for commodity classification
 */
class ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsSublineItemsCommodityItems extends ClassStructure
{
    const A = 'A';

    const F = 'F';

    const I = 'I';

    const J = 'J';

    const N = 'N';

    const NFT = 'NFT';

    const Q = 'Q';

    const S = 'S';

    const T = 'T';

    const U = 'U';

    const V = 'V';

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
        $properties->commodityCodeQualifier->enum = array(
            self::A,
            self::F,
            self::I,
            self::J,
            self::N,
            self::NFT,
            self::Q,
            self::S,
            self::T,
            self::U,
            self::V,
        );
        $properties->commodityCodeQualifier->description = "Code identifying the commodity coding system used for Commodity Code";
        $ownerSchema->addPropertyMapping('CommodityCodeQualifier', self::names()->commodityCodeQualifier);
        $properties->commodityCode = Schema::string();
        $properties->commodityCode->description = "Code describing a commodity or group of commodities";
        $ownerSchema->addPropertyMapping('CommodityCode', self::names()->commodityCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Code used for commodity classification";
        $ownerSchema->required = array(
        );
    }
}