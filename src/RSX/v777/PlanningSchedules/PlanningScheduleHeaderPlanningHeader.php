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
 * Contains the commonly used fields in the header of the transaction
 */
class PlanningScheduleHeaderPlanningHeader extends ClassStructure
{
    const CONST_00 = '00';

    const CONST_01 = '01';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_07 = '07';

    const CONST_20 = '20';

    const CN = 'CN';

    const BB = 'BB';

    const DL = 'DL';

    const PR = 'PR';

    const SH = 'SH';

    const A = 'A';

    const C = 'C';

    const R = 'R';

    const CONST_1 = '1';

    const CONST_2 = '2';

    const CONST_3 = '3';

    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Identifying number for the purchase order relating back to the original blanket order */
    public $releaseNumber;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

    /** @var string Defines the type of dates or schedules to be used in the transaction */
    public $scheduleTypeCode;

    /** @var string Indicates the type of quantities used when defining a schedule or forecast */
    public $scheduleQtyQualifier;

    /** @var string Date the forecast begins */
    public $horizonStartDate;

    /** @var string Date the forecast ends */
    public $horizonEndDate;

    /** @var string Number assigned by buyer that uniquely identifies the vendor */
    public $vendor;

    /** @var string Different entities belonging to the same parent company */
    public $division;

    /** @var string Date the forecast was created */
    public $releaseDate;

    /** @var string Date the forecast was adjusted */
    public $reconciliationDate;

    /** @var string Identifying number for the purchase order assigned by the buying organization */
    public $purchaseOrderNumber;

    /** @var string Identifies the type of planning schedule */
    public $planningTypeCode;

    /** @var string Code indicating the type of action */
    public $actionCode;

    /** @var string Used to communicate the version number of the current document */
    public $documentVersion;

    /** @var string Used to communicate the revision number of the current document */
    public $documentRevision;

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
        $properties->releaseNumber = Schema::string();
        $properties->releaseNumber->description = "Identifying number for the purchase order relating back to the original blanket order";
        $ownerSchema->addPropertyMapping('ReleaseNumber', self::names()->releaseNumber);
        $properties->tsetPurposeCode = Schema::string();
        $properties->tsetPurposeCode->enum = array(
            self::CONST_00,
            self::CONST_01,
            self::CONST_05,
            self::CONST_06,
            self::CONST_07,
            self::CONST_20,
            self::CN,
        );
        $properties->tsetPurposeCode->description = "Code identifying purpose or function of the transmission";
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->scheduleTypeCode = Schema::string();
        $properties->scheduleTypeCode->enum = array(
            self::BB,
            self::DL,
            self::PR,
            self::SH,
        );
        $properties->scheduleTypeCode->description = "Defines the type of dates or schedules to be used in the transaction";
        $ownerSchema->addPropertyMapping('ScheduleTypeCode', self::names()->scheduleTypeCode);
        $properties->scheduleQtyQualifier = Schema::string();
        $properties->scheduleQtyQualifier->enum = array(
            self::A,
            self::C,
            self::R,
        );
        $properties->scheduleQtyQualifier->description = "Indicates the type of quantities used when defining a schedule or forecast";
        $ownerSchema->addPropertyMapping('ScheduleQtyQualifier', self::names()->scheduleQtyQualifier);
        $properties->horizonStartDate = Schema::string();
        $properties->horizonStartDate->description = "Date the forecast begins";
        $properties->horizonStartDate->format = "date";
        $ownerSchema->addPropertyMapping('HorizonStartDate', self::names()->horizonStartDate);
        $properties->horizonEndDate = Schema::string();
        $properties->horizonEndDate->description = "Date the forecast ends";
        $properties->horizonEndDate->format = "date";
        $ownerSchema->addPropertyMapping('HorizonEndDate', self::names()->horizonEndDate);
        $properties->vendor = Schema::string();
        $properties->vendor->description = "Number assigned by buyer that uniquely identifies the vendor";
        $ownerSchema->addPropertyMapping('Vendor', self::names()->vendor);
        $properties->division = Schema::string();
        $properties->division->description = "Different entities belonging to the same parent company";
        $ownerSchema->addPropertyMapping('Division', self::names()->division);
        $properties->releaseDate = Schema::string();
        $properties->releaseDate->description = "Date the forecast was created";
        $properties->releaseDate->format = "date";
        $ownerSchema->addPropertyMapping('ReleaseDate', self::names()->releaseDate);
        $properties->reconciliationDate = Schema::string();
        $properties->reconciliationDate->description = "Date the forecast was adjusted";
        $properties->reconciliationDate->format = "date";
        $ownerSchema->addPropertyMapping('ReconciliationDate', self::names()->reconciliationDate);
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->description = "Identifying number for the purchase order assigned by the buying organization";
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->planningTypeCode = Schema::string();
        $properties->planningTypeCode->description = "Identifies the type of planning schedule";
        $ownerSchema->addPropertyMapping('PlanningTypeCode', self::names()->planningTypeCode);
        $properties->actionCode = Schema::string();
        $properties->actionCode->enum = array(
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
        );
        $properties->actionCode->description = "Code indicating the type of action";
        $ownerSchema->addPropertyMapping('ActionCode', self::names()->actionCode);
        $properties->documentVersion = Schema::string();
        $properties->documentVersion->description = "Used to communicate the version number of the current document";
        $ownerSchema->addPropertyMapping('DocumentVersion', self::names()->documentVersion);
        $properties->documentRevision = Schema::string();
        $properties->documentRevision->description = "Used to communicate the revision number of the current document";
        $ownerSchema->addPropertyMapping('DocumentRevision', self::names()->documentRevision);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the header of the transaction";
        $ownerSchema->required = array(
            'TradingPartnerId',
            'ReleaseNumber',
        );
    }
}