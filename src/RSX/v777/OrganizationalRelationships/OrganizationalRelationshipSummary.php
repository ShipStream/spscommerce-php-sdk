<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrganizationalRelationships;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document summary elements
 */
class OrganizationalRelationshipSummary extends ClassStructure
{
    /** @var int Sum of enclosed organization addresses */
    public $addressCount;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->addressCount = Schema::integer();
        $properties->addressCount->description = "Sum of enclosed organization addresses";
        $ownerSchema->addPropertyMapping('AddressCount', self::names()->addressCount);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document summary elements";
        $ownerSchema->required = array(
        );
    }
}