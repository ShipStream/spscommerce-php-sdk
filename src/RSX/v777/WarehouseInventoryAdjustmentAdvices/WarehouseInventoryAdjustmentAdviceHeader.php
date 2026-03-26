<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document header elements
 */
class WarehouseInventoryAdjustmentAdviceHeader extends ClassStructure
{
    /** @var WarehouseInventoryAdjustmentAdviceHeaderHeaderOrder Contains the commonly used fields in the header of the transaction */
    public $headerOrder;

    /** @var WarehouseInventoryAdjustmentAdviceHeaderReferencesItems[]|array */
    public $references;

    /** @var WarehouseInventoryAdjustmentAdviceHeaderDatesItems[]|array */
    public $dates;

    /** @var WarehouseInventoryAdjustmentAdviceHeaderContactsItems[]|array */
    public $contacts;

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
        $properties->references = Schema::arr();
        $properties->references->items = WarehouseInventoryAdjustmentAdviceHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->dates = Schema::arr();
        $properties->dates->items = WarehouseInventoryAdjustmentAdviceHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = WarehouseInventoryAdjustmentAdviceHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = WarehouseInventoryAdjustmentAdviceHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->notes = Schema::arr();
        $properties->notes->items = WarehouseInventoryAdjustmentAdviceHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->miscellaneous = Schema::arr();
        $properties->miscellaneous->items = WarehouseInventoryAdjustmentAdviceHeaderMiscellaneousItems::schema();
        $ownerSchema->addPropertyMapping('Miscellaneous', self::names()->miscellaneous);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document header elements";
        $ownerSchema->required = array(
            'HeaderOrder',
        );
    }
}