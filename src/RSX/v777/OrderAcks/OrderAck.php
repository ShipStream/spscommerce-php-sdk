<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderAcks;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * A response to an order; communicating acceptance, rejection, or an amendment
 * Built from OrderAcks.json#/definitions/OrderAck
 */
class OrderAck extends ClassStructure
{
    /** @var OrderAckMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var OrderAckHeader Encloses all document header elements */
    public $header;

    /** @var OrderAckLineItemItems[]|array */
    public $lineItem;

    /** @var OrderAckSummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = OrderAckMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = OrderAckHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = OrderAckLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $properties->summary = OrderAckSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "A response to an order; communicating acceptance, rejection, or an amendment";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('OrderAcks.json#/definitions/OrderAck');
    }
}