<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItems extends ClassStructure
{
    /** @var string Code used to indicate the timeline of or commitment to the related quantities by the trading partner */
    public $forecastQualifier;

    /** @var float */
    public $forecastQuantity;

    /** @var string Code indicating the timeframe of the associated quantity and frequency */
    public $forecastTimingQualifier;

    /** @var string */
    public $forecastStartDate;

    /** @var string */
    public $forecastEndDate;

    /** @var string */
    public $forecastTime;

    /** @var string */
    public $forecastTypeCode;

    /** @var PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItemsReferences */
    public $references;

    /** @var PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItemsQuantitiesSchedulesLocationsItems[]|array */
    public $quantitiesSchedulesLocations;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->forecastQualifier = Schema::string();
        $properties->forecastQualifier->description = "Code used to indicate the timeline of or commitment to the related quantities by the trading partner";
        $ownerSchema->addPropertyMapping('ForecastQualifier', self::names()->forecastQualifier);
        $properties->forecastQuantity = Schema::number();
        $ownerSchema->addPropertyMapping('ForecastQuantity', self::names()->forecastQuantity);
        $properties->forecastTimingQualifier = Schema::string();
        $properties->forecastTimingQualifier->description = "Code indicating the timeframe of the associated quantity and frequency";
        $ownerSchema->addPropertyMapping('ForecastTimingQualifier', self::names()->forecastTimingQualifier);
        $properties->forecastStartDate = Schema::string();
        $properties->forecastStartDate->format = "date";
        $ownerSchema->addPropertyMapping('ForecastStartDate', self::names()->forecastStartDate);
        $properties->forecastEndDate = Schema::string();
        $properties->forecastEndDate->format = "date";
        $ownerSchema->addPropertyMapping('ForecastEndDate', self::names()->forecastEndDate);
        $properties->forecastTime = Schema::string();
        $properties->forecastTime->format = "time";
        $ownerSchema->addPropertyMapping('ForecastTime', self::names()->forecastTime);
        $properties->forecastTypeCode = Schema::string();
        $ownerSchema->addPropertyMapping('ForecastTypeCode', self::names()->forecastTypeCode);
        $properties->references = PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItemsReferences::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}