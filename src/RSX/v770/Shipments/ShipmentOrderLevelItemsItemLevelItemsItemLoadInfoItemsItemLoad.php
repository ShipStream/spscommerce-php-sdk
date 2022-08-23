<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsItemLevelItemsItemLoadInfoItemsItemLoad extends ClassStructure
{
    /** @var int */
    public $numberOfLoads;

    /** @var float */
    public $unitsShipped;

    /** @var string Code identifying the type of packaging */
    public $packingMedium;

    /** @var string Code identifying the type of packaging material */
    public $packingMaterial;

    /** @var float */
    public $loadSize;

    /** @var string */
    public $loadSizeUOM;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->numberOfLoads = Schema::integer();
        $ownerSchema->addPropertyMapping('NumberOfLoads', self::names()->numberOfLoads);
        $properties->unitsShipped = Schema::number();
        $ownerSchema->addPropertyMapping('UnitsShipped', self::names()->unitsShipped);
        $properties->packingMedium = Schema::string();
        $properties->packingMedium->description = "Code identifying the type of packaging";
        $ownerSchema->addPropertyMapping('PackingMedium', self::names()->packingMedium);
        $properties->packingMaterial = Schema::string();
        $properties->packingMaterial->description = "Code identifying the type of packaging material";
        $ownerSchema->addPropertyMapping('PackingMaterial', self::names()->packingMaterial);
        $properties->loadSize = Schema::number();
        $ownerSchema->addPropertyMapping('LoadSize', self::names()->loadSize);
        $properties->loadSizeUOM = Schema::string();
        $ownerSchema->addPropertyMapping('LoadSizeUOM', self::names()->loadSizeUOM);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}