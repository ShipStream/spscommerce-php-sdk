<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\ProductActivities;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ProductActivityHeaderPreassignedPurchaseOrderNumbersItems extends ClassStructure
{
    /** @var string */
    public $startPONumber;

    /** @var string */
    public $endPONumber;

    /** @var string Code identifying the structure or format of the related location number[s] */
    public $locationCodeQualifier;

    /** @var string */
    public $pOLocationID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->startPONumber = Schema::string();
        $ownerSchema->addPropertyMapping('StartPONumber', self::names()->startPONumber);
        $properties->endPONumber = Schema::string();
        $ownerSchema->addPropertyMapping('EndPONumber', self::names()->endPONumber);
        $properties->locationCodeQualifier = Schema::string();
        $properties->locationCodeQualifier->description = "Code identifying the structure or format of the related location number[s]";
        $ownerSchema->addPropertyMapping('LocationCodeQualifier', self::names()->locationCodeQualifier);
        $properties->pOLocationID = Schema::string();
        $ownerSchema->addPropertyMapping('POLocationID', self::names()->pOLocationID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}