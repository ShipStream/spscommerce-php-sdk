<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class LineItems extends ClassStructure
{
    /** @var LineItemsLineItemItems[]|array */
    public $lineItem;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = LineItemsLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'LineItem',
        );
    }
}