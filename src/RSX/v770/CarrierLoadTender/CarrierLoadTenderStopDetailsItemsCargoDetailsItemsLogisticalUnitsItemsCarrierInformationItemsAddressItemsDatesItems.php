<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTender;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsCarrierInformationItemsAddressItemsDatesItems extends ClassStructure
{
    /** @var string Code specifying the type of date */
    public $dateTimeQualifier;

    /** @var string */
    public $date;

    /** @var string */
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
        $properties->date->format = "date";
        $ownerSchema->addPropertyMapping('Date', self::names()->date);
        $properties->dateTimePeriod = Schema::string();
        $ownerSchema->addPropertyMapping('DateTimePeriod', self::names()->dateTimePeriod);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}