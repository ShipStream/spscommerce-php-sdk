<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class Header extends ClassStructure
{
    /** @var HeaderHeaderOrder */
    public $headerOrder;

    /** @var HeaderReferenceItems[]|array */
    public $reference;

    /** @var HeaderDateItems[]|array */
    public $date;

    /** @var HeaderContactItems[]|array */
    public $contact;

    /** @var HeaderAddressItems[]|array */
    public $address;

    /** @var HeaderNotesItems[]|array */
    public $notes;

    /** @var HeaderMiscellaneousItems[]|array */
    public $miscellaneous;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->headerOrder = HeaderHeaderOrder::schema();
        $ownerSchema->addPropertyMapping('HeaderOrder', self::names()->headerOrder);
        $properties->reference = Schema::arr();
        $properties->reference->items = HeaderReferenceItems::schema();
        $properties->reference->maxItems = 10;
        $ownerSchema->addPropertyMapping('Reference', self::names()->reference);
        $properties->date = Schema::arr();
        $properties->date->items = HeaderDateItems::schema();
        $properties->date->maxItems = 5;
        $ownerSchema->addPropertyMapping('Date', self::names()->date);
        $properties->contact = Schema::arr();
        $properties->contact->items = HeaderContactItems::schema();
        $properties->contact->maxItems = 3;
        $ownerSchema->addPropertyMapping('Contact', self::names()->contact);
        $properties->address = Schema::arr();
        $properties->address->items = HeaderAddressItems::schema();
        $properties->address->maxItems = 100;
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->notes = Schema::arr();
        $properties->notes->items = HeaderNotesItems::schema();
        $properties->notes->maxItems = 20;
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->miscellaneous = Schema::arr();
        $properties->miscellaneous->items = HeaderMiscellaneousItems::schema();
        $ownerSchema->addPropertyMapping('Miscellaneous', self::names()->miscellaneous);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'HeaderOrder',
            'Address',
        );
    }
}