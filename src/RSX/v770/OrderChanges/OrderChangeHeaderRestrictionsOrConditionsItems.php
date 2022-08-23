<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeHeaderRestrictionsOrConditionsItems extends ClassStructure
{
    /** @var string */
    public $restrictionsConditionsQualifier;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string Qualifier used to define the type of quantity to follow */
    public $quantityQualifier;

    /** @var float Numeric value specified in association with the QuantityQualifier */
    public $quantity1;

    /** @var string */
    public $amountQualifier;

    /** @var float */
    public $amount;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->restrictionsConditionsQualifier = Schema::string();
        $ownerSchema->addPropertyMapping('RestrictionsConditionsQualifier', self::names()->restrictionsConditionsQualifier);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->quantityQualifier = Schema::string();
        $properties->quantityQualifier->description = "Qualifier used to define the type of quantity to follow";
        $ownerSchema->addPropertyMapping('QuantityQualifier', self::names()->quantityQualifier);
        $properties->quantity1 = Schema::number();
        $properties->quantity1->description = "Numeric value specified in association with the QuantityQualifier";
        $ownerSchema->addPropertyMapping('Quantity1', self::names()->quantity1);
        $properties->amountQualifier = Schema::string();
        $ownerSchema->addPropertyMapping('AmountQualifier', self::names()->amountQualifier);
        $properties->amount = Schema::number();
        $ownerSchema->addPropertyMapping('Amount', self::names()->amount);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}