<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleLineItemItemsForecastDeliveryItems extends ClassStructure
{
    /** @var PlanningScheduleLineItemItemsForecastDeliveryItemsShipDeliveryItems[]|array */
    public $shipDelivery;

    /** @var PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItems[]|array */
    public $forecastSchedule;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->shipDelivery = Schema::arr();
        $properties->shipDelivery->items = PlanningScheduleLineItemItemsForecastDeliveryItemsShipDeliveryItems::schema();
        $ownerSchema->addPropertyMapping('ShipDelivery', self::names()->shipDelivery);
        $properties->forecastSchedule = Schema::arr();
        $properties->forecastSchedule->items = PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItems::schema();
        $ownerSchema->addPropertyMapping('ForecastSchedule', self::names()->forecastSchedule);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}