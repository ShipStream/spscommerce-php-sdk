<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsAddressItemsReferenceItems extends ClassStructure
{
    /** @var string */
    public $tradingPartnerId;

    /** @var string */
    public $documentId;

    /** @var string */
    public $purchaseOrderNumber;

    /** @var string */
    public $recordType;

    /** @var string */
    public $referenceQual;

    /** @var string */
    public $referenceID;

    /** @var string */
    public $description;

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
        $properties->referenceQual = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceQual', self::names()->referenceQual);
        $properties->referenceID = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceID', self::names()->referenceID);
        $properties->description = Schema::string();
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
    }
}