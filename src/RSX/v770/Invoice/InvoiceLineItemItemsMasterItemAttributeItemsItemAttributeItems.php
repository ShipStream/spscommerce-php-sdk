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
 * This group describes a part of an item
 */
class InvoiceLineItemItemsMasterItemAttributeItemsItemAttributeItems extends ClassStructure
{
    /** @var string Code identifying the part of an item being described. */
    public $itemAttributeQualifier;

    /** @var float Numeric value of the ItemAttributeQualifier */
    public $value;

    /** @var string The unit of measure of the numeric value of the ItemAttributeQualifier */
    public $valueUOM;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string Code indicating a Yes or No condition or response */
    public $yesOrNoResponse;

    /** @var InvoiceLineItemItemsMasterItemAttributeItemsItemAttributeItemsMeasurementsItems[]|array */
    public $measurements;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->itemAttributeQualifier = Schema::string();
        $properties->itemAttributeQualifier->description = "Code identifying the part of an item being described.";
        $ownerSchema->addPropertyMapping('ItemAttributeQualifier', self::names()->itemAttributeQualifier);
        $properties->value = Schema::number();
        $properties->value->description = "Numeric value of the ItemAttributeQualifier";
        $ownerSchema->addPropertyMapping('Value', self::names()->value);
        $properties->valueUOM = Schema::string();
        $properties->valueUOM->description = "The unit of measure of the numeric value of the ItemAttributeQualifier";
        $ownerSchema->addPropertyMapping('ValueUOM', self::names()->valueUOM);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->yesOrNoResponse = Schema::string();
        $properties->yesOrNoResponse->description = "Code indicating a Yes or No condition or response";
        $ownerSchema->addPropertyMapping('YesOrNoResponse', self::names()->yesOrNoResponse);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = InvoiceLineItemItemsMasterItemAttributeItemsItemAttributeItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group describes a part of an item";
        $ownerSchema->required = array(
        );
    }
}