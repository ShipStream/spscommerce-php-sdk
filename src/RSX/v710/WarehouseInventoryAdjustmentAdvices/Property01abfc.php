<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * WarehouseInventoryAdjustmentAdvice
 * Built from WarehouseInventoryAdjustmentAdvices.json#
 */
class Property01abfc extends ClassStructure
{
    /** @var Meta */
    public $meta;

    /** @var Header */
    public $header;

    /** @var LineItems */
    public $lineItems;

    /** @var Summary */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = Meta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = Header::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItems = LineItems::schema();
        $ownerSchema->addPropertyMapping('LineItems', self::names()->lineItems);
        $properties->summary = Summary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->schema = "http://json-schema.org/draft-07/schema#";
        $ownerSchema->title = "WarehouseInventoryAdjustmentAdvice";
        $ownerSchema->required = array(
            'Header',
            'LineItems',
            'Summary',
        );
        $ownerSchema->setFromRef('WarehouseInventoryAdjustmentAdvices.json#');
    }
}