<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierStatusMessages;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsQuantitiesSchedulesLocationsItemsLocationQuantityItems extends ClassStructure
{
    /** @var string For CrossDock, it's the marked for location. For MultiStore[could also be DC] ship-to location */
    public $location;

    /** @var float Numeric value of quantity */
    public $qty;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->location = Schema::string();
        $properties->location->description = "For CrossDock, it's the marked for location. For MultiStore[could also be DC] ship-to location";
        $ownerSchema->addPropertyMapping('Location', self::names()->location);
        $properties->qty = Schema::number();
        $properties->qty->description = "Numeric value of quantity";
        $ownerSchema->addPropertyMapping('Qty', self::names()->qty);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}