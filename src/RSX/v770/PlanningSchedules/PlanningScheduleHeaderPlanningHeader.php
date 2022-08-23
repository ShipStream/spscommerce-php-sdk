<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleHeaderPlanningHeader extends ClassStructure
{
    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Identifying number for the purchase order relating back to the original blanket order */
    public $releaseNumber;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

    /** @var string */
    public $scheduleTypeCode;

    /** @var string */
    public $scheduleQtyQualifier;

    /** @var string */
    public $horizonStartDate;

    /** @var string */
    public $horizonEndDate;

    /** @var string Number assigned by buyer that uniquely identifies the vendor */
    public $vendor;

    /** @var string Different entities belonging to the same parent company */
    public $division;

    /** @var string */
    public $releaseDate;

    /** @var string */
    public $reconciliationDate;

    /** @var string Identifying number for the purchase order assigned by the buying organization */
    public $purchaseOrderNumber;

    /** @var string */
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
        $properties->tsetPurposeCode->description = "Code identifying purpose or function of the transmission";
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->scheduleTypeCode = Schema::string();
        $ownerSchema->addPropertyMapping('ScheduleTypeCode', self::names()->scheduleTypeCode);
        $properties->scheduleQtyQualifier = Schema::string();
        $ownerSchema->addPropertyMapping('ScheduleQtyQualifier', self::names()->scheduleQtyQualifier);
        $properties->horizonStartDate = Schema::string();
        $properties->horizonStartDate->format = "date";
        $ownerSchema->addPropertyMapping('HorizonStartDate', self::names()->horizonStartDate);
        $properties->horizonEndDate = Schema::string();
        $properties->horizonEndDate->format = "date";
        $ownerSchema->addPropertyMapping('HorizonEndDate', self::names()->horizonEndDate);
        $properties->vendor = Schema::string();
        $properties->vendor->description = "Number assigned by buyer that uniquely identifies the vendor";
        $ownerSchema->addPropertyMapping('Vendor', self::names()->vendor);
        $properties->division = Schema::string();
        $properties->division->description = "Different entities belonging to the same parent company";
        $ownerSchema->addPropertyMapping('Division', self::names()->division);
        $properties->releaseDate = Schema::string();
        $properties->releaseDate->format = "date";
        $ownerSchema->addPropertyMapping('ReleaseDate', self::names()->releaseDate);
        $properties->reconciliationDate = Schema::string();
        $properties->reconciliationDate->format = "date";
        $ownerSchema->addPropertyMapping('ReconciliationDate', self::names()->reconciliationDate);
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->description = "Identifying number for the purchase order assigned by the buying organization";
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->planningTypeCode = Schema::string();
        $ownerSchema->addPropertyMapping('PlanningTypeCode', self::names()->planningTypeCode);
        $properties->actionCode = Schema::string();
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
        $ownerSchema->required = array(
            'TradingPartnerId',
            'ReleaseNumber',
        );
    }
}