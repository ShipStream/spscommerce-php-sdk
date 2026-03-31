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
class WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsDateItems extends ClassStructure
{
    const CONST_001 = '001';

    const CONST_002 = '002';

    const CONST_007 = '007';

    const CONST_011 = '011';

    const CONST_017 = '017';

    const CONST_035 = '035';

    const CONST_036 = '036';

    const CONST_050 = '050';

    const CONST_067 = '067';

    const CONST_068 = '068';

    const CONST_097 = '097';

    const CONST_118 = '118';

    const CONST_196 = '196';

    const CONST_197 = '197';

    const CONST_328 = '328';

    const CONST_369 = '369';

    const CONST_370 = '370';

    const CONST_371 = '371';

    const CONST_372 = '372';

    const CONST_405 = '405';

    const CONST_510 = '510';

    const CONST_511 = '511';

    const CONST_636 = '636';

    const CONST_807 = '807';

    const CONST_945 = '945';

    const ACT = 'ACT';

    const TRM = 'TRM';

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
        $properties->dateTimeQualifier->enum = array(
            self::CONST_001,
            self::CONST_002,
            self::CONST_007,
            self::CONST_011,
            self::CONST_017,
            self::CONST_035,
            self::CONST_036,
            self::CONST_050,
            self::CONST_067,
            self::CONST_068,
            self::CONST_097,
            self::CONST_118,
            self::CONST_196,
            self::CONST_197,
            self::CONST_328,
            self::CONST_369,
            self::CONST_370,
            self::CONST_371,
            self::CONST_372,
            self::CONST_405,
            self::CONST_510,
            self::CONST_511,
            self::CONST_636,
            self::CONST_807,
            self::CONST_945,
            self::ACT,
            self::TRM,
        );
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