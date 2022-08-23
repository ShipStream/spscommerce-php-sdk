<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTenderResponses;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierLoadTenderResponseLoadTenderResponseHeader extends ClassStructure
{
    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Identification number assigned to the shipment by the shipper that uniquely identifies the shipment from origin to ultimate destination and is not subject to modification */
    public $shipmentIdentification;

    /** @var string Code identifying the action taken on the load tender */
    public $reservationActionCode;

    /** @var string Code identifying the reason for rejecting a load tender */
    public $declineReasonCode;

    /** @var string Date the booking response was created */
    public $bookingDate;

    /** @var string Reference number assigned by the carrier */
    public $carrierProNumber;

    /** @var string A shipper assigned number that outlines the ownership, terms of carriage and is a receipt of goods */
    public $billOfLadingNumber;

    /** @var string End consumer's account number */
    public $customerAccountNumber;

    /** @var string End consumer's order number */
    public $customerOrderNumber;

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
        $properties->reservationActionCode = Schema::string();
        $properties->reservationActionCode->description = "Code identifying the action taken on the load tender";
        $ownerSchema->addPropertyMapping('ReservationActionCode', self::names()->reservationActionCode);
        $properties->declineReasonCode = Schema::string();
        $properties->declineReasonCode->description = "Code identifying the reason for rejecting a load tender";
        $ownerSchema->addPropertyMapping('DeclineReasonCode', self::names()->declineReasonCode);
        $properties->bookingDate = Schema::string();
        $properties->bookingDate->description = "Date the booking response was created";
        $properties->bookingDate->format = "date";
        $ownerSchema->addPropertyMapping('BookingDate', self::names()->bookingDate);
        $properties->carrierProNumber = Schema::string();
        $properties->carrierProNumber->description = "Reference number assigned by the carrier";
        $ownerSchema->addPropertyMapping('CarrierProNumber', self::names()->carrierProNumber);
        $properties->billOfLadingNumber = Schema::string();
        $properties->billOfLadingNumber->description = "A shipper assigned number that outlines the ownership, terms of carriage and is a receipt of goods";
        $ownerSchema->addPropertyMapping('BillOfLadingNumber', self::names()->billOfLadingNumber);
        $properties->customerAccountNumber = Schema::string();
        $properties->customerAccountNumber->description = "End consumer's account number";
        $ownerSchema->addPropertyMapping('CustomerAccountNumber', self::names()->customerAccountNumber);
        $properties->customerOrderNumber = Schema::string();
        $properties->customerOrderNumber->description = "End consumer's order number";
        $ownerSchema->addPropertyMapping('CustomerOrderNumber', self::names()->customerOrderNumber);
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