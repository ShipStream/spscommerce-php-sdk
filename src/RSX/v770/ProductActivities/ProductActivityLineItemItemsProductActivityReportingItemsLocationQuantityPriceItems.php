<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\ProductActivities;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ProductActivityLineItemItemsProductActivityReportingItemsLocationQuantityPriceItems extends ClassStructure
{
    /** @var string For CrossDock, it's the marked for location. For MultiStore[could also be DC] ship-to location */
    public $location;

    /** @var float */
    public $locationQty;

    /** @var string */
    public $locationQtyUOM;

    /** @var string Unique Identifier of a specific location */
    public $sPSLocationUID;

    /** @var ProductActivityLineItemItemsProductActivityReportingItemsLocationQuantityPriceItemsDatesItems[]|array */
    public $dates;

    /** @var string Code identifying the type of price */
    public $priceTypeIDCode;

    /** @var float Price as defined by the PriceTypeIDCode */
    public $unitPrice;

    /** @var string ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $currency;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->location = Schema::string();
        $properties->location->description = "For CrossDock, it's the marked for location. For MultiStore[could also be DC] ship-to location";
        $ownerSchema->addPropertyMapping('Location', self::names()->location);
        $properties->locationQty = Schema::number();
        $ownerSchema->addPropertyMapping('LocationQty', self::names()->locationQty);
        $properties->locationQtyUOM = Schema::string();
        $ownerSchema->addPropertyMapping('LocationQtyUOM', self::names()->locationQtyUOM);
        $properties->sPSLocationUID = Schema::string();
        $properties->sPSLocationUID->description = "Unique Identifier of a specific location";
        $ownerSchema->addPropertyMapping('SPSLocationUID', self::names()->sPSLocationUID);
        $properties->dates = Schema::arr();
        $properties->dates->items = ProductActivityLineItemItemsProductActivityReportingItemsLocationQuantityPriceItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->priceTypeIDCode = Schema::string();
        $properties->priceTypeIDCode->description = "Code identifying the type of price";
        $ownerSchema->addPropertyMapping('PriceTypeIDCode', self::names()->priceTypeIDCode);
        $properties->unitPrice = Schema::number();
        $properties->unitPrice->description = "Price as defined by the PriceTypeIDCode";
        $ownerSchema->addPropertyMapping('UnitPrice', self::names()->unitPrice);
        $properties->currency = Schema::string();
        $properties->currency->description = "ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('Currency', self::names()->currency);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}