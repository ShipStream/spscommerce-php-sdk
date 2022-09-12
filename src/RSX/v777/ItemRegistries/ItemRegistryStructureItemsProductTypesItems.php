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
 * Classifications of a product
 */
class ItemRegistryStructureItemsProductTypesItems extends ClassStructure
{
    /** @var string Used to define the item's lowest classification level */
    public $productType;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->productType = Schema::string();
        $properties->productType->description = "Used to define the item's lowest classification level";
        $ownerSchema->addPropertyMapping('ProductType', self::names()->productType);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Classifications of a product";
        $ownerSchema->required = array(
        );
    }
}