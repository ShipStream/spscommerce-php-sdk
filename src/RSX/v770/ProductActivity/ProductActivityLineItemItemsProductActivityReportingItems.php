<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\ProductActivity;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group is normally used to describe how products or items preformed at specific trading partner locations. The data contained in this group could possibly be, but not limited to, quantity sold and quantity on-hand at a specific store or warehouse.
 */
class ProductActivityLineItemItemsProductActivityReportingItems extends ClassStructure
{
    /** @var string Used to indicate the kind of quantity being reported */
    public $activityCode;

    /** @var float Numeric value of the total quantity */
    public $totalQty;

    /** @var string The unit of measure for the numeric value of the total quantity */
    public $totalQtyUOM;

    /** @var ProductActivityLineItemItemsProductActivityReportingItemsDates */
    public $dates;

    /** @var ProductActivityLineItemItemsProductActivityReportingItemsReferences */
    public $references;

    /** @var string Code identifying the structure or format of the related location number[s] */
    public $locationCodeQualifier;

    /** @var string Generic description to explain all the location quantities. i.e. Bin Number, Warehouse, Stockroom */
    public $locationDescription;

    /** @var ProductActivityLineItemItemsProductActivityReportingItemsLocationQuantityPriceItems[]|array */
    public $locationQuantityPrice;

    /** @var ProductActivityLineItemItemsProductActivityReportingItemsPriceInformationItems[]|array */
    public $priceInformation;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->activityCode = Schema::string();
        $properties->activityCode->description = "Used to indicate the kind of quantity being reported";
        $ownerSchema->addPropertyMapping('ActivityCode', self::names()->activityCode);
        $properties->totalQty = Schema::number();
        $properties->totalQty->description = "Numeric value of the total quantity";
        $ownerSchema->addPropertyMapping('TotalQty', self::names()->totalQty);
        $properties->totalQtyUOM = Schema::string();
        $properties->totalQtyUOM->description = "The unit of measure for the numeric value of the total quantity";
        $ownerSchema->addPropertyMapping('TotalQtyUOM', self::names()->totalQtyUOM);
        $properties->dates = ProductActivityLineItemItemsProductActivityReportingItemsDates::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = ProductActivityLineItemItemsProductActivityReportingItemsReferences::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->locationCodeQualifier = Schema::string();
        $properties->locationCodeQualifier->description = "Code identifying the structure or format of the related location number[s]";
        $ownerSchema->addPropertyMapping('LocationCodeQualifier', self::names()->locationCodeQualifier);
        $properties->locationDescription = Schema::string();
        $properties->locationDescription->description = "Generic description to explain all the location quantities. i.e. Bin Number, Warehouse, Stockroom";
        $ownerSchema->addPropertyMapping('LocationDescription', self::names()->locationDescription);
        $properties->locationQuantityPrice = Schema::arr();
        $properties->locationQuantityPrice->items = ProductActivityLineItemItemsProductActivityReportingItemsLocationQuantityPriceItems::schema();
        $ownerSchema->addPropertyMapping('LocationQuantityPrice', self::names()->locationQuantityPrice);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = ProductActivityLineItemItemsProductActivityReportingItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group is normally used to describe how products or items preformed at specific trading partner locations. The data contained in this group could possibly be, but not limited to, quantity sold and quantity on-hand at a specific store or warehouse.";
        $ownerSchema->required = array(
        );
    }
}