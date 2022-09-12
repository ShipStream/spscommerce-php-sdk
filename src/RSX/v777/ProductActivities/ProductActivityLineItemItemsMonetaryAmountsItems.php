<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ProductActivities;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Identifies and quantifies monetary amounts
 */
class ProductActivityLineItemItemsMonetaryAmountsItems extends ClassStructure
{
    const CONST_1 = '1';

    const CONST_10 = '10';

    const CONST_2 = '2';

    const CONST_23 = '23';

    const CONST_315 = '315';

    const CONST_343 = '343';

    const BD = 'BD';

    const GV = 'GV';

    const N = 'N';

    const OJ = 'OJ';

    const SP = 'SP';

    const YW = 'YW';

    const C = 'C';

    const D = 'D';

    /** @var string Code used to qualify or further define an amount value */
    public $monetaryAmountCode;

    /** @var float Amount total of various kinds in the transaction as defined by MonetaryAmountCode. */
    public $monetaryAmount;

    /** @var string Indicates credit or debit payment */
    public $creditDebitFlag;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->monetaryAmountCode = Schema::string();
        $properties->monetaryAmountCode->enum = array(
            self::CONST_1,
            self::CONST_10,
            self::CONST_2,
            self::CONST_23,
            self::CONST_315,
            self::CONST_343,
            self::BD,
            self::GV,
            self::N,
            self::OJ,
            self::SP,
            self::YW,
        );
        $properties->monetaryAmountCode->description = "Code used to qualify or further define an amount value";
        $ownerSchema->addPropertyMapping('MonetaryAmountCode', self::names()->monetaryAmountCode);
        $properties->monetaryAmount = Schema::number();
        $properties->monetaryAmount->description = "Amount total of various kinds in the transaction as defined by MonetaryAmountCode.";
        $ownerSchema->addPropertyMapping('MonetaryAmount', self::names()->monetaryAmount);
        $properties->creditDebitFlag = Schema::string();
        $properties->creditDebitFlag->enum = array(
            self::C,
            self::D,
        );
        $properties->creditDebitFlag->description = "Indicates credit or debit payment";
        $ownerSchema->addPropertyMapping('CreditDebitFlag', self::names()->creditDebitFlag);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Identifies and quantifies monetary amounts";
        $ownerSchema->required = array(
        );
    }
}