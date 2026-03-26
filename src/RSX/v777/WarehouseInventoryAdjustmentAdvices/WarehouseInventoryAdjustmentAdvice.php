<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Provides inventory adjustment details from the warehouse
 * Built from WarehouseInventoryAdjustmentAdvices.json#/definitions/WarehouseInventoryAdjustmentAdvice
 */
class WarehouseInventoryAdjustmentAdvice extends ClassStructure
{
    /** @var WarehouseInventoryAdjustmentAdviceMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var WarehouseInventoryAdjustmentAdviceHeader Encloses all document header elements */
    public $header;

    /** @var WarehouseInventoryAdjustmentAdviceLineItems Encloses all document line item elements */
    public $lineItems;

    /** @var WarehouseInventoryAdjustmentAdviceSummary Encloses all document summary elements */
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
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides inventory adjustment details from the warehouse";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('WarehouseInventoryAdjustmentAdvices.json#/definitions/WarehouseInventoryAdjustmentAdvice');
    }
}