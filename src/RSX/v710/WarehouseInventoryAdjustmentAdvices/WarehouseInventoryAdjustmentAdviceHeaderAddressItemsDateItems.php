<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Provides date and time information
 */
class WarehouseInventoryAdjustmentAdviceHeaderAddressItemsDateItems extends ClassStructure
{
    /** @var string Code specifying the type of date */
    public $dateTimeQualifier;

    /** @var string A specific day */
    public $date;

    /** @var string All standard XML formats are accepted. */
    public $time;

    /** @var string A date, time, or range of dates and times */
    public $dateTimePeriod;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->dateTimeQualifier = Schema::string();
        $properties->dateTimeQualifier->description = "Code specifying the type of date";
        $ownerSchema->addPropertyMapping('DateTimeQualifier', self::names()->dateTimeQualifier);
        $properties->date = Schema::string();
        $properties->date->description = "A specific day";
        $properties->date->format = "date";
        $ownerSchema->addPropertyMapping('Date', self::names()->date);
        $properties->time = Schema::string();
        $properties->time->description = "All standard XML formats are accepted.";
        $properties->time->format = "time";
        $ownerSchema->addPropertyMapping('Time', self::names()->time);
        $properties->dateTimePeriod = Schema::string();
        $properties->dateTimePeriod->description = "A date, time, or range of dates and times";
        $ownerSchema->addPropertyMapping('DateTimePeriod', self::names()->dateTimePeriod);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides date and time information";
        $ownerSchema->required = array(
        );
    }
}