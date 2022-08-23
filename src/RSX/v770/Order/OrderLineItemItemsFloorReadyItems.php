<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Order;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderLineItemItemsFloorReadyItems extends ClassStructure
{
    /** @var string Code indicating whether the retailer requires the item to be floor ready */
    public $floorReadyRequired;

    /** @var string Indicates the type of Floor Ready instructions being sent in a repetition of the Floor Ready group */
    public $floorReadyTypeCode;

    /** @var string Free-form description explaining the Floor Ready requirements. */
    public $floorReadyDescription;

    /** @var string Retailer assigned reference number associated with the FloorReadyType */
    public $floorReadyID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->floorReadyRequired = Schema::string();
        $properties->floorReadyRequired->description = "Code indicating whether the retailer requires the item to be floor ready";
        $ownerSchema->addPropertyMapping('FloorReadyRequired', self::names()->floorReadyRequired);
        $properties->floorReadyTypeCode = Schema::string();
        $properties->floorReadyTypeCode->description = "Indicates the type of Floor Ready instructions being sent in a repetition of the Floor Ready group";
        $ownerSchema->addPropertyMapping('FloorReadyTypeCode', self::names()->floorReadyTypeCode);
        $properties->floorReadyDescription = Schema::string();
        $properties->floorReadyDescription->description = "Free-form description explaining the Floor Ready requirements.";
        $ownerSchema->addPropertyMapping('FloorReadyDescription', self::names()->floorReadyDescription);
        $properties->floorReadyID = Schema::string();
        $properties->floorReadyID->description = "Retailer assigned reference number associated with the FloorReadyType";
        $ownerSchema->addPropertyMapping('FloorReadyID', self::names()->floorReadyID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}