<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTenderResponses;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group contains the quantity of your PackingMedium and other related values such as weight and volume
 */
class CarrierLoadTenderResponseQuantityAndWeightItems extends ClassStructure
{
    /** @var string Code identifying the type of packaging */
    public $packingMedium;

    /** @var string Code identifying the type of packaging material */
    public $packingMaterial;

    /** @var int Number of units/pieces of the lading commodity */
    public $ladingQuantity;

    /** @var string */
    public $ladingDescription;

    /** @var string Code defining the type of weight */
    public $weightQualifier;

    /** @var float */
    public $weight;

    /** @var string */
    public $weightUOM;

    /** @var float */
    public $volume;

    /** @var string */
    public $volumeUOM;

    /** @var string Code specifying pallet exchange instructions */
    public $palletExchangeCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->packingMedium = Schema::string();
        $properties->packingMedium->description = "Code identifying the type of packaging";
        $ownerSchema->addPropertyMapping('PackingMedium', self::names()->packingMedium);
        $properties->packingMaterial = Schema::string();
        $properties->packingMaterial->description = "Code identifying the type of packaging material";
        $ownerSchema->addPropertyMapping('PackingMaterial', self::names()->packingMaterial);
        $properties->ladingQuantity = Schema::integer();
        $properties->ladingQuantity->description = "Number of units/pieces of the lading commodity";
        $ownerSchema->addPropertyMapping('LadingQuantity', self::names()->ladingQuantity);
        $properties->ladingDescription = Schema::string();
        $ownerSchema->addPropertyMapping('LadingDescription', self::names()->ladingDescription);
        $properties->weightQualifier = Schema::string();
        $properties->weightQualifier->description = "Code defining the type of weight";
        $ownerSchema->addPropertyMapping('WeightQualifier', self::names()->weightQualifier);
        $properties->weight = Schema::number();
        $ownerSchema->addPropertyMapping('Weight', self::names()->weight);
        $properties->weightUOM = Schema::string();
        $ownerSchema->addPropertyMapping('WeightUOM', self::names()->weightUOM);
        $properties->volume = Schema::number();
        $ownerSchema->addPropertyMapping('Volume', self::names()->volume);
        $properties->volumeUOM = Schema::string();
        $ownerSchema->addPropertyMapping('VolumeUOM', self::names()->volumeUOM);
        $properties->palletExchangeCode = Schema::string();
        $properties->palletExchangeCode->description = "Code specifying pallet exchange instructions";
        $ownerSchema->addPropertyMapping('PalletExchangeCode', self::names()->palletExchangeCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group contains the quantity of your PackingMedium and other related values such as weight and volume";
        $ownerSchema->required = array(
        );
    }
}