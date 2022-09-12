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
 * Provides tax details
 */
class OrderHeaderTaxesItems extends ClassStructure
{
    const A = 'A';

    const AF = 'AF';

    const ALDU = 'ALDU';

    const AVT = 'AVT';

    const AX = 'AX';

    const BB = 'BB';

    const BE = 'BE';

    const CA = 'CA';

    const CE = 'CE';

    const CG = 'CG';

    const CP = 'CP';

    const CS = 'CS';

    const CV = 'CV';

    const EV = 'EV';

    const FD = 'FD';

    const FT = 'FT';

    const GR = 'GR';

    const GS = 'GS';

    const H = 'H';

    const H215 = 'H215';

    const H535 = 'H535';

    const H625 = 'H625';

    const H640 = 'H640';

    const H650 = 'H650';

    const H670 = 'H670';

    const H720 = 'H720';

    const H760 = 'H760';

    const H780 = 'H780';

    const HZ = 'HZ';

    const I431 = 'I431';

    const L = 'L';

    const LO = 'LO';

    const LS = 'LS';

    const LT = 'LT';

    const PG = 'PG';

    const PS = 'PS';

    const QST = 'QST';

    const S = 'S';

    const SBSD = 'SBSD';

    const SE = 'SE';

    const SL = 'SL';

    const SP = 'SP';

    const SQ = 'SQ';

    const ST = 'ST';

    const SU = 'SU';

    const SUIP = 'SUIP';

    const TX = 'TX';

    const UNDF = 'UNDF';

    const VA = 'VA';

    const Z = 'Z';

    const CONST_1 = '1';

    const CONST_2 = '2';

    const CONST_3 = '3';

    const CONST_4 = '4';

    const CONST_5 = '5';

    const CONST_6 = '6';

    const CONST_7 = '7';

    const CC = 'CC';

    const MB = 'MB';

    const CONST_CFCD20 = '0';

    const D = 'D';

    const I = 'I';

    const O = 'O';

    const CONST_01 = '01';

    const CONST_02 = '02';

    const CONST_03 = '03';

    const CONST_04 = '04';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_13 = '13';

    const CONST_15 = '15';

    /** @var string Identification of the type of duty, tax, or fee applicable to commodities or of tax applicable to services */
    public $taxTypeCode;

    /** @var float The monetary amount applied */
    public $taxAmount;

    /** @var string Code indicating on what basis a tax percent is calculated */
    public $taxPercentQual;

    /** @var float The percentage that is applied to determine the tax amount. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00] */
    public $taxPercent;

    /** @var string Code identifying the source of the data used in the Tax JurisdictionCode */
    public $jurisdictionQual;

    /** @var string Code represents the City, State, or Providence[tax authority] associated with the Tax group */
    public $jurisdictionCode;

    /** @var string Code indicating whether the header or item level data is exempt[or not exempt] for the tax and taxing authority indicated in JurisdictionCode */
    public $taxExemptCode;

    /** @var string Code identifying whether the tax amount is included in the total transaction amount */
    public $relationshipCode;

    /** @var float Monetary amount that is used when calculating a tax, allowance, or charge amount. */
    public $percentDollarBasis;

    /** @var string Code indicating method of handling for a tax */
    public $taxHandlingCode;

    /** @var string Number assigned to a purchaser[buyer, orderer] by a tax jurisdiction[state, country, etc] */
    public $taxID;

    /** @var string An identifier */
    public $assignedID;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->taxTypeCode = Schema::string();
        $properties->taxTypeCode->enum = array(
            self::A,
            self::AF,
            self::ALDU,
            self::AVT,
            self::AX,
            self::BB,
            self::BE,
            self::CA,
            self::CE,
            self::CG,
            self::CP,
            self::CS,
            self::CV,
            self::EV,
            self::FD,
            self::FT,
            self::GR,
            self::GS,
            self::H,
            self::H215,
            self::H535,
            self::H625,
            self::H640,
            self::H650,
            self::H670,
            self::H720,
            self::H760,
            self::H780,
            self::HZ,
            self::I431,
            self::L,
            self::LO,
            self::LS,
            self::LT,
            self::PG,
            self::PS,
            self::QST,
            self::S,
            self::SBSD,
            self::SE,
            self::SL,
            self::SP,
            self::SQ,
            self::ST,
            self::SU,
            self::SUIP,
            self::TX,
            self::UNDF,
            self::VA,
            self::Z,
        );
        $properties->taxTypeCode->description = "Identification of the type of duty, tax, or fee applicable to commodities or of tax applicable to services";
        $ownerSchema->addPropertyMapping('TaxTypeCode', self::names()->taxTypeCode);
        $properties->taxAmount = Schema::number();
        $properties->taxAmount->description = "The monetary amount applied";
        $ownerSchema->addPropertyMapping('TaxAmount', self::names()->taxAmount);
        $properties->taxPercentQual = Schema::string();
        $properties->taxPercentQual->enum = array(
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
            self::CONST_4,
            self::CONST_5,
            self::CONST_6,
            self::CONST_7,
        );
        $properties->taxPercentQual->description = "Code indicating on what basis a tax percent is calculated";
        $ownerSchema->addPropertyMapping('TaxPercentQual', self::names()->taxPercentQual);
        $properties->taxPercent = Schema::number();
        $properties->taxPercent->description = "The percentage that is applied to determine the tax amount. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00]";
        $ownerSchema->addPropertyMapping('TaxPercent', self::names()->taxPercent);
        $properties->jurisdictionQual = Schema::string();
        $properties->jurisdictionQual->enum = array(
            self::CC,
            self::MB,
            self::SP,
        );
        $properties->jurisdictionQual->description = "Code identifying the source of the data used in the Tax JurisdictionCode";
        $ownerSchema->addPropertyMapping('JurisdictionQual', self::names()->jurisdictionQual);
        $properties->jurisdictionCode = Schema::string();
        $properties->jurisdictionCode->description = "Code represents the City, State, or Providence[tax authority] associated with the Tax group";
        $ownerSchema->addPropertyMapping('JurisdictionCode', self::names()->jurisdictionCode);
        $properties->taxExemptCode = Schema::string();
        $properties->taxExemptCode->enum = array(
            self::CONST_CFCD20,
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
        );
        $properties->taxExemptCode->description = "Code indicating whether the header or item level data is exempt[or not exempt] for the tax and taxing authority indicated in JurisdictionCode";
        $ownerSchema->addPropertyMapping('TaxExemptCode', self::names()->taxExemptCode);
        $properties->relationshipCode = Schema::string();
        $properties->relationshipCode->enum = array(
            self::A,
            self::D,
            self::I,
            self::O,
            self::S,
        );
        $properties->relationshipCode->description = "Code identifying whether the tax amount is included in the total transaction amount";
        $ownerSchema->addPropertyMapping('RelationshipCode', self::names()->relationshipCode);
        $properties->percentDollarBasis = Schema::number();
        $properties->percentDollarBasis->description = "Monetary amount that is used when calculating a tax, allowance, or charge amount.";
        $ownerSchema->addPropertyMapping('PercentDollarBasis', self::names()->percentDollarBasis);
        $properties->taxHandlingCode = Schema::string();
        $properties->taxHandlingCode->enum = array(
            self::CONST_01,
            self::CONST_02,
            self::CONST_03,
            self::CONST_04,
            self::CONST_05,
            self::CONST_06,
            self::CONST_13,
            self::CONST_15,
        );
        $properties->taxHandlingCode->description = "Code indicating method of handling for a tax";
        $ownerSchema->addPropertyMapping('TaxHandlingCode', self::names()->taxHandlingCode);
        $properties->taxID = Schema::string();
        $properties->taxID->description = "Number assigned to a purchaser[buyer, orderer] by a tax jurisdiction[state, country, etc]";
        $ownerSchema->addPropertyMapping('TaxID', self::names()->taxID);
        $properties->assignedID = Schema::string();
        $properties->assignedID->description = "An identifier";
        $ownerSchema->addPropertyMapping('AssignedID', self::names()->assignedID);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides tax details";
        $ownerSchema->required = array(
        );
    }
}