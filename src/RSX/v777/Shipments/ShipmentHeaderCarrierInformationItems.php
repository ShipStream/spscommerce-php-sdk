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
 * Specifies carrier identity, transportation information, and equipment details
 */
class ShipmentHeaderCarrierInformationItems extends ClassStructure
{
    const BK = 'BK';

    const CL = 'CL';

    const CM = 'CM';

    const CS = 'CS';

    const PR = 'PR';

    const CONST_6 = '6';

    const CONST_7 = '7';

    const A = 'A';

    const AR = 'AR';

    const B = 'B';

    const BP = 'BP';

    const BU = 'BU';

    const C = 'C';

    const DW = 'DW';

    const E = 'E';

    const F = 'F';

    const GG = 'GG';

    const H = 'H';

    const HH = 'HH';

    const I = 'I';

    const K = 'K';

    const L = 'L';

    const LA = 'LA';

    const LD = 'LD';

    const LT = 'LT';

    const M = 'M';

    const N = 'N';

    const O = 'O';

    const P = 'P';

    const R = 'R';

    const RC = 'RC';

    const SB = 'SB';

    const SD = 'SD';

    const SE = 'SE';

    const SF = 'SF';

    const SR = 'SR';

    const SS = 'SS';

    const ST = 'ST';

    const T = 'T';

    const TA = 'TA';

    const TC = 'TC';

    const TL = 'TL';

    const TT = 'TT';

    const VE = 'VE';

    const VL = 'VL';

    const W = 'W';

    const WP = 'WP';

    const X = 'X';

    const CONST_20 = '20';

    const CONST_2_B = '2B';

    const CONST_40 = '40';

    const CONST_4_B = '4B';

    const CONST_5_B = '5B';

    const AC = 'AC';

    const AF = 'AF';

    const BX = 'BX';

    const CN = 'CN';

    const CQ = 'CQ';

    const CV = 'CV';

    const FT = 'FT';

    const HC = 'HC';

    const HV = 'HV';

    const LU = 'LU';

    const RO = 'RO';

    const RR = 'RR';

    const RT = 'RT';

    const TN = 'TN';

    const TV = 'TV';

    const UL = 'UL';

    const PO = 'PO';

    const S = 'S';

    const CONST_1 = '1';

    const CONST_2 = '2';

    const CONST_3 = '3';

    const CONST_4 = '4';

    const CONST_5 = '5';

    const CONST_8 = '8';

    const CONST_9 = '9';

    const BO = 'BO';

    const D = 'D';

    const DP = 'DP';

    const DT = 'DT';

    const JD = 'JD';

    const JO = 'JO';

    const V = 'V';

    const BS = 'BS';

    const SC = 'SC';

    const CD = 'CD';

    const CW = 'CW';

    const HO = 'HO';

    const WD = 'WD';

    /** @var string Code indicating the status of an order or shipment or the disposition of any difference between the quantity ordered and the quantity shipped for a line item or transaction */
    public $statusCode;

    /** @var string Code specifying the method or type of transportation for the shipment */
    public $carrierTransMethodCode;

    /** @var string Standard Carrier Alpha Code[SCAC] - 2 to 4 digit alphabetic code assigned by the National Motor Freight Traffic Association identifying transportation companies */
    public $carrierAlphaCode;

    /** @var string Free-form description of the routing/requested routing for shipment or the originating carrier's identity */
    public $carrierRouting;

    /** @var string Code identifying type of equipment used for shipment */
    public $equipmentDescriptionCode;

    /** @var string Prefix or alphabetic part of an equipment unit's identifying number */
    public $carrierEquipmentInitial;

    /** @var string Sequencing or serial part of an equipment unit's identifying number[Pure numeric form for equipment number is preferred] */
    public $carrierEquipmentNumber;

    /** @var string Free form description used to identify or describe the size and type of equipment used in shipping */
    public $equipmentType;

    /** @var string Code indicating ownership of equipment used in transportation */
    public $ownershipCode;

    /** @var string Code used to identify a stage of transport */
    public $routingSequenceCode;

    /** @var string The point of origin and point of direction */
    public $transitDirectionCode;

    /** @var string Code qualifying the amount of time associated with a transportation stage */
    public $transitTimeQual;

    /** @var float Amount of time associated with a transportation stage */
    public $transitTime;

    /** @var ShipmentHeaderCarrierInformationItemsServiceLevelCodesItems[]|array */
    public $serviceLevelCodes;

    /** @var ShipmentHeaderCarrierInformationItemsAddressItems[]|array */
    public $address;

    /** @var ShipmentHeaderCarrierInformationItemsSealNumbersItems[]|array */
    public $sealNumbers;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->statusCode = Schema::string();
        $properties->statusCode->enum = array(
            self::BK,
            self::CL,
            self::CM,
            self::CS,
            self::PR,
        );
        $properties->statusCode->description = "Code indicating the status of an order or shipment or the disposition of any difference between the quantity ordered and the quantity shipped for a line item or transaction";
        $ownerSchema->addPropertyMapping('StatusCode', self::names()->statusCode);
        $properties->carrierTransMethodCode = Schema::string();
        $properties->carrierTransMethodCode->enum = array(
            self::CONST_6,
            self::CONST_7,
            self::A,
            self::AR,
            self::B,
            self::BP,
            self::BU,
            self::C,
            self::DW,
            self::E,
            self::F,
            self::GG,
            self::H,
            self::HH,
            self::I,
            self::K,
            self::L,
            self::LA,
            self::LD,
            self::LT,
            self::M,
            self::N,
            self::O,
            self::P,
            self::R,
            self::RC,
            self::SB,
            self::SD,
            self::SE,
            self::SF,
            self::SR,
            self::SS,
            self::ST,
            self::T,
            self::TA,
            self::TC,
            self::TL,
            self::TT,
            self::VE,
            self::VL,
            self::W,
            self::WP,
            self::X,
        );
        $properties->carrierTransMethodCode->description = "Code specifying the method or type of transportation for the shipment";
        $ownerSchema->addPropertyMapping('CarrierTransMethodCode', self::names()->carrierTransMethodCode);
        $properties->carrierAlphaCode = Schema::string();
        $properties->carrierAlphaCode->description = "Standard Carrier Alpha Code[SCAC] - 2 to 4 digit alphabetic code assigned by the National Motor Freight Traffic Association identifying transportation companies";
        $ownerSchema->addPropertyMapping('CarrierAlphaCode', self::names()->carrierAlphaCode);
        $properties->carrierRouting = Schema::string();
        $properties->carrierRouting->description = "Free-form description of the routing/requested routing for shipment or the originating carrier's identity";
        $ownerSchema->addPropertyMapping('CarrierRouting', self::names()->carrierRouting);
        $properties->equipmentDescriptionCode = Schema::string();
        $properties->equipmentDescriptionCode->enum = array(
            self::CONST_20,
            self::CONST_2_B,
            self::CONST_40,
            self::CONST_4_B,
            self::CONST_5_B,
            self::AC,
            self::AF,
            self::BX,
            self::CN,
            self::CQ,
            self::CV,
            self::FT,
            self::HC,
            self::HV,
            self::LU,
            self::RO,
            self::RR,
            self::RT,
            self::TA,
            self::TL,
            self::TN,
            self::TV,
            self::UL,
        );
        $properties->equipmentDescriptionCode->description = "Code identifying type of equipment used for shipment";
        $ownerSchema->addPropertyMapping('EquipmentDescriptionCode', self::names()->equipmentDescriptionCode);
        $properties->carrierEquipmentInitial = Schema::string();
        $properties->carrierEquipmentInitial->description = "Prefix or alphabetic part of an equipment unit's identifying number";
        $ownerSchema->addPropertyMapping('CarrierEquipmentInitial', self::names()->carrierEquipmentInitial);
        $properties->carrierEquipmentNumber = Schema::string();
        $properties->carrierEquipmentNumber->description = "Sequencing or serial part of an equipment unit's identifying number[Pure numeric form for equipment number is preferred]";
        $ownerSchema->addPropertyMapping('CarrierEquipmentNumber', self::names()->carrierEquipmentNumber);
        $properties->equipmentType = Schema::string();
        $properties->equipmentType->description = "Free form description used to identify or describe the size and type of equipment used in shipping";
        $ownerSchema->addPropertyMapping('EquipmentType', self::names()->equipmentType);
        $properties->ownershipCode = Schema::string();
        $properties->ownershipCode->enum = array(
            self::L,
            self::N,
            self::PO,
            self::R,
            self::S,
            self::T,
        );
        $properties->ownershipCode->description = "Code indicating ownership of equipment used in transportation";
        $ownerSchema->addPropertyMapping('OwnershipCode', self::names()->ownershipCode);
        $properties->routingSequenceCode = Schema::string();
        $properties->routingSequenceCode->enum = array(
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
            self::CONST_4,
            self::CONST_5,
            self::CONST_6,
            self::CONST_7,
            self::CONST_8,
            self::CONST_9,
            self::A,
            self::B,
            self::BO,
            self::D,
            self::DP,
            self::DT,
            self::H,
            self::I,
            self::JD,
            self::JO,
            self::M,
            self::O,
            self::R,
            self::S,
            self::V,
            self::X,
        );
        $properties->routingSequenceCode->description = "Code used to identify a stage of transport";
        $ownerSchema->addPropertyMapping('RoutingSequenceCode', self::names()->routingSequenceCode);
        $properties->transitDirectionCode = Schema::string();
        $properties->transitDirectionCode->enum = array(
            self::BS,
            self::SB,
            self::SC,
            self::SD,
            self::SF,
            self::SS,
        );
        $properties->transitDirectionCode->description = "The point of origin and point of direction";
        $ownerSchema->addPropertyMapping('TransitDirectionCode', self::names()->transitDirectionCode);
        $properties->transitTimeQual = Schema::string();
        $properties->transitTimeQual->enum = array(
            self::CD,
            self::CW,
            self::HO,
            self::WD,
        );
        $properties->transitTimeQual->description = "Code qualifying the amount of time associated with a transportation stage";
        $ownerSchema->addPropertyMapping('TransitTimeQual', self::names()->transitTimeQual);
        $properties->transitTime = Schema::number();
        $properties->transitTime->description = "Amount of time associated with a transportation stage";
        $ownerSchema->addPropertyMapping('TransitTime', self::names()->transitTime);
        $properties->serviceLevelCodes = Schema::arr();
        $properties->serviceLevelCodes->items = ShipmentHeaderCarrierInformationItemsServiceLevelCodesItems::schema();
        $ownerSchema->addPropertyMapping('ServiceLevelCodes', self::names()->serviceLevelCodes);
        $properties->address = Schema::arr();
        $properties->address->items = ShipmentHeaderCarrierInformationItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->sealNumbers = Schema::arr();
        $properties->sealNumbers->items = ShipmentHeaderCarrierInformationItemsSealNumbersItems::schema();
        $ownerSchema->addPropertyMapping('SealNumbers', self::names()->sealNumbers);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Specifies carrier identity, transportation information, and equipment details";
        $ownerSchema->required = array(
        );
    }
}