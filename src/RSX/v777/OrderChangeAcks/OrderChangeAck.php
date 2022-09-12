<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderChangeAcks;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * A response to a order change; communicating acceptance, rejection, or an amendment
 * Built from OrderChangeAcks.json#/definitions/OrderChangeAck
 */
class OrderChangeAck extends ClassStructure
{
    /** @var OrderChangeAckMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var OrderChangeAckHeader Encloses all document header elements */
    public $header;

    /** @var OrderChangeAckLineItemItems[]|array */
    public $lineItem;

    /** @var OrderChangeAckSummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = OrderChangeAckMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = OrderChangeAckHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = OrderChangeAckLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $properties->summary = OrderChangeAckSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "A response to a order change; communicating acceptance, rejection, or an amendment";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('OrderChangeAcks.json#/definitions/OrderChangeAck');
    }
}