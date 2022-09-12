<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ItemRegistries;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Describes the seal used in transportation
 */
class ItemRegistryStructureItemsLineItemItemsCarrierInformationItemsSealNumbersItems extends ClassStructure
{
    const CONST_01 = '01';

    const CONST_02 = '02';

    const CONST_03 = '03';

    const CONST_04 = '04';

    /** @var string Code indicating condition of door seal upon arrival */
    public $sealStatusCode;

    /** @var string Stamped lock that is on the container */
    public $sealNumber;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sealStatusCode = Schema::string();
        $properties->sealStatusCode->enum = array(
            self::CONST_01,
            self::CONST_02,
            self::CONST_03,
            self::CONST_04,
        );
        $properties->sealStatusCode->description = "Code indicating condition of door seal upon arrival";
        $ownerSchema->addPropertyMapping('SealStatusCode', self::names()->sealStatusCode);
        $properties->sealNumber = Schema::string();
        $properties->sealNumber->description = "Stamped lock that is on the container";
        $ownerSchema->addPropertyMapping('SealNumber', self::names()->sealNumber);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Describes the seal used in transportation";
        $ownerSchema->required = array(
        );
    }
}