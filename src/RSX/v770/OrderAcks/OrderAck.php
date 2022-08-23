<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderAcks;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from OrderAcks.json#/definitions/OrderAck
 */
class OrderAck extends ClassStructure
{
    /** @var OrderAckMeta Contains internal SPS information */
    public $meta;

    /** @var OrderAckHeader */
    public $header;

    /** @var OrderAckLineItemItems[]|array */
    public $lineItem;

    /** @var OrderAckSummary */
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
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('OrderAcks.json#/definitions/OrderAck');
    }
}