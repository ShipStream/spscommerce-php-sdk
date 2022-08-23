<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedule;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleLineItemItemsShipReceiveItems extends ClassStructure
{
    /** @var string Qualifier used to define the type of quantity to follow */
    public $quantityQualifier;

    /** @var float */
    public $shipReceiveQty;

    /** @var string */
    public $shipReceiveDateQualifier;

    /** @var string */
    public $shipReceiveDate;

    /** @var string */
    public $shipReceiveTime;

    /** @var string */
    public $endDate;

    /** @var string */
    public $endTime;

    /** @var PlanningScheduleLineItemItemsShipReceiveItemsReferencesItems[]|array */
    public $references;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->quantityQualifier = Schema::string();
        $properties->quantityQualifier->description = "Qualifier used to define the type of quantity to follow";
        $ownerSchema->addPropertyMapping('QuantityQualifier', self::names()->quantityQualifier);
        $properties->shipReceiveQty = Schema::number();
        $ownerSchema->addPropertyMapping('ShipReceiveQty', self::names()->shipReceiveQty);
        $properties->shipReceiveDateQualifier = Schema::string();
        $ownerSchema->addPropertyMapping('ShipReceiveDateQualifier', self::names()->shipReceiveDateQualifier);
        $properties->shipReceiveDate = Schema::string();
        $properties->shipReceiveDate->format = "date";
        $ownerSchema->addPropertyMapping('ShipReceiveDate', self::names()->shipReceiveDate);
        $properties->shipReceiveTime = Schema::string();
        $properties->shipReceiveTime->format = "time";
        $ownerSchema->addPropertyMapping('ShipReceiveTime', self::names()->shipReceiveTime);
        $properties->endDate = Schema::string();
        $properties->endDate->format = "date";
        $ownerSchema->addPropertyMapping('EndDate', self::names()->endDate);
        $properties->endTime = Schema::string();
        $properties->endTime->format = "time";
        $ownerSchema->addPropertyMapping('EndTime', self::names()->endTime);
        $properties->references = Schema::arr();
        $properties->references->items = PlanningScheduleLineItemItemsShipReceiveItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}