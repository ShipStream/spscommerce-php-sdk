<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsItemLevelItemsPriceInformationItems extends ClassStructure
{
    /** @var string */
    public $changeReasonCode;

    /** @var string */
    public $effectiveDate;

    /** @var string Code identifying the type of price */
    public $priceTypeIDCode;

    /** @var float Price as defined by the PriceTypeIDCode */
    public $unitPrice;

    /** @var string Code specifying the type of unit price for an item */
    public $unitPriceBasis;

    /** @var float Value to be used as a modifier to obtain a new UnitPriceBasis. */
    public $unitPriceBasisMultiplier;

    /** @var string ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $currency;

    /** @var string Code indicating the type of price multiplier */
    public $priceMultiplierQual;

    /** @var float Value to be used as a multiplier to obtain a new price */
    public $priceMultiplier;

    /** @var float */
    public $rebateAmount;

    /** @var float */
    public $quantity;

    /** @var string */
    public $quantityUOM;

    /** @var float Quantity of units for a given price [i.e. 3 for $10.00]. */
    public $multiplePriceQuantity;

    /** @var string Self defined categories used to indicate who is authorized to view or use the related price information contained in the PriceInformation or PricingType group */
    public $classOfTradeCode;

    /** @var string */
    public $conditionValue;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->changeReasonCode = Schema::string();
        $ownerSchema->addPropertyMapping('ChangeReasonCode', self::names()->changeReasonCode);
        $properties->effectiveDate = Schema::string();
        $properties->effectiveDate->format = "date";
        $ownerSchema->addPropertyMapping('EffectiveDate', self::names()->effectiveDate);
        $properties->priceTypeIDCode = Schema::string();
        $properties->priceTypeIDCode->description = "Code identifying the type of price";
        $ownerSchema->addPropertyMapping('PriceTypeIDCode', self::names()->priceTypeIDCode);
        $properties->unitPrice = Schema::number();
        $properties->unitPrice->description = "Price as defined by the PriceTypeIDCode";
        $ownerSchema->addPropertyMapping('UnitPrice', self::names()->unitPrice);
        $properties->unitPriceBasis = Schema::string();
        $properties->unitPriceBasis->description = "Code specifying the type of unit price for an item";
        $ownerSchema->addPropertyMapping('UnitPriceBasis', self::names()->unitPriceBasis);
        $properties->unitPriceBasisMultiplier = Schema::number();
        $properties->unitPriceBasisMultiplier->description = "Value to be used as a modifier to obtain a new UnitPriceBasis.";
        $ownerSchema->addPropertyMapping('UnitPriceBasisMultiplier', self::names()->unitPriceBasisMultiplier);
        $properties->currency = Schema::string();
        $properties->currency->description = "ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('Currency', self::names()->currency);
        $properties->priceMultiplierQual = Schema::string();
        $properties->priceMultiplierQual->description = "Code indicating the type of price multiplier";
        $ownerSchema->addPropertyMapping('PriceMultiplierQual', self::names()->priceMultiplierQual);
        $properties->priceMultiplier = Schema::number();
        $properties->priceMultiplier->description = "Value to be used as a multiplier to obtain a new price";
        $ownerSchema->addPropertyMapping('PriceMultiplier', self::names()->priceMultiplier);
        $properties->rebateAmount = Schema::number();
        $ownerSchema->addPropertyMapping('RebateAmount', self::names()->rebateAmount);
        $properties->quantity = Schema::number();
        $ownerSchema->addPropertyMapping('Quantity', self::names()->quantity);
        $properties->quantityUOM = Schema::string();
        $ownerSchema->addPropertyMapping('QuantityUOM', self::names()->quantityUOM);
        $properties->multiplePriceQuantity = Schema::number();
        $properties->multiplePriceQuantity->description = "Quantity of units for a given price [i.e. 3 for $10.00].";
        $ownerSchema->addPropertyMapping('MultiplePriceQuantity', self::names()->multiplePriceQuantity);
        $properties->classOfTradeCode = Schema::string();
        $properties->classOfTradeCode->description = "Self defined categories used to indicate who is authorized to view or use the related price information contained in the PriceInformation or PricingType group";
        $ownerSchema->addPropertyMapping('ClassOfTradeCode', self::names()->classOfTradeCode);
        $properties->conditionValue = Schema::string();
        $ownerSchema->addPropertyMapping('ConditionValue', self::names()->conditionValue);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}