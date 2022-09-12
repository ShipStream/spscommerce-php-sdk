<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Details a charge, allowance, or service associated with the transaction
 */
class OrderChangeLineItemItemsChargesAllowancesItems extends ClassStructure
{
    const A = 'A';

    const C = 'C';

    const N = 'N';

    const A010 = 'A010';

    const A060 = 'A060';

    const A130 = 'A130';

    const A170 = 'A170';

    const A260 = 'A260';

    const A320 = 'A320';

    const A400 = 'A400';

    const A470 = 'A470';

    const A480 = 'A480';

    const A485 = 'A485';

    const A650 = 'A650';

    const A720 = 'A720';

    const A721 = 'A721';

    const A880 = 'A880';

    const A950 = 'A950';

    const ASSL = 'ASSL';

    const B000 = 'B000';

    const B020 = 'B020';

    const B050 = 'B050';

    const B090 = 'B090';

    const B130 = 'B130';

    const B190 = 'B190';

    const B270 = 'B270';

    const B280 = 'B280';

    const B310 = 'B310';

    const B320 = 'B320';

    const B560 = 'B560';

    const B570 = 'B570';

    const B660 = 'B660';

    const B720 = 'B720';

    const B750 = 'B750';

    const B770 = 'B770';

    const B785 = 'B785';

    const B800 = 'B800';

    const B820 = 'B820';

    const B840 = 'B840';

    const B870 = 'B870';

    const B940 = 'B940';

    const B950 = 'B950';

    const BRDP = 'BRDP';

    const C000 = 'C000';

    const C030 = 'C030';

    const C040 = 'C040';

    const C080 = 'C080';

    const C110 = 'C110';

    const C190 = 'C190';

    const C220 = 'C220';

    const C260 = 'C260';

    const C300 = 'C300';

    const C310 = 'C310';

    const C320 = 'C320';

    const C350 = 'C350';

    const C420 = 'C420';

    const C460 = 'C460';

    const C490 = 'C490';

    const C510 = 'C510';

    const C530 = 'C530';

    const C540 = 'C540';

    const C550 = 'C550';

    const C560 = 'C560';

    const C660 = 'C660';

    const C680 = 'C680';

    const C850 = 'C850';

    const C940 = 'C940';

    const CA00 = 'CA00';

    const CLN = 'CLN';

    const CLRY = 'CLRY';

    const COLC = 'COLC';

    const CONS = 'CONS';

    const COUR = 'COUR';

    const D080 = 'D080';

    const D170 = 'D170';

    const D230 = 'D230';

    const D240 = 'D240';

    const D242 = 'D242';

    const D250 = 'D250';

    const D260 = 'D260';

    const D270 = 'D270';

    const D340 = 'D340';

    const D500 = 'D500';

    const D530 = 'D530';

    const D540 = 'D540';

    const D550 = 'D550';

    const D560 = 'D560';

    const D800 = 'D800';

    const D870 = 'D870';

    const D900 = 'D900';

    const D920 = 'D920';

    const D940 = 'D940';

    const D980 = 'D980';

    const DAA = 'DAA';

    const E170 = 'E170';

    const E210 = 'E210';

    const E240 = 'E240';

    const E280 = 'E280';

    const E350 = 'E350';

    const E380 = 'E380';

    const E470 = 'E470';

    const E620 = 'E620';

    const E720 = 'E720';

    const E730 = 'E730';

    const E740 = 'E740';

    const E770 = 'E770';

    const E99 = 'E99';

    const EDIP = 'EDIP';

    const EXTM = 'EXTM';

    const F110 = 'F110';

    const F155 = 'F155';

    const F170 = 'F170';

    const F180 = 'F180';

    const F190 = 'F190';

    const F280 = 'F280';

    const F330 = 'F330';

    const F340 = 'F340';

    const F460 = 'F460';

    const F580 = 'F580';

    const F670 = 'F670';

    const F680 = 'F680';

    const F730 = 'F730';

    const F760 = 'F760';

    const F800 = 'F800';

    const F970 = 'F970';

    const FGPR = 'FGPR';

    const FRYC = 'FRYC';

    const G170 = 'G170';

    const G210 = 'G210';

    const G220 = 'G220';

    const G290 = 'G290';

    const G330 = 'G330';

    const G360 = 'G360';

    const G400 = 'G400';

    const G450 = 'G450';

    const G470 = 'G470';

    const G530 = 'G530';

    const G580 = 'G580';

    const G590 = 'G590';

    const G610 = 'G610';

    const G630 = 'G630';

    const G660 = 'G660';

    const G680 = 'G680';

    const G740 = 'G740';

    const G821 = 'G821';

    const G830 = 'G830';

    const G860 = 'G860';

    const G870 = 'G870';

    const G890 = 'G890';

    const G910 = 'G910';

    const G960 = 'G960';

    const GWRP = 'GWRP';

    const H060 = 'H060';

    const H070 = 'H070';

    const H090 = 'H090';

    const H110 = 'H110';

    const H230 = 'H230';

    const H270 = 'H270';

    const H400 = 'H400';

    const H420 = 'H420';

    const H540 = 'H540';

    const H550 = 'H550';

    const H560 = 'H560';

    const H806 = 'H806';

    const H910 = 'H910';

    const H920 = 'H920';

    const I060 = 'I060';

    const I070 = 'I070';

    const I100 = 'I100';

    const I110 = 'I110';

    const I131 = 'I131';

    const I160 = 'I160';

    const I170 = 'I170';

    const I310 = 'I310';

    const I410 = 'I410';

    const I530 = 'I530';

    const I570 = 'I570';

    const I590 = 'I590';

    const I610 = 'I610';

    const IDCT = 'IDCT';

    const IDL = 'IDL';

    const LAY = 'LAY';

    const LDG = 'LDG';

    const LTL = 'LTL';

    const MTC = 'MTC';

    const OVSZ = 'OVSZ';

    const PERN = 'PERN';

    const PSIS = 'PSIS';

    const PWH = 'PWH';

    const RALM = 'RALM';

    const RCC = 'RCC';

    const RUOR = 'RUOR';

    const SLEV = 'SLEV';

    const SLIP = 'SLIP';

    const SUIP = 'SUIP';

    const TPRD = 'TPRD';

    const UNDF = 'UNDF';

    const UNL = 'UNL';

    const UNSZ = 'UNSZ';

    const CONST_13 = '13';

    const AX = 'AX';

    const FA = 'FA';

    const FC = 'FC';

    const JAIA = 'JAIA';

    const ST = 'ST';

    const UNECE = 'UNECE';

    const VI = 'VI';

    const CONST_1 = '1';

    const CONST_2 = '2';

    const CONST_3 = '3';

    const CONST_4 = '4';

    const CONST_5 = '5';

    const CONST_6 = '6';

    const CONST_7 = '7';

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

    const CONST_02 = '02';

    const CONST_04 = '04';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_09 = '09';

    /** @var string Code which indicates an allowance or charge for the service specified */
    public $allowChrgIndicator;

    /** @var string Code describing the type of allowance or charge for the service specified */
    public $allowChrgCode;

    /** @var string Code identifying the agency assigning the code values */
    public $allowChrgAgencyCode;

    /** @var string Agency maintained code identifying the service, promotion, allowance, or charge */
    public $allowChrgAgency;

    /** @var float Amount of the allowance or charge */
    public $allowChrgAmt;

    /** @var string Code indicating on what basis an allowance or charge percent is calculated */
    public $allowChrgPercentQual;

    /** @var float Percentage of allowance or charge. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00] */
    public $allowChrgPercent;

    /** @var float Monetary amount that is used when calculating a tax, allowance, or charge amount. */
    public $percentDollarBasis;

    /** @var float Value expressed in monetary currency that applies to the given quantity [i.e. The rate is $5.00 off one dozen]. [AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other] */
    public $allowChrgRate;

    /** @var string The unit of measure used in relation with AllowChrgQty[AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other] */
    public $allowChrgQtyUOM;

    /** @var float Numeric value of quantity to which the allowance or charge applies[AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other] */
    public $allowChrgQty;

    /** @var string Code indicating method of handling for an allowance or charge */
    public $allowChrgHandlingCode;

    /** @var string Provides a specific value as defined by the code used in either the AllowChrgCode or AllowChrgAgency */
    public $referenceIdentification;

    /** @var string Free-form textual description of the allowance or charge */
    public $allowChrgHandlingDescription;

    /** @var string Provides greater context to the ReferenceIdentification when there is more than one option to the charge or allowance */
    public $optionNumber;

    /** @var string Number which identifies an exception to a current charge or allowance */
    public $exceptionNumber;

    /** @var float Indicates a quantity range. This is used in conjuction with the AllowChrgQty */
    public $allowChrgQty2;

    /** @var string Code designating the language used in text. ISO 639 language code */
    public $languageCode;

    /** @var int Used to indicate at what point a value should be used in calculations where orders of operations matter [i.e. 1 would indicate that the related value should be taken first]. */
    public $calculationSequence;

    /** @var OrderChangeLineItemItemsChargesAllowancesItemsTaxesItems[]|array */
    public $taxes;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->allowChrgIndicator = Schema::string();
        $properties->allowChrgIndicator->enum = array(
            self::A,
            self::C,
            self::N,
        );
        $properties->allowChrgIndicator->description = "Code which indicates an allowance or charge for the service specified";
        $ownerSchema->addPropertyMapping('AllowChrgIndicator', self::names()->allowChrgIndicator);
        $properties->allowChrgCode = Schema::string();
        $properties->allowChrgCode->enum = array(
            self::A010,
            self::A060,
            self::A130,
            self::A170,
            self::A260,
            self::A320,
            self::A400,
            self::A470,
            self::A480,
            self::A485,
            self::A650,
            self::A720,
            self::A721,
            self::A880,
            self::A950,
            self::ASSL,
            self::B000,
            self::B020,
            self::B050,
            self::B090,
            self::B130,
            self::B190,
            self::B270,
            self::B280,
            self::B310,
            self::B320,
            self::B560,
            self::B570,
            self::B660,
            self::B720,
            self::B750,
            self::B770,
            self::B785,
            self::B800,
            self::B820,
            self::B840,
            self::B870,
            self::B940,
            self::B950,
            self::BRDP,
            self::C000,
            self::C030,
            self::C040,
            self::C080,
            self::C110,
            self::C190,
            self::C220,
            self::C260,
            self::C300,
            self::C310,
            self::C320,
            self::C350,
            self::C420,
            self::C460,
            self::C490,
            self::C510,
            self::C530,
            self::C540,
            self::C550,
            self::C560,
            self::C660,
            self::C680,
            self::C850,
            self::C940,
            self::CA00,
            self::CLN,
            self::CLRY,
            self::COLC,
            self::CONS,
            self::COUR,
            self::D080,
            self::D170,
            self::D230,
            self::D240,
            self::D242,
            self::D250,
            self::D260,
            self::D270,
            self::D340,
            self::D500,
            self::D530,
            self::D540,
            self::D550,
            self::D560,
            self::D800,
            self::D870,
            self::D900,
            self::D920,
            self::D940,
            self::D980,
            self::DAA,
            self::E170,
            self::E210,
            self::E240,
            self::E280,
            self::E350,
            self::E380,
            self::E470,
            self::E620,
            self::E720,
            self::E730,
            self::E740,
            self::E770,
            self::E99,
            self::EDIP,
            self::EXTM,
            self::F110,
            self::F155,
            self::F170,
            self::F180,
            self::F190,
            self::F280,
            self::F330,
            self::F340,
            self::F460,
            self::F580,
            self::F670,
            self::F680,
            self::F730,
            self::F760,
            self::F800,
            self::F970,
            self::FGPR,
            self::FRYC,
            self::G170,
            self::G210,
            self::G220,
            self::G290,
            self::G330,
            self::G360,
            self::G400,
            self::G450,
            self::G470,
            self::G530,
            self::G580,
            self::G590,
            self::G610,
            self::G630,
            self::G660,
            self::G680,
            self::G740,
            self::G821,
            self::G830,
            self::G860,
            self::G870,
            self::G890,
            self::G910,
            self::G960,
            self::GWRP,
            self::H060,
            self::H070,
            self::H090,
            self::H110,
            self::H230,
            self::H270,
            self::H400,
            self::H420,
            self::H540,
            self::H550,
            self::H560,
            self::H806,
            self::H910,
            self::H920,
            self::I060,
            self::I070,
            self::I100,
            self::I110,
            self::I131,
            self::I160,
            self::I170,
            self::I310,
            self::I410,
            self::I530,
            self::I570,
            self::I590,
            self::I610,
            self::IDCT,
            self::IDL,
            self::LAY,
            self::LDG,
            self::LTL,
            self::MTC,
            self::OVSZ,
            self::PERN,
            self::PSIS,
            self::PWH,
            self::RALM,
            self::RCC,
            self::RUOR,
            self::SLEV,
            self::SLIP,
            self::SUIP,
            self::TPRD,
            self::UNDF,
            self::UNL,
            self::UNSZ,
        );
        $properties->allowChrgCode->description = "Code describing the type of allowance or charge for the service specified";
        $ownerSchema->addPropertyMapping('AllowChrgCode', self::names()->allowChrgCode);
        $properties->allowChrgAgencyCode = Schema::string();
        $properties->allowChrgAgencyCode->enum = array(
            self::CONST_13,
            self::AX,
            self::FA,
            self::FC,
            self::JAIA,
            self::ST,
            self::UNECE,
            self::VI,
        );
        $properties->allowChrgAgencyCode->description = "Code identifying the agency assigning the code values";
        $ownerSchema->addPropertyMapping('AllowChrgAgencyCode', self::names()->allowChrgAgencyCode);
        $properties->allowChrgAgency = Schema::string();
        $properties->allowChrgAgency->description = "Agency maintained code identifying the service, promotion, allowance, or charge";
        $ownerSchema->addPropertyMapping('AllowChrgAgency', self::names()->allowChrgAgency);
        $properties->allowChrgAmt = Schema::number();
        $properties->allowChrgAmt->description = "Amount of the allowance or charge";
        $ownerSchema->addPropertyMapping('AllowChrgAmt', self::names()->allowChrgAmt);
        $properties->allowChrgPercentQual = Schema::string();
        $properties->allowChrgPercentQual->enum = array(
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
            self::CONST_4,
            self::CONST_5,
            self::CONST_6,
            self::CONST_7,
        );
        $properties->allowChrgPercentQual->description = "Code indicating on what basis an allowance or charge percent is calculated";
        $ownerSchema->addPropertyMapping('AllowChrgPercentQual', self::names()->allowChrgPercentQual);
        $properties->allowChrgPercent = Schema::number();
        $properties->allowChrgPercent->description = "Percentage of allowance or charge. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00]";
        $ownerSchema->addPropertyMapping('AllowChrgPercent', self::names()->allowChrgPercent);
        $properties->percentDollarBasis = Schema::number();
        $properties->percentDollarBasis->description = "Monetary amount that is used when calculating a tax, allowance, or charge amount.";
        $ownerSchema->addPropertyMapping('PercentDollarBasis', self::names()->percentDollarBasis);
        $properties->allowChrgRate = Schema::number();
        $properties->allowChrgRate->description = "Value expressed in monetary currency that applies to the given quantity [i.e. The rate is $5.00 off one dozen]. [AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other]";
        $ownerSchema->addPropertyMapping('AllowChrgRate', self::names()->allowChrgRate);
        $properties->allowChrgQtyUOM = Schema::string();
        $properties->allowChrgQtyUOM->enum = array(
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
        $properties->allowChrgQtyUOM->description = "The unit of measure used in relation with AllowChrgQty[AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other]";
        $ownerSchema->addPropertyMapping('AllowChrgQtyUOM', self::names()->allowChrgQtyUOM);
        $properties->allowChrgQty = Schema::number();
        $properties->allowChrgQty->description = "Numeric value of quantity to which the allowance or charge applies[AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other]";
        $ownerSchema->addPropertyMapping('AllowChrgQty', self::names()->allowChrgQty);
        $properties->allowChrgHandlingCode = Schema::string();
        $properties->allowChrgHandlingCode->enum = array(
            self::CONST_01,
            self::CONST_02,
            self::CONST_03,
            self::CONST_04,
            self::CONST_05,
            self::CONST_06,
            self::CONST_09,
            self::CONST_13,
            self::CONST_15,
        );
        $properties->allowChrgHandlingCode->description = "Code indicating method of handling for an allowance or charge";
        $ownerSchema->addPropertyMapping('AllowChrgHandlingCode', self::names()->allowChrgHandlingCode);
        $properties->referenceIdentification = Schema::string();
        $properties->referenceIdentification->description = "Provides a specific value as defined by the code used in either the AllowChrgCode or AllowChrgAgency";
        $ownerSchema->addPropertyMapping('ReferenceIdentification', self::names()->referenceIdentification);
        $properties->allowChrgHandlingDescription = Schema::string();
        $properties->allowChrgHandlingDescription->description = "Free-form textual description of the allowance or charge";
        $ownerSchema->addPropertyMapping('AllowChrgHandlingDescription', self::names()->allowChrgHandlingDescription);
        $properties->optionNumber = Schema::string();
        $properties->optionNumber->description = "Provides greater context to the ReferenceIdentification when there is more than one option to the charge or allowance";
        $ownerSchema->addPropertyMapping('OptionNumber', self::names()->optionNumber);
        $properties->exceptionNumber = Schema::string();
        $properties->exceptionNumber->description = "Number which identifies an exception to a current charge or allowance";
        $ownerSchema->addPropertyMapping('ExceptionNumber', self::names()->exceptionNumber);
        $properties->allowChrgQty2 = Schema::number();
        $properties->allowChrgQty2->description = "Indicates a quantity range. This is used in conjuction with the AllowChrgQty";
        $ownerSchema->addPropertyMapping('AllowChrgQty2', self::names()->allowChrgQty2);
        $properties->languageCode = Schema::string();
        $properties->languageCode->description = "Code designating the language used in text. ISO 639 language code";
        $ownerSchema->addPropertyMapping('LanguageCode', self::names()->languageCode);
        $properties->calculationSequence = Schema::integer();
        $properties->calculationSequence->description = "Used to indicate at what point a value should be used in calculations where orders of operations matter [i.e. 1 would indicate that the related value should be taken first].";
        $ownerSchema->addPropertyMapping('CalculationSequence', self::names()->calculationSequence);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderChangeLineItemItemsChargesAllowancesItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Details a charge, allowance, or service associated with the transaction";
        $ownerSchema->required = array(
        );
    }
}