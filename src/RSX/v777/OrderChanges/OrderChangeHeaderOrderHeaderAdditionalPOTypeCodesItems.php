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
 * This group should be used if the associated normalized fields already contain information.
 */
class OrderChangeHeaderOrderHeaderAdditionalPOTypeCodesItems extends ClassStructure
{
    const CONST_26 = '26';

    const BH = 'BH';

    const BK = 'BK';

    const CF = 'CF';

    const CN = 'CN';

    const DS = 'DS';

    const EO = 'EO';

    const IM = 'IM';

    const IN = 'IN';

    const KC = 'KC';

    const KN = 'KN';

    const NP = 'NP';

    const NS = 'NS';

    const OS = 'OS';

    const PR = 'PR';

    const RE = 'RE';

    const RL = 'RL';

    const RO = 'RO';

    const SA = 'SA';

    const SD = 'SD';

    const SP = 'SP';

    const SS = 'SS';

    const TS = 'TS';

    const WH = 'WH';

    const WO = 'WO';

    /** @var string Code indicating additional details regarding the ordering document */
    public $pOTypeCode;

    /** @var string Free form text to describe the additional details regarding the ordering document */
    public $pOTypeDescription;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->pOTypeCode = Schema::string();
        $properties->pOTypeCode->enum = array(
            self::CONST_26,
            self::BH,
            self::BK,
            self::CF,
            self::CN,
            self::DS,
            self::EO,
            self::IM,
            self::IN,
            self::KC,
            self::KN,
            self::NP,
            self::NS,
            self::OS,
            self::PR,
            self::RE,
            self::RL,
            self::RO,
            self::SA,
            self::SD,
            self::SP,
            self::SS,
            self::TS,
            self::WH,
            self::WO,
        );
        $properties->pOTypeCode->description = "Code indicating additional details regarding the ordering document";
        $ownerSchema->addPropertyMapping('POTypeCode', self::names()->pOTypeCode);
        $properties->pOTypeDescription = Schema::string();
        $properties->pOTypeDescription->description = "Free form text to describe the additional details regarding the ordering document";
        $ownerSchema->addPropertyMapping('POTypeDescription', self::names()->pOTypeDescription);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group should be used if the associated normalized fields already contain information.";
        $ownerSchema->required = array(
        );
    }
}