<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document summary elements
 */
class ShipmentSummary extends ClassStructure
{
    /** @var int Number of orders enclosed in the document */
    public $totalOrders;

    /** @var int Sum of the total number of line items in this document */
    public $totalLineItemNumber;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->totalOrders = Schema::integer();
        $properties->totalOrders->description = "Number of orders enclosed in the document";
        $ownerSchema->addPropertyMapping('TotalOrders', self::names()->totalOrders);
        $properties->totalLineItemNumber = Schema::integer();
        $properties->totalLineItemNumber->description = "Sum of the total number of line items in this document";
        $ownerSchema->addPropertyMapping('TotalLineItemNumber', self::names()->totalLineItemNumber);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document summary elements";
        $ownerSchema->required = array(
        );
    }
}