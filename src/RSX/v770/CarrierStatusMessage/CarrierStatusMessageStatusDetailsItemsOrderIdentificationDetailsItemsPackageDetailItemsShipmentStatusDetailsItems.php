<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierStatusMessage;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItems extends ClassStructure
{
    /** @var string Code indicating the status of a shipment */
    public $shipmentStatusCode;

    /** @var string Code indicating the reason a shipment status or appointment reason was transmitted */
    public $shipmentStatusReasonCode;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string Date in which the shipment was delivered. Typically used in conjunction with ProofOfDeliveryTime and ProofOfDeliveryName */
    public $proofOfDeliveryDate;

    /** @var string Time in which the shipment was delivered. Typically used in conjunction with ProofOfDeliveryTime and ProofOfDeliveryName */
    public $proofOfDeliveryTime;

    /** @var string Name of person who signed off on delivery. Typically used in conjunction with ProofOfDeliveryTime and ProofOfDeliveryName */
    public $proofOfDeliveryName;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsDates */
    public $dates;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsAddress */
    public $address;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsCarrierInformation */
    public $carrierInformation;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsNotesItems[]|array */
    public $notes;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->shipmentStatusCode = Schema::string();
        $properties->shipmentStatusCode->description = "Code indicating the status of a shipment";
        $ownerSchema->addPropertyMapping('ShipmentStatusCode', self::names()->shipmentStatusCode);
        $properties->shipmentStatusReasonCode = Schema::string();
        $properties->shipmentStatusReasonCode->description = "Code indicating the reason a shipment status or appointment reason was transmitted";
        $ownerSchema->addPropertyMapping('ShipmentStatusReasonCode', self::names()->shipmentStatusReasonCode);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->proofOfDeliveryDate = Schema::string();
        $properties->proofOfDeliveryDate->description = "Date in which the shipment was delivered. Typically used in conjunction with ProofOfDeliveryTime and ProofOfDeliveryName";
        $properties->proofOfDeliveryDate->format = "date";
        $ownerSchema->addPropertyMapping('ProofOfDeliveryDate', self::names()->proofOfDeliveryDate);
        $properties->proofOfDeliveryTime = Schema::string();
        $properties->proofOfDeliveryTime->description = "Time in which the shipment was delivered. Typically used in conjunction with ProofOfDeliveryTime and ProofOfDeliveryName";
        $properties->proofOfDeliveryTime->format = "time";
        $ownerSchema->addPropertyMapping('ProofOfDeliveryTime', self::names()->proofOfDeliveryTime);
        $properties->proofOfDeliveryName = Schema::string();
        $properties->proofOfDeliveryName->description = "Name of person who signed off on delivery. Typically used in conjunction with ProofOfDeliveryTime and ProofOfDeliveryName";
        $ownerSchema->addPropertyMapping('ProofOfDeliveryName', self::names()->proofOfDeliveryName);
        $properties->dates = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsDates::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->address = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsAddress::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->carrierInformation = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsCarrierInformation::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}