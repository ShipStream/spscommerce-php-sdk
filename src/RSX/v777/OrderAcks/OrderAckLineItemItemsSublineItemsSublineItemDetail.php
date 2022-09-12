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
 * Contains the commonly used fields in the subline level of the transaction
 */
class OrderAckLineItemItemsSublineItemsSublineItemDetail extends ClassStructure
{
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

    const AA = 'AA';

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

    const BP = 'BP';

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

    const CC = 'CC';

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

    const DR = 'DR';

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

    const SP = 'SP';

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

    const UM = 'UM';

    /** @var string For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction. */
    public $lineSequenceNumber;

    /** @var string ERP generated code to uniquely identify the item */
    public $applicationId;

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

    /** @var OrderAckLineItemItemsSublineItemsSublineItemDetailProductIDItems[]|array */
    public $productID;

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

    /** @var float Component quantity within the pre-pack */
    public $qtyPer;

    /** @var string Unit of measure pertaining to the QtyPer */
    public $qtyPerUOM;

    /** @var string Code identifying the type of price */
    public $purchasePriceType;

    /** @var float Agreed upon price the buyer is paying for the line item */
    public $purchasePrice;

    /** @var string Code specifying the type of unit price for an item */
    public $purchasePriceBasis;

    /** @var string Description used to identify the primary gender[and age] for which an item is designed. */
    public $gender;

    /** @var OrderAckLineItemItemsSublineItemsSublineItemDetailNRFStandardColorAndSize Color and size information conforming to standards set forth by the National Retail Federation */
    public $nRFStandardColorAndSize;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->lineSequenceNumber = Schema::string();
        $properties->lineSequenceNumber->description = "For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction.";
        $ownerSchema->addPropertyMapping('LineSequenceNumber', self::names()->lineSequenceNumber);
        $properties->applicationId = Schema::string();
        $properties->applicationId->description = "ERP generated code to uniquely identify the item";
        $ownerSchema->addPropertyMapping('ApplicationId', self::names()->applicationId);
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
        $properties->productID->items = OrderAckLineItemItemsSublineItemsSublineItemDetailProductIDItems::schema();
        $ownerSchema->addPropertyMapping('ProductID', self::names()->productID);
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
        $properties->qtyPer = Schema::number();
        $properties->qtyPer->description = "Component quantity within the pre-pack";
        $ownerSchema->addPropertyMapping('QtyPer', self::names()->qtyPer);
        $properties->qtyPerUOM = Schema::string();
        $properties->qtyPerUOM->enum = array(
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
        $properties->qtyPerUOM->description = "Unit of measure pertaining to the QtyPer";
        $ownerSchema->addPropertyMapping('QtyPerUOM', self::names()->qtyPerUOM);
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
        $properties->gender = Schema::string();
        $properties->gender->description = "Description used to identify the primary gender[and age] for which an item is designed.";
        $ownerSchema->addPropertyMapping('Gender', self::names()->gender);
        $properties->nRFStandardColorAndSize = OrderAckLineItemItemsSublineItemsSublineItemDetailNRFStandardColorAndSize::schema();
        $ownerSchema->addPropertyMapping('NRFStandardColorAndSize', self::names()->nRFStandardColorAndSize);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the subline level of the transaction";
        $ownerSchema->required = array(
        );
    }
}