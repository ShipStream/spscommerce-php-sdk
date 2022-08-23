<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrganizationalRelationships;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrganizationalRelationshipLineItemItemsHierarchical extends ClassStructure
{
    /** @var string */
    public $iDNumber;

    /** @var string */
    public $parentIDNumber;

    /** @var string */
    public $levelCode;

    /** @var string */
    public $childCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->iDNumber = Schema::string();
        $ownerSchema->addPropertyMapping('IDNumber', self::names()->iDNumber);
        $properties->parentIDNumber = Schema::string();
        $ownerSchema->addPropertyMapping('ParentIDNumber', self::names()->parentIDNumber);
        $properties->levelCode = Schema::string();
        $ownerSchema->addPropertyMapping('LevelCode', self::names()->levelCode);
        $properties->childCode = Schema::string();
        $ownerSchema->addPropertyMapping('ChildCode', self::names()->childCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}