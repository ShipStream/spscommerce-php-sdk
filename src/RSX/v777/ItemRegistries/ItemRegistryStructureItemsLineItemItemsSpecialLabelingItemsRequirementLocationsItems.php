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
 * Identifies locations where a requirement applies
 */
class ItemRegistryStructureItemsLineItemItemsSpecialLabelingItemsRequirementLocationsItems extends ClassStructure
{
    /** @var string Free-form text for city name */
    public $city;

    /** @var string Name of a county */
    public $county;

    /** @var string Code[Standard State/Province] as defined by appropriate government agency */
    public $state;

    /** @var string Name of a province */
    public $province;

    /** @var string Human readable description identifying the country */
    public $country;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->city = Schema::string();
        $properties->city->description = "Free-form text for city name";
        $ownerSchema->addPropertyMapping('City', self::names()->city);
        $properties->county = Schema::string();
        $properties->county->description = "Name of a county";
        $ownerSchema->addPropertyMapping('County', self::names()->county);
        $properties->state = Schema::string();
        $properties->state->description = "Code[Standard State/Province] as defined by appropriate government agency";
        $ownerSchema->addPropertyMapping('State', self::names()->state);
        $properties->province = Schema::string();
        $properties->province->description = "Name of a province";
        $ownerSchema->addPropertyMapping('Province', self::names()->province);
        $properties->country = Schema::string();
        $properties->country->description = "Human readable description identifying the country";
        $ownerSchema->addPropertyMapping('Country', self::names()->country);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Identifies locations where a requirement applies";
        $ownerSchema->required = array(
        );
    }
}