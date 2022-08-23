<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\ProductActivity;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ProductActivitySummary extends ClassStructure
{
    /** @var int Sum of the total number of line items in this document */
    public $totalLineItemNumber;

    /** @var int */
    public $totalNumberofPurchaseOrders;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->totalLineItemNumber = Schema::integer();
        $properties->totalLineItemNumber->description = "Sum of the total number of line items in this document";
        $ownerSchema->addPropertyMapping('TotalLineItemNumber', self::names()->totalLineItemNumber);
        $properties->totalNumberofPurchaseOrders = Schema::integer();
        $ownerSchema->addPropertyMapping('TotalNumberofPurchaseOrders', self::names()->totalNumberofPurchaseOrders);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}