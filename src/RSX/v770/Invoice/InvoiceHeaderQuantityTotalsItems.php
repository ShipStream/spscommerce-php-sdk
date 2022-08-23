<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Invoice;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group is used to communicate quantities for all line items
 */
class InvoiceHeaderQuantityTotalsItems extends ClassStructure
{
    /** @var string Qualifier used to define the related total amounts */
    public $quantityTotalsQualifier;

    /** @var float */
    public $quantity;

    /** @var string */
    public $quantityUOM;

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

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->quantityTotalsQualifier = Schema::string();
        $properties->quantityTotalsQualifier->description = "Qualifier used to define the related total amounts";
        $ownerSchema->addPropertyMapping('QuantityTotalsQualifier', self::names()->quantityTotalsQualifier);
        $properties->quantity = Schema::number();
        $ownerSchema->addPropertyMapping('Quantity', self::names()->quantity);
        $properties->quantityUOM = Schema::string();
        $ownerSchema->addPropertyMapping('QuantityUOM', self::names()->quantityUOM);
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
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group is used to communicate quantities for all line items";
        $ownerSchema->required = array(
        );
    }
}