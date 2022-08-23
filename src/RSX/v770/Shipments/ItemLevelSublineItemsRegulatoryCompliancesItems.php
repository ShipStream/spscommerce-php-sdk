<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Indicates that the related item[s] are following the specified government or industry rules regarding material, manufacturing process and or end product
 */
class ItemLevelSublineItemsRegulatoryCompliancesItems extends ClassStructure
{
    /** @var string Code indicating the act or legislation */
    public $regulatoryComplianceQual;

    /** @var string Code indicating a Yes or No condition or response */
    public $yesOrNoResponse;

    /** @var string The ID relating to the RegulatoryComplianceQual, if applicable */
    public $regulatoryComplianceID;

    /** @var string Used to indicate the organization responsible for validating or enforcing the RegulatoryComplianceQual when not otherwise specified by the RegulatoryComplianceQual */
    public $regulatoryAgency;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->regulatoryComplianceQual = Schema::string();
        $properties->regulatoryComplianceQual->description = "Code indicating the act or legislation";
        $ownerSchema->addPropertyMapping('RegulatoryComplianceQual', self::names()->regulatoryComplianceQual);
        $properties->yesOrNoResponse = Schema::string();
        $properties->yesOrNoResponse->description = "Code indicating a Yes or No condition or response";
        $ownerSchema->addPropertyMapping('YesOrNoResponse', self::names()->yesOrNoResponse);
        $properties->regulatoryComplianceID = Schema::string();
        $properties->regulatoryComplianceID->description = "The ID relating to the RegulatoryComplianceQual, if applicable ";
        $ownerSchema->addPropertyMapping('RegulatoryComplianceID', self::names()->regulatoryComplianceID);
        $properties->regulatoryAgency = Schema::string();
        $properties->regulatoryAgency->description = "Used to indicate the organization responsible for validating or enforcing the RegulatoryComplianceQual when not otherwise specified by the RegulatoryComplianceQual";
        $ownerSchema->addPropertyMapping('RegulatoryAgency', self::names()->regulatoryAgency);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Indicates that the related item[s] are following the specified government or industry rules regarding material, manufacturing process and or end product";
        $ownerSchema->required = array(
        );
    }
}