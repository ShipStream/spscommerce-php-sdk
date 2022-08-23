<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItems extends ClassStructure
{
    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItemsItemLoad */
    public $itemLoad;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItemsReferencesItems[]|array */
    public $references;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItemsNotesItems[]|array */
    public $notes;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->itemLoad = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItemsItemLoad::schema();
        $ownerSchema->addPropertyMapping('ItemLoad', self::names()->itemLoad);
        $properties->references = Schema::arr();
        $properties->references->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsItemLoadInfoItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}