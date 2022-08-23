<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrganizationalRelationships;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrganizationalRelationshipLineItemItems extends ClassStructure
{
    /** @var OrganizationalRelationshipLineItemItemsHierarchical */
    public $hierarchical;

    /** @var OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItems[]|array */
    public $organizationalRelationshipAddress;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->hierarchical = OrganizationalRelationshipLineItemItemsHierarchical::schema();
        $ownerSchema->addPropertyMapping('Hierarchical', self::names()->hierarchical);
        $properties->organizationalRelationshipAddress = Schema::arr();
        $properties->organizationalRelationshipAddress->items = OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItems::schema();
        $ownerSchema->addPropertyMapping('OrganizationalRelationshipAddress', self::names()->organizationalRelationshipAddress);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}