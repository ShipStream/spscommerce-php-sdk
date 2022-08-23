<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetails;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierFreightDetailSummary extends ClassStructure
{
    /** @var float Final price, includes any discounts, fees, charges */
    public $netAmountDue;

    /** @var string Code specifying the type of service for rating purposes */
    public $tariffServiceCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->netAmountDue = Schema::number();
        $properties->netAmountDue->description = "Final price, includes any discounts, fees, charges";
        $ownerSchema->addPropertyMapping('NetAmountDue', self::names()->netAmountDue);
        $properties->tariffServiceCode = Schema::string();
        $properties->tariffServiceCode->description = "Code specifying the type of service for rating purposes";
        $ownerSchema->addPropertyMapping('TariffServiceCode', self::names()->tariffServiceCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}