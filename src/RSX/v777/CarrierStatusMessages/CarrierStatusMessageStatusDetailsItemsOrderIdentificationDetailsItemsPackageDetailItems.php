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
 * Details about an individual shipping unit
 */
class CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItems extends ClassStructure
{
    const D = 'D';

    const O = 'O';

    const P = 'P';

    const CONST_11 = '11';

    const BP = 'BP';

    const CA = 'CA';

    const CC = 'CC';

    const CD = 'CD';

    const CF = 'CF';

    const DE = 'DE';

    const DF = 'DF';

    const FO = 'FO';

    const HP = 'HP';

    const MX = 'MX';

    const NC = 'NC';

    const NR = 'NR';

    const PA = 'PA';

    const PB = 'PB';

    const PC = 'PC';

    const PD = 'PD';

    const PE = 'PE';

    const PL = 'PL';

    const PO = 'PO';

    const PP = 'PP';

    const PS = 'PS';

    const PU = 'PU';

    const RC = 'RC';

    const RF = 'RF';

    const RS = 'RS';

    const TP = 'TP';

    const WC = 'WC';

    const BL = 'BL';

    const RB = 'RB';

    const RR = 'RR';

    /** @var string For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction. */
    public $lineSequenceNumber;

    /** @var string Serial Shipping Container Code[SSCC] and Application Identifier[00] indicates the shipment or parts of shipment. This field includes both the SSCC[18 digits] and the Application Identifier[2 digits], which should be 20 digits in length */
    public $shippingSerialID;

    /** @var string Carrier-Assigned Package ID indicating the shipment or parts of shipment */
    public $carrierPackageID;

    /** @var string Code indicating the condition of the shipment */
    public $ladingExceptionCode;

    /** @var string Identifies a region or territory */
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
        $properties->ladingExceptionCode->enum = array(
            self::D,
            self::O,
            self::P,
        );
        $properties->ladingExceptionCode->description = "Code indicating the condition of the shipment";
        $ownerSchema->addPropertyMapping('LadingExceptionCode', self::names()->ladingExceptionCode);
        $properties->zone = Schema::string();
        $properties->zone->description = "Identifies a region or territory";
        $ownerSchema->addPropertyMapping('Zone', self::names()->zone);
        $properties->standardServiceLevel = Schema::string();
        $properties->standardServiceLevel->description = "To report the time period of carrier's standard service for the shipment";
        $ownerSchema->addPropertyMapping('StandardServiceLevel', self::names()->standardServiceLevel);
        $properties->fOBPayCode = Schema::string();
        $properties->fOBPayCode->enum = array(
            self::CONST_11,
            self::BP,
            self::CA,
            self::CC,
            self::CD,
            self::CF,
            self::DE,
            self::DF,
            self::FO,
            self::HP,
            self::MX,
            self::NC,
            self::NR,
            self::PA,
            self::PB,
            self::PC,
            self::PD,
            self::PE,
            self::PL,
            self::PO,
            self::PP,
            self::PS,
            self::PU,
            self::RC,
            self::RF,
            self::RS,
            self::TP,
            self::WC,
        );
        $properties->fOBPayCode->description = "Code identifying payment terms for transportation charges";
        $ownerSchema->addPropertyMapping('FOBPayCode', self::names()->fOBPayCode);
        $properties->declaredAmountQualifier = Schema::string();
        $properties->declaredAmountQualifier->enum = array(
            self::BL,
            self::PS,
        );
        $properties->declaredAmountQualifier->description = "Code indicating the total monetary value of the freight load";
        $ownerSchema->addPropertyMapping('DeclaredAmountQualifier', self::names()->declaredAmountQualifier);
        $properties->declaredAmount = Schema::number();
        $properties->declaredAmount->description = "Total monetary value of the freight load";
        $ownerSchema->addPropertyMapping('DeclaredAmount', self::names()->declaredAmount);
        $properties->pickupOrDeliveryCode = Schema::string();
        $properties->pickupOrDeliveryCode->enum = array(
            self::RB,
            self::RR,
        );
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
        $ownerSchema->description = "Details about an individual shipping unit";
        $ownerSchema->required = array(
        );
    }
}