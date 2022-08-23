<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from PlanningSchedules.json#/definitions/PlanningSchedule
 */
class PlanningSchedule extends ClassStructure
{
    /** @var PlanningScheduleMeta Contains internal SPS information */
    public $meta;

    /** @var PlanningScheduleHeader */
    public $header;

    /** @var PlanningScheduleLineItemItems[]|array */
    public $lineItem;

    /** @var PlanningScheduleSummary */
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
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('PlanningSchedules.json#/definitions/PlanningSchedule');
    }
}