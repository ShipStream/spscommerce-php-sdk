<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedule;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleLineItemItemsForecastDeliveryItemsShipDeliveryItems extends ClassStructure
{
    /** @var string Codes used to describe the timing or frequency of delivery or shipments per the trading partner agreement */
    public $patternCode;

    /** @var string */
    public $patternTimeCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->patternCode = Schema::string();
        $properties->patternCode->description = "Codes used to describe the timing or frequency of delivery or shipments per the trading partner agreement";
        $ownerSchema->addPropertyMapping('PatternCode', self::names()->patternCode);
        $properties->patternTimeCode = Schema::string();
        $ownerSchema->addPropertyMapping('PatternTimeCode', self::names()->patternTimeCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}