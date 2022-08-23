<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrganizationalRelationship;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsActionItems extends ClassStructure
{
    /** @var string Code indicating the type of action */
    public $actionCode;

    /** @var string */
    public $maintenanceType;

    /** @var string */
    public $statusReasonCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->actionCode = Schema::string();
        $properties->actionCode->description = "Code indicating the type of action";
        $ownerSchema->addPropertyMapping('ActionCode', self::names()->actionCode);
        $properties->maintenanceType = Schema::string();
        $ownerSchema->addPropertyMapping('MaintenanceType', self::names()->maintenanceType);
        $properties->statusReasonCode = Schema::string();
        $ownerSchema->addPropertyMapping('StatusReasonCode', self::names()->statusReasonCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}