<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeLineItemItemsReferencesItems extends ClassStructure
{
    /** @var string Code specifying the type of data in the ReferenceID/ReferenceDescription */
    public $referenceQual;

    /** @var string */
    public $referenceID;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string */
    public $date;

    /** @var string All standard XML formats are accepted. */
    public $time;

    /** @var OrderChangeLineItemItemsReferencesItemsReferenceIDsItems[]|array */
    public $referenceIDs;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->referenceQual = Schema::string();
        $properties->referenceQual->description = "Code specifying the type of data in the ReferenceID/ReferenceDescription";
        $ownerSchema->addPropertyMapping('ReferenceQual', self::names()->referenceQual);
        $properties->referenceID = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceID', self::names()->referenceID);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->date = Schema::string();
        $properties->date->format = "date";
        $ownerSchema->addPropertyMapping('Date', self::names()->date);
        $properties->time = Schema::string();
        $properties->time->description = "All standard XML formats are accepted.";
        $properties->time->format = "time";
        $ownerSchema->addPropertyMapping('Time', self::names()->time);
        $properties->referenceIDs = Schema::arr();
        $properties->referenceIDs->items = OrderChangeLineItemItemsReferencesItemsReferenceIDsItems::schema();
        $ownerSchema->addPropertyMapping('ReferenceIDs', self::names()->referenceIDs);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}