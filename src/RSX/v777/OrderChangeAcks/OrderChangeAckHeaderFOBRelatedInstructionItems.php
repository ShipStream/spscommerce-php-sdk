<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderChangeAcks;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Transportation instructions specifying at what point costs, risks, obligations, and ownership shift from seller to buyer
 */
class OrderChangeAckHeaderFOBRelatedInstructionItems extends ClassStructure
{
    const CONST_11 = '11';

    const BP = 'BP';

    const CA = 'CA';

    const CC = 'CC';

    const CD = 'CD';

    const CF = 'CF';

    const DE = 'DE';

    const DF = 'DF';

    const FO = 'FO';

    const HP = 'HP';

    const MX = 'MX';

    const NC = 'NC';

    const NR = 'NR';

    const PA = 'PA';

    const PB = 'PB';

    const PC = 'PC';

    const PD = 'PD';

    const PE = 'PE';

    const PL = 'PL';

    const PO = 'PO';

    const PP = 'PP';

    const PS = 'PS';

    const PU = 'PU';

    const RC = 'RC';

    const RF = 'RF';

    const RS = 'RS';

    const TP = 'TP';

    const WC = 'WC';

    const AC = 'AC';

    const FA = 'FA';

    const K = 'K';

    const KL = 'KL';

    const MI = 'MI';

    const _OR = 'OR';

    const RG = 'RG';

    const SP = 'SP';

    const TL = 'TL';

    const WH = 'WH';

    const FF = 'FF';

    const UN = 'UN';

    const CONST_01 = '01';

    const CONST_02 = '02';

    const CONST_03 = '03';

    const BY = 'BY';

    const FE = 'FE';

    const IM = 'IM';

    const IR = 'IR';

    const LR = 'LR';

    const SE = 'SE';

    const SR = 'SR';

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
        $properties->fOBPayCode->enum = array(
            self::CONST_11,
            self::BP,
            self::CA,
            self::CC,
            self::CD,
            self::CF,
            self::DE,
            self::DF,
            self::FO,
            self::HP,
            self::MX,
            self::NC,
            self::NR,
            self::PA,
            self::PB,
            self::PC,
            self::PD,
            self::PE,
            self::PL,
            self::PO,
            self::PP,
            self::PS,
            self::PU,
            self::RC,
            self::RF,
            self::RS,
            self::TP,
            self::WC,
        );
        $properties->fOBPayCode->description = "Code identifying payment terms for transportation charges";
        $ownerSchema->addPropertyMapping('FOBPayCode', self::names()->fOBPayCode);
        $properties->fOBLocationQualifier = Schema::string();
        $properties->fOBLocationQualifier->enum = array(
            self::AC,
            self::CC,
            self::DE,
            self::FA,
            self::K,
            self::KL,
            self::MI,
            self::_OR,
            self::PE,
            self::PL,
            self::RG,
            self::SP,
            self::TL,
            self::WH,
        );
        $properties->fOBLocationQualifier->description = "Code identifying the party or location responsible for organizing and paying for transportation";
        $ownerSchema->addPropertyMapping('FOBLocationQualifier', self::names()->fOBLocationQualifier);
        $properties->fOBLocationDescription = Schema::string();
        $properties->fOBLocationDescription->description = "Free-form textual description of the location at which ownership of goods is transferred";
        $ownerSchema->addPropertyMapping('FOBLocationDescription', self::names()->fOBLocationDescription);
        $properties->fOBTitlePassageCode = Schema::string();
        $properties->fOBTitlePassageCode->enum = array(
            self::AC,
            self::DE,
            self::FA,
            self::FF,
            self::K,
            self::KL,
            self::MI,
            self::_OR,
            self::PE,
            self::PL,
            self::RG,
            self::SP,
            self::TL,
            self::UN,
            self::WH,
        );
        $properties->fOBTitlePassageCode->description = "Code describing the location of ownership of the goods changes";
        $ownerSchema->addPropertyMapping('FOBTitlePassageCode', self::names()->fOBTitlePassageCode);
        $properties->fOBTitlePassageLocation = Schema::string();
        $properties->fOBTitlePassageLocation->description = "Location of ownership of the goods";
        $ownerSchema->addPropertyMapping('FOBTitlePassageLocation', self::names()->fOBTitlePassageLocation);
        $properties->transportationTermsType = Schema::string();
        $properties->transportationTermsType->enum = array(
            self::CONST_01,
            self::CONST_02,
            self::CONST_03,
        );
        $properties->transportationTermsType->description = "Code identifying the source of the transportation terms";
        $ownerSchema->addPropertyMapping('TransportationTermsType', self::names()->transportationTermsType);
        $properties->transportationTerms = Schema::string();
        $properties->transportationTerms->description = "Code that defines to the recipient what types of fees are associated with the movement of goods. By default, if you do not send the TransportationTermsType, you are using the standard codes from the Incoterms website [http://www.iccwbo.org/products-and-services/trade-facilitation/]";
        $ownerSchema->addPropertyMapping('TransportationTerms', self::names()->transportationTerms);
        $properties->riskOfLossCode = Schema::string();
        $properties->riskOfLossCode->enum = array(
            self::BY,
            self::FE,
            self::IM,
            self::IR,
            self::LR,
            self::PP,
            self::SE,
            self::SR,
        );
        $properties->riskOfLossCode->description = "Code specifying which party should bear the burden for risk of damage occurring to goods after the sale but before delivery";
        $ownerSchema->addPropertyMapping('RiskOfLossCode', self::names()->riskOfLossCode);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Transportation instructions specifying at what point costs, risks, obligations, and ownership shift from seller to buyer";
        $ownerSchema->required = array(
        );
    }
}