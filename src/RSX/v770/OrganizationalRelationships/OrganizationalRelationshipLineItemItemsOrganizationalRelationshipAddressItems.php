<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrganizationalRelationships;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItems extends ClassStructure
{
    /** @var OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsAddress */
    public $address;

    /** @var OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsItemQuantityItems[]|array */
    public $itemQuantity;

    /** @var OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsActionItems[]|array */
    public $action;

    /** @var OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->address = OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsAddress::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->itemQuantity = Schema::arr();
        $properties->itemQuantity->items = OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsItemQuantityItems::schema();
        $ownerSchema->addPropertyMapping('ItemQuantity', self::names()->itemQuantity);
        $properties->action = Schema::arr();
        $properties->action->items = OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsActionItems::schema();
        $ownerSchema->addPropertyMapping('Action', self::names()->action);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}