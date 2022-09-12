<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Orders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Details of the pallet with or without merchandise
 */
class OrderLineItemItemsPalletInformationItems extends ClassStructure
{
    const IN = 'IN';

    const OU = 'OU';

    const CONST_CFCD20 = '0';

    const CONST_1 = '1';

    const CONST_10 = '10';

    const CONST_11 = '11';

    const CONST_3 = '3';

    const CONST_4 = '4';

    const CONST_5 = '5';

    const CONST_6 = '6';

    const CONST_7 = '7';

    const CONST_8 = '8';

    const PWI = 'PWI';

    const RPL = 'RPL';

    const CONST_01 = '01';

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

    const CONST_5_I = '5I';

    const BF = 'BF';

    const BP = 'BP';

    const C8 = 'C8';

    const CC = 'CC';

    const CF = 'CF';

    const CI = 'CI';

    const CM = 'CM';

    const CR = 'CR';

    const CY = 'CY';

    const DM = 'DM';

    const FT = 'FT';

    const HF = 'HF';

    const HL = 'HL';

    const HS = 'HS';

    const HY = 'HY';

    const LF = 'LF';

    const LM = 'LM';

    const LY = 'LY';

    const MM = 'MM';

    const MR = 'MR';

    const SF = 'SF';

    const SI = 'SI';

    const SM = 'SM';

    const SY = 'SY';

    const TI = 'TI';

    const TL = 'TL';

    const TM = 'TM';

    const TR = 'TR';

    const TS = 'TS';

    const YD = 'YD';

    const B = 'B';

    const EN = 'EN';

    const F = 'F';

    const G = 'G';

    const L = 'L';

    const N = 'N';

    const P = 'P';

    const T = 'T';

    const CONST_4_G = '4G';

    const C3 = 'C3';

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

    const CONST_2 = '2';

    const A = 'A';

    const C = 'C';

    const S = 'S';

    /** @var string Code to identify the pallet hierarchical level */
    public $palletQualifier;

    /** @var int The number of units inside the PalletQualifier */
    public $palletValue;

    /** @var string Code indicating the type of material of the pallet */
    public $palletTypeCode;

    /** @var int The number of vertical layers on the pallet */
    public $palletTiers;

    /** @var int The number of units per horizontal layer on the pallet */
    public $palletBlocks;

    /** @var float The weight of the logistic unit without content */
    public $unitWeight;

    /** @var string The unit of measure used in relation to a unit weight */
    public $unitWeightUOM;

    /** @var float Measurement from end to end */
    public $length;

    /** @var float Measurement from side to side */
    public $width;

    /** @var float Measurement from base to top */
    public $height;

    /** @var string Code specifying the units in which the length, width, or height is being measured by */
    public $dimensionUOM;

    /** @var string Code defining the type of weight */
    public $weightQualifier;

    /** @var float Numeric value of total weight in reference to the PalletQualifier */
    public $palletWeight;

    /** @var string Code specifying the units in which the PalletWeight is being measured by */
    public $palletWeightUOM;

    /** @var float Numeric value of volume per unit of measure in reference to the PalletQualifier */
    public $palletVolume;

    /** @var string Code specifying the units in which the PalletVolume is being measured by */
    public $palletVolumeUOM;

    /** @var float The vertical dimension of your pallet when not loaded */
    public $unloadedHeight;

    /** @var string Unit of measure used in relation with the UnloadedHeight */
    public $unloadedHeightUOM;

    /** @var string Code specifying pallet exchange instructions */
    public $palletExchangeCode;

    /** @var string Code identifying the style of the pallet */
    public $palletStructureCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->palletQualifier = Schema::string();
        $properties->palletQualifier->enum = array(
            self::IN,
            self::OU,
        );
        $properties->palletQualifier->description = "Code to identify the pallet hierarchical level";
        $ownerSchema->addPropertyMapping('PalletQualifier', self::names()->palletQualifier);
        $properties->palletValue = Schema::integer();
        $properties->palletValue->description = "The number of units inside the PalletQualifier";
        $ownerSchema->addPropertyMapping('PalletValue', self::names()->palletValue);
        $properties->palletTypeCode = Schema::string();
        $properties->palletTypeCode->enum = array(
            self::CONST_CFCD20,
            self::CONST_1,
            self::CONST_10,
            self::CONST_11,
            self::CONST_3,
            self::CONST_4,
            self::CONST_5,
            self::CONST_6,
            self::CONST_7,
            self::CONST_8,
            self::PWI,
            self::RPL,
        );
        $properties->palletTypeCode->description = "Code indicating the type of material of the pallet";
        $ownerSchema->addPropertyMapping('PalletTypeCode', self::names()->palletTypeCode);
        $properties->palletTiers = Schema::integer();
        $properties->palletTiers->description = "The number of vertical layers on the pallet";
        $ownerSchema->addPropertyMapping('PalletTiers', self::names()->palletTiers);
        $properties->palletBlocks = Schema::integer();
        $properties->palletBlocks->description = "The number of units per horizontal layer on the pallet";
        $ownerSchema->addPropertyMapping('PalletBlocks', self::names()->palletBlocks);
        $properties->unitWeight = Schema::number();
        $properties->unitWeight->description = "The weight of the logistic unit without content";
        $ownerSchema->addPropertyMapping('UnitWeight', self::names()->unitWeight);
        $properties->unitWeightUOM = Schema::string();
        $properties->unitWeightUOM->enum = array(
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
        $properties->unitWeightUOM->description = "The unit of measure used in relation to a unit weight";
        $ownerSchema->addPropertyMapping('UnitWeightUOM', self::names()->unitWeightUOM);
        $properties->length = Schema::number();
        $properties->length->description = "Measurement from end to end";
        $ownerSchema->addPropertyMapping('Length', self::names()->length);
        $properties->width = Schema::number();
        $properties->width->description = "Measurement from side to side";
        $ownerSchema->addPropertyMapping('Width', self::names()->width);
        $properties->height = Schema::number();
        $properties->height->description = "Measurement from base to top";
        $ownerSchema->addPropertyMapping('Height', self::names()->height);
        $properties->dimensionUOM = Schema::string();
        $properties->dimensionUOM->enum = array(
            self::CONST_5_I,
            self::BF,
            self::BP,
            self::C8,
            self::CC,
            self::CF,
            self::CI,
            self::CM,
            self::CR,
            self::CY,
            self::DM,
            self::FT,
            self::HF,
            self::HL,
            self::HS,
            self::HY,
            self::IN,
            self::LF,
            self::LM,
            self::LY,
            self::MM,
            self::MR,
            self::SF,
            self::SI,
            self::SM,
            self::SY,
            self::TI,
            self::TL,
            self::TM,
            self::TR,
            self::TS,
            self::YD,
        );
        $properties->dimensionUOM->description = "Code specifying the units in which the length, width, or height is being measured by";
        $ownerSchema->addPropertyMapping('DimensionUOM', self::names()->dimensionUOM);
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
        $properties->palletWeight = Schema::number();
        $properties->palletWeight->description = "Numeric value of total weight in reference to the PalletQualifier";
        $ownerSchema->addPropertyMapping('PalletWeight', self::names()->palletWeight);
        $properties->palletWeightUOM = Schema::string();
        $properties->palletWeightUOM->enum = array(
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
        $properties->palletWeightUOM->description = "Code specifying the units in which the PalletWeight is being measured by";
        $ownerSchema->addPropertyMapping('PalletWeightUOM', self::names()->palletWeightUOM);
        $properties->palletVolume = Schema::number();
        $properties->palletVolume->description = "Numeric value of volume per unit of measure in reference to the PalletQualifier";
        $ownerSchema->addPropertyMapping('PalletVolume', self::names()->palletVolume);
        $properties->palletVolumeUOM = Schema::string();
        $properties->palletVolumeUOM->enum = array(
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
        $properties->palletVolumeUOM->description = "Code specifying the units in which the PalletVolume is being measured by";
        $ownerSchema->addPropertyMapping('PalletVolumeUOM', self::names()->palletVolumeUOM);
        $properties->unloadedHeight = Schema::number();
        $properties->unloadedHeight->description = "The vertical dimension of your pallet when not loaded";
        $ownerSchema->addPropertyMapping('UnloadedHeight', self::names()->unloadedHeight);
        $properties->unloadedHeightUOM = Schema::string();
        $properties->unloadedHeightUOM->enum = array(
            self::CONST_5_I,
            self::BF,
            self::BP,
            self::C8,
            self::CC,
            self::CF,
            self::CI,
            self::CM,
            self::CR,
            self::CY,
            self::DM,
            self::FT,
            self::HF,
            self::HL,
            self::HS,
            self::HY,
            self::IN,
            self::LF,
            self::LM,
            self::LY,
            self::MM,
            self::MR,
            self::SF,
            self::SI,
            self::SM,
            self::SY,
            self::TI,
            self::TL,
            self::TM,
            self::TR,
            self::TS,
            self::YD,
        );
        $properties->unloadedHeightUOM->description = "Unit of measure used in relation with the UnloadedHeight";
        $ownerSchema->addPropertyMapping('UnloadedHeightUOM', self::names()->unloadedHeightUOM);
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
        $properties->palletStructureCode = Schema::string();
        $properties->palletStructureCode->enum = array(
            self::A,
            self::B,
            self::C,
            self::S,
        );
        $properties->palletStructureCode->description = "Code identifying the style of the pallet";
        $ownerSchema->addPropertyMapping('PalletStructureCode', self::names()->palletStructureCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Details of the pallet with or without merchandise";
        $ownerSchema->required = array(
        );
    }
}