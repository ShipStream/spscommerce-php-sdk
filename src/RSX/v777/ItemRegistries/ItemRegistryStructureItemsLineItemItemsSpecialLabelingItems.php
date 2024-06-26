<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ItemRegistries;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Describes labels that are affixed to the product as well as their requirements
 */
class ItemRegistryStructureItemsLineItemItemsSpecialLabelingItems extends ClassStructure
{
    const AI = 'AI';

    const BF = 'BF';

    const CH2 = 'CH2';

    const CH4 = 'CH4';

    const DF = 'DF';

    const EG = 'EG';

    const LF = 'LF';

    const NF = 'NF';

    const P65 = 'P65';

    const PA = 'PA';

    const SF = 'SF';

    const TXAC = 'TXAC';

    const N = 'N';

    const Y = 'Y';

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
        $properties->labelName->enum = array(
            self::AI,
            self::BF,
            self::CH2,
            self::CH4,
            self::DF,
            self::EG,
            self::LF,
            self::NF,
            self::P65,
            self::PA,
            self::SF,
            self::TXAC,
        );
        $properties->labelName->description = "Identifies the label";
        $ownerSchema->addPropertyMapping('LabelName', self::names()->labelName);
        $properties->required = Schema::string();
        $properties->required->enum = array(
            self::N,
            self::Y,
        );
        $properties->required->description = "Indicates if the related data is a requirement";
        $ownerSchema->addPropertyMapping('Required', self::names()->required);
        $properties->compliant = Schema::string();
        $properties->compliant->enum = array(
            self::N,
            self::Y,
        );
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