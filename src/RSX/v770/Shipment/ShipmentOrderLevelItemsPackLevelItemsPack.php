<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsPackLevelItemsPack extends ClassStructure
{
    /** @var string Indicator that defines the level the label information is provided or a carton reference number */
    public $packLevelType;

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
        $properties->packLevelType = Schema::string();
        $properties->packLevelType->description = "Indicator that defines the level the label information is provided or a carton reference number";
        $ownerSchema->addPropertyMapping('PackLevelType', self::names()->packLevelType);
        $properties->shippingSerialID = Schema::string();
        $properties->shippingSerialID->description = "Serial Shipping Container Code[SSCC] and Application Identifier[00] indicates the shipment or parts of shipment. This field includes both the SSCC[18 digits] and the Application Identifier[2 digits], which should be 20 digits in length";
        $ownerSchema->addPropertyMapping('ShippingSerialID', self::names()->shippingSerialID);
        $properties->carrierPackageID = Schema::string();
        $properties->carrierPackageID->description = "Carrier-Assigned Package ID indicating the shipment or parts of shipment";
        $ownerSchema->addPropertyMapping('CarrierPackageID', self::names()->carrierPackageID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}