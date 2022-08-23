<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderAcks;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group is to link item attributes that are talking about the same part of the item. Only once per MasterItemAttribute can a specific ItemAttributeQualifier be used
 */
class OrderAckLineItemItemsMasterItemAttributeItems extends ClassStructure
{
    /** @var OrderAckLineItemItemsMasterItemAttributeItemsItemAttributeItems[]|array */
    public $itemAttribute;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->itemAttribute = Schema::arr();
        $properties->itemAttribute->items = OrderAckLineItemItemsMasterItemAttributeItemsItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('ItemAttribute', self::names()->itemAttribute);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group is to link item attributes that are talking about the same part of the item. Only once per MasterItemAttribute can a specific ItemAttributeQualifier be used";
        $ownerSchema->required = array(
            'ItemAttribute',
        );
    }
}