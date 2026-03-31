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
 * Encloses all document line item elements
 */
class WarehouseInventoryAdjustmentAdviceLineItemsLineItemItems extends ClassStructure
{
    /** @var WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsItemDetail Contains the commonly used fields in the line item level of the transaction */
    public $itemDetail;

    /** @var WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsReferenceItems[]|array */
    public $reference;

    /** @var WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsDateItems[]|array */
    public $date;

    /** @var WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsAddressItems[]|array */
    public $address;

    /** @var WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsMiscellaneousItems[]|array */
    public $miscellaneous;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->itemDetail = WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsItemDetail::schema();
        $ownerSchema->addPropertyMapping('ItemDetail', self::names()->itemDetail);
        $properties->reference = Schema::arr();
        $properties->reference->items = WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsReferenceItems::schema();
        $ownerSchema->addPropertyMapping('Reference', self::names()->reference);
        $properties->date = Schema::arr();
        $properties->date->items = WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsDateItems::schema();
        $ownerSchema->addPropertyMapping('Date', self::names()->date);
        $properties->address = Schema::arr();
        $properties->address->items = WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->miscellaneous = Schema::arr();
        $properties->miscellaneous->items = WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsMiscellaneousItems::schema();
        $ownerSchema->addPropertyMapping('Miscellaneous', self::names()->miscellaneous);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document line item elements";
        $ownerSchema->required = array(
            'ItemDetail',
        );
    }
}