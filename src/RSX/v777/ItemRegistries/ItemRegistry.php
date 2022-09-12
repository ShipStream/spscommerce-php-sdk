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
 * Provides item information for enhanced visibility. Details include: quantities, prices, descriptions, and locations
 * Built from ItemRegistries.json#/definitions/ItemRegistry
 */
class ItemRegistry extends ClassStructure
{
    /** @var ItemRegistryMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var ItemRegistryHeader Encloses all document header elements */
    public $header;

    /** @var ItemRegistryStructureItems[]|array */
    public $structure;

    /** @var ItemRegistrySummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = ItemRegistryMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = ItemRegistryHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->structure = Schema::arr();
        $properties->structure->items = ItemRegistryStructureItems::schema();
        $ownerSchema->addPropertyMapping('Structure', self::names()->structure);
        $properties->summary = ItemRegistrySummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides item information for enhanced visibility. Details include: quantities, prices, descriptions, and locations";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('ItemRegistries.json#/definitions/ItemRegistry');
    }
}