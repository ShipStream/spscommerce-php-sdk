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
 * Identifies additional product identification numbers which are not defined in designated fields
 */
class OrderAckLineItemItemsOrderLineProductIDItems extends ClassStructure
{
    const AR = 'AR';

    const B8 = 'B8';

    const BO = 'BO';

    const BPDN = 'BPDN';

    const CB = 'CB';

    const CID = 'CID';

    const DIN = 'DIN';

    const DPN = 'DPN';

    const FU = 'FU';

    const IS = 'IS';

    const IT = 'IT';

    const IZ = 'IZ';

    const MG = 'MG';

    const MN = 'MN';

    const N5 = 'N5';

    const N532 = 'N532';

    const N541 = 'N541';

    const PC = 'PC';

    const PLU = 'PLU';

    const RP = 'RP';

    const SK = 'SK';

    const SS = 'SS';

    const SZ = 'SZ';

    const VA = 'VA';

    const VC = 'VC';

    const VE = 'VE';

    const ZBP = 'ZBP';

    const ZEAN = 'ZEAN';

    const ZGTIN = 'ZGTIN';

    const ZISBN = 'ZISBN';

    const ZUPC = 'ZUPC';

    const ZVP = 'ZVP';

    /** @var string Qualifier describing the additional product identification numbers not defined in specific fields at the line level */
    public $partNumberQual;

    /** @var string Additional product identification numbers not defined in specific fields at the line level */
    public $partNumber;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->partNumberQual = Schema::string();
        $properties->partNumberQual->enum = array(
            self::AR,
            self::B8,
            self::BO,
            self::BPDN,
            self::CB,
            self::CID,
            self::DIN,
            self::DPN,
            self::FU,
            self::IS,
            self::IT,
            self::IZ,
            self::MG,
            self::MN,
            self::N5,
            self::N532,
            self::N541,
            self::PC,
            self::PLU,
            self::RP,
            self::SK,
            self::SS,
            self::SZ,
            self::VA,
            self::VC,
            self::VE,
            self::ZBP,
            self::ZEAN,
            self::ZGTIN,
            self::ZISBN,
            self::ZUPC,
            self::ZVP,
        );
        $properties->partNumberQual->description = "Qualifier describing the additional product identification numbers not defined in specific fields at the line level";
        $ownerSchema->addPropertyMapping('PartNumberQual', self::names()->partNumberQual);
        $properties->partNumber = Schema::string();
        $properties->partNumber->description = "Additional product identification numbers not defined in specific fields at the line level";
        $ownerSchema->addPropertyMapping('PartNumber', self::names()->partNumber);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Identifies additional product identification numbers which are not defined in designated fields";
        $ownerSchema->required = array(
        );
    }
}