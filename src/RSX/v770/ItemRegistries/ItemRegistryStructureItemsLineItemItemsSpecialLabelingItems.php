<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\ItemRegistries;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Describes labels that are affixed to the product as well as their requirements
 */
class ItemRegistryStructureItemsLineItemItemsSpecialLabelingItems extends ClassStructure
{
    /** @var string Identifies the label */
    public $labelName;

    /** @var string Indicates if the related data is a requirement */
    public $required;

    /** @var string Indicates compliance */
    public $compliant;

    /** @var string Describes why a label is needed */
    public $labelReason;

    /** @var ItemRegistryStructureItemsLineItemItemsSpecialLabelingItemsRequirementLocationsItems[]|array */
    public $requirementLocations;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->labelName = Schema::string();
        $properties->labelName->description = "Identifies the label";
        $ownerSchema->addPropertyMapping('LabelName', self::names()->labelName);
        $properties->required = Schema::string();
        $properties->required->description = "Indicates if the related data is a requirement";
        $ownerSchema->addPropertyMapping('Required', self::names()->required);
        $properties->compliant = Schema::string();
        $properties->compliant->description = "Indicates compliance";
        $ownerSchema->addPropertyMapping('Compliant', self::names()->compliant);
        $properties->labelReason = Schema::string();
        $properties->labelReason->description = "Describes why a label is needed";
        $ownerSchema->addPropertyMapping('LabelReason', self::names()->labelReason);
        $properties->requirementLocations = Schema::arr();
        $properties->requirementLocations->items = ItemRegistryStructureItemsLineItemItemsSpecialLabelingItemsRequirementLocationsItems::schema();
        $ownerSchema->addPropertyMapping('RequirementLocations', self::names()->requirementLocations);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Describes labels that are affixed to the product as well as their requirements";
        $ownerSchema->required = array(
        );
    }
}