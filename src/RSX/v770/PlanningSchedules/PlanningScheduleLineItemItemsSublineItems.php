<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleLineItemItemsSublineItems extends ClassStructure
{
    /** @var PlanningScheduleLineItemItemsSublineItemsSublineItemDetail */
    public $sublineItemDetail;

    /** @var PlanningScheduleLineItemItemsSublineItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var PlanningScheduleLineItemItemsSublineItemsContactsItems[]|array */
    public $contacts;

    /** @var PlanningScheduleLineItemItemsSublineItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sublineItemDetail = PlanningScheduleLineItemItemsSublineItemsSublineItemDetail::schema();
        $ownerSchema->addPropertyMapping('SublineItemDetail', self::names()->sublineItemDetail);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = PlanningScheduleLineItemItemsSublineItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = PlanningScheduleLineItemItemsSublineItemsContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = PlanningScheduleLineItemItemsSublineItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}