<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ItemLevelCarrierInformationItemsServiceLevelCodesItems extends ClassStructure
{
    /** @var string Code indicating the level of transportation service or the billing service offered by the transportation carrier */
    public $serviceLevelCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->serviceLevelCode = Schema::string();
        $properties->serviceLevelCode->description = "Code indicating the level of transportation service or the billing service offered by the transportation carrier";
        $ownerSchema->addPropertyMapping('ServiceLevelCode', self::names()->serviceLevelCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}