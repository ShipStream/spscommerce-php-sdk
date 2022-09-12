<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Describes restrictions or conditions associated to the transaction
 */
class OrderChangeHeaderRestrictionsOrConditionsItems extends ClassStructure
{
    const CONST_01 = '01';

    const CONST_02 = '02';

    const CONST_12 = '12';

    const CONST_14 = '14';

    const CONST_20 = '20';

    const CONST_27 = '27';

    const CONST_29 = '29';

    const CONST_32 = '32';

    const CONST_33 = '33';

    const CONST_57 = '57';

    const CONST_70 = '70';

    const CONST_77 = '77';

    const CONST_78 = '78';

    const AP = 'AP';

    const APPX = 'APPX';

    const AQ = 'AQ';

    const B3 = 'B3';

    const BB = 'BB';

    const BQ = 'BQ';

    const GAV = 'GAV';

    const IQ = 'IQ';

    const OOR = 'OOR';

    const P70 = 'P70';

    const P80 = 'P80';

    const P90 = 'P90';

    const PM = 'PM';

    const POQ = 'POQ';

    const QA = 'QA';

    const QAR = 'QAR';

    const QH = 'QH';

    const QOH = 'QOH';

    const QPI = 'QPI';

    const QPK = 'QPK';

    const QV = 'QV';

    const RET = 'RET';

    const SZ = 'SZ';

    const UNA = 'UNA';

    /** @var string This field is deprecated */
    public $restrictionsConditionsQualifier;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string Qualifier used to define the type of quantity to follow */
    public $quantityQualifier;

    /** @var float Numeric value specified in association with the QuantityQualifier */
    public $quantity1;

    /** @var string Qualifies the type of amount */
    public $amountQualifier;

    /** @var float A quantity */
    public $amount;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->restrictionsConditionsQualifier = Schema::string();
        $properties->restrictionsConditionsQualifier->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('RestrictionsConditionsQualifier', self::names()->restrictionsConditionsQualifier);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->quantityQualifier = Schema::string();
        $properties->quantityQualifier->enum = array(
            self::CONST_01,
            self::CONST_02,
            self::CONST_12,
            self::CONST_14,
            self::CONST_20,
            self::CONST_27,
            self::CONST_29,
            self::CONST_32,
            self::CONST_33,
            self::CONST_57,
            self::CONST_70,
            self::CONST_77,
            self::CONST_78,
            self::AP,
            self::APPX,
            self::AQ,
            self::B3,
            self::BB,
            self::BQ,
            self::GAV,
            self::IQ,
            self::OOR,
            self::P70,
            self::P80,
            self::P90,
            self::PM,
            self::POQ,
            self::QA,
            self::QAR,
            self::QH,
            self::QOH,
            self::QPI,
            self::QPK,
            self::QV,
            self::RET,
            self::SZ,
            self::UNA,
        );
        $properties->quantityQualifier->description = "Qualifier used to define the type of quantity to follow";
        $ownerSchema->addPropertyMapping('QuantityQualifier', self::names()->quantityQualifier);
        $properties->quantity1 = Schema::number();
        $properties->quantity1->description = "Numeric value specified in association with the QuantityQualifier";
        $ownerSchema->addPropertyMapping('Quantity1', self::names()->quantity1);
        $properties->amountQualifier = Schema::string();
        $properties->amountQualifier->description = "Qualifies the type of amount";
        $ownerSchema->addPropertyMapping('AmountQualifier', self::names()->amountQualifier);
        $properties->amount = Schema::number();
        $properties->amount->description = "A quantity";
        $ownerSchema->addPropertyMapping('Amount', self::names()->amount);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Describes restrictions or conditions associated to the transaction";
        $ownerSchema->required = array(
        );
    }
}