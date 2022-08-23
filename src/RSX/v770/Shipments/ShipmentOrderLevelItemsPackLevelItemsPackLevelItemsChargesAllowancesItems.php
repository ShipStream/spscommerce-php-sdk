<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsChargesAllowancesItems extends ClassStructure
{
    /** @var string Code which indicates an allowance or charge for the service specified */
    public $allowChrgIndicator;

    /** @var string Code describing the type of allowance or charge for the service specified */
    public $allowChrgCode;

    /** @var string Code identifying the agency assigning the code values */
    public $allowChrgAgencyCode;

    /** @var string Agency maintained code identifying the service, promotion, allowance, or charge */
    public $allowChrgAgency;

    /** @var float Amount of the allowance or charge */
    public $allowChrgAmt;

    /** @var string Code indicating on what basis an allowance or charge percent is calculated */
    public $allowChrgPercentQual;

    /** @var float Percentage of allowance or charge. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00] */
    public $allowChrgPercent;

    /** @var float Monetary amount that is used when calculating a tax, allowance, or charge amount. */
    public $percentDollarBasis;

    /** @var float Value expressed in monetary currency that applies to the given quantity [i.e. The rate is $5.00 off one dozen]. [AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other] */
    public $allowChrgRate;

    /** @var string The unit of measure used in relation with AllowChrgQty[AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other] */
    public $allowChrgQtyUOM;

    /** @var float Numeric value of quantity to which the allowance or charge applies[AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other] */
    public $allowChrgQty;

    /** @var string Code indicating method of handling for an allowance or charge */
    public $allowChrgHandlingCode;

    /** @var string */
    public $referenceIdentification;

    /** @var string Free-form textual description of the allowance or charge */
    public $allowChrgHandlingDescription;

    /** @var string */
    public $optionNumber;

    /** @var string */
    public $exceptionNumber;

    /** @var float */
    public $allowChrgQty2;

    /** @var string Code designating the language used in text. ISO 639 language code */
    public $languageCode;

    /** @var int Used to indicate at what point a value should be used in calculations where orders of operations matter [i.e. 1 would indicate that the related value should be taken first]. */
    public $calculationSequence;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsChargesAllowancesItemsTaxesItems[]|array */
    public $taxes;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->allowChrgIndicator = Schema::string();
        $properties->allowChrgIndicator->description = "Code which indicates an allowance or charge for the service specified";
        $ownerSchema->addPropertyMapping('AllowChrgIndicator', self::names()->allowChrgIndicator);
        $properties->allowChrgCode = Schema::string();
        $properties->allowChrgCode->description = "Code describing the type of allowance or charge for the service specified";
        $ownerSchema->addPropertyMapping('AllowChrgCode', self::names()->allowChrgCode);
        $properties->allowChrgAgencyCode = Schema::string();
        $properties->allowChrgAgencyCode->description = "Code identifying the agency assigning the code values";
        $ownerSchema->addPropertyMapping('AllowChrgAgencyCode', self::names()->allowChrgAgencyCode);
        $properties->allowChrgAgency = Schema::string();
        $properties->allowChrgAgency->description = "Agency maintained code identifying the service, promotion, allowance, or charge";
        $ownerSchema->addPropertyMapping('AllowChrgAgency', self::names()->allowChrgAgency);
        $properties->allowChrgAmt = Schema::number();
        $properties->allowChrgAmt->description = "Amount of the allowance or charge";
        $ownerSchema->addPropertyMapping('AllowChrgAmt', self::names()->allowChrgAmt);
        $properties->allowChrgPercentQual = Schema::string();
        $properties->allowChrgPercentQual->description = "Code indicating on what basis an allowance or charge percent is calculated";
        $ownerSchema->addPropertyMapping('AllowChrgPercentQual', self::names()->allowChrgPercentQual);
        $properties->allowChrgPercent = Schema::number();
        $properties->allowChrgPercent->description = "Percentage of allowance or charge. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00]";
        $ownerSchema->addPropertyMapping('AllowChrgPercent', self::names()->allowChrgPercent);
        $properties->percentDollarBasis = Schema::number();
        $properties->percentDollarBasis->description = "Monetary amount that is used when calculating a tax, allowance, or charge amount.";
        $ownerSchema->addPropertyMapping('PercentDollarBasis', self::names()->percentDollarBasis);
        $properties->allowChrgRate = Schema::number();
        $properties->allowChrgRate->description = "Value expressed in monetary currency that applies to the given quantity [i.e. The rate is $5.00 off one dozen]. [AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other]";
        $ownerSchema->addPropertyMapping('AllowChrgRate', self::names()->allowChrgRate);
        $properties->allowChrgQtyUOM = Schema::string();
        $properties->allowChrgQtyUOM->description = "The unit of measure used in relation with AllowChrgQty[AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other]";
        $ownerSchema->addPropertyMapping('AllowChrgQtyUOM', self::names()->allowChrgQtyUOM);
        $properties->allowChrgQty = Schema::number();
        $properties->allowChrgQty->description = "Numeric value of quantity to which the allowance or charge applies[AllowChrgRate, AllowChrgQty, AllowChrgQtyUOM fields should all be sent in conjunction with each other]";
        $ownerSchema->addPropertyMapping('AllowChrgQty', self::names()->allowChrgQty);
        $properties->allowChrgHandlingCode = Schema::string();
        $properties->allowChrgHandlingCode->description = "Code indicating method of handling for an allowance or charge";
        $ownerSchema->addPropertyMapping('AllowChrgHandlingCode', self::names()->allowChrgHandlingCode);
        $properties->referenceIdentification = Schema::string();
        $ownerSchema->addPropertyMapping('ReferenceIdentification', self::names()->referenceIdentification);
        $properties->allowChrgHandlingDescription = Schema::string();
        $properties->allowChrgHandlingDescription->description = "Free-form textual description of the allowance or charge";
        $ownerSchema->addPropertyMapping('AllowChrgHandlingDescription', self::names()->allowChrgHandlingDescription);
        $properties->optionNumber = Schema::string();
        $ownerSchema->addPropertyMapping('OptionNumber', self::names()->optionNumber);
        $properties->exceptionNumber = Schema::string();
        $ownerSchema->addPropertyMapping('ExceptionNumber', self::names()->exceptionNumber);
        $properties->allowChrgQty2 = Schema::number();
        $ownerSchema->addPropertyMapping('AllowChrgQty2', self::names()->allowChrgQty2);
        $properties->languageCode = Schema::string();
        $properties->languageCode->description = "Code designating the language used in text. ISO 639 language code";
        $ownerSchema->addPropertyMapping('LanguageCode', self::names()->languageCode);
        $properties->calculationSequence = Schema::integer();
        $properties->calculationSequence->description = "Used to indicate at what point a value should be used in calculations where orders of operations matter [i.e. 1 would indicate that the related value should be taken first].";
        $ownerSchema->addPropertyMapping('CalculationSequence', self::names()->calculationSequence);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsChargesAllowancesItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}