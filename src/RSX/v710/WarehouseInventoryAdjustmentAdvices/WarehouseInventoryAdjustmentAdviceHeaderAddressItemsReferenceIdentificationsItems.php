<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseInventoryAdjustmentAdviceHeaderAddressItemsReferenceIdentificationsItems extends ClassStructure
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
    public $referenceQual1;

    /** @var string */
    public $referenceID1;

    /** @var string */
    public $description;

    /** @var string */
    public $date1;

    /** @var string */
    public $time1;

    /** @var string */
    public $timeCode1;

    /** @var string */
    public $referenceQual2;

    /** @var string */
    public $referenceID2;

    /** @var string */
    public $referenceQual3;

    /** @var string */
    public $referenceID3;

    /** @var string */
    public $referenceQual4;

    /** @var string */
    public $referenceID4;

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
        $properties->referenceQual1 = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceQual1', self::names()->referenceQual1);
        $properties->referenceID1 = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceID1', self::names()->referenceID1);
        $properties->description = Schema::string();
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->date1 = Schema::string();
        $properties->date1->format = "date";
        $ownerSchema->addPropertyMapping('Date1', self::names()->date1);
        $properties->time1 = Schema::string();
        $properties->time1->format = "time";
        $ownerSchema->addPropertyMapping('Time1', self::names()->time1);
        $properties->timeCode1 = Schema::string();
        $ownerSchema->addPropertyMapping('TimeCode1', self::names()->timeCode1);
        $properties->referenceQual2 = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceQual2', self::names()->referenceQual2);
        $properties->referenceID2 = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceID2', self::names()->referenceID2);
        $properties->referenceQual3 = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceQual3', self::names()->referenceQual3);
        $properties->referenceID3 = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceID3', self::names()->referenceID3);
        $properties->referenceQual4 = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceQual4', self::names()->referenceQual4);
        $properties->referenceID4 = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceID4', self::names()->referenceID4);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'ReferenceQual1',
        );
    }
}