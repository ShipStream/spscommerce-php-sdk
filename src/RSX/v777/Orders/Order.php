<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Orders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * A request to purchase or release goods
 * Built from Orders.json#/definitions/Order
 */
class Order extends ClassStructure
{
    /** @var OrderMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var OrderHeader Encloses all document header elements */
    public $header;

    /** @var OrderLineItemItems[]|array */
    public $lineItem;

    /** @var OrderSummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = OrderMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = OrderHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = OrderLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $properties->summary = OrderSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "A request to purchase or release goods";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('Orders.json#/definitions/Order');
    }
}