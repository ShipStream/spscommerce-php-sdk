<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderAcks;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Indicates that the related item[s] are following the specified government or industry rules regarding material, manufacturing process and or end product
 */
class OrderAckHeaderRegulatoryCompliancesItems extends ClassStructure
{
    const ADA = 'ADA';

    const ASTC = 'ASTC';

    const ASTD = 'ASTD';

    const ASTE = 'ASTE';

    const ASTM = 'ASTM';

    const ASTP = 'ASTP';

    const CAA = 'CAA';

    const CAEC = 'CAEC';

    const CAFA0 = 'CAFA0';

    const CAFA1 = 'CAFA1';

    const CAFA2 = 'CAFA2';

    const CAFA3 = 'CAFA3';

    const CAFA4 = 'CAFA4';

    const CANC = 'CANC';

    const CE = 'CE';

    const CERC = 'CERC';

    const CPSC = 'CPSC';

    const CPSFA = 'CPSFA';

    const CPSIA = 'CPSIA';

    const CSA = 'CSA';

    const CTPAT = 'CTPAT';

    const CWA = 'CWA';

    const DOLFL = 'DOLFL';

    const DSCSA = 'DSCSA';

    const EPAES = 'EPAES';

    const EPAR = 'EPAR';

    const EUEHS = 'EUEHS';

    const FDA = 'FDA';

    const FHA = 'FHA';

    const FQA = 'FQA';

    const FTCFP = 'FTCFP';

    const FTCTF = 'FTCTF';

    const FTCWA = 'FTCWA';

    const FTR = 'FTR';

    const GCC = 'GCC';

    const GNGA = 'GNGA';

    const HCAN = 'HCAN';

    const HECC = 'HECC';

    const INCI = 'INCI';

    const KPCS = 'KPCS';

    const MSDSR = 'MSDSR';

    const NAFTA = 'NAFTA';

    const NOCSAE = 'NOCSAE';

    const NSFI = 'NSFI';

    const OGC = 'OGC';

    const PACA = 'PACA';

    const RCRA = 'RCRA';

    const SDWA = 'SDWA';

    const STAEV = 'STAEV';

    const TITX = 'TITX';

    const TSCA = 'TSCA';

    const USDA = 'USDA';

    const UWLB = 'UWLB';

    const VOORC = 'VOORC';

    const WTRS = 'WTRS';

    const N = 'N';

    const Y = 'Y';

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
        $properties->regulatoryComplianceQual->enum = array(
            self::ADA,
            self::ASTC,
            self::ASTD,
            self::ASTE,
            self::ASTM,
            self::ASTP,
            self::CAA,
            self::CAEC,
            self::CAFA0,
            self::CAFA1,
            self::CAFA2,
            self::CAFA3,
            self::CAFA4,
            self::CANC,
            self::CE,
            self::CERC,
            self::CPSC,
            self::CPSFA,
            self::CPSIA,
            self::CSA,
            self::CTPAT,
            self::CWA,
            self::DOLFL,
            self::DSCSA,
            self::EPAES,
            self::EPAR,
            self::EUEHS,
            self::FDA,
            self::FHA,
            self::FQA,
            self::FTCFP,
            self::FTCTF,
            self::FTCWA,
            self::FTR,
            self::GCC,
            self::GNGA,
            self::HCAN,
            self::HECC,
            self::INCI,
            self::KPCS,
            self::MSDSR,
            self::NAFTA,
            self::NOCSAE,
            self::NSFI,
            self::OGC,
            self::PACA,
            self::RCRA,
            self::SDWA,
            self::STAEV,
            self::TITX,
            self::TSCA,
            self::USDA,
            self::UWLB,
            self::VOORC,
            self::WTRS,
        );
        $properties->regulatoryComplianceQual->description = "Code indicating the act or legislation";
        $ownerSchema->addPropertyMapping('RegulatoryComplianceQual', self::names()->regulatoryComplianceQual);
        $properties->yesOrNoResponse = Schema::string();
        $properties->yesOrNoResponse->enum = array(
            self::N,
            self::Y,
        );
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