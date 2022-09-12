<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Contains a service level code
 */
class ShipmentOrderLevelItemsPackLevelItemsCarrierInformationItemsServiceLevelCodesItems extends ClassStructure
{
    const CONST_3_D = '3D';

    const AM = 'AM';

    const CG = 'CG';

    const CX = 'CX';

    const DC = 'DC';

    const DS = 'DS';

    const ES = 'ES';

    const ET = 'ET';

    const FC = 'FC';

    const G2 = 'G2';

    const IDL = 'IDL';

    const IE = 'IE';

    const IS = 'IS';

    const IX = 'IX';

    const LM = 'LM';

    const LT = 'LT';

    const ME = 'ME';

    const ND = 'ND';

    const NF = 'NF';

    const NH = 'NH';

    const NM = 'NM';

    const NXD = 'NXD';

    const ON = 'ON';

    const PA = 'PA';

    const PB = 'PB';

    const PC = 'PC';

    const PI = 'PI';

    const PM = 'PM';

    const PN = 'PN';

    const PO = 'PO';

    const PR = 'PR';

    const PS = 'PS';

    const PT = 'PT';

    const PX = 'PX';

    const RE = 'RE';

    const SA = 'SA';

    const SC = 'SC';

    const SD = 'SD';

    const SE = 'SE';

    const SG = 'SG';

    const SH = 'SH';

    const SI = 'SI';

    const SM = 'SM';

    /** @var string Code indicating the level of transportation service or the billing service offered by the transportation carrier */
    public $serviceLevelCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->serviceLevelCode = Schema::string();
        $properties->serviceLevelCode->enum = array(
            self::CONST_3_D,
            self::AM,
            self::CG,
            self::CX,
            self::DC,
            self::DS,
            self::ES,
            self::ET,
            self::FC,
            self::G2,
            self::IDL,
            self::IE,
            self::IS,
            self::IX,
            self::LM,
            self::LT,
            self::ME,
            self::ND,
            self::NF,
            self::NH,
            self::NM,
            self::NXD,
            self::ON,
            self::PA,
            self::PB,
            self::PC,
            self::PI,
            self::PM,
            self::PN,
            self::PO,
            self::PR,
            self::PS,
            self::PT,
            self::PX,
            self::RE,
            self::SA,
            self::SC,
            self::SD,
            self::SE,
            self::SG,
            self::SH,
            self::SI,
            self::SM,
        );
        $properties->serviceLevelCode->description = "Code indicating the level of transportation service or the billing service offered by the transportation carrier";
        $ownerSchema->addPropertyMapping('ServiceLevelCode', self::names()->serviceLevelCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains a service level code";
        $ownerSchema->required = array(
        );
    }
}