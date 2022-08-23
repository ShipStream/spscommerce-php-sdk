<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentHeaderShipmentHeader extends ClassStructure
{
    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Identification number assigned to the shipment by the shipper that uniquely identifies the shipment from origin to ultimate destination and is not subject to modification */
    public $shipmentIdentification;

    /** @var string Date shipment will leave the ship from location */
    public $shipDate;

    /** @var string Time the shipment left the ship from location. [All standard XML formats are accepted.] */
    public $shipmentTime;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

    /** @var string */
    public $tsetTypeCode;

    /** @var string Date the document was created */
    public $shipNoticeDate;

    /** @var string Time the document was created. [All standard XML formats are accepted] */
    public $shipNoticeTime;

    /** @var string Code is the reflection of the structure of the document */
    public $aSNStructureCode;

    /** @var string Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $buyersCurrency;

    /** @var string Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $sellersCurrency;

    /** @var float The rate to be applied to convert one currency to another */
    public $exchangeRate;

    /** @var string */
    public $statusReasonCode;

    /** @var string A shipper assigned number that outlines the ownership, terms of carriage and is a receipt of goods */
    public $billOfLadingNumber;

    /** @var string Reference number assigned by the carrier */
    public $carrierProNumber;

    /** @var string Number assigned by the buying or logistics organization approving the delivery, routing, or pickup of the shipment. This is not the tracking number */
    public $appointmentNumber;

    /** @var string */
    public $pickupNumber;

    /** @var string */
    public $requestedPickupDate;

    /** @var string */
    public $requestedPickupTime;

    /** @var string */
    public $scheduledShipDate;

    /** @var string */
    public $scheduledShipTime;

    /** @var string */
    public $currentScheduledDeliveryDate;

    /** @var string */
    public $currentScheduledDeliveryTime;

    /** @var string */
    public $currentScheduledShipDate;

    /** @var string */
    public $currentScheduledShipTime;

    /** @var string Used to communicate the version number of the current document */
    public $documentVersion;

    /** @var string Used to communicate the revision number of the current document */
    public $documentRevision;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->tradingPartnerId = Schema::string();
        $properties->tradingPartnerId->description = "Unique internal identifier defined by SPS Commerce which identifies the relationship";
        $properties->tradingPartnerId->maxLength = 15;
        $properties->tradingPartnerId->minLength = 1;
        $ownerSchema->addPropertyMapping('TradingPartnerId', self::names()->tradingPartnerId);
        $properties->shipmentIdentification = Schema::string();
        $properties->shipmentIdentification->description = "Identification number assigned to the shipment by the shipper that uniquely identifies the shipment from origin to ultimate destination and is not subject to modification";
        $ownerSchema->addPropertyMapping('ShipmentIdentification', self::names()->shipmentIdentification);
        $properties->shipDate = Schema::string();
        $properties->shipDate->description = "Date shipment will leave the ship from location";
        $properties->shipDate->format = "date";
        $ownerSchema->addPropertyMapping('ShipDate', self::names()->shipDate);
        $properties->shipmentTime = Schema::string();
        $properties->shipmentTime->description = "Time the shipment left the ship from location. [All standard XML formats are accepted.]";
        $properties->shipmentTime->format = "time";
        $ownerSchema->addPropertyMapping('ShipmentTime', self::names()->shipmentTime);
        $properties->tsetPurposeCode = Schema::string();
        $properties->tsetPurposeCode->description = "Code identifying purpose or function of the transmission";
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->tsetTypeCode = Schema::string();
        $ownerSchema->addPropertyMapping('TsetTypeCode', self::names()->tsetTypeCode);
        $properties->shipNoticeDate = Schema::string();
        $properties->shipNoticeDate->description = "Date the document was created";
        $properties->shipNoticeDate->format = "date";
        $ownerSchema->addPropertyMapping('ShipNoticeDate', self::names()->shipNoticeDate);
        $properties->shipNoticeTime = Schema::string();
        $properties->shipNoticeTime->description = "Time the document was created. [All standard XML formats are accepted]";
        $properties->shipNoticeTime->format = "time";
        $ownerSchema->addPropertyMapping('ShipNoticeTime', self::names()->shipNoticeTime);
        $properties->aSNStructureCode = Schema::string();
        $properties->aSNStructureCode->description = "Code is the reflection of the structure of the document";
        $ownerSchema->addPropertyMapping('ASNStructureCode', self::names()->aSNStructureCode);
        $properties->buyersCurrency = Schema::string();
        $properties->buyersCurrency->description = "Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('BuyersCurrency', self::names()->buyersCurrency);
        $properties->sellersCurrency = Schema::string();
        $properties->sellersCurrency->description = "Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('SellersCurrency', self::names()->sellersCurrency);
        $properties->exchangeRate = Schema::number();
        $properties->exchangeRate->description = "The rate to be applied to convert one currency to another";
        $ownerSchema->addPropertyMapping('ExchangeRate', self::names()->exchangeRate);
        $properties->statusReasonCode = Schema::string();
        $ownerSchema->addPropertyMapping('StatusReasonCode', self::names()->statusReasonCode);
        $properties->billOfLadingNumber = Schema::string();
        $properties->billOfLadingNumber->description = "A shipper assigned number that outlines the ownership, terms of carriage and is a receipt of goods";
        $ownerSchema->addPropertyMapping('BillOfLadingNumber', self::names()->billOfLadingNumber);
        $properties->carrierProNumber = Schema::string();
        $properties->carrierProNumber->description = "Reference number assigned by the carrier";
        $ownerSchema->addPropertyMapping('CarrierProNumber', self::names()->carrierProNumber);
        $properties->appointmentNumber = Schema::string();
        $properties->appointmentNumber->description = "Number assigned by the buying or logistics organization approving the delivery, routing, or pickup of the shipment. This is not the tracking number";
        $ownerSchema->addPropertyMapping('AppointmentNumber', self::names()->appointmentNumber);
        $properties->pickupNumber = Schema::string();
        $ownerSchema->addPropertyMapping('PickupNumber', self::names()->pickupNumber);
        $properties->requestedPickupDate = Schema::string();
        $properties->requestedPickupDate->format = "date";
        $ownerSchema->addPropertyMapping('RequestedPickupDate', self::names()->requestedPickupDate);
        $properties->requestedPickupTime = Schema::string();
        $properties->requestedPickupTime->format = "time";
        $ownerSchema->addPropertyMapping('RequestedPickupTime', self::names()->requestedPickupTime);
        $properties->scheduledShipDate = Schema::string();
        $properties->scheduledShipDate->format = "date";
        $ownerSchema->addPropertyMapping('ScheduledShipDate', self::names()->scheduledShipDate);
        $properties->scheduledShipTime = Schema::string();
        $properties->scheduledShipTime->format = "time";
        $ownerSchema->addPropertyMapping('ScheduledShipTime', self::names()->scheduledShipTime);
        $properties->currentScheduledDeliveryDate = Schema::string();
        $properties->currentScheduledDeliveryDate->format = "date";
        $ownerSchema->addPropertyMapping('CurrentScheduledDeliveryDate', self::names()->currentScheduledDeliveryDate);
        $properties->currentScheduledDeliveryTime = Schema::string();
        $properties->currentScheduledDeliveryTime->format = "time";
        $ownerSchema->addPropertyMapping('CurrentScheduledDeliveryTime', self::names()->currentScheduledDeliveryTime);
        $properties->currentScheduledShipDate = Schema::string();
        $properties->currentScheduledShipDate->format = "date";
        $ownerSchema->addPropertyMapping('CurrentScheduledShipDate', self::names()->currentScheduledShipDate);
        $properties->currentScheduledShipTime = Schema::string();
        $properties->currentScheduledShipTime->format = "time";
        $ownerSchema->addPropertyMapping('CurrentScheduledShipTime', self::names()->currentScheduledShipTime);
        $properties->documentVersion = Schema::string();
        $properties->documentVersion->description = "Used to communicate the version number of the current document";
        $ownerSchema->addPropertyMapping('DocumentVersion', self::names()->documentVersion);
        $properties->documentRevision = Schema::string();
        $properties->documentRevision->description = "Used to communicate the revision number of the current document";
        $ownerSchema->addPropertyMapping('DocumentRevision', self::names()->documentRevision);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'TradingPartnerId',
            'ShipmentIdentification',
        );
    }
}