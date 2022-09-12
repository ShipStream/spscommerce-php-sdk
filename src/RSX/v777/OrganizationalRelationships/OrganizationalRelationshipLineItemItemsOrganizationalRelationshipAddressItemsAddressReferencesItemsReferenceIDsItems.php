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
 * Supports data found in References
 */
class OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsAddressReferencesItemsReferenceIDsItems extends ClassStructure
{
    const CONST_02 = '02';

    const CONST_06 = '06';

    const CONST_12 = '12';

    const CONST_19 = '19';

    const CONST_2_I = '2I';

    const CONST_2_P = '2P';

    const CONST_5_D = '5D';

    const AAK = 'AAK';

    const AGL = 'AGL';

    const AH = 'AH';

    const AI = 'AI';

    const AN = 'AN';

    const AO = 'AO';

    const AOAC = 'AOAC';

    const AOCH = 'AOCH';

    const ARE = 'ARE';

    const AUED = 'AUED';

    const AWB = 'AWB';

    const AY = 'AY';

    const BAF = 'BAF';

    const BB = 'BB';

    const BL = 'BL';

    const BM = 'BM';

    const BT = 'BT';

    const BY = 'BY';

    const CA = 'CA';

    const CAN = 'CAN';

    const CB = 'CB';

    const CI = 'CI';

    const CN = 'CN';

    const CRM = 'CRM';

    const CT = 'CT';

    const CUDN = 'CUDN';

    const D3 = 'D3';

    const D5 = 'D5';

    const DIP = 'DIP';

    const DJ = 'DJ';

    const DK = 'DK';

    const DNN = 'DNN';

    const _DO = 'DO';

    const DRRN = 'DRRN';

    const DRWN = 'DRWN';

    const EELN = 'EELN';

    const EF = 'EF';

    const ENGC = 'ENGC';

    const ENGN = 'ENGN';

    const ES = 'ES';

    const EWC = 'EWC';

    const FL = 'FL';

    const FR = 'FR';

    const FW = 'FW';

    const GC = 'GC';

    const GD = 'GD';

    const GK = 'GK';

    const GP = 'GP';

    const GRN = 'GRN';

    const GS = 'GS';

    const GT = 'GT';

    const HC = 'HC';

    const IMEI = 'IMEI';

    const INV = 'INV';

    const IS = 'IS';

    const IT = 'IT';

    const JD = 'JD';

    const KAN = 'KAN';

    const KW = 'KW';

    const LF = 'LF';

    const LO = 'LO';

    const LT = 'LT';

    const LV = 'LV';

    const MB = 'MB';

    const MC = 'MC';

    const MK = 'MK';

    const MR = 'MR';

    const MS = 'MS';

    const OA = 'OA';

    const OB = 'OB';

    const OC = 'OC';

    const OD = 'OD';

    const P4 = 'P4';

    const PAN = 'PAN';

    const PD = 'PD';

    const PHC = 'PHC';

    const PJ = 'PJ';

    const PK = 'PK';

    const PKY = 'PKY';

    const PL = 'PL';

    const PPGP = 'PPGP';

    const PRSH = 'PRSH';

    const PS = 'PS';

    const PU = 'PU';

    const Q1 = 'Q1';

    const Q1B = 'Q1B';

    const QC = 'QC';

    const RL = 'RL';

    const ROL = 'ROL';

    const RSN = 'RSN';

    const RU = 'RU';

    const SCHN = 'SCHN';

    const SDR = 'SDR';

    const SDV = 'SDV';

    const SE = 'SE';

    const SI = 'SI';

    const SL = 'SL';

    const SLI = 'SLI';

    const SRE = 'SRE';

    const SRS = 'SRS';

    const TAN = 'TAN';

    const TC = 'TC';

    const TJ = 'TJ';

    const TN = 'TN';

    const TPF = 'TPF';

    const TPP = 'TPP';

    const UELN = 'UELN';

    const URL = 'URL';

    const USED = 'USED';

    const V3 = 'V3';

    const VF = 'VF';

    const VN = 'VN';

    const VT = 'VT';

    const VV = 'VV';

    const VWD = 'VWD';

    const VY = 'VY';

    const WBN = 'WBN';

    const WH = 'WH';

    const WLT = 'WLT';

    const WS = 'WS';

    const WU = 'WU';

    const XF = 'XF';

    const YD = 'YD';

    /** @var string Code specifying the type of data in the ReferenceID/ReferenceDescription */
    public $referenceQual;

    /** @var string Value as defined by the ReferenceQual */
    public $referenceID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->referenceQual = Schema::string();
        $properties->referenceQual->enum = array(
            self::CONST_02,
            self::CONST_06,
            self::CONST_12,
            self::CONST_19,
            self::CONST_2_I,
            self::CONST_2_P,
            self::CONST_5_D,
            self::AAK,
            self::AGL,
            self::AH,
            self::AI,
            self::AN,
            self::AO,
            self::AOAC,
            self::AOCH,
            self::ARE,
            self::AUED,
            self::AWB,
            self::AY,
            self::BAF,
            self::BB,
            self::BL,
            self::BM,
            self::BT,
            self::BY,
            self::CA,
            self::CAN,
            self::CB,
            self::CI,
            self::CN,
            self::CRM,
            self::CT,
            self::CUDN,
            self::D3,
            self::D5,
            self::DIP,
            self::DJ,
            self::DK,
            self::DNN,
            self::_DO,
            self::DRRN,
            self::DRWN,
            self::EELN,
            self::EF,
            self::ENGC,
            self::ENGN,
            self::ES,
            self::EWC,
            self::FL,
            self::FR,
            self::FW,
            self::GC,
            self::GD,
            self::GK,
            self::GP,
            self::GRN,
            self::GS,
            self::GT,
            self::HC,
            self::IMEI,
            self::INV,
            self::IS,
            self::IT,
            self::JD,
            self::KAN,
            self::KW,
            self::LF,
            self::LO,
            self::LT,
            self::LV,
            self::MB,
            self::MC,
            self::MK,
            self::MR,
            self::MS,
            self::OA,
            self::OB,
            self::OC,
            self::OD,
            self::P4,
            self::PAN,
            self::PD,
            self::PHC,
            self::PJ,
            self::PK,
            self::PKY,
            self::PL,
            self::PPGP,
            self::PRSH,
            self::PS,
            self::PU,
            self::Q1,
            self::Q1B,
            self::QC,
            self::RL,
            self::ROL,
            self::RSN,
            self::RU,
            self::SCHN,
            self::SDR,
            self::SDV,
            self::SE,
            self::SI,
            self::SL,
            self::SLI,
            self::SRE,
            self::SRS,
            self::TAN,
            self::TC,
            self::TJ,
            self::TN,
            self::TPF,
            self::TPP,
            self::UELN,
            self::URL,
            self::USED,
            self::V3,
            self::VF,
            self::VN,
            self::VT,
            self::VV,
            self::VWD,
            self::VY,
            self::WBN,
            self::WH,
            self::WLT,
            self::WS,
            self::WU,
            self::XF,
            self::YD,
        );
        $properties->referenceQual->description = "Code specifying the type of data in the ReferenceID/ReferenceDescription";
        $ownerSchema->addPropertyMapping('ReferenceQual', self::names()->referenceQual);
        $properties->referenceID = Schema::string();
        $properties->referenceID->description = "Value as defined by the ReferenceQual";
        $ownerSchema->addPropertyMapping('ReferenceID', self::names()->referenceID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Supports data found in References";
        $ownerSchema->required = array(
        );
    }
}