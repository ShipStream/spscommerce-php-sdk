<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseInventoryAdjustmentAdviceHeaderNotesItems extends ClassStructure
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
    public $noteCode;

    /** @var string[]|array */
    public $noteInformationField;

    /** @var string */
    public $printerCarriageControlCode;

    /** @var string */
    public $number;

    /** @var string */
    public $languageCode;

    /** @var string */
    public $noteFormatCode;

    /** @var string */
    public $noteFunctionCode;

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
        $properties->noteCode = Schema::string();
        $ownerSchema->addPropertyMapping('NoteCode', self::names()->noteCode);
        $properties->noteInformationField = Schema::arr();
        $properties->noteInformationField->items = Schema::string();
        $properties->noteInformationField->maxItems = 2;
        $ownerSchema->addPropertyMapping('NoteInformationField', self::names()->noteInformationField);
        $properties->printerCarriageControlCode = Schema::string();
        $ownerSchema->addPropertyMapping('PrinterCarriageControlCode', self::names()->printerCarriageControlCode);
        $properties->number = Schema::string();
        $ownerSchema->addPropertyMapping('Number', self::names()->number);
        $properties->languageCode = Schema::string();
        $ownerSchema->addPropertyMapping('LanguageCode', self::names()->languageCode);
        $properties->noteFormatCode = Schema::string();
        $ownerSchema->addPropertyMapping('NoteFormatCode', self::names()->noteFormatCode);
        $properties->noteFunctionCode = Schema::string();
        $ownerSchema->addPropertyMapping('NoteFunctionCode', self::names()->noteFunctionCode);
        $ownerSchema->type = Schema::OBJECT;
    }
}