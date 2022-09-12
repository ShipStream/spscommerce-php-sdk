<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierLoadTenders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group contains the quantity of your PackingMedium and other related values such as weight and volume
 */
class CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsQuantityAndWeightItems extends ClassStructure
{
    const BAG = 'BAG';

    const BAL = 'BAL';

    const BBL = 'BBL';

    const BDL = 'BDL';

    const BIN = 'BIN';

    const BLC = 'BLC';

    const BLK = 'BLK';

    const BOT = 'BOT';

    const BOX = 'BOX';

    const BXI = 'BXI';

    const BXT = 'BXT';

    const CAN = 'CAN';

    const CAS = 'CAS';

    const CLM = 'CLM';

    const COL = 'COL';

    const CRT = 'CRT';

    const CSK = 'CSK';

    const CTN = 'CTN';

    const DRM = 'DRM';

    const HRB = 'HRB';

    const JAR = 'JAR';

    const KEG = 'KEG';

    const KIT = 'KIT';

    const LIF = 'LIF';

    const LNR = 'LNR';

    const LSE = 'LSE';

    const PAL = 'PAL';

    const PCK = 'PCK';

    const PCS = 'PCS';

    const PLT = 'PLT';

    const PWI = 'PWI';

    const RBI = 'RBI';

    const RCK = 'RCK';

    const REL = 'REL';

    const ROL = 'ROL';

    const RPL = 'RPL';

    const RTC = 'RTC';

    const SKD = 'SKD';

    const SLP = 'SLP';

    const SLV = 'SLV';

    const SPC = 'SPC';

    const SPL = 'SPL';

    const SRW = 'SRW';

    const TBE = 'TBE';

    const TNK = 'TNK';

    const _TRY = 'TRY';

    const WRP = 'WRP';

    const CONST_01 = '01';

    const CONST_03 = '03';

    const CONST_05 = '05';

    const CONST_25 = '25';

    const CONST_31 = '31';

    const CONST_43 = '43';

    const CONST_52 = '52';

    const CONST_58 = '58';

    const CONST_67 = '67';

    const CONST_72 = '72';

    const CONST_76 = '76';

    const CONST_79 = '79';

    const CONST_80 = '80';

    const CONST_90 = '90';

    const CONST_91 = '91';

    const CONST_94 = '94';

    const EPP = 'EPP';

    const UNDF = 'UNDF';

    const B = 'B';

    const EN = 'EN';

    const F = 'F';

    const G = 'G';

    const L = 'L';

    const N = 'N';

    const P = 'P';

    const T = 'T';

    const CONST_50 = '50';

    const AF = 'AF';

    const CD = 'CD';

    const CW = 'CW';

    const DG = 'DG';

    const GR = 'GR';

    const HK = 'HK';

    const KG = 'KG';

    const LB = 'LB';

    const LG = 'LG';

    const MC = 'MC';

    const ME = 'ME';

    const MP = 'MP';

    const NS = 'NS';

    const OZ = 'OZ';

    const QS = 'QS';

    const TO = 'TO';

    const CONST_4_G = '4G';

    const CONST_5_I = '5I';

    const BF = 'BF';

    const C3 = 'C3';

    const C8 = 'C8';

    const CC = 'CC';

    const CF = 'CF';

    const CI = 'CI';

    const CR = 'CR';

    const CY = 'CY';

    const DL = 'DL';

    const FO = 'FO';

    const GA = 'GA';

    const GH = 'GH';

    const K6 = 'K6';

    const KC = 'KC';

    const LT = 'LT';

    const ML = 'ML';

    const NG = 'NG';

    const PT = 'PT';

    const PV = 'PV';

    const QT = 'QT';

    const CONST_1 = '1';

    const CONST_2 = '2';

    const CONST_3 = '3';

    const CONST_4 = '4';

    const CONST_5 = '5';

    const CONST_6 = '6';

    const CONST_7 = '7';

    /** @var string Code identifying the type of packaging */
    public $packingMedium;

    /** @var string Code identifying the type of packaging material */
    public $packingMaterial;

    /** @var int Number of units/pieces of the lading commodity */
    public $ladingQuantity;

    /** @var string Textual information relating to transported cargo */
    public $ladingDescription;

    /** @var string Code defining the type of weight */
    public $weightQualifier;

    /** @var float A unit of weight */
    public $weight;

    /** @var string The unit of measure used in relation to a weight */
    public $weightUOM;

    /** @var float The amount of space, measured in cubic units, that an object or substance occupies */
    public $volume;

    /** @var string The unit of measure used in relation to a volume */
    public $volumeUOM;

    /** @var string Code specifying pallet exchange instructions */
    public $palletExchangeCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->packingMedium = Schema::string();
        $properties->packingMedium->enum = array(
            self::BAG,
            self::BAL,
            self::BBL,
            self::BDL,
            self::BIN,
            self::BLC,
            self::BLK,
            self::BOT,
            self::BOX,
            self::BXI,
            self::BXT,
            self::CAN,
            self::CAS,
            self::CLM,
            self::COL,
            self::CRT,
            self::CSK,
            self::CTN,
            self::DRM,
            self::HRB,
            self::JAR,
            self::KEG,
            self::KIT,
            self::LIF,
            self::LNR,
            self::LSE,
            self::PAL,
            self::PCK,
            self::PCS,
            self::PLT,
            self::PWI,
            self::RBI,
            self::RCK,
            self::REL,
            self::ROL,
            self::RPL,
            self::RTC,
            self::SKD,
            self::SLP,
            self::SLV,
            self::SPC,
            self::SPL,
            self::SRW,
            self::TBE,
            self::TNK,
            self::_TRY,
            self::WRP,
        );
        $properties->packingMedium->description = "Code identifying the type of packaging";
        $ownerSchema->addPropertyMapping('PackingMedium', self::names()->packingMedium);
        $properties->packingMaterial = Schema::string();
        $properties->packingMaterial->enum = array(
            self::CONST_01,
            self::CONST_03,
            self::CONST_05,
            self::CONST_25,
            self::CONST_31,
            self::CONST_43,
            self::CONST_52,
            self::CONST_58,
            self::CONST_67,
            self::CONST_72,
            self::CONST_76,
            self::CONST_79,
            self::CONST_80,
            self::CONST_90,
            self::CONST_91,
            self::CONST_94,
            self::EPP,
            self::UNDF,
        );
        $properties->packingMaterial->description = "Code identifying the type of packaging material";
        $ownerSchema->addPropertyMapping('PackingMaterial', self::names()->packingMaterial);
        $properties->ladingQuantity = Schema::integer();
        $properties->ladingQuantity->description = "Number of units/pieces of the lading commodity";
        $ownerSchema->addPropertyMapping('LadingQuantity', self::names()->ladingQuantity);
        $properties->ladingDescription = Schema::string();
        $properties->ladingDescription->description = "Textual information relating to transported cargo";
        $ownerSchema->addPropertyMapping('LadingDescription', self::names()->ladingDescription);
        $properties->weightQualifier = Schema::string();
        $properties->weightQualifier->enum = array(
            self::B,
            self::EN,
            self::F,
            self::G,
            self::L,
            self::N,
            self::P,
            self::T,
        );
        $properties->weightQualifier->description = "Code defining the type of weight";
        $ownerSchema->addPropertyMapping('WeightQualifier', self::names()->weightQualifier);
        $properties->weight = Schema::number();
        $properties->weight->description = "A unit of weight";
        $ownerSchema->addPropertyMapping('Weight', self::names()->weight);
        $properties->weightUOM = Schema::string();
        $properties->weightUOM->enum = array(
            self::CONST_01,
            self::CONST_50,
            self::AF,
            self::CD,
            self::CW,
            self::DG,
            self::GR,
            self::HK,
            self::KG,
            self::LB,
            self::LG,
            self::MC,
            self::ME,
            self::MP,
            self::NS,
            self::OZ,
            self::QS,
            self::TO,
        );
        $properties->weightUOM->description = "The unit of measure used in relation to a weight";
        $ownerSchema->addPropertyMapping('WeightUOM', self::names()->weightUOM);
        $properties->volume = Schema::number();
        $properties->volume->description = "The amount of space, measured in cubic units, that an object or substance occupies";
        $ownerSchema->addPropertyMapping('Volume', self::names()->volume);
        $properties->volumeUOM = Schema::string();
        $properties->volumeUOM->enum = array(
            self::CONST_4_G,
            self::CONST_5_I,
            self::BF,
            self::C3,
            self::C8,
            self::CC,
            self::CF,
            self::CI,
            self::CR,
            self::CY,
            self::DL,
            self::FO,
            self::GA,
            self::GH,
            self::K6,
            self::KC,
            self::LT,
            self::ML,
            self::NG,
            self::PT,
            self::PV,
            self::QT,
        );
        $properties->volumeUOM->description = "The unit of measure used in relation to a volume";
        $ownerSchema->addPropertyMapping('VolumeUOM', self::names()->volumeUOM);
        $properties->palletExchangeCode = Schema::string();
        $properties->palletExchangeCode->enum = array(
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
            self::CONST_4,
            self::CONST_5,
            self::CONST_6,
            self::CONST_7,
        );
        $properties->palletExchangeCode->description = "Code specifying pallet exchange instructions";
        $ownerSchema->addPropertyMapping('PalletExchangeCode', self::names()->palletExchangeCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group contains the quantity of your PackingMedium and other related values such as weight and volume";
        $ownerSchema->required = array(
        );
    }
}