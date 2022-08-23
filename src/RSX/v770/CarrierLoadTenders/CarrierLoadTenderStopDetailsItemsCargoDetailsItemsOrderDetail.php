<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTenders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Identifiers for orders that make up each stop
 */
class CarrierLoadTenderStopDetailsItemsCargoDetailsItemsOrderDetail extends ClassStructure
{
    /** @var string Identifying number for the purchase order assigned by the buying organization */
    public $purchaseOrderNumber;

    /** @var string Unique identifier for an order assigned by the selling party */
    public $sellersOrderNumber;

    /** @var string Unique identifier for an order assigned by the consignee */
    public $consigneeOrderNumber;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->description = "Identifying number for the purchase order assigned by the buying organization";
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->sellersOrderNumber = Schema::string();
        $properties->sellersOrderNumber->description = "Unique identifier for an order assigned by the selling party";
        $ownerSchema->addPropertyMapping('SellersOrderNumber', self::names()->sellersOrderNumber);
        $properties->consigneeOrderNumber = Schema::string();
        $properties->consigneeOrderNumber->description = "Unique identifier for an order assigned by the consignee";
        $ownerSchema->addPropertyMapping('ConsigneeOrderNumber', self::names()->consigneeOrderNumber);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Identifiers for orders that make up each stop";
        $ownerSchema->required = array(
        );
    }
}