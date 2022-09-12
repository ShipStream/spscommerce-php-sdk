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
 * Provides structure to the detail of the transaction
 */
class OrganizationalRelationshipLineItemItemsHierarchical extends ClassStructure
{
    const CONST_35 = '35';

    const CONST_36 = '36';

    /** @var string Incremental counter of each occurrence of Hierarchical */
    public $iDNumber;

    /** @var string Identifies which Hierarchical the current repetition is a child of */
    public $parentIDNumber;

    /** @var string Provides context to the structure of the data */
    public $levelCode;

    /** @var string This field is deprecated */
    public $childCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->iDNumber = Schema::string();
        $properties->iDNumber->description = "Incremental counter of each occurrence of Hierarchical";
        $ownerSchema->addPropertyMapping('IDNumber', self::names()->iDNumber);
        $properties->parentIDNumber = Schema::string();
        $properties->parentIDNumber->description = "Identifies which Hierarchical the current repetition is a child of";
        $ownerSchema->addPropertyMapping('ParentIDNumber', self::names()->parentIDNumber);
        $properties->levelCode = Schema::string();
        $properties->levelCode->enum = array(
            self::CONST_35,
            self::CONST_36,
        );
        $properties->levelCode->description = "Provides context to the structure of the data";
        $ownerSchema->addPropertyMapping('LevelCode', self::names()->levelCode);
        $properties->childCode = Schema::string();
        $properties->childCode->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('ChildCode', self::names()->childCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides structure to the detail of the transaction";
        $ownerSchema->required = array(
        );
    }
}