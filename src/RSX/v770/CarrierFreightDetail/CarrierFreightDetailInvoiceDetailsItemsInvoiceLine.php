<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetail;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierFreightDetailInvoiceDetailsItemsInvoiceLine extends ClassStructure
{
    /** @var string For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction. */
    public $lineSequenceNumber;

    /** @var string Free-form textual description of the line level details */
    public $lineDescription;

    /** @var string Date in which the shipment was delivered. Typically used in conjunction with ProofOfDeliveryTime and ProofOfDeliveryName */
    public $proofOfDeliveryDate;

    /** @var string Time in which the shipment was delivered. Typically used in conjunction with ProofOfDeliveryTime and ProofOfDeliveryName */
    public $proofOfDeliveryTime;

    /** @var string Name of person who signed off on delivery. Typically used in conjunction with ProofOfDeliveryTime and ProofOfDeliveryName */
    public $proofOfDeliveryName;

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
        $properties->lineSequenceNumber = Schema::string();
        $properties->lineSequenceNumber->description = "For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction.";
        $ownerSchema->addPropertyMapping('LineSequenceNumber', self::names()->lineSequenceNumber);
        $properties->lineDescription = Schema::string();
        $properties->lineDescription->description = "Free-form textual description of the line level details";
        $ownerSchema->addPropertyMapping('LineDescription', self::names()->lineDescription);
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