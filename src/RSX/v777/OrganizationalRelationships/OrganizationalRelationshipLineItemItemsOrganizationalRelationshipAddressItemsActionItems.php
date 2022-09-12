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
 * Describes the action taken with related data
 */
class OrganizationalRelationshipLineItemItemsOrganizationalRelationshipAddressItemsActionItems extends ClassStructure
{
    const CONST_1 = '1';

    const CONST_2 = '2';

    const CONST_3 = '3';

    const CONST_001 = '001';

    const CONST_002 = '002';

    const CONST_021 = '021';

    /** @var string Code indicating the type of action */
    public $actionCode;

    /** @var string Code to identify the action that is applied to associated level */
    public $maintenanceType;

    /** @var string This field is deprecated */
    public $statusReasonCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->actionCode = Schema::string();
        $properties->actionCode->enum = array(
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
        );
        $properties->actionCode->description = "Code indicating the type of action";
        $ownerSchema->addPropertyMapping('ActionCode', self::names()->actionCode);
        $properties->maintenanceType = Schema::string();
        $properties->maintenanceType->enum = array(
            self::CONST_001,
            self::CONST_002,
            self::CONST_021,
        );
        $properties->maintenanceType->description = "Code to identify the action that is applied to associated level";
        $ownerSchema->addPropertyMapping('MaintenanceType', self::names()->maintenanceType);
        $properties->statusReasonCode = Schema::string();
        $properties->statusReasonCode->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('StatusReasonCode', self::names()->statusReasonCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Describes the action taken with related data";
        $ownerSchema->required = array(
        );
    }
}