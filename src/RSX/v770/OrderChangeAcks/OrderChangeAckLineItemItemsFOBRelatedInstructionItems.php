<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChangeAcks;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeAckLineItemItemsFOBRelatedInstructionItems extends ClassStructure
{
    /** @var string Code identifying payment terms for transportation charges */
    public $fOBPayCode;

    /** @var string Code identifying the party or location responsible for organizing and paying for transportation */
    public $fOBLocationQualifier;

    /** @var string Free-form textual description of the location at which ownership of goods is transferred */
    public $fOBLocationDescription;

    /** @var string Code describing the location of ownership of the goods changes */
    public $fOBTitlePassageCode;

    /** @var string Location of ownership of the goods */
    public $fOBTitlePassageLocation;

    /** @var string Code identifying the source of the transportation terms */
    public $transportationTermsType;

    /** @var string Code that defines to the recipient what types of fees are associated with the movement of goods. By default, if you do not send the TransportationTermsType, you are using the standard codes from the Incoterms website [http://www.iccwbo.org/products-and-services/trade-facilitation/] */
    public $transportationTerms;

    /** @var string Code specifying which party should bear the burden for risk of damage occurring to goods after the sale but before delivery */
    public $riskOfLossCode;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->fOBPayCode = Schema::string();
        $properties->fOBPayCode->description = "Code identifying payment terms for transportation charges";
        $ownerSchema->addPropertyMapping('FOBPayCode', self::names()->fOBPayCode);
        $properties->fOBLocationQualifier = Schema::string();
        $properties->fOBLocationQualifier->description = "Code identifying the party or location responsible for organizing and paying for transportation";
        $ownerSchema->addPropertyMapping('FOBLocationQualifier', self::names()->fOBLocationQualifier);
        $properties->fOBLocationDescription = Schema::string();
        $properties->fOBLocationDescription->description = "Free-form textual description of the location at which ownership of goods is transferred";
        $ownerSchema->addPropertyMapping('FOBLocationDescription', self::names()->fOBLocationDescription);
        $properties->fOBTitlePassageCode = Schema::string();
        $properties->fOBTitlePassageCode->description = "Code describing the location of ownership of the goods changes";
        $ownerSchema->addPropertyMapping('FOBTitlePassageCode', self::names()->fOBTitlePassageCode);
        $properties->fOBTitlePassageLocation = Schema::string();
        $properties->fOBTitlePassageLocation->description = "Location of ownership of the goods";
        $ownerSchema->addPropertyMapping('FOBTitlePassageLocation', self::names()->fOBTitlePassageLocation);
        $properties->transportationTermsType = Schema::string();
        $properties->transportationTermsType->description = "Code identifying the source of the transportation terms";
        $ownerSchema->addPropertyMapping('TransportationTermsType', self::names()->transportationTermsType);
        $properties->transportationTerms = Schema::string();
        $properties->transportationTerms->description = "Code that defines to the recipient what types of fees are associated with the movement of goods. By default, if you do not send the TransportationTermsType, you are using the standard codes from the Incoterms website [http://www.iccwbo.org/products-and-services/trade-facilitation/]";
        $ownerSchema->addPropertyMapping('TransportationTerms', self::names()->transportationTerms);
        $properties->riskOfLossCode = Schema::string();
        $properties->riskOfLossCode->description = "Code specifying which party should bear the burden for risk of damage occurring to goods after the sale but before delivery";
        $ownerSchema->addPropertyMapping('RiskOfLossCode', self::names()->riskOfLossCode);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}