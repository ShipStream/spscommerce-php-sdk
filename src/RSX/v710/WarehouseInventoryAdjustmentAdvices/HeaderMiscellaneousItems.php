<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class HeaderMiscellaneousItems extends ClassStructure
{
    /** @var string */
    public $tradingPartnerId;

    /** @var string */
    public $documentId;

    /** @var string */
    public $recordType;

    /** @var string */
    public $qualifier1;

    /** @var string */
    public $description1;

    /** @var string */
    public $qualifier2;

    /** @var string */
    public $description2;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->tradingPartnerId = Schema::string();
        $ownerSchema->addPropertyMapping('TradingPartnerId', self::names()->tradingPartnerId);
        $properties->documentId = Schema::string();
        $ownerSchema->addPropertyMapping('DocumentId', self::names()->documentId);
        $properties->recordType = Schema::string();
        $ownerSchema->addPropertyMapping('RecordType', self::names()->recordType);
        $properties->qualifier1 = Schema::string();
        $ownerSchema->addPropertyMapping('Qualifier1', self::names()->qualifier1);
        $properties->description1 = Schema::string();
        $ownerSchema->addPropertyMapping('Description1', self::names()->description1);
        $properties->qualifier2 = Schema::string();
        $ownerSchema->addPropertyMapping('Qualifier2', self::names()->qualifier2);
        $properties->description2 = Schema::string();
        $ownerSchema->addPropertyMapping('Description2', self::names()->description2);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'TradingPartnerId',
            'DocumentId',
            'RecordType',
            'Qualifier1',
            'Description1',
            'Qualifier2',
            'Description2',
        );
    }
}