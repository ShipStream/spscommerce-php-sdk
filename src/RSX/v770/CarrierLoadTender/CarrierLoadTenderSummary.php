<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTender;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierLoadTenderSummary extends ClassStructure
{
    /** @var string Code specifying the type of service for rating purposes */
    public $tariffServiceCode;

    /** @var string Code indicating the total monetary value of the freight load */
    public $declaredAmountQualifier;

    /** @var float Total monetary value of the freight load */
    public $declaredAmount;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->tariffServiceCode = Schema::string();
        $properties->tariffServiceCode->description = "Code specifying the type of service for rating purposes";
        $ownerSchema->addPropertyMapping('TariffServiceCode', self::names()->tariffServiceCode);
        $properties->declaredAmountQualifier = Schema::string();
        $properties->declaredAmountQualifier->description = "Code indicating the total monetary value of the freight load";
        $ownerSchema->addPropertyMapping('DeclaredAmountQualifier', self::names()->declaredAmountQualifier);
        $properties->declaredAmount = Schema::number();
        $properties->declaredAmount->description = "Total monetary value of the freight load";
        $ownerSchema->addPropertyMapping('DeclaredAmount', self::names()->declaredAmount);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}