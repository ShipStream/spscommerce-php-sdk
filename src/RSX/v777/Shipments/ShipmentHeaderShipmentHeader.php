<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Contains the commonly used fields in the header of the transaction
 */
class ShipmentHeaderShipmentHeader extends ClassStructure
{
    const CONST_00 = '00';

    const CONST_01 = '01';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_07 = '07';

    const CONST_20 = '20';

    const CN = 'CN';

    const CONST_0000 = '0000';

    const CONST_0001 = '0001';

    const CONST_0004 = '0004';

    const SOTPI = 'SOTPI';

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

    /** @var string This field is deprecated */
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

    /** @var string This field is deprecated */
    public $statusReasonCode;

    /** @var string A shipper assigned number that outlines the ownership, terms of carriage and is a receipt of goods */
    public $billOfLadingNumber;

    /** @var string Reference number assigned by the carrier */
    public $carrierProNumber;

    /** @var string Number assigned by the buying or logistics organization approving the delivery, routing, or pickup of the shipment. This is not the tracking number */
    public $appointmentNumber;

    /** @var string Value used to identify a shipment, typically assigned by the ship from party */
    public $pickupNumber;

    /** @var string Date the trading partner requested the shipment be picked up */
    public $requestedPickupDate;

    /** @var string Time the trading partner requested the shipment be picked up */
    public $requestedPickupTime;

    /** @var string Scheduled date of shipment */
    public $scheduledShipDate;

    /** @var string Scheduled time of shipment */
    public $scheduledShipTime;

    /** @var string Current scheduled date of delivery */
    public $currentScheduledDeliveryDate;

    /** @var string Current scheduled time of delivery */
    public $currentScheduledDeliveryTime;

    /** @var string Current scheduled date of shipment */
    public $currentScheduledShipDate;

    /** @var string Current scheduled time of shipment */
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
        $properties->tsetPurposeCode->enum = array(
            self::CONST_00,
            self::CONST_01,
            self::CONST_05,
            self::CONST_06,
            self::CONST_07,
            self::CONST_20,
            self::CN,
        );
        $properties->tsetPurposeCode->description = "Code identifying purpose or function of the transmission";
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->tsetTypeCode = Schema::string();
        $properties->tsetTypeCode->description = "This field is deprecated";
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
        $properties->aSNStructureCode->enum = array(
            self::CONST_0000,
            self::CONST_0001,
            self::CONST_0004,
            self::SOTPI,
        );
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
        $properties->statusReasonCode->description = "This field is deprecated";
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
        $properties->pickupNumber->description = "Value used to identify a shipment, typically assigned by the ship from party";
        $ownerSchema->addPropertyMapping('PickupNumber', self::names()->pickupNumber);
        $properties->requestedPickupDate = Schema::string();
        $properties->requestedPickupDate->description = "Date the trading partner requested the shipment be picked up";
        $properties->requestedPickupDate->format = "date";
        $ownerSchema->addPropertyMapping('RequestedPickupDate', self::names()->requestedPickupDate);
        $properties->requestedPickupTime = Schema::string();
        $properties->requestedPickupTime->description = "Time the trading partner requested the shipment be picked up";
        $properties->requestedPickupTime->format = "time";
        $ownerSchema->addPropertyMapping('RequestedPickupTime', self::names()->requestedPickupTime);
        $properties->scheduledShipDate = Schema::string();
        $properties->scheduledShipDate->description = "Scheduled date of shipment";
        $properties->scheduledShipDate->format = "date";
        $ownerSchema->addPropertyMapping('ScheduledShipDate', self::names()->scheduledShipDate);
        $properties->scheduledShipTime = Schema::string();
        $properties->scheduledShipTime->description = "Scheduled time of shipment";
        $properties->scheduledShipTime->format = "time";
        $ownerSchema->addPropertyMapping('ScheduledShipTime', self::names()->scheduledShipTime);
        $properties->currentScheduledDeliveryDate = Schema::string();
        $properties->currentScheduledDeliveryDate->description = "Current scheduled date of delivery";
        $properties->currentScheduledDeliveryDate->format = "date";
        $ownerSchema->addPropertyMapping('CurrentScheduledDeliveryDate', self::names()->currentScheduledDeliveryDate);
        $properties->currentScheduledDeliveryTime = Schema::string();
        $properties->currentScheduledDeliveryTime->description = "Current scheduled time of delivery";
        $properties->currentScheduledDeliveryTime->format = "time";
        $ownerSchema->addPropertyMapping('CurrentScheduledDeliveryTime', self::names()->currentScheduledDeliveryTime);
        $properties->currentScheduledShipDate = Schema::string();
        $properties->currentScheduledShipDate->description = "Current scheduled date of shipment";
        $properties->currentScheduledShipDate->format = "date";
        $ownerSchema->addPropertyMapping('CurrentScheduledShipDate', self::names()->currentScheduledShipDate);
        $properties->currentScheduledShipTime = Schema::string();
        $properties->currentScheduledShipTime->description = "Current scheduled time of shipment";
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
        $ownerSchema->description = "Contains the commonly used fields in the header of the transaction";
        $ownerSchema->required = array(
            'TradingPartnerId',
            'ShipmentIdentification',
        );
    }
}