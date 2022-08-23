<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeLineItemItemsConditionOfSaleItemsProductIDItems extends ClassStructure
{
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
        $properties->partNumberQual->description = "Qualifier describing the additional product identification numbers not defined in specific fields at the line level";
        $ownerSchema->addPropertyMapping('PartNumberQual', self::names()->partNumberQual);
        $properties->partNumber = Schema::string();
        $properties->partNumber->description = "Additional product identification numbers not defined in specific fields at the line level";
        $ownerSchema->addPropertyMapping('PartNumber', self::names()->partNumber);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}