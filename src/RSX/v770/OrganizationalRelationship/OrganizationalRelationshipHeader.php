<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrganizationalRelationship;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrganizationalRelationshipHeader extends ClassStructure
{
    /** @var OrganizationalRelationshipHeaderOrganizationalRelationshipHeader */
    public $organizationalRelationshipHeader;

    /** @var OrganizationalRelationshipHeaderDatesItems[]|array */
    public $dates;

    /** @var OrganizationalRelationshipHeaderReferencesItems[]|array */
    public $references;

    /** @var OrganizationalRelationshipHeaderNotesItems[]|array */
    public $notes;

    /** @var OrganizationalRelationshipHeaderAddressItems[]|array */
    public $address;

    /** @var OrganizationalRelationshipHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->organizationalRelationshipHeader = OrganizationalRelationshipHeaderOrganizationalRelationshipHeader::schema();
        $ownerSchema->addPropertyMapping('OrganizationalRelationshipHeader', self::names()->organizationalRelationshipHeader);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrganizationalRelationshipHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = OrganizationalRelationshipHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrganizationalRelationshipHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->address = Schema::arr();
        $properties->address->items = OrganizationalRelationshipHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrganizationalRelationshipHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'OrganizationalRelationshipHeader',
        );
    }
}