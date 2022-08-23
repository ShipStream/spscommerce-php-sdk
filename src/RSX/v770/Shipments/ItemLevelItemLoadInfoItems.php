<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ItemLevelItemLoadInfoItems extends ClassStructure
{
    /** @var ItemLevelItemLoadInfoItemsItemLoad */
    public $itemLoad;

    /** @var ItemLevelItemLoadInfoItemsReferencesItems[]|array */
    public $references;

    /** @var ItemLevelItemLoadInfoItemsNotesItems[]|array */
    public $notes;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->itemLoad = ItemLevelItemLoadInfoItemsItemLoad::schema();
        $ownerSchema->addPropertyMapping('ItemLoad', self::names()->itemLoad);
        $properties->references = Schema::arr();
        $properties->references->items = ItemLevelItemLoadInfoItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ItemLevelItemLoadInfoItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}