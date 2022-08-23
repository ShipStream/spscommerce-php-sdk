<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrganizationalRelationships;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrganizationalRelationshipHeaderOrganizationalRelationshipHeader extends ClassStructure
{
    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Unique number to the transaction */
    public $documentId;

    /** @var string */
    public $structureCode;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

    /** @var string */
    public $docDate;

    /** @var string */
    public $docTime;

    /** @var string */
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
        $ownerSchema->addPropertyMapping('StructureCode', self::names()->structureCode);
        $properties->tsetPurposeCode = Schema::string();
        $properties->tsetPurposeCode->description = "Code identifying purpose or function of the transmission";
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->docDate = Schema::string();
        $properties->docDate->format = "date";
        $ownerSchema->addPropertyMapping('DocDate', self::names()->docDate);
        $properties->docTime = Schema::string();
        $properties->docTime->format = "time";
        $ownerSchema->addPropertyMapping('DocTime', self::names()->docTime);
        $properties->tsetTypeCode = Schema::string();
        $ownerSchema->addPropertyMapping('TsetTypeCode', self::names()->tsetTypeCode);
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
            'DocumentId',
        );
    }
}