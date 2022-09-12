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
 * Details the resources authorized by the trading partner
 */
class PlanningScheduleLineItemItemsResourceAuthorizationItems extends ClassStructure
{
    const FI = 'FI';

    const GS = 'GS';

    const LB = 'LB';

    const LM = 'LM';

    const MT = 'MT';

    const PQ = 'PQ';

    const PR = 'PR';

    /** @var string Identifies the resource authorized */
    public $resourceAuthorizationCode;

    /** @var string Date the trading partner authorizes commitment to a resource */
    public $authThroughDate;

    /** @var float Authorized quantity from the CumulativeStartDate to the AuthThroughDate */
    public $currentQuantity;

    /** @var float Maximum quantity from the CumulativeStartDate to the AuthThroughDate */
    public $maxQuantity;

    /** @var string Date the cumulative quantity begins */
    public $cumulativeStartDate;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->resourceAuthorizationCode = Schema::string();
        $properties->resourceAuthorizationCode->enum = array(
            self::FI,
            self::GS,
            self::LB,
            self::LM,
            self::MT,
            self::PQ,
            self::PR,
        );
        $properties->resourceAuthorizationCode->description = "Identifies the resource authorized";
        $ownerSchema->addPropertyMapping('ResourceAuthorizationCode', self::names()->resourceAuthorizationCode);
        $properties->authThroughDate = Schema::string();
        $properties->authThroughDate->description = "Date the trading partner authorizes commitment to a resource";
        $properties->authThroughDate->format = "date";
        $ownerSchema->addPropertyMapping('AuthThroughDate', self::names()->authThroughDate);
        $properties->currentQuantity = Schema::number();
        $properties->currentQuantity->description = "Authorized quantity from the CumulativeStartDate to the AuthThroughDate";
        $ownerSchema->addPropertyMapping('CurrentQuantity', self::names()->currentQuantity);
        $properties->maxQuantity = Schema::number();
        $properties->maxQuantity->description = "Maximum quantity from the CumulativeStartDate to the AuthThroughDate";
        $ownerSchema->addPropertyMapping('MaxQuantity', self::names()->maxQuantity);
        $properties->cumulativeStartDate = Schema::string();
        $properties->cumulativeStartDate->description = "Date the cumulative quantity begins";
        $properties->cumulativeStartDate->format = "date";
        $ownerSchema->addPropertyMapping('CumulativeStartDate', self::names()->cumulativeStartDate);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Details the resources authorized by the trading partner";
        $ownerSchema->required = array(
        );
    }
}