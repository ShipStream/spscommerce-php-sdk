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
 * Contains one or more group elements
 */
class ItemRegistryStructureItems extends ClassStructure
{
    /** @var string Vendor-created item Classification identifier */
    public $classification;

    /** @var string Free form text that describes the Classification */
    public $classificationDescription;

    /** @var string Vendor-created SubClassification identifier */
    public $subClassification;

    /** @var string Free form text that describes the SubClassification */
    public $subClassificationDescription;

    /** @var ItemRegistryStructureItemsProductTypesItems[]|array */
    public $productTypes;

    /** @var ItemRegistryStructureItemsLineItemItems[]|array */
    public $lineItem;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->classification = Schema::string();
        $properties->classification->description = "Vendor-created item Classification identifier";
        $ownerSchema->addPropertyMapping('Classification', self::names()->classification);
        $properties->classificationDescription = Schema::string();
        $properties->classificationDescription->description = "Free form text that describes the Classification";
        $ownerSchema->addPropertyMapping('ClassificationDescription', self::names()->classificationDescription);
        $properties->subClassification = Schema::string();
        $properties->subClassification->description = "Vendor-created SubClassification identifier";
        $ownerSchema->addPropertyMapping('SubClassification', self::names()->subClassification);
        $properties->subClassificationDescription = Schema::string();
        $properties->subClassificationDescription->description = "Free form text that describes the SubClassification";
        $ownerSchema->addPropertyMapping('SubClassificationDescription', self::names()->subClassificationDescription);
        $properties->productTypes = Schema::arr();
        $properties->productTypes->items = ItemRegistryStructureItemsProductTypesItems::schema();
        $ownerSchema->addPropertyMapping('ProductTypes', self::names()->productTypes);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = ItemRegistryStructureItemsLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains one or more group elements";
        $ownerSchema->required = array(
            'LineItem',
        );
    }
}