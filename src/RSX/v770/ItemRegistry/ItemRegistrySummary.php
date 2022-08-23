<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\ItemRegistry;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ItemRegistrySummary extends ClassStructure
{
    /** @var float Total amount of the transaction. Sum of the item qty * price +/- the charges, allowances, and taxes, if sent */
    public $totalAmount;

    /** @var int Sum of the total number of line items in this document */
    public $totalLineItemNumber;

    /** @var float Sum of the total quantity of the line items in this document */
    public $totalQuantity;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->totalAmount = Schema::number();
        $properties->totalAmount->description = "Total amount of the transaction. Sum of the item qty * price +/- the charges, allowances, and taxes, if sent";
        $ownerSchema->addPropertyMapping('TotalAmount', self::names()->totalAmount);
        $properties->totalLineItemNumber = Schema::integer();
        $properties->totalLineItemNumber->description = "Sum of the total number of line items in this document";
        $ownerSchema->addPropertyMapping('TotalLineItemNumber', self::names()->totalLineItemNumber);
        $properties->totalQuantity = Schema::number();
        $properties->totalQuantity->description = "Sum of the total quantity of the line items in this document";
        $ownerSchema->addPropertyMapping('TotalQuantity', self::names()->totalQuantity);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}