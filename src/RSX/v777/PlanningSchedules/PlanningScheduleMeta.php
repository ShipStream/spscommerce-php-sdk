<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Information used for internal purposes at SPS Commerce
 */
class PlanningScheduleMeta extends ClassStructure
{
    const BULK_IMPORT = 'Bulk-Import';

    const CROSS_DOCK = 'CrossDock';

    const DROP_SHIP = 'DropShip';

    const INVENTORY_ADVICE = 'InventoryAdvice';

    const ITEM_MANAGEMENT_SERVICE = 'ItemManagementService';

    const LOGISTICS_MANAGEMENT = 'LogisticsManagement';

    const MULTI_STORE = 'MultiStore';

    const NONE = 'None';

    const PLANNING_SCHEDULE_RELEASE = 'PlanningScheduleRelease';

    const PRODUCT_ACTIVITY_REPORT = 'ProductActivityReport';

    const SALES_OR_PRICE_CATALOG = 'SalesOrPriceCatalog';

    const SMALL_PACKAGE = 'SmallPackage';

    const STOCK_RELEASE = 'StockRelease';

    const STOCK_TRANSFER = 'StockTransfer';

    const TRUCKLOAD_LTL = 'Truckload-LTL';

    /** @var string */
    public $senderUniqueID;

    /** @var string */
    public $senderCompanyName;

    /** @var string */
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

    /** @var string */
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

    /** @var string XML Version number */
    public $version;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->senderUniqueID = Schema::string();
        $ownerSchema->addPropertyMapping('SenderUniqueID', self::names()->senderUniqueID);
        $properties->senderCompanyName = Schema::string();
        $ownerSchema->addPropertyMapping('SenderCompanyName', self::names()->senderCompanyName);
        $properties->receiverUniqueID = Schema::string();
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
        $properties->batchPart = Schema::string();
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
        $properties->orderManagement->enum = array(
            self::BULK_IMPORT,
            self::CROSS_DOCK,
            self::DROP_SHIP,
            self::INVENTORY_ADVICE,
            self::ITEM_MANAGEMENT_SERVICE,
            self::LOGISTICS_MANAGEMENT,
            self::MULTI_STORE,
            self::NONE,
            self::PLANNING_SCHEDULE_RELEASE,
            self::PRODUCT_ACTIVITY_REPORT,
            self::SALES_OR_PRICE_CATALOG,
            self::SMALL_PACKAGE,
            self::STOCK_RELEASE,
            self::STOCK_TRANSFER,
            self::TRUCKLOAD_LTL,
        );
        $ownerSchema->addPropertyMapping('OrderManagement', self::names()->orderManagement);
        $properties->version = Schema::string();
        $properties->version->description = "XML Version number";
        $ownerSchema->addPropertyMapping('Version', self::names()->version);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Information used for internal purposes at SPS Commerce";
        $ownerSchema->required = array(
        );
    }
}