<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from OrderChanges.json#/definitions/OrderChange
 */
class OrderChange extends ClassStructure
{
    /** @var OrderChangeMeta Contains internal SPS information */
    public $meta;

    /** @var OrderChangeHeader */
    public $header;

    /** @var OrderChangeLineItemItems[]|array */
    public $lineItem;

    /** @var OrderChangeSummary */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = OrderChangeMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = OrderChangeHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = OrderChangeLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $properties->summary = OrderChangeSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('OrderChanges.json#/definitions/OrderChange');
    }
}