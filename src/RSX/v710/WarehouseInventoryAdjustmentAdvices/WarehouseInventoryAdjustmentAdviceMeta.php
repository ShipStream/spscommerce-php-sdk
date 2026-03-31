<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseInventoryAdjustmentAdviceMeta extends ClassStructure
{
    /** @var string */
    public $tradingPartnerId;

    /** @var string */
    public $documentId;

    /** @var string */
    public $purchaseOrderNumber;

    /** @var string */
    public $recordType;

    /** @var int */
    public $senderUniqueID;

    /** @var string */
    public $senderCompanyName;

    /** @var int */
    public $receiverUniqueID;

    /** @var string */
    public $receiverCompanyName;

    /** @var bool */
    public $isDropShip;

    /** @var string */
    public $interchangeControlNumber;

    /** @var string */
    public $groupControlIdentifier;

    /** @var string */
    public $groupControlNumber;

    /** @var string */
    public $documentControlIdentifier;

    /** @var string */
    public $documentControlNumber;

    /** @var string */
    public $interchangeSenderID;

    /** @var string */
    public $interchangeReceiverID;

    /** @var string */
    public $groupSenderID;

    /** @var string */
    public $groupReceiverID;

    /** @var int */
    public $batchPart;

    /** @var int */
    public $batchTotal;

    /** @var string */
    public $batchID;

    /** @var string */
    public $comments;

    /** @var string */
    public $validation;

    /** @var string */
    public $orderManagement;

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
        $properties->senderUniqueID = Schema::integer();
        $ownerSchema->addPropertyMapping('SenderUniqueID', self::names()->senderUniqueID);
        $properties->senderCompanyName = Schema::string();
        $ownerSchema->addPropertyMapping('SenderCompanyName', self::names()->senderCompanyName);
        $properties->receiverUniqueID = Schema::integer();
        $ownerSchema->addPropertyMapping('ReceiverUniqueID', self::names()->receiverUniqueID);
        $properties->receiverCompanyName = Schema::string();
        $ownerSchema->addPropertyMapping('ReceiverCompanyName', self::names()->receiverCompanyName);
        $properties->isDropShip = Schema::boolean();
        $ownerSchema->addPropertyMapping('IsDropShip', self::names()->isDropShip);
        $properties->interchangeControlNumber = Schema::string();
        $ownerSchema->addPropertyMapping('InterchangeControlNumber', self::names()->interchangeControlNumber);
        $properties->groupControlIdentifier = Schema::string();
        $ownerSchema->addPropertyMapping('GroupControlIdentifier', self::names()->groupControlIdentifier);
        $properties->groupControlNumber = Schema::string();
        $ownerSchema->addPropertyMapping('GroupControlNumber', self::names()->groupControlNumber);
        $properties->documentControlIdentifier = Schema::string();
        $ownerSchema->addPropertyMapping('DocumentControlIdentifier', self::names()->documentControlIdentifier);
        $properties->documentControlNumber = Schema::string();
        $ownerSchema->addPropertyMapping('DocumentControlNumber', self::names()->documentControlNumber);
        $properties->interchangeSenderID = Schema::string();
        $ownerSchema->addPropertyMapping('InterchangeSenderID', self::names()->interchangeSenderID);
        $properties->interchangeReceiverID = Schema::string();
        $ownerSchema->addPropertyMapping('InterchangeReceiverID', self::names()->interchangeReceiverID);
        $properties->groupSenderID = Schema::string();
        $ownerSchema->addPropertyMapping('GroupSenderID', self::names()->groupSenderID);
        $properties->groupReceiverID = Schema::string();
        $ownerSchema->addPropertyMapping('GroupReceiverID', self::names()->groupReceiverID);
        $properties->batchPart = Schema::integer();
        $ownerSchema->addPropertyMapping('BatchPart', self::names()->batchPart);
        $properties->batchTotal = Schema::integer();
        $ownerSchema->addPropertyMapping('BatchTotal', self::names()->batchTotal);
        $properties->batchID = Schema::string();
        $ownerSchema->addPropertyMapping('BatchID', self::names()->batchID);
        $properties->comments = Schema::string();
        $ownerSchema->addPropertyMapping('Comments', self::names()->comments);
        $properties->validation = Schema::string();
        $ownerSchema->addPropertyMapping('Validation', self::names()->validation);
        $properties->orderManagement = Schema::string();
        $ownerSchema->addPropertyMapping('OrderManagement', self::names()->orderManagement);
        $ownerSchema->type = Schema::OBJECT;
    }
}