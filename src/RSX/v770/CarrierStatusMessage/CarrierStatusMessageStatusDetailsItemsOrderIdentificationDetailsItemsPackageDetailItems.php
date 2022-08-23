<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierStatusMessage;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItems extends ClassStructure
{
    /** @var string For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction. */
    public $lineSequenceNumber;

    /** @var string Serial Shipping Container Code[SSCC] and Application Identifier[00] indicates the shipment or parts of shipment. This field includes both the SSCC[18 digits] and the Application Identifier[2 digits], which should be 20 digits in length */
    public $shippingSerialID;

    /** @var string Carrier-Assigned Package ID indicating the shipment or parts of shipment */
    public $carrierPackageID;

    /** @var string Code indicating the condition of the shipment */
    public $ladingExceptionCode;

    /** @var string */
    public $zone;

    /** @var string To report the time period of carrier's standard service for the shipment */
    public $standardServiceLevel;

    /** @var string Code identifying payment terms for transportation charges */
    public $fOBPayCode;

    /** @var string Code indicating the total monetary value of the freight load */
    public $declaredAmountQualifier;

    /** @var float Total monetary value of the freight load */
    public $declaredAmount;

    /** @var string Code indicating the location or type of pickup or delivery */
    public $pickupOrDeliveryCode;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsServiceLevelCodesItems[]|array */
    public $serviceLevelCodes;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsFreightRatesItems[]|array */
    public $freightRates;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsReferencesItems[]|array */
    public $references;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsNotesItems[]|array */
    public $notes;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsAddressItems[]|array */
    public $address;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItems[]|array */
    public $shipmentStatusDetails;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->lineSequenceNumber = Schema::string();
        $properties->lineSequenceNumber->description = "For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction.";
        $ownerSchema->addPropertyMapping('LineSequenceNumber', self::names()->lineSequenceNumber);
        $properties->shippingSerialID = Schema::string();
        $properties->shippingSerialID->description = "Serial Shipping Container Code[SSCC] and Application Identifier[00] indicates the shipment or parts of shipment. This field includes both the SSCC[18 digits] and the Application Identifier[2 digits], which should be 20 digits in length";
        $ownerSchema->addPropertyMapping('ShippingSerialID', self::names()->shippingSerialID);
        $properties->carrierPackageID = Schema::string();
        $properties->carrierPackageID->description = "Carrier-Assigned Package ID indicating the shipment or parts of shipment";
        $ownerSchema->addPropertyMapping('CarrierPackageID', self::names()->carrierPackageID);
        $properties->ladingExceptionCode = Schema::string();
        $properties->ladingExceptionCode->description = "Code indicating the condition of the shipment";
        $ownerSchema->addPropertyMapping('LadingExceptionCode', self::names()->ladingExceptionCode);
        $properties->zone = Schema::string();
        $ownerSchema->addPropertyMapping('Zone', self::names()->zone);
        $properties->standardServiceLevel = Schema::string();
        $properties->standardServiceLevel->description = "To report the time period of carrier's standard service for the shipment";
        $ownerSchema->addPropertyMapping('StandardServiceLevel', self::names()->standardServiceLevel);
        $properties->fOBPayCode = Schema::string();
        $properties->fOBPayCode->description = "Code identifying payment terms for transportation charges";
        $ownerSchema->addPropertyMapping('FOBPayCode', self::names()->fOBPayCode);
        $properties->declaredAmountQualifier = Schema::string();
        $properties->declaredAmountQualifier->description = "Code indicating the total monetary value of the freight load";
        $ownerSchema->addPropertyMapping('DeclaredAmountQualifier', self::names()->declaredAmountQualifier);
        $properties->declaredAmount = Schema::number();
        $properties->declaredAmount->description = "Total monetary value of the freight load";
        $ownerSchema->addPropertyMapping('DeclaredAmount', self::names()->declaredAmount);
        $properties->pickupOrDeliveryCode = Schema::string();
        $properties->pickupOrDeliveryCode->description = "Code indicating the location or type of pickup or delivery";
        $ownerSchema->addPropertyMapping('PickupOrDeliveryCode', self::names()->pickupOrDeliveryCode);
        $properties->serviceLevelCodes = Schema::arr();
        $properties->serviceLevelCodes->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsServiceLevelCodesItems::schema();
        $ownerSchema->addPropertyMapping('ServiceLevelCodes', self::names()->serviceLevelCodes);
        $properties->freightRates = Schema::arr();
        $properties->freightRates->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsFreightRatesItems::schema();
        $ownerSchema->addPropertyMapping('FreightRates', self::names()->freightRates);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->address = Schema::arr();
        $properties->address->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->shipmentStatusDetails = Schema::arr();
        $properties->shipmentStatusDetails->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItems::schema();
        $ownerSchema->addPropertyMapping('ShipmentStatusDetails', self::names()->shipmentStatusDetails);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}