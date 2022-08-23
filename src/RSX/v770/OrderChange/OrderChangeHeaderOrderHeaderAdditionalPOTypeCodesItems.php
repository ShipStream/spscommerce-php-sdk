<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChange;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group should be used if the associated normalized fields already contain information.
 */
class OrderChangeHeaderOrderHeaderAdditionalPOTypeCodesItems extends ClassStructure
{
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