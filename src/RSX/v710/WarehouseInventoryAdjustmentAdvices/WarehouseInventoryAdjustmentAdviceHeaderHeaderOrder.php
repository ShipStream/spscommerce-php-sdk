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
 * Contains the commonly used fields in the header of the transaction
 */
class WarehouseInventoryAdjustmentAdviceHeaderHeaderOrder extends ClassStructure
{
    const CONST_00 = '00';

    const CONST_01 = '01';

    const CONST_05 = '05';

    const CONST_07 = '07';

    const CR = 'CR';

    const DR = 'DR';

    const CONST_2 = '2';

    const CONST_4 = '4';

    const RH = 'RH';

    const ST = 'ST';

    const WQ = 'WQ';

    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Unique internal identifier defined by SPS Commerce which identifies the document */
    public $documentId;

    /** @var string Date of the inventory adjustment */
    public $date1;

    /** @var string Primary adjustment number assigned to the inventory adjustment */
    public $adjustmentNumber1;

    /** @var string Secondary adjustment number assigned to the inventory adjustment */
    public $adjustmentNumber2;

    /** @var string Code indicating the purpose of the transaction set */
    public $tsetPurposeCode;

    /** @var string Identifying number for a purchase order assigned by the orderer/buyer */
    public $purchaseOrderNumber;

    /** @var string Code specifying the type of transaction */
    public $transactionTypeCode;

    /** @var string Code indicating the type of action */
    public $actionCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->tradingPartnerId = Schema::string();
        $properties->tradingPartnerId->description = "Unique internal identifier defined by SPS Commerce which identifies the relationship";
        $properties->tradingPartnerId->maxLength = 15;
        $properties->tradingPartnerId->minLength = 1;
        $ownerSchema->addPropertyMapping('TradingPartnerId', self::names()->tradingPartnerId);
        $properties->documentId = Schema::string();
        $properties->documentId->description = "Unique internal identifier defined by SPS Commerce which identifies the document";
        $ownerSchema->addPropertyMapping('DocumentId', self::names()->documentId);
        $properties->date1 = Schema::string();
        $properties->date1->description = "Date of the inventory adjustment";
        $properties->date1->format = "date";
        $ownerSchema->addPropertyMapping('Date1', self::names()->date1);
        $properties->adjustmentNumber1 = Schema::string();
        $properties->adjustmentNumber1->description = "Primary adjustment number assigned to the inventory adjustment";
        $ownerSchema->addPropertyMapping('AdjustmentNumber1', self::names()->adjustmentNumber1);
        $properties->adjustmentNumber2 = Schema::string();
        $properties->adjustmentNumber2->description = "Secondary adjustment number assigned to the inventory adjustment";
        $ownerSchema->addPropertyMapping('AdjustmentNumber2', self::names()->adjustmentNumber2);
        $properties->tsetPurposeCode = Schema::string();
        $properties->tsetPurposeCode->enum = array(
            self::CONST_00,
            self::CONST_01,
            self::CONST_05,
            self::CONST_07,
        );
        $properties->tsetPurposeCode->description = "Code indicating the purpose of the transaction set";
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->description = "Identifying number for a purchase order assigned by the orderer/buyer";
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->transactionTypeCode = Schema::string();
        $properties->transactionTypeCode->enum = array(
            self::CR,
            self::DR,
        );
        $properties->transactionTypeCode->description = "Code specifying the type of transaction";
        $ownerSchema->addPropertyMapping('TransactionTypeCode', self::names()->transactionTypeCode);
        $properties->actionCode = Schema::string();
        $properties->actionCode->enum = array(
            self::CONST_2,
            self::CONST_4,
            self::RH,
            self::ST,
            self::WQ,
        );
        $properties->actionCode->description = "Code indicating the type of action";
        $ownerSchema->addPropertyMapping('ActionCode', self::names()->actionCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the header of the transaction";
        $ownerSchema->required = array(
            'TradingPartnerId',
            'DocumentId',
            'Date1',
        );
    }
}