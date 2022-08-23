<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetail;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Details regarding tariffs imposed on the freight
 */
class CarrierFreightDetailInvoiceDetailsItemsTariffsItems extends ClassStructure
{
    /** @var string Unique identifier assigned to the tariff */
    public $tariffNumber;

    /** @var string Number used as an extension of the basic tariff number to identify the rates published within specific sections of the tariff */
    public $tariffSection;

    /** @var string Defines the tariff bureau or tariff publishing agent that governs the rates applied to this shipment */
    public $tariffAgencyCode;

    /** @var string Number assigned in the tariff to specific rate or group of rates that applies to one or more items in the shipment */
    public $tariffItemNumber;

    /** @var string Number assigned to subsection of a specific tariff item */
    public $tariffItemPart;

    /** @var string Code indicating generalized classification that applies to one or more items in the shipment */
    public $freightClassCode;

    /** @var string Identifier for the tariff supplement which contains the rate used */
    public $tariffSupplementID;

    /** @var string Level of rates as published in the tariff */
    public $exParte;

    /** @var string The [mileage] factor published for rating purposes in the appropriate tariff */
    public $rateBasisNumber;

    /** @var string A tariff commodity classification that is used, as a means of control, for grouping of commodities in tariff applications */
    public $tariffColumn;

    /** @var string Code identifying the distance unit */
    public $distanceQualifier;

    /** @var float Distance on which the rate for a shipment is based */
    public $tariffDistance;

    /** @var CarrierFreightDetailInvoiceDetailsItemsTariffsItemsDatesItems[]|array */
    public $dates;

    /** @var CarrierFreightDetailInvoiceDetailsItemsTariffsItemsAddress */
    public $address;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->tariffNumber = Schema::string();
        $properties->tariffNumber->description = "Unique identifier assigned to the tariff";
        $ownerSchema->addPropertyMapping('TariffNumber', self::names()->tariffNumber);
        $properties->tariffSection = Schema::string();
        $properties->tariffSection->description = "Number used as an extension of the basic tariff number to identify the rates published within specific sections of the tariff";
        $ownerSchema->addPropertyMapping('TariffSection', self::names()->tariffSection);
        $properties->tariffAgencyCode = Schema::string();
        $properties->tariffAgencyCode->description = "Defines the tariff bureau or tariff publishing agent that governs the rates applied to this shipment";
        $ownerSchema->addPropertyMapping('TariffAgencyCode', self::names()->tariffAgencyCode);
        $properties->tariffItemNumber = Schema::string();
        $properties->tariffItemNumber->description = "Number assigned in the tariff to specific rate or group of rates that applies to one or more items in the shipment";
        $ownerSchema->addPropertyMapping('TariffItemNumber', self::names()->tariffItemNumber);
        $properties->tariffItemPart = Schema::string();
        $properties->tariffItemPart->description = "Number assigned to subsection of a specific tariff item";
        $ownerSchema->addPropertyMapping('TariffItemPart', self::names()->tariffItemPart);
        $properties->freightClassCode = Schema::string();
        $properties->freightClassCode->description = "Code indicating generalized classification that applies to one or more items in the shipment";
        $ownerSchema->addPropertyMapping('FreightClassCode', self::names()->freightClassCode);
        $properties->tariffSupplementID = Schema::string();
        $properties->tariffSupplementID->description = "Identifier for the tariff supplement which contains the rate used";
        $ownerSchema->addPropertyMapping('TariffSupplementID', self::names()->tariffSupplementID);
        $properties->exParte = Schema::string();
        $properties->exParte->description = "Level of rates as published in the tariff";
        $ownerSchema->addPropertyMapping('ExParte', self::names()->exParte);
        $properties->rateBasisNumber = Schema::string();
        $properties->rateBasisNumber->description = "The [mileage] factor published for rating purposes in the appropriate tariff";
        $ownerSchema->addPropertyMapping('RateBasisNumber', self::names()->rateBasisNumber);
        $properties->tariffColumn = Schema::string();
        $properties->tariffColumn->description = "A tariff commodity classification that is used, as a means of control, for grouping of commodities in tariff applications";
        $ownerSchema->addPropertyMapping('TariffColumn', self::names()->tariffColumn);
        $properties->distanceQualifier = Schema::string();
        $properties->distanceQualifier->description = "Code identifying the distance unit";
        $ownerSchema->addPropertyMapping('DistanceQualifier', self::names()->distanceQualifier);
        $properties->tariffDistance = Schema::number();
        $properties->tariffDistance->description = "Distance on which the rate for a shipment is based";
        $ownerSchema->addPropertyMapping('TariffDistance', self::names()->tariffDistance);
        $properties->dates = Schema::arr();
        $properties->dates->items = CarrierFreightDetailInvoiceDetailsItemsTariffsItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->address = CarrierFreightDetailInvoiceDetailsItemsTariffsItemsAddress::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Details regarding tariffs imposed on the freight";
        $ownerSchema->required = array(
        );
    }
}