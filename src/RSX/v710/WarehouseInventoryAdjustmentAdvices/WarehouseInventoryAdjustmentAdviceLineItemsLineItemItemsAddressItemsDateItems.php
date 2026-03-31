<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsAddressItemsDateItems extends ClassStructure
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
    public $dateTimeQualifier1;

    /** @var string */
    public $date1;

    /** @var string */
    public $time1;

    /** @var string */
    public $timeCode1;

    /** @var string */
    public $dateTimeFormQualifier1;

    /** @var string */
    public $dateTimePeriod;

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
        $properties->dateTimeQualifier1 = Schema::string();
        $ownerSchema->addPropertyMapping('DateTimeQualifier1', self::names()->dateTimeQualifier1);
        $properties->date1 = Schema::string();
        $properties->date1->format = "date";
        $ownerSchema->addPropertyMapping('Date1', self::names()->date1);
        $properties->time1 = Schema::string();
        $properties->time1->format = "time";
        $ownerSchema->addPropertyMapping('Time1', self::names()->time1);
        $properties->timeCode1 = Schema::string();
        $ownerSchema->addPropertyMapping('TimeCode1', self::names()->timeCode1);
        $properties->dateTimeFormQualifier1 = Schema::string();
        $ownerSchema->addPropertyMapping('DateTimeFormQualifier1', self::names()->dateTimeFormQualifier1);
        $properties->dateTimePeriod = Schema::string();
        $ownerSchema->addPropertyMapping('DateTimePeriod', self::names()->dateTimePeriod);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'DateTimeQualifier1',
            'Date1',
        );
    }
}