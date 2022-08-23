<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\WarehouseTransferReceiptAdvice;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from WarehouseTransferReceiptAdvices.json#/definitions/WarehouseTransferReceiptAdvice
 */
class WarehouseTransferReceiptAdvice extends ClassStructure
{
    /** @var WarehouseTransferReceiptAdviceMeta Contains internal SPS information */
    public $meta;

    /** @var WarehouseTransferReceiptAdviceHeader */
    public $header;

    /** @var WarehouseTransferReceiptAdviceOrderLevel */
    public $orderLevel;

    /** @var WarehouseTransferReceiptAdviceSummary */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = WarehouseTransferReceiptAdviceMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = WarehouseTransferReceiptAdviceHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->orderLevel = WarehouseTransferReceiptAdviceOrderLevel::schema();
        $ownerSchema->addPropertyMapping('OrderLevel', self::names()->orderLevel);
        $properties->summary = WarehouseTransferReceiptAdviceSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('WarehouseTransferReceiptAdvices.json#/definitions/WarehouseTransferReceiptAdvice');
    }
}