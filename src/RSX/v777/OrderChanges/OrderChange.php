<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * A request to adjust details of a previously transmitted order
 * Built from OrderChanges.json#/definitions/OrderChange
 */
class OrderChange extends ClassStructure
{
    /** @var OrderChangeMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var OrderChangeHeader Encloses all document header elements */
    public $header;

    /** @var OrderChangeLineItemItems[]|array */
    public $lineItem;

    /** @var OrderChangeSummary Encloses all document summary elements */
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
        $ownerSchema->description = "A request to adjust details of a previously transmitted order";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('OrderChanges.json#/definitions/OrderChange');
    }
}