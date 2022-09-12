<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Recurring shipping details
 */
class PlanningScheduleLineItemItemsForecastDeliveryItemsShipDeliveryItems extends ClassStructure
{
    const CONST_1 = '1';

    const CONST_6 = '6';

    const A = 'A';

    const B = 'B';

    const C = 'C';

    const D = 'D';

    const E = 'E';

    const F = 'F';

    const G = 'G';

    const H = 'H';

    const N = 'N';

    const O = 'O';

    const SWA = 'SWA';

    const UNDF = 'UNDF';

    /** @var string Codes used to describe the timing or frequency of delivery or shipments per the trading partner agreement */
    public $patternCode;

    /** @var string Time period of day delivery should be received */
    public $patternTimeCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->patternCode = Schema::string();
        $properties->patternCode->enum = array(
            self::CONST_1,
            self::CONST_6,
            self::A,
            self::B,
            self::C,
            self::D,
            self::E,
            self::F,
            self::G,
            self::H,
            self::N,
            self::O,
            self::SWA,
            self::UNDF,
        );
        $properties->patternCode->description = "Codes used to describe the timing or frequency of delivery or shipments per the trading partner agreement";
        $ownerSchema->addPropertyMapping('PatternCode', self::names()->patternCode);
        $properties->patternTimeCode = Schema::string();
        $properties->patternTimeCode->enum = array(
            self::A,
            self::B,
            self::C,
            self::D,
            self::E,
            self::F,
            self::G,
            self::UNDF,
        );
        $properties->patternTimeCode->description = "Time period of day delivery should be received";
        $ownerSchema->addPropertyMapping('PatternTimeCode', self::names()->patternTimeCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Recurring shipping details";
        $ownerSchema->required = array(
        );
    }
}