<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class LineItemsLineItemItems extends ClassStructure
{
    /** @var LineItemsLineItemItemsItemDetail */
    public $itemDetail;

    /** @var LineItemsLineItemItemsReferenceItems[]|array */
    public $reference;

    /** @var LineItemsLineItemItemsDateItems[]|array */
    public $date;

    /** @var LineItemsLineItemItemsAddressItems[]|array */
    public $address;

    /** @var LineItemsLineItemItemsMiscellaneousItems[]|array */
    public $miscellaneous;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->itemDetail = LineItemsLineItemItemsItemDetail::schema();
        $ownerSchema->addPropertyMapping('ItemDetail', self::names()->itemDetail);
        $properties->reference = Schema::arr();
        $properties->reference->items = LineItemsLineItemItemsReferenceItems::schema();
        $ownerSchema->addPropertyMapping('Reference', self::names()->reference);
        $properties->date = Schema::arr();
        $properties->date->items = LineItemsLineItemItemsDateItems::schema();
        $ownerSchema->addPropertyMapping('Date', self::names()->date);
        $properties->address = Schema::arr();
        $properties->address->items = LineItemsLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->miscellaneous = Schema::arr();
        $properties->miscellaneous->items = LineItemsLineItemItemsMiscellaneousItems::schema();
        $ownerSchema->addPropertyMapping('Miscellaneous', self::names()->miscellaneous);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'ItemDetail',
            'Reference',
            'Date',
            'Address',
            'Miscellaneous',
        );
    }
}