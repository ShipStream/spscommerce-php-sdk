<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseInventoryAdjustmentAdviceSummary extends ClassStructure
{
    /** @var string */
    public $tradingPartnerId;

    /** @var string */
    public $documentId;

    /** @var string */
    public $purchaseOrderNumber;

    /** @var string */
    public $recordType;

    /** @var float */
    public $totalOrders;

    /** @var float */
    public $totalWeight;

    /** @var string */
    public $weightUOM;

    /** @var float */
    public $totalVolume;

    /** @var string */
    public $volumeUOM;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->tradingPartnerId = Schema::string();
        $ownerSchema->addPropertyMapping('TradingPartnerId', self::names()->tradingPartnerId);
        $properties->documentId = Schema::string();
        $properties->documentId->maxLength = 30;
        $ownerSchema->addPropertyMapping('DocumentId', self::names()->documentId);
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->maxLength = 30;
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->recordType = Schema::string();
        $ownerSchema->addPropertyMapping('RecordType', self::names()->recordType);
        $properties->totalOrders = Schema::number();
        $ownerSchema->addPropertyMapping('TotalOrders', self::names()->totalOrders);
        $properties->totalWeight = Schema::number();
        $ownerSchema->addPropertyMapping('TotalWeight', self::names()->totalWeight);
        $properties->weightUOM = Schema::string();
        $ownerSchema->addPropertyMapping('WeightUOM', self::names()->weightUOM);
        $properties->totalVolume = Schema::number();
        $ownerSchema->addPropertyMapping('TotalVolume', self::names()->totalVolume);
        $properties->volumeUOM = Schema::string();
        $ownerSchema->addPropertyMapping('VolumeUOM', self::names()->volumeUOM);
        $ownerSchema->type = Schema::OBJECT;
    }
}