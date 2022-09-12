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
 * Forecasted dates and quantities
 */
class PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItems extends ClassStructure
{
    const A = 'A';

    const C = 'C';

    const D = 'D';

    const Q = 'Q';

    const F = 'F';

    const JIT = 'JIT';

    const M = 'M';

    const W = 'W';

    const X = 'X';

    /** @var string Code used to indicate the timeline of or commitment to the related quantities by the trading partner */
    public $forecastQualifier;

    /** @var float An estimated future amount */
    public $forecastQuantity;

    /** @var string Code indicating the timeframe of the associated quantity and frequency */
    public $forecastTimingQualifier;

    /** @var string Beginning date associated to the ForecastQuantity */
    public $forecastStartDate;

    /** @var string Ending date associated to the ForecastQuantity */
    public $forecastEndDate;

    /** @var string Time associated to the ForecastQuantity */
    public $forecastTime;

    /** @var string Type of ForecastSchedule */
    public $forecastTypeCode;

    /** @var PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItemsReferences Supplemental information supporting the transaction */
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
        $properties->forecastQualifier->enum = array(
            self::A,
            self::C,
            self::D,
            self::Q,
        );
        $properties->forecastQualifier->description = "Code used to indicate the timeline of or commitment to the related quantities by the trading partner";
        $ownerSchema->addPropertyMapping('ForecastQualifier', self::names()->forecastQualifier);
        $properties->forecastQuantity = Schema::number();
        $properties->forecastQuantity->description = "An estimated future amount";
        $ownerSchema->addPropertyMapping('ForecastQuantity', self::names()->forecastQuantity);
        $properties->forecastTimingQualifier = Schema::string();
        $properties->forecastTimingQualifier->enum = array(
            self::A,
            self::C,
            self::D,
            self::F,
            self::JIT,
            self::M,
            self::Q,
            self::W,
            self::X,
        );
        $properties->forecastTimingQualifier->description = "Code indicating the timeframe of the associated quantity and frequency";
        $ownerSchema->addPropertyMapping('ForecastTimingQualifier', self::names()->forecastTimingQualifier);
        $properties->forecastStartDate = Schema::string();
        $properties->forecastStartDate->description = "Beginning date associated to the ForecastQuantity";
        $properties->forecastStartDate->format = "date";
        $ownerSchema->addPropertyMapping('ForecastStartDate', self::names()->forecastStartDate);
        $properties->forecastEndDate = Schema::string();
        $properties->forecastEndDate->description = "Ending date associated to the ForecastQuantity";
        $properties->forecastEndDate->format = "date";
        $ownerSchema->addPropertyMapping('ForecastEndDate', self::names()->forecastEndDate);
        $properties->forecastTime = Schema::string();
        $properties->forecastTime->description = "Time associated to the ForecastQuantity";
        $properties->forecastTime->format = "time";
        $ownerSchema->addPropertyMapping('ForecastTime', self::names()->forecastTime);
        $properties->forecastTypeCode = Schema::string();
        $properties->forecastTypeCode->description = "Type of ForecastSchedule";
        $ownerSchema->addPropertyMapping('ForecastTypeCode', self::names()->forecastTypeCode);
        $properties->references = PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItemsReferences::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = PlanningScheduleLineItemItemsForecastDeliveryItemsForecastScheduleItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Forecasted dates and quantities";
        $ownerSchema->required = array(
        );
    }
}