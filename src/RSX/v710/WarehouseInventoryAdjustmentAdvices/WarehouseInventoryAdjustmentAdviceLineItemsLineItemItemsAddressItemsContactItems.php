<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsAddressItemsContactItems extends ClassStructure
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
    public $contactTypeCode;

    /** @var string */
    public $contactName;

    /** @var string */
    public $contactPhone;

    /** @var string */
    public $contactFax;

    /** @var string */
    public $contactEmail;

    /** @var string */
    public $contactReference;

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
        $properties->contactTypeCode = Schema::string();
        $ownerSchema->addPropertyMapping('ContactTypeCode', self::names()->contactTypeCode);
        $properties->contactName = Schema::string();
        $ownerSchema->addPropertyMapping('ContactName', self::names()->contactName);
        $properties->contactPhone = Schema::string();
        $ownerSchema->addPropertyMapping('ContactPhone', self::names()->contactPhone);
        $properties->contactFax = Schema::string();
        $ownerSchema->addPropertyMapping('ContactFax', self::names()->contactFax);
        $properties->contactEmail = Schema::string();
        $ownerSchema->addPropertyMapping('ContactEmail', self::names()->contactEmail);
        $properties->contactReference = Schema::string();
        $ownerSchema->addPropertyMapping('ContactReference', self::names()->contactReference);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'ContactTypeCode',
        );
    }
}