<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ProductActivities;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Reports inventory counts and inventory changes, for enhanced visibility. Often reports product sales and movement of inventory between locations
 * Built from ProductActivities.json#/definitions/ProductActivity
 */
class ProductActivity extends ClassStructure
{
    /** @var ProductActivityMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var ProductActivityHeader Encloses all document header elements */
    public $header;

    /** @var ProductActivityLineItemItems[]|array */
    public $lineItem;

    /** @var ProductActivitySummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = ProductActivityMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = ProductActivityHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = ProductActivityLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $properties->summary = ProductActivitySummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Reports inventory counts and inventory changes, for enhanced visibility. Often reports product sales and movement of inventory between locations";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('ProductActivities.json#/definitions/ProductActivity');
    }
}