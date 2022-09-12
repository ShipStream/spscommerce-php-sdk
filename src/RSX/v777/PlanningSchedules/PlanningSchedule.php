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
 * Forecasts product demand. Often include resource authorization, quantities, and ship/delivery patterns
 * Built from PlanningSchedules.json#/definitions/PlanningSchedule
 */
class PlanningSchedule extends ClassStructure
{
    /** @var PlanningScheduleMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var PlanningScheduleHeader Encloses all document header elements */
    public $header;

    /** @var PlanningScheduleLineItemItems[]|array */
    public $lineItem;

    /** @var PlanningScheduleSummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = PlanningScheduleMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = PlanningScheduleHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = PlanningScheduleLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $properties->summary = PlanningScheduleSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Forecasts product demand. Often include resource authorization, quantities, and ship/delivery patterns";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('PlanningSchedules.json#/definitions/PlanningSchedule');
    }
}