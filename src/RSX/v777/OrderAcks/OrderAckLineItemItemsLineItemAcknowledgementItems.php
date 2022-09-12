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
 * Provides a response to the detail[s] of a requested item
 */
class OrderAckLineItemItemsLineItemAcknowledgementItems extends ClassStructure
{
    const AA = 'AA';

    const AC = 'AC';

    const AR = 'AR';

    const BP = 'BP';

    const CC = 'CC';

    const DR = 'DR';

    const IA = 'IA';

    const IB = 'IB';

    const IC = 'IC';

    const ID = 'ID';

    const IE = 'IE';

    const _IF = 'IF';

    const IH = 'IH';

    const IP = 'IP';

    const IQ = 'IQ';

    const IR = 'IR';

    const IS = 'IS';

    const IW = 'IW';

    const R1 = 'R1';

    const R2 = 'R2';

    const R3 = 'R3';

    const R4 = 'R4';

    const R7 = 'R7';

    const ROS = 'ROS';

    const SP = 'SP';

    const UM = 'UM';

    const CONST_01 = '01';

    const CONST_03 = '03';

    const CONST_12 = '12';

    const CONST_15 = '15';

    const CONST_1_N = '1N';

    const CONST_2_N = '2N';

    const CONST_2_P = '2P';

    const CONST_2_W = '2W';

    const CONST_31 = '31';

    const CONST_3_F = '3F';

    const CONST_3_T = '3T';

    const CONST_4_E = '4E';

    const CONST_4_F = '4F';

    const CONST_4_G = '4G';

    const CONST_50 = '50';

    const CONST_5_I = '5I';

    const CONST_68 = '68';

    const CONST_8_C = '8C';

    const AD = 'AD';

    const AF = 'AF';

    const AM = 'AM';

    const _AS = 'AS';

    const AV = 'AV';

    const AY = 'AY';

    const BA = 'BA';

    const BB = 'BB';

    const BC = 'BC';

    const BD = 'BD';

    const BF = 'BF';

    const BG = 'BG';

    const BI = 'BI';

    const BJ = 'BJ';

    const BK = 'BK';

    const BL = 'BL';

    const BM = 'BM';

    const BN = 'BN';

    const BO = 'BO';

    const BR = 'BR';

    const BT = 'BT';

    const BTU = 'BTU';

    const BU = 'BU';

    const BX = 'BX';

    const C3 = 'C3';

    const C4 = 'C4';

    const C8 = 'C8';

    const CA = 'CA';

    const CA1 = 'CA1';

    const CA2 = 'CA2';

    const CB = 'CB';

    const CD = 'CD';

    const CE = 'CE';

    const CF = 'CF';

    const CFM = 'CFM';

    const CG = 'CG';

    const CH = 'CH';

    const CI = 'CI';

    const CL = 'CL';

    const CM = 'CM';

    const CN = 'CN';

    const CP = 'CP';

    const CQ = 'CQ';

    const CR = 'CR';

    const CS = 'CS';

    const CT = 'CT';

    const CU = 'CU';

    const CW = 'CW';

    const CX = 'CX';

    const CY = 'CY';

    const DA = 'DA';

    const DB = 'DB';

    const DD = 'DD';

    const DE = 'DE';

    const DG = 'DG';

    const DH = 'DH';

    const DI = 'DI';

    const DK = 'DK';

    const DL = 'DL';

    const DM = 'DM';

    const _DO = 'DO';

    const DP = 'DP';

    const DS = 'DS';

    const DW = 'DW';

    const DWT = 'DWT';

    const DZ = 'DZ';

    const E1 = 'E1';

    const EA = 'EA';

    const EP = 'EP';

    const EV = 'EV';

    const FA = 'FA';

    const FF = 'FF';

    const FO = 'FO';

    const FT = 'FT';

    const FYGD = 'FYGD';

    const FZ = 'FZ';

    const GA = 'GA';

    const GB = 'GB';

    const GH = 'GH';

    const GHZ = 'GHZ';

    const GL = 'GL';

    const GM = 'GM';

    const GN = 'GN';

    const GPM = 'GPM';

    const GR = 'GR';

    const GS = 'GS';

    const H1 = 'H1';

    const H2 = 'H2';

    const H3 = 'H3';

    const H4 = 'H4';

    const H6 = 'H6';

    const HA = 'HA';

    const HC = 'HC';

    const HCF = 'HCF';

    const HD = 'HD';

    const HF = 'HF';

    const HK = 'HK';

    const HL = 'HL';

    const HR = 'HR';

    const HS = 'HS';

    const HU = 'HU';

    const HV = 'HV';

    const HY = 'HY';

    const HZ = 'HZ';

    const I = 'I';

    const IM = 'IM';

    const IN = 'IN';

    const JA = 'JA';

    const JO = 'JO';

    const JR = 'JR';

    const JU = 'JU';

    const K6 = 'K6';

    const KC = 'KC';

    const KE = 'KE';

    const KG = 'KG';

    const KH = 'KH';

    const KM = 'KM';

    const KT = 'KT';

    const KV = 'KV';

    const KVA = 'KVA';

    const KVAH = 'KVAH';

    const KW = 'KW';

    const LB = 'LB';

    const LF = 'LF';

    const LG = 'LG';

    const LI = 'LI';

    const LK = 'LK';

    const LM = 'LM';

    const LN = 'LN';

    const LO = 'LO';

    const LR = 'LR';

    const LS = 'LS';

    const LT = 'LT';

    const LU = 'LU';

    const LY = 'LY';

    const MB = 'MB';

    const MC = 'MC';

    const ME = 'ME';

    const MG = 'MG';

    const MHZ = 'MHZ';

    const MJ = 'MJ';

    const MK = 'MK';

    const ML = 'ML';

    const MM = 'MM';

    const MN = 'MN';

    const MO = 'MO';

    const MOA = 'MOA';

    const MP = 'MP';

    const MR = 'MR';

    const NG = 'NG';

    const NS = 'NS';

    const NX = 'NX';

    const OP = 'OP';

    const OZ = 'OZ';

    const P = 'P';

    const P3 = 'P3';

    const P4 = 'P4';

    const P5 = 'P5';

    const P6 = 'P6';

    const P7 = 'P7';

    const P8 = 'P8';

    const P9 = 'P9';

    const PA = 'PA';

    const PC = 'PC';

    const PD = 'PD';

    const PER = 'PER';

    const PF = 'PF';

    const PH = 'PH';

    const PK = 'PK';

    const PL = 'PL';

    const PO = 'PO';

    const PP = 'PP';

    const PR = 'PR';

    const PSI = 'PSI';

    const PT = 'PT';

    const PV = 'PV';

    const PXL = 'PXL';

    const PY = 'PY';

    const Q1 = 'Q1';

    const Q4 = 'Q4';

    const Q5 = 'Q5';

    const Q6 = 'Q6';

    const Q7 = 'Q7';

    const QD = 'QD';

    const QS = 'QS';

    const QT = 'QT';

    const RA = 'RA';

    const RE = 'RE';

    const RL = 'RL';

    const RM = 'RM';

    const RO = 'RO';

    const SC = 'SC';

    const SF = 'SF';

    const SH = 'SH';

    const SI = 'SI';

    const SJ = 'SJ';

    const SL = 'SL';

    const SM = 'SM';

    const SO = 'SO';

    const SQ = 'SQ';

    const ST = 'ST';

    const SV = 'SV';

    const SY = 'SY';

    const SZ = 'SZ';

    const T4 = 'T4';

    const TB = 'TB';

    const TC = 'TC';

    const TCF = 'TCF';

    const TE = 'TE';

    const TH = 'TH';

    const TI = 'TI';

    const TK = 'TK';

    const TL = 'TL';

    const TM = 'TM';

    const TO = 'TO';

    const TP = 'TP';

    const TR = 'TR';

    const TRM = 'TRM';

    const TS = 'TS';

    const TU = 'TU';

    const TY = 'TY';

    const U2 = 'U2';

    const U5 = 'U5';

    const UN = 'UN';

    const UZ = 'UZ';

    const _VAR = 'VAR';

    const VC = 'VC';

    const VI = 'VI';

    const VO = 'VO';

    const WA = 'WA';

    const WD = 'WD';

    const WG = 'WG';

    const WK = 'WK';

    const WR = 'WR';

    const X8 = 'X8';

    const Y4 = 'Y4';

    const YD = 'YD';

    const YR = 'YR';

    const ZC = 'ZC';

    const CONST_001 = '001';

    const CONST_002 = '002';

    const CONST_006 = '006';

    const CONST_007 = '007';

    const CONST_010 = '010';

    const CONST_011 = '011';

    const CONST_012 = '012';

    const CONST_013 = '013';

    const CONST_015 = '015';

    const CONST_016 = '016';

    const CONST_017 = '017';

    const CONST_018 = '018';

    const CONST_019 = '019';

    const CONST_020 = '020';

    const CONST_035 = '035';

    const CONST_036 = '036';

    const CONST_037 = '037';

    const CONST_038 = '038';

    const CONST_043 = '043';

    const CONST_050 = '050';

    const CONST_057 = '057';

    const CONST_060 = '060';

    const CONST_063 = '063';

    const CONST_064 = '064';

    const CONST_067 = '067';

    const CONST_068 = '068';

    const CONST_069 = '069';

    const CONST_071 = '071';

    const CONST_074 = '074';

    const CONST_076 = '076';

    const CONST_077 = '077';

    const CONST_079 = '079';

    const CONST_086 = '086';

    const CONST_087 = '087';

    const CONST_097 = '097';

    const CONST_100 = '100';

    const CONST_110 = '110';

    const CONST_118 = '118';

    const CONST_145 = '145';

    const CONST_146 = '146';

    const CONST_168 = '168';

    const CONST_171 = '171';

    const CONST_191 = '191';

    const CONST_196 = '196';

    const CONST_197 = '197';

    const CONST_201 = '201';

    const CONST_209 = '209';

    const CONST_220 = '220';

    const CONST_291 = '291';

    const CONST_328 = '328';

    const CONST_369 = '369';

    const CONST_370 = '370';

    const CONST_371 = '371';

    const CONST_372 = '372';

    const CONST_405 = '405';

    const CONST_510 = '510';

    const CONST_511 = '511';

    const CONST_598 = '598';

    const CONST_603 = '603';

    const CONST_619 = '619';

    const CONST_636 = '636';

    const CONST_807 = '807';

    const CONST_809 = '809';

    const CONST_815 = '815';

    const CONST_945 = '945';

    const CONST_995 = '995';

    const AA1 = 'AA1';

    const AA2 = 'AA2';

    const AAH = 'AAH';

    const AAL = 'AAL';

    const ACT = 'ACT';

    const APD = 'APD';

    const BBD = 'BBD';

    const CAD = 'CAD';

    const CSD = 'CSD';

    const DLO = 'DLO';

    const EDC = 'EDC';

    const FCS = 'FCS';

    const LCID = 'LCID';

    const MRB = 'MRB';

    const ORS = 'ORS';

    const OTD = 'OTD';

    const POS = 'POS';

    const SOL = 'SOL';

    const TPD = 'TPD';

    const AAA = 'AAA';

    const AAB = 'AAB';

    const AAE = 'AAE';

    const BLP = 'BLP';

    const CAT = 'CAT';

    const CON = 'CON';

    const D01 = 'D01';

    const DIS = 'DIS';

    const ECP = 'ECP';

    const ELC = 'ELC';

    const EST = 'EST';

    const FCP = 'FCP';

    const MSR = 'MSR';

    const PNP = 'PNP';

    const PRP = 'PRP';

    const QTE = 'QTE';

    const RPA = 'RPA';

    const RPC = 'RPC';

    const RPM = 'RPM';

    const RTL = 'RTL';

    const TIP = 'TIP';

    const TNP = 'TNP';

    const UCP = 'UCP';

    const VPC = 'VPC';

    const WHL = 'WHL';

    const HP = 'HP';

    const HT = 'HT';

    const HTH = 'HTH';

    const PE = 'PE';

    const PG = 'PG';

    const PN = 'PN';

    const PS = 'PS';

    const TF = 'TF';

    const TT = 'TT';

    /** @var string For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction. */
    public $lineSequenceNumber;

    /** @var string Code defining the vendor's status of the item */
    public $itemStatusCode;

    /** @var float Quantity as defined by the ItemStatusCode */
    public $itemScheduleQty;

    /** @var string Unit of measure for the quantity to be fulfilled for the given status code */
    public $itemScheduleUOM;

    /** @var string Code specifying the type of date sent in the ItemScheduleDate */
    public $itemScheduleQualifier;

    /** @var string New or current ship date for the quantity associated with the given status code */
    public $itemScheduleDate;

    /** @var string Buyer's primary product identifier */
    public $buyerPartNumber;

    /** @var string Vendor's primary product identifier */
    public $vendorPartNumber;

    /** @var string Consumer level or customer unit product identification number */
    public $consumerPackageCode;

    /** @var string International Article Number, aka European Article Number, which is the European equivalent of the United States UPC[Universal Product Code] */
    public $eAN;

    /** @var string Global Trade Item Number which is an item identifier that encompasses all product identification numbers such as UPC, EAN, ITF, etc. and can be assigned at various packing levels */
    public $gTIN;

    /** @var string Package or case level product identification number */
    public $uPCCaseCode;

    /** @var string National Drug Code or NDC is a unique, universal product identifier for drugs. Primarily used in the pharmaceutical industry */
    public $natlDrugCode;

    /** @var string ISBN is a unique number assigned to every book before publication */
    public $internationalStandardBookNumber;

    /** @var OrderAckLineItemItemsLineItemAcknowledgementItemsProductIDItems[]|array */
    public $productID;

    /** @var string Code identifying the type of price */
    public $purchasePriceType;

    /** @var float Agreed upon price the buyer is paying for the line item */
    public $purchasePrice;

    /** @var string Code specifying the type of unit price for an item */
    public $purchasePriceBasis;

    /** @var string Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $buyersCurrency;

    /** @var string Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $sellersCurrency;

    /** @var float The rate to be applied to convert one currency to another */
    public $exchangeRate;

    /** @var float Quantity Ordered * Price */
    public $extendedItemTotal;

    /** @var string Vendor/Buyer assigned size code. NRF codes should go in the NRFStandardColorAndSize fields */
    public $productSizeCode;

    /** @var string Free-form textual description of the product size */
    public $productSizeDescription;

    /** @var string Vendor/Buyer assigned color code. NRF codes should go in the NRFStandardColorAndSize fields */
    public $productColorCode;

    /** @var string Free-form textual description of the product color */
    public $productColorDescription;

    /** @var string Vendor/Buyer assigned fabric code/material code. NRF codes should go in the NRFStandardColorAndSize fields */
    public $productMaterialCode;

    /** @var string Free-form textual description of the item's primary material/fabric */
    public $productMaterialDescription;

    /** @var string Code assigned to the manufacturing process of the product */
    public $productProcessCode;

    /** @var string Description of the manufacturing process of the product */
    public $productProcessDescription;

    /** @var string Name or number identifying an area wherein merchandise is categorized within a store */
    public $department;

    /** @var string Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store */
    public $departmentDescription;

    /** @var string Retailer's classification/grouping of products */
    public $class;

    /** @var string Description used to identify the primary gender[and age] for which an item is designed. */
    public $gender;

    /** @var string Value as defined by the IndustryCodeQualifer */
    public $industryCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->lineSequenceNumber = Schema::string();
        $properties->lineSequenceNumber->description = "For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction.";
        $ownerSchema->addPropertyMapping('LineSequenceNumber', self::names()->lineSequenceNumber);
        $properties->itemStatusCode = Schema::string();
        $properties->itemStatusCode->enum = array(
            self::AA,
            self::AC,
            self::AR,
            self::BP,
            self::CC,
            self::DR,
            self::IA,
            self::IB,
            self::IC,
            self::ID,
            self::IE,
            self::_IF,
            self::IH,
            self::IP,
            self::IQ,
            self::IR,
            self::IS,
            self::IW,
            self::R1,
            self::R2,
            self::R3,
            self::R4,
            self::R7,
            self::ROS,
            self::SP,
            self::UM,
        );
        $properties->itemStatusCode->description = "Code defining the vendor's status of the item";
        $ownerSchema->addPropertyMapping('ItemStatusCode', self::names()->itemStatusCode);
        $properties->itemScheduleQty = Schema::number();
        $properties->itemScheduleQty->description = "Quantity as defined by the ItemStatusCode";
        $ownerSchema->addPropertyMapping('ItemScheduleQty', self::names()->itemScheduleQty);
        $properties->itemScheduleUOM = Schema::string();
        $properties->itemScheduleUOM->enum = array(
            self::CONST_01,
            self::CONST_03,
            self::CONST_12,
            self::CONST_15,
            self::CONST_1_N,
            self::CONST_2_N,
            self::CONST_2_P,
            self::CONST_2_W,
            self::CONST_31,
            self::CONST_3_F,
            self::CONST_3_T,
            self::CONST_4_E,
            self::CONST_4_F,
            self::CONST_4_G,
            self::CONST_50,
            self::CONST_5_I,
            self::CONST_68,
            self::CONST_8_C,
            self::AA,
            self::AD,
            self::AF,
            self::AM,
            self::_AS,
            self::AV,
            self::AY,
            self::BA,
            self::BB,
            self::BC,
            self::BD,
            self::BF,
            self::BG,
            self::BI,
            self::BJ,
            self::BK,
            self::BL,
            self::BM,
            self::BN,
            self::BO,
            self::BP,
            self::BR,
            self::BT,
            self::BTU,
            self::BU,
            self::BX,
            self::C3,
            self::C4,
            self::C8,
            self::CA,
            self::CA1,
            self::CA2,
            self::CB,
            self::CC,
            self::CD,
            self::CE,
            self::CF,
            self::CFM,
            self::CG,
            self::CH,
            self::CI,
            self::CL,
            self::CM,
            self::CN,
            self::CP,
            self::CQ,
            self::CR,
            self::CS,
            self::CT,
            self::CU,
            self::CW,
            self::CX,
            self::CY,
            self::DA,
            self::DB,
            self::DD,
            self::DE,
            self::DG,
            self::DH,
            self::DI,
            self::DK,
            self::DL,
            self::DM,
            self::_DO,
            self::DP,
            self::DR,
            self::DS,
            self::DW,
            self::DWT,
            self::DZ,
            self::E1,
            self::EA,
            self::EP,
            self::EV,
            self::FA,
            self::FF,
            self::FO,
            self::FT,
            self::FYGD,
            self::FZ,
            self::GA,
            self::GB,
            self::GH,
            self::GHZ,
            self::GL,
            self::GM,
            self::GN,
            self::GPM,
            self::GR,
            self::GS,
            self::H1,
            self::H2,
            self::H3,
            self::H4,
            self::H6,
            self::HA,
            self::HC,
            self::HCF,
            self::HD,
            self::HF,
            self::HK,
            self::HL,
            self::HR,
            self::HS,
            self::HU,
            self::HV,
            self::HY,
            self::HZ,
            self::I,
            self::IM,
            self::IN,
            self::JA,
            self::JO,
            self::JR,
            self::JU,
            self::K6,
            self::KC,
            self::KE,
            self::KG,
            self::KH,
            self::KM,
            self::KT,
            self::KV,
            self::KVA,
            self::KVAH,
            self::KW,
            self::LB,
            self::LF,
            self::LG,
            self::LI,
            self::LK,
            self::LM,
            self::LN,
            self::LO,
            self::LR,
            self::LS,
            self::LT,
            self::LU,
            self::LY,
            self::MB,
            self::MC,
            self::ME,
            self::MG,
            self::MHZ,
            self::MJ,
            self::MK,
            self::ML,
            self::MM,
            self::MN,
            self::MO,
            self::MOA,
            self::MP,
            self::MR,
            self::NG,
            self::NS,
            self::NX,
            self::OP,
            self::OZ,
            self::P,
            self::P3,
            self::P4,
            self::P5,
            self::P6,
            self::P7,
            self::P8,
            self::P9,
            self::PA,
            self::PC,
            self::PD,
            self::PER,
            self::PF,
            self::PH,
            self::PK,
            self::PL,
            self::PO,
            self::PP,
            self::PR,
            self::PSI,
            self::PT,
            self::PV,
            self::PXL,
            self::PY,
            self::Q1,
            self::Q4,
            self::Q5,
            self::Q6,
            self::Q7,
            self::QD,
            self::QS,
            self::QT,
            self::RA,
            self::RE,
            self::RL,
            self::RM,
            self::RO,
            self::SC,
            self::SF,
            self::SH,
            self::SI,
            self::SJ,
            self::SL,
            self::SM,
            self::SO,
            self::SP,
            self::SQ,
            self::ST,
            self::SV,
            self::SY,
            self::SZ,
            self::T4,
            self::TB,
            self::TC,
            self::TCF,
            self::TE,
            self::TH,
            self::TI,
            self::TK,
            self::TL,
            self::TM,
            self::TO,
            self::TP,
            self::TR,
            self::TRM,
            self::TS,
            self::TU,
            self::TY,
            self::U2,
            self::U5,
            self::UN,
            self::UZ,
            self::_VAR,
            self::VC,
            self::VI,
            self::VO,
            self::WA,
            self::WD,
            self::WG,
            self::WK,
            self::WR,
            self::X8,
            self::Y4,
            self::YD,
            self::YR,
            self::ZC,
        );
        $properties->itemScheduleUOM->description = "Unit of measure for the quantity to be fulfilled for the given status code";
        $ownerSchema->addPropertyMapping('ItemScheduleUOM', self::names()->itemScheduleUOM);
        $properties->itemScheduleQualifier = Schema::string();
        $properties->itemScheduleQualifier->enum = array(
            self::CONST_001,
            self::CONST_002,
            self::CONST_006,
            self::CONST_007,
            self::CONST_010,
            self::CONST_011,
            self::CONST_012,
            self::CONST_013,
            self::CONST_015,
            self::CONST_016,
            self::CONST_017,
            self::CONST_018,
            self::CONST_019,
            self::CONST_020,
            self::CONST_035,
            self::CONST_036,
            self::CONST_037,
            self::CONST_038,
            self::CONST_043,
            self::CONST_050,
            self::CONST_057,
            self::CONST_060,
            self::CONST_063,
            self::CONST_064,
            self::CONST_067,
            self::CONST_068,
            self::CONST_069,
            self::CONST_071,
            self::CONST_074,
            self::CONST_076,
            self::CONST_077,
            self::CONST_079,
            self::CONST_086,
            self::CONST_087,
            self::CONST_097,
            self::CONST_100,
            self::CONST_110,
            self::CONST_118,
            self::CONST_145,
            self::CONST_146,
            self::CONST_168,
            self::CONST_171,
            self::CONST_191,
            self::CONST_196,
            self::CONST_197,
            self::CONST_201,
            self::CONST_209,
            self::CONST_220,
            self::CONST_291,
            self::CONST_328,
            self::CONST_369,
            self::CONST_370,
            self::CONST_371,
            self::CONST_372,
            self::CONST_405,
            self::CONST_510,
            self::CONST_511,
            self::CONST_598,
            self::CONST_603,
            self::CONST_619,
            self::CONST_636,
            self::CONST_807,
            self::CONST_809,
            self::CONST_815,
            self::CONST_945,
            self::CONST_995,
            self::AA1,
            self::AA2,
            self::AAH,
            self::AAL,
            self::ACT,
            self::APD,
            self::BBD,
            self::CAD,
            self::CSD,
            self::DLO,
            self::EDC,
            self::FCS,
            self::LCID,
            self::MRB,
            self::ORS,
            self::OTD,
            self::POS,
            self::SOL,
            self::TPD,
            self::TRM,
        );
        $properties->itemScheduleQualifier->description = "Code specifying the type of date sent in the ItemScheduleDate";
        $ownerSchema->addPropertyMapping('ItemScheduleQualifier', self::names()->itemScheduleQualifier);
        $properties->itemScheduleDate = Schema::string();
        $properties->itemScheduleDate->description = "New or current ship date for the quantity associated with the given status code";
        $properties->itemScheduleDate->format = "date";
        $ownerSchema->addPropertyMapping('ItemScheduleDate', self::names()->itemScheduleDate);
        $properties->buyerPartNumber = Schema::string();
        $properties->buyerPartNumber->description = "Buyer's primary product identifier";
        $ownerSchema->addPropertyMapping('BuyerPartNumber', self::names()->buyerPartNumber);
        $properties->vendorPartNumber = Schema::string();
        $properties->vendorPartNumber->description = "Vendor's primary product identifier";
        $ownerSchema->addPropertyMapping('VendorPartNumber', self::names()->vendorPartNumber);
        $properties->consumerPackageCode = Schema::string();
        $properties->consumerPackageCode->description = "Consumer level or customer unit product identification number";
        $ownerSchema->addPropertyMapping('ConsumerPackageCode', self::names()->consumerPackageCode);
        $properties->eAN = Schema::string();
        $properties->eAN->description = "International Article Number, aka European Article Number, which is the European equivalent of the United States UPC[Universal Product Code]";
        $ownerSchema->addPropertyMapping('EAN', self::names()->eAN);
        $properties->gTIN = Schema::string();
        $properties->gTIN->description = "Global Trade Item Number which is an item identifier that encompasses all product identification numbers such as UPC, EAN, ITF, etc. and can be assigned at various packing levels";
        $ownerSchema->addPropertyMapping('GTIN', self::names()->gTIN);
        $properties->uPCCaseCode = Schema::string();
        $properties->uPCCaseCode->description = "Package or case level product identification number";
        $ownerSchema->addPropertyMapping('UPCCaseCode', self::names()->uPCCaseCode);
        $properties->natlDrugCode = Schema::string();
        $properties->natlDrugCode->description = "National Drug Code or NDC is a unique, universal product identifier for drugs. Primarily used in the pharmaceutical industry";
        $ownerSchema->addPropertyMapping('NatlDrugCode', self::names()->natlDrugCode);
        $properties->internationalStandardBookNumber = Schema::string();
        $properties->internationalStandardBookNumber->description = "ISBN is a unique number assigned to every book before publication";
        $ownerSchema->addPropertyMapping('InternationalStandardBookNumber', self::names()->internationalStandardBookNumber);
        $properties->productID = Schema::arr();
        $properties->productID->items = OrderAckLineItemItemsLineItemAcknowledgementItemsProductIDItems::schema();
        $ownerSchema->addPropertyMapping('ProductID', self::names()->productID);
        $properties->purchasePriceType = Schema::string();
        $properties->purchasePriceType->enum = array(
            self::AAA,
            self::AAB,
            self::AAE,
            self::BLP,
            self::CAT,
            self::CON,
            self::D01,
            self::DIS,
            self::ECP,
            self::ELC,
            self::EST,
            self::FCP,
            self::MSR,
            self::PNP,
            self::PRP,
            self::QTE,
            self::RPA,
            self::RPC,
            self::RPM,
            self::RTL,
            self::TIP,
            self::TNP,
            self::UCP,
            self::VPC,
            self::WHL,
        );
        $properties->purchasePriceType->description = "Code identifying the type of price";
        $ownerSchema->addPropertyMapping('PurchasePriceType', self::names()->purchasePriceType);
        $properties->purchasePrice = Schema::number();
        $properties->purchasePrice->description = "Agreed upon price the buyer is paying for the line item";
        $ownerSchema->addPropertyMapping('PurchasePrice', self::names()->purchasePrice);
        $properties->purchasePriceBasis = Schema::string();
        $properties->purchasePriceBasis->enum = array(
            self::CA,
            self::HF,
            self::HP,
            self::HT,
            self::HTH,
            self::PD,
            self::PE,
            self::PF,
            self::PG,
            self::PK,
            self::PN,
            self::PO,
            self::PP,
            self::PS,
            self::PT,
            self::TF,
            self::TT,
            self::UM,
        );
        $properties->purchasePriceBasis->description = "Code specifying the type of unit price for an item";
        $ownerSchema->addPropertyMapping('PurchasePriceBasis', self::names()->purchasePriceBasis);
        $properties->buyersCurrency = Schema::string();
        $properties->buyersCurrency->description = "Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('BuyersCurrency', self::names()->buyersCurrency);
        $properties->sellersCurrency = Schema::string();
        $properties->sellersCurrency->description = "Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('SellersCurrency', self::names()->sellersCurrency);
        $properties->exchangeRate = Schema::number();
        $properties->exchangeRate->description = "The rate to be applied to convert one currency to another";
        $ownerSchema->addPropertyMapping('ExchangeRate', self::names()->exchangeRate);
        $properties->extendedItemTotal = Schema::number();
        $properties->extendedItemTotal->description = "Quantity Ordered * Price";
        $ownerSchema->addPropertyMapping('ExtendedItemTotal', self::names()->extendedItemTotal);
        $properties->productSizeCode = Schema::string();
        $properties->productSizeCode->description = "Vendor/Buyer assigned size code. NRF codes should go in the NRFStandardColorAndSize fields";
        $ownerSchema->addPropertyMapping('ProductSizeCode', self::names()->productSizeCode);
        $properties->productSizeDescription = Schema::string();
        $properties->productSizeDescription->description = "Free-form textual description of the product size";
        $ownerSchema->addPropertyMapping('ProductSizeDescription', self::names()->productSizeDescription);
        $properties->productColorCode = Schema::string();
        $properties->productColorCode->description = "Vendor/Buyer assigned color code. NRF codes should go in the NRFStandardColorAndSize fields";
        $ownerSchema->addPropertyMapping('ProductColorCode', self::names()->productColorCode);
        $properties->productColorDescription = Schema::string();
        $properties->productColorDescription->description = "Free-form textual description of the product color";
        $ownerSchema->addPropertyMapping('ProductColorDescription', self::names()->productColorDescription);
        $properties->productMaterialCode = Schema::string();
        $properties->productMaterialCode->description = "Vendor/Buyer assigned fabric code/material code. NRF codes should go in the NRFStandardColorAndSize fields";
        $ownerSchema->addPropertyMapping('ProductMaterialCode', self::names()->productMaterialCode);
        $properties->productMaterialDescription = Schema::string();
        $properties->productMaterialDescription->description = "Free-form textual description of the item's primary material/fabric";
        $ownerSchema->addPropertyMapping('ProductMaterialDescription', self::names()->productMaterialDescription);
        $properties->productProcessCode = Schema::string();
        $properties->productProcessCode->description = "Code assigned to the manufacturing process of the product";
        $ownerSchema->addPropertyMapping('ProductProcessCode', self::names()->productProcessCode);
        $properties->productProcessDescription = Schema::string();
        $properties->productProcessDescription->description = "Description of the manufacturing process of the product";
        $ownerSchema->addPropertyMapping('ProductProcessDescription', self::names()->productProcessDescription);
        $properties->department = Schema::string();
        $properties->department->description = "Name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('Department', self::names()->department);
        $properties->departmentDescription = Schema::string();
        $properties->departmentDescription->description = "Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('DepartmentDescription', self::names()->departmentDescription);
        $properties->class = Schema::string();
        $properties->class->description = "Retailer's classification/grouping of products";
        $ownerSchema->addPropertyMapping('Class', self::names()->class);
        $properties->gender = Schema::string();
        $properties->gender->description = "Description used to identify the primary gender[and age] for which an item is designed.";
        $ownerSchema->addPropertyMapping('Gender', self::names()->gender);
        $properties->industryCode = Schema::string();
        $properties->industryCode->description = "Value as defined by the IndustryCodeQualifer";
        $ownerSchema->addPropertyMapping('IndustryCode', self::names()->industryCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides a response to the detail[s] of a requested item";
        $ownerSchema->required = array(
        );
    }
}