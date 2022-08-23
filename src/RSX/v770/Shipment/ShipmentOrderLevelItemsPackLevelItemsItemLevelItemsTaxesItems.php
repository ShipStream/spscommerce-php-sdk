<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsPackLevelItemsItemLevelItemsTaxesItems extends ClassStructure
{
    /** @var string Identification of the type of duty, tax, or fee applicable to commodities or of tax applicable to services */
    public $taxTypeCode;

    /** @var float The monetary amount applied */
    public $taxAmount;

    /** @var string Code indicating on what basis a tax percent is calculated */
    public $taxPercentQual;

    /** @var float The percentage that is applied to determine the tax amount. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00] */
    public $taxPercent;

    /** @var string Code identifying the source of the data used in the Tax JurisdictionCode */
    public $jurisdictionQual;

    /** @var string Code represents the City, State, or Providence[tax authority] associated with the Tax group */
    public $jurisdictionCode;

    /** @var string Code indicating whether the header or item level data is exempt[or not exempt] for the tax and taxing authority indicated in JurisdictionCode */
    public $taxExemptCode;

    /** @var string Code identifying whether the tax amount is included in the total transaction amount */
    public $relationshipCode;

    /** @var float Monetary amount that is used when calculating a tax, allowance, or charge amount. */
    public $percentDollarBasis;

    /** @var string Code indicating method of handling for a tax */
    public $taxHandlingCode;

    /** @var string Number assigned to a purchaser[buyer, orderer] by a tax jurisdiction[state, country, etc] */
    public $taxID;

    /** @var string */
    public $assignedID;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->taxTypeCode = Schema::string();
        $properties->taxTypeCode->description = "Identification of the type of duty, tax, or fee applicable to commodities or of tax applicable to services";
        $ownerSchema->addPropertyMapping('TaxTypeCode', self::names()->taxTypeCode);
        $properties->taxAmount = Schema::number();
        $properties->taxAmount->description = "The monetary amount applied";
        $ownerSchema->addPropertyMapping('TaxAmount', self::names()->taxAmount);
        $properties->taxPercentQual = Schema::string();
        $properties->taxPercentQual->description = "Code indicating on what basis a tax percent is calculated";
        $ownerSchema->addPropertyMapping('TaxPercentQual', self::names()->taxPercentQual);
        $properties->taxPercent = Schema::number();
        $properties->taxPercent->description = "The percentage that is applied to determine the tax amount. Percentages should be represented as real numbers[0% through 100% should be normalized to 0.0 through 100.00]";
        $ownerSchema->addPropertyMapping('TaxPercent', self::names()->taxPercent);
        $properties->jurisdictionQual = Schema::string();
        $properties->jurisdictionQual->description = "Code identifying the source of the data used in the Tax JurisdictionCode";
        $ownerSchema->addPropertyMapping('JurisdictionQual', self::names()->jurisdictionQual);
        $properties->jurisdictionCode = Schema::string();
        $properties->jurisdictionCode->description = "Code represents the City, State, or Providence[tax authority] associated with the Tax group";
        $ownerSchema->addPropertyMapping('JurisdictionCode', self::names()->jurisdictionCode);
        $properties->taxExemptCode = Schema::string();
        $properties->taxExemptCode->description = "Code indicating whether the header or item level data is exempt[or not exempt] for the tax and taxing authority indicated in JurisdictionCode";
        $ownerSchema->addPropertyMapping('TaxExemptCode', self::names()->taxExemptCode);
        $properties->relationshipCode = Schema::string();
        $properties->relationshipCode->description = "Code identifying whether the tax amount is included in the total transaction amount";
        $ownerSchema->addPropertyMapping('RelationshipCode', self::names()->relationshipCode);
        $properties->percentDollarBasis = Schema::number();
        $properties->percentDollarBasis->description = "Monetary amount that is used when calculating a tax, allowance, or charge amount.";
        $ownerSchema->addPropertyMapping('PercentDollarBasis', self::names()->percentDollarBasis);
        $properties->taxHandlingCode = Schema::string();
        $properties->taxHandlingCode->description = "Code indicating method of handling for a tax";
        $ownerSchema->addPropertyMapping('TaxHandlingCode', self::names()->taxHandlingCode);
        $properties->taxID = Schema::string();
        $properties->taxID->description = "Number assigned to a purchaser[buyer, orderer] by a tax jurisdiction[state, country, etc]";
        $ownerSchema->addPropertyMapping('TaxID', self::names()->taxID);
        $properties->assignedID = Schema::string();
        $ownerSchema->addPropertyMapping('AssignedID', self::names()->assignedID);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}