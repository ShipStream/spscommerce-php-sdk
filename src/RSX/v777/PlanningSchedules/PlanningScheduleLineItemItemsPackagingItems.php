<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group is deprecated
 */
class PlanningScheduleLineItemItemsPackagingItems extends ClassStructure
{
    const CONST_10 = '10';

    const CONST_34 = '34';

    const CONST_35 = '35';

    const CONST_36 = '36';

    const HZ = 'HZ';

    const PK = 'PK';

    const CONST_13 = '13';

    const AX = 'AX';

    const BI = 'BI';

    const DD = 'DD';

    const FA = 'FA';

    const FC = 'FC';

    const NEMA = 'NEMA';

    const ST = 'ST';

    const SZAU = 'SZAU';

    const VI = 'VI';

    const CONST_01 = '01';

    const CONST_02 = '02';

    const CONST_03 = '03';

    const CONST_04 = '04';

    const CONST_05 = '05';

    /** @var string Code specifying the marking, packaging, loading, and related characteristics being described */
    public $packagingCharacteristicCode;

    /** @var string Identifies the agency from which code values are sourced */
    public $agencyQualifierCode;

    /** @var string This field is deprecated */
    public $packagingDescriptionCode;

    /** @var string This field is deprecated */
    public $packagingDescription;

    /** @var string Code identifying loading or unloading a shipment */
    public $unitLoadOptionCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->packagingCharacteristicCode = Schema::string();
        $properties->packagingCharacteristicCode->enum = array(
            self::CONST_10,
            self::CONST_34,
            self::CONST_35,
            self::CONST_36,
            self::HZ,
            self::PK,
        );
        $properties->packagingCharacteristicCode->description = "Code specifying the marking, packaging, loading, and related characteristics being described";
        $ownerSchema->addPropertyMapping('PackagingCharacteristicCode', self::names()->packagingCharacteristicCode);
        $properties->agencyQualifierCode = Schema::string();
        $properties->agencyQualifierCode->enum = array(
            self::CONST_13,
            self::AX,
            self::BI,
            self::DD,
            self::FA,
            self::FC,
            self::NEMA,
            self::ST,
            self::SZAU,
            self::VI,
        );
        $properties->agencyQualifierCode->description = "Identifies the agency from which code values are sourced";
        $ownerSchema->addPropertyMapping('AgencyQualifierCode', self::names()->agencyQualifierCode);
        $properties->packagingDescriptionCode = Schema::string();
        $properties->packagingDescriptionCode->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('PackagingDescriptionCode', self::names()->packagingDescriptionCode);
        $properties->packagingDescription = Schema::string();
        $properties->packagingDescription->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('PackagingDescription', self::names()->packagingDescription);
        $properties->unitLoadOptionCode = Schema::string();
        $properties->unitLoadOptionCode->enum = array(
            self::CONST_01,
            self::CONST_02,
            self::CONST_03,
            self::CONST_04,
            self::CONST_05,
        );
        $properties->unitLoadOptionCode->description = "Code identifying loading or unloading a shipment";
        $ownerSchema->addPropertyMapping('UnitLoadOptionCode', self::names()->unitLoadOptionCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group is deprecated";
        $ownerSchema->required = array(
        );
    }
}