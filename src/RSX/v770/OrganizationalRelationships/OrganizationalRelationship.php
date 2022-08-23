<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrganizationalRelationships;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from OrganizationalRelationships.json#/definitions/OrganizationalRelationship
 */
class OrganizationalRelationship extends ClassStructure
{
    /** @var OrganizationalRelationshipMeta Contains internal SPS information */
    public $meta;

    /** @var OrganizationalRelationshipHeader */
    public $header;

    /** @var OrganizationalRelationshipLineItemItems[]|array */
    public $lineItem;

    /** @var OrganizationalRelationshipSummary */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = OrganizationalRelationshipMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = OrganizationalRelationshipHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = OrganizationalRelationshipLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $properties->summary = OrganizationalRelationshipSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('OrganizationalRelationships.json#/definitions/OrganizationalRelationship');
    }
}