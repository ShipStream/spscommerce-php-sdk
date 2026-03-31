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
 * Built from WarehouseInventoryAdjustmentAdvices.json#/definitions/WarehouseInventoryAdjustmentAdvice
 */
class WarehouseInventoryAdjustmentAdvice extends ClassStructure
{
    /** @var WarehouseInventoryAdjustmentAdviceMeta */
    public $meta;

    /** @var WarehouseInventoryAdjustmentAdviceHeader */
    public $header;

    /** @var WarehouseInventoryAdjustmentAdviceLineItems */
    public $lineItems;

    /** @var WarehouseInventoryAdjustmentAdviceSummary */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = WarehouseInventoryAdjustmentAdviceMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = WarehouseInventoryAdjustmentAdviceHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItems = WarehouseInventoryAdjustmentAdviceLineItems::schema();
        $ownerSchema->addPropertyMapping('LineItems', self::names()->lineItems);
        $properties->summary = WarehouseInventoryAdjustmentAdviceSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'Header',
            'LineItems',
            'Summary',
        );
        $ownerSchema->setFromRef('WarehouseInventoryAdjustmentAdvices.json#/definitions/WarehouseInventoryAdjustmentAdvice');
    }
}