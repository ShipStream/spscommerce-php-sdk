<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ProductActivities;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Contains the commonly used fields in the header of the transaction
 */
class ProductActivityHeaderReportHeader extends ClassStructure
{
    const F = 'F';

    const G = 'G';

    const H = 'H';

    const CONST_00 = '00';

    const CONST_01 = '01';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_07 = '07';

    const CONST_20 = '20';

    const CN = 'CN';

    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Beginning date associated to the report */
    public $reportStartDate;

    /** @var string Ending date associated to the report */
    public $reportEndDate;

    /** @var string Describes the action to be taken from the transaction */
    public $activityHandlingCode;

    /** @var string Name or number identifying an area wherein merchandise is categorized within a store */
    public $department;

    /** @var string Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store */
    public $departmentDescription;

    /** @var string Number assigned by buyer that uniquely identifies the vendor */
    public $vendor;

    /** @var string Used to communicate the version number of the current document */
    public $documentVersion;

    /** @var string Used to communicate the revision number of the current document */
    public $documentRevision;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

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
        $properties->reportStartDate = Schema::string();
        $properties->reportStartDate->description = "Beginning date associated to the report";
        $properties->reportStartDate->format = "date";
        $ownerSchema->addPropertyMapping('ReportStartDate', self::names()->reportStartDate);
        $properties->reportEndDate = Schema::string();
        $properties->reportEndDate->description = "Ending date associated to the report";
        $properties->reportEndDate->format = "date";
        $ownerSchema->addPropertyMapping('ReportEndDate', self::names()->reportEndDate);
        $properties->activityHandlingCode = Schema::string();
        $properties->activityHandlingCode->enum = array(
            self::F,
            self::G,
            self::H,
        );
        $properties->activityHandlingCode->description = "Describes the action to be taken from the transaction";
        $ownerSchema->addPropertyMapping('ActivityHandlingCode', self::names()->activityHandlingCode);
        $properties->department = Schema::string();
        $properties->department->description = "Name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('Department', self::names()->department);
        $properties->departmentDescription = Schema::string();
        $properties->departmentDescription->description = "Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('DepartmentDescription', self::names()->departmentDescription);
        $properties->vendor = Schema::string();
        $properties->vendor->description = "Number assigned by buyer that uniquely identifies the vendor";
        $ownerSchema->addPropertyMapping('Vendor', self::names()->vendor);
        $properties->documentVersion = Schema::string();
        $properties->documentVersion->description = "Used to communicate the version number of the current document";
        $ownerSchema->addPropertyMapping('DocumentVersion', self::names()->documentVersion);
        $properties->documentRevision = Schema::string();
        $properties->documentRevision->description = "Used to communicate the revision number of the current document";
        $ownerSchema->addPropertyMapping('DocumentRevision', self::names()->documentRevision);
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
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the header of the transaction";
        $ownerSchema->required = array(
            'TradingPartnerId',
            'ReportStartDate',
        );
    }
}