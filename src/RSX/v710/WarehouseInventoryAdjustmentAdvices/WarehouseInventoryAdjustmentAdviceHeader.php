<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseInventoryAdjustmentAdviceHeader extends ClassStructure
{
    /** @var WarehouseInventoryAdjustmentAdviceHeaderHeaderOrder */
    public $headerOrder;

    /** @var WarehouseInventoryAdjustmentAdviceHeaderReferenceItems[]|array */
    public $reference;

    /** @var WarehouseInventoryAdjustmentAdviceHeaderDateItems[]|array */
    public $date;

    /** @var WarehouseInventoryAdjustmentAdviceHeaderContactItems[]|array */
    public $contact;

    /** @var WarehouseInventoryAdjustmentAdviceHeaderAddressItems[]|array */
    public $address;

    /** @var WarehouseInventoryAdjustmentAdviceHeaderNotesItems[]|array */
    public $notes;

    /** @var WarehouseInventoryAdjustmentAdviceHeaderMiscellaneousItems[]|array */
    public $miscellaneous;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->headerOrder = WarehouseInventoryAdjustmentAdviceHeaderHeaderOrder::schema();
        $ownerSchema->addPropertyMapping('HeaderOrder', self::names()->headerOrder);
        $properties->reference = Schema::arr();
        $properties->reference->items = WarehouseInventoryAdjustmentAdviceHeaderReferenceItems::schema();
        $properties->reference->maxItems = 10;
        $ownerSchema->addPropertyMapping('Reference', self::names()->reference);
        $properties->date = Schema::arr();
        $properties->date->items = WarehouseInventoryAdjustmentAdviceHeaderDateItems::schema();
        $properties->date->maxItems = 5;
        $ownerSchema->addPropertyMapping('Date', self::names()->date);
        $properties->contact = Schema::arr();
        $properties->contact->items = WarehouseInventoryAdjustmentAdviceHeaderContactItems::schema();
        $properties->contact->maxItems = 3;
        $ownerSchema->addPropertyMapping('Contact', self::names()->contact);
        $properties->address = Schema::arr();
        $properties->address->items = WarehouseInventoryAdjustmentAdviceHeaderAddressItems::schema();
        $properties->address->maxItems = 100;
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->notes = Schema::arr();
        $properties->notes->items = WarehouseInventoryAdjustmentAdviceHeaderNotesItems::schema();
        $properties->notes->maxItems = 20;
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->miscellaneous = Schema::arr();
        $properties->miscellaneous->items = WarehouseInventoryAdjustmentAdviceHeaderMiscellaneousItems::schema();
        $ownerSchema->addPropertyMapping('Miscellaneous', self::names()->miscellaneous);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'HeaderOrder',
            'Address',
        );
    }
}