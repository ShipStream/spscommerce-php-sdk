<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleLineItemItemsResourceAuthorizationItems extends ClassStructure
{
    /** @var string */
    public $resourceAuthorizationCode;

    /** @var string */
    public $authThroughDate;

    /** @var float */
    public $currentQuantity;

    /** @var float */
    public $maxQuantity;

    /** @var string */
    public $cumulativeStartDate;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->resourceAuthorizationCode = Schema::string();
        $ownerSchema->addPropertyMapping('ResourceAuthorizationCode', self::names()->resourceAuthorizationCode);
        $properties->authThroughDate = Schema::string();
        $properties->authThroughDate->format = "date";
        $ownerSchema->addPropertyMapping('AuthThroughDate', self::names()->authThroughDate);
        $properties->currentQuantity = Schema::number();
        $ownerSchema->addPropertyMapping('CurrentQuantity', self::names()->currentQuantity);
        $properties->maxQuantity = Schema::number();
        $ownerSchema->addPropertyMapping('MaxQuantity', self::names()->maxQuantity);
        $properties->cumulativeStartDate = Schema::string();
        $properties->cumulativeStartDate->format = "date";
        $ownerSchema->addPropertyMapping('CumulativeStartDate', self::names()->cumulativeStartDate);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}