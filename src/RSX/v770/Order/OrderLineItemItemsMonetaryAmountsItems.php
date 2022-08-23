<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Order;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderLineItemItemsMonetaryAmountsItems extends ClassStructure
{
    /** @var string Code used to qualify or further define an amount value */
    public $monetaryAmountCode;

    /** @var float Amount total of various kinds in the transaction as defined by MonetaryAmountCode. */
    public $monetaryAmount;

    /** @var string */
    public $creditDebitFlag;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->monetaryAmountCode = Schema::string();
        $properties->monetaryAmountCode->description = "Code used to qualify or further define an amount value";
        $ownerSchema->addPropertyMapping('MonetaryAmountCode', self::names()->monetaryAmountCode);
        $properties->monetaryAmount = Schema::number();
        $properties->monetaryAmount->description = "Amount total of various kinds in the transaction as defined by MonetaryAmountCode.";
        $ownerSchema->addPropertyMapping('MonetaryAmount', self::names()->monetaryAmount);
        $properties->creditDebitFlag = Schema::string();
        $ownerSchema->addPropertyMapping('CreditDebitFlag', self::names()->creditDebitFlag);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}