<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierStatusMessages;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Provides shipment status, carrier, and location details
 */
class CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItems extends ClassStructure
{
    const A7 = 'A7';

    const A9 = 'A9';

    const AA = 'AA';

    const AF = 'AF';

    const AH = 'AH';

    const AI = 'AI';

    const AN = 'AN';

    const AR = 'AR';

    const AV = 'AV';

    const B6 = 'B6';

    const BC = 'BC';

    const CA = 'CA';

    const CD = 'CD';

    const CP = 'CP';

    const D1 = 'D1';

    const I1 = 'I1';

    const K1 = 'K1';

    const OA = 'OA';

    const OO = 'OO';

    const P1 = 'P1';

    const PR = 'PR';

    const RL = 'RL';

    const SD = 'SD';

    const SUIP = 'SUIP';

    const UNDF = 'UNDF';

    const X1 = 'X1';

    const X3 = 'X3';

    const X4 = 'X4';

    const X6 = 'X6';

    const XB = 'XB';

    const A1 = 'A1';

    const A2 = 'A2';

    const AD = 'AD';

    const AG = 'AG';

    const AK = 'AK';

    const AL = 'AL';

    const AM = 'AM';

    const AO = 'AO';

    const AQ = 'AQ';

    const AT = 'AT';

    const AX = 'AX';

    const B1 = 'B1';

    const BE = 'BE';

    const BH = 'BH';

    const BQ = 'BQ';

    const BS = 'BS';

    const BT = 'BT';

    const D2 = 'D2';

    const HB = 'HB';

    const NA = 'NA';

    const NS = 'NS';

    const RC = 'RC';

    const T2 = 'T2';

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

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsDates Provides date and time information */
    public $dates;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsAddress Represent an entity such as an organizational, physical location, property, or individual */
    public $address;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItemsShipmentStatusDetailsItemsCarrierInformation Specifies carrier identity, transportation information, and equipment details */
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
        $properties->shipmentStatusCode->enum = array(
            self::A7,
            self::A9,
            self::AA,
            self::AF,
            self::AH,
            self::AI,
            self::AN,
            self::AR,
            self::AV,
            self::B6,
            self::BC,
            self::CA,
            self::CD,
            self::CP,
            self::D1,
            self::I1,
            self::K1,
            self::OA,
            self::OO,
            self::P1,
            self::PR,
            self::RL,
            self::SD,
            self::SUIP,
            self::UNDF,
            self::X1,
            self::X3,
            self::X4,
            self::X6,
            self::XB,
        );
        $properties->shipmentStatusCode->description = "Code indicating the status of a shipment";
        $ownerSchema->addPropertyMapping('ShipmentStatusCode', self::names()->shipmentStatusCode);
        $properties->shipmentStatusReasonCode = Schema::string();
        $properties->shipmentStatusReasonCode->enum = array(
            self::A1,
            self::A2,
            self::AD,
            self::AF,
            self::AG,
            self::AH,
            self::AI,
            self::AK,
            self::AL,
            self::AM,
            self::AN,
            self::AO,
            self::AQ,
            self::AT,
            self::AV,
            self::AX,
            self::B1,
            self::BE,
            self::BH,
            self::BQ,
            self::BS,
            self::BT,
            self::CA,
            self::D1,
            self::D2,
            self::HB,
            self::NA,
            self::NS,
            self::RC,
            self::T2,
        );
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
        $ownerSchema->description = "Provides shipment status, carrier, and location details";
        $ownerSchema->required = array(
        );
    }
}