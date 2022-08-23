<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTenders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Basic details regarding a logistical unit
 */
class CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsLogisticalUnitDetail extends ClassStructure
{
    /** @var string Code indicating which compartment of a tank car the product is located in. Typically used in rail shipments */
    public $compartmentIDCode;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var int Number of objects in a load which are packed in a uniform manner. */
    public $unitizedQty;

    /** @var int Number of objects in a load which are not packed in a uniform manner. */
    public $nonUnitizedQty;

    /** @var string Serial Shipping Container Code[SSCC] and Application Identifier[00] indicates the shipment or parts of shipment. This field includes both the SSCC[18 digits] and the Application Identifier[2 digits], which should be 20 digits in length */
    public $shippingSerialID;

    /** @var string Carrier-Assigned Package ID indicating the shipment or parts of shipment */
    public $carrierPackageID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->compartmentIDCode = Schema::string();
        $properties->compartmentIDCode->description = "Code indicating which compartment of a tank car the product is located in. Typically used in rail shipments";
        $ownerSchema->addPropertyMapping('CompartmentIDCode', self::names()->compartmentIDCode);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->unitizedQty = Schema::integer();
        $properties->unitizedQty->description = "Number of objects in a load which are packed in a uniform manner.";
        $ownerSchema->addPropertyMapping('UnitizedQty', self::names()->unitizedQty);
        $properties->nonUnitizedQty = Schema::integer();
        $properties->nonUnitizedQty->description = "Number of objects in a load which are not packed in a uniform manner.";
        $ownerSchema->addPropertyMapping('NonUnitizedQty', self::names()->nonUnitizedQty);
        $properties->shippingSerialID = Schema::string();
        $properties->shippingSerialID->description = "Serial Shipping Container Code[SSCC] and Application Identifier[00] indicates the shipment or parts of shipment. This field includes both the SSCC[18 digits] and the Application Identifier[2 digits], which should be 20 digits in length";
        $ownerSchema->addPropertyMapping('ShippingSerialID', self::names()->shippingSerialID);
        $properties->carrierPackageID = Schema::string();
        $properties->carrierPackageID->description = "Carrier-Assigned Package ID indicating the shipment or parts of shipment";
        $ownerSchema->addPropertyMapping('CarrierPackageID', self::names()->carrierPackageID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Basic details regarding a logistical unit";
        $ownerSchema->required = array(
        );
    }
}