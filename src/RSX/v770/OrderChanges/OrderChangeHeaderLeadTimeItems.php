<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeHeaderLeadTimeItems extends ClassStructure
{
    /** @var string Code indicating the time range that applies to LeadTimePeriodInterval, LeadTimeQuantity, and LeadTimeDate */
    public $leadTimeCode;

    /** @var float The amount of time allowed to fulfill the primary function of the transaction */
    public $leadTimeQuantity;

    /** @var string Code indicating the units of time that apply to the LeadTimeQuantity */
    public $leadTimePeriodInterval;

    /** @var string Date that indicates when a LeadTimeCode takes effect */
    public $leadTimeDate;

    /** @var OrderChangeHeaderLeadTimeItemsReferencesItems[]|array */
    public $references;

    /** @var OrderChangeHeaderLeadTimeItemsNotesItems[]|array */
    public $notes;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->leadTimeCode = Schema::string();
        $properties->leadTimeCode->description = "Code indicating the time range that applies to LeadTimePeriodInterval, LeadTimeQuantity, and LeadTimeDate";
        $ownerSchema->addPropertyMapping('LeadTimeCode', self::names()->leadTimeCode);
        $properties->leadTimeQuantity = Schema::number();
        $properties->leadTimeQuantity->description = "The amount of time allowed to fulfill the primary function of the transaction";
        $ownerSchema->addPropertyMapping('LeadTimeQuantity', self::names()->leadTimeQuantity);
        $properties->leadTimePeriodInterval = Schema::string();
        $properties->leadTimePeriodInterval->description = "Code indicating the units of time that apply to the LeadTimeQuantity";
        $ownerSchema->addPropertyMapping('LeadTimePeriodInterval', self::names()->leadTimePeriodInterval);
        $properties->leadTimeDate = Schema::string();
        $properties->leadTimeDate->description = "Date that indicates when a LeadTimeCode takes effect";
        $properties->leadTimeDate->format = "date";
        $ownerSchema->addPropertyMapping('LeadTimeDate', self::names()->leadTimeDate);
        $properties->references = Schema::arr();
        $properties->references->items = OrderChangeHeaderLeadTimeItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderChangeHeaderLeadTimeItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}