<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\WarehouseTransferReceiptAdvice;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseTransferReceiptAdviceSummary extends ClassStructure
{
    /** @var float */
    public $qtyReceived;

    /** @var float */
    public $unitsShipped;

    /** @var float */
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
        $ownerSchema->addPropertyMapping('QtyReceived', self::names()->qtyReceived);
        $properties->unitsShipped = Schema::number();
        $ownerSchema->addPropertyMapping('UnitsShipped', self::names()->unitsShipped);
        $properties->qtyDamageOrOnHold = Schema::number();
        $ownerSchema->addPropertyMapping('QtyDamageOrOnHold', self::names()->qtyDamageOrOnHold);
        $properties->ladingQuantityReceived = Schema::integer();
        $properties->ladingQuantityReceived->description = "Number of units/pieces of the lading quantity received";
        $ownerSchema->addPropertyMapping('LadingQuantityReceived', self::names()->ladingQuantityReceived);
        $properties->ladingQuantity = Schema::integer();
        $properties->ladingQuantity->description = "Number of units/pieces of the lading commodity";
        $ownerSchema->addPropertyMapping('LadingQuantity', self::names()->ladingQuantity);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}