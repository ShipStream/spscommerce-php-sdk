<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleHeaderCarrierInformationItemsSealNumbersItems extends ClassStructure
{
    /** @var string Code indicating condition of door seal upon arrival */
    public $sealStatusCode;

    /** @var string Stamped lock that is on the container */
    public $sealNumber;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sealStatusCode = Schema::string();
        $properties->sealStatusCode->description = "Code indicating condition of door seal upon arrival";
        $ownerSchema->addPropertyMapping('SealStatusCode', self::names()->sealStatusCode);
        $properties->sealNumber = Schema::string();
        $properties->sealNumber->description = "Stamped lock that is on the container";
        $ownerSchema->addPropertyMapping('SealNumber', self::names()->sealNumber);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}