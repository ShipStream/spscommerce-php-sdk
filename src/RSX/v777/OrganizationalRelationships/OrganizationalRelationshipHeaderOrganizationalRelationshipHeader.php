<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrganizationalRelationships;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Contains the commonly used fields in the header level of the transaction
 */
class OrganizationalRelationshipHeaderOrganizationalRelationshipHeader extends ClassStructure
{
    const CONST_00 = '00';

    const CONST_01 = '01';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_07 = '07';

    const CONST_20 = '20';

    const CN = 'CN';

    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Unique number to the transaction */
    public $documentId;

    /** @var string This field is deprecated */
    public $structureCode;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

    /** @var string Date the document was created */
    public $docDate;

    /** @var string Time the document was created */
    public $docTime;

    /** @var string This field is deprecated */
    public $tsetTypeCode;

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
        $properties->documentId = Schema::string();
        $properties->documentId->description = "Unique number to the transaction";
        $ownerSchema->addPropertyMapping('DocumentId', self::names()->documentId);
        $properties->structureCode = Schema::string();
        $properties->structureCode->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('StructureCode', self::names()->structureCode);
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
        $properties->docDate = Schema::string();
        $properties->docDate->description = "Date the document was created";
        $properties->docDate->format = "date";
        $ownerSchema->addPropertyMapping('DocDate', self::names()->docDate);
        $properties->docTime = Schema::string();
        $properties->docTime->description = "Time the document was created";
        $properties->docTime->format = "time";
        $ownerSchema->addPropertyMapping('DocTime', self::names()->docTime);
        $properties->tsetTypeCode = Schema::string();
        $properties->tsetTypeCode->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('TsetTypeCode', self::names()->tsetTypeCode);
        $properties->documentVersion = Schema::string();
        $properties->documentVersion->description = "Used to communicate the version number of the current document";
        $ownerSchema->addPropertyMapping('DocumentVersion', self::names()->documentVersion);
        $properties->documentRevision = Schema::string();
        $properties->documentRevision->description = "Used to communicate the revision number of the current document";
        $ownerSchema->addPropertyMapping('DocumentRevision', self::names()->documentRevision);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the header level of the transaction";
        $ownerSchema->required = array(
            'TradingPartnerId',
            'DocumentId',
        );
    }
}