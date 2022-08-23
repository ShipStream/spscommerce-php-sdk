<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Order;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderHeaderPaperworkItems extends ClassStructure
{
    /** @var string Code indicating the title or contents of a document, report, or supporting item */
    public $reportTypeCode;

    /** @var string */
    public $reportTransmissionCode;

    /** @var int */
    public $reportCopiesNeeded;

    /** @var string Code identifying an organizational entity, a physical location, property, or an individual */
    public $addressTypeCode;

    /** @var string Code identifying the structure or format of the related location number[s] */
    public $locationCodeQualifier;

    /** @var string */
    public $locationNumber;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string */
    public $actionsIndicated;

    /** @var string */
    public $requestCategoryCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->reportTypeCode = Schema::string();
        $properties->reportTypeCode->description = "Code indicating the title or contents of a document, report, or supporting item";
        $ownerSchema->addPropertyMapping('ReportTypeCode', self::names()->reportTypeCode);
        $properties->reportTransmissionCode = Schema::string();
        $ownerSchema->addPropertyMapping('ReportTransmissionCode', self::names()->reportTransmissionCode);
        $properties->reportCopiesNeeded = Schema::integer();
        $ownerSchema->addPropertyMapping('ReportCopiesNeeded', self::names()->reportCopiesNeeded);
        $properties->addressTypeCode = Schema::string();
        $properties->addressTypeCode->description = "Code identifying an organizational entity, a physical location, property, or an individual";
        $ownerSchema->addPropertyMapping('AddressTypeCode', self::names()->addressTypeCode);
        $properties->locationCodeQualifier = Schema::string();
        $properties->locationCodeQualifier->description = "Code identifying the structure or format of the related location number[s]";
        $ownerSchema->addPropertyMapping('LocationCodeQualifier', self::names()->locationCodeQualifier);
        $properties->locationNumber = Schema::string();
        $ownerSchema->addPropertyMapping('LocationNumber', self::names()->locationNumber);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->actionsIndicated = Schema::string();
        $ownerSchema->addPropertyMapping('ActionsIndicated', self::names()->actionsIndicated);
        $properties->requestCategoryCode = Schema::string();
        $ownerSchema->addPropertyMapping('RequestCategoryCode', self::names()->requestCategoryCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}