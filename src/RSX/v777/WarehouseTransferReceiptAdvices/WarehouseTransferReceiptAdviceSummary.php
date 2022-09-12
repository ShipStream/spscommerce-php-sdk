<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\WarehouseTransferReceiptAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document summary elements
 */
class WarehouseTransferReceiptAdviceSummary extends ClassStructure
{
    /** @var float Sum of shipping units received */
    public $qtyReceived;

    /** @var float Number of units shipped based on the manufacturer's defined value for a unit */
    public $unitsShipped;

    /** @var float Sum of received product which cannot be shipped in its present form */
    public $qtyDamageOrOnHold;

    /** @var int Number of units/pieces of the lading quantity received */
    public $ladingQuantityReceived;

    /** @var int Number of units/pieces of the lading commodity */
    public $ladingQuantity;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->qtyReceived = Schema::number();
        $properties->qtyReceived->description = "Sum of shipping units received";
        $ownerSchema->addPropertyMapping('QtyReceived', self::names()->qtyReceived);
        $properties->unitsShipped = Schema::number();
        $properties->unitsShipped->description = "Number of units shipped based on the manufacturer's defined value for a unit";
        $ownerSchema->addPropertyMapping('UnitsShipped', self::names()->unitsShipped);
        $properties->qtyDamageOrOnHold = Schema::number();
        $properties->qtyDamageOrOnHold->description = "Sum of received product which cannot be shipped in its present form";
        $ownerSchema->addPropertyMapping('QtyDamageOrOnHold', self::names()->qtyDamageOrOnHold);
        $properties->ladingQuantityReceived = Schema::integer();
        $properties->ladingQuantityReceived->description = "Number of units/pieces of the lading quantity received";
        $ownerSchema->addPropertyMapping('LadingQuantityReceived', self::names()->ladingQuantityReceived);
        $properties->ladingQuantity = Schema::integer();
        $properties->ladingQuantity->description = "Number of units/pieces of the lading commodity";
        $ownerSchema->addPropertyMapping('LadingQuantity', self::names()->ladingQuantity);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document summary elements";
        $ownerSchema->required = array(
        );
    }
}