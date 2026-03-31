<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class HeaderHeaderOrder extends ClassStructure
{
    /** @var string */
    public $tradingPartnerId;

    /** @var string */
    public $documentId;

    /** @var string */
    public $recordType;

    /** @var string */
    public $date1;

    /** @var string */
    public $adjustmentNumber1;

    /** @var string */
    public $adjustmentNumber2;

    /** @var string */
    public $tsetPurposeCode;

    /** @var string */
    public $purchaseOrderNumber;

    /** @var string */
    public $transactionTypeCode;

    /** @var string */
    public $actionCode;

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
        $properties->recordType = Schema::string();
        $ownerSchema->addPropertyMapping('RecordType', self::names()->recordType);
        $properties->date1 = Schema::string();
        $properties->date1->format = "date";
        $ownerSchema->addPropertyMapping('Date1', self::names()->date1);
        $properties->adjustmentNumber1 = Schema::string();
        $ownerSchema->addPropertyMapping('AdjustmentNumber1', self::names()->adjustmentNumber1);
        $properties->adjustmentNumber2 = Schema::string();
        $ownerSchema->addPropertyMapping('AdjustmentNumber2', self::names()->adjustmentNumber2);
        $properties->tsetPurposeCode = Schema::string();
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->maxLength = 30;
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->transactionTypeCode = Schema::string();
        $ownerSchema->addPropertyMapping('TransactionTypeCode', self::names()->transactionTypeCode);
        $properties->actionCode = Schema::string();
        $ownerSchema->addPropertyMapping('ActionCode', self::names()->actionCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'TradingPartnerId',
            'DocumentId',
            'Date1',
        );
    }
}