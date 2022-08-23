<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\WarehouseTransferReceiptAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseTransferReceiptAdviceHeaderHeaderDetail extends ClassStructure
{
    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Identification number assigned to the shipment by the agent */
    public $warehouseReceiptId;

    /** @var string Identification number assigned to the shipment by the shipper that uniquely identifies the shipment from origin to ultimate destination and is not subject to modification */
    public $shipmentIdentification;

    /** @var string Identifying number for a warehouse shipping order assigned by the depositor */
    public $depositorOrderNumber;

    /** @var string Date the shipment left the ship from location */
    public $shipmentDate;

    /** @var string Code specifying the basis used when reporting shipment information */
    public $reportingCode;

    /** @var string Reference number assigned by the sender to relate a transaction set to a master transaction. Use the MasterLinkNumber to identify the group and the LinkSequenceNumber to identify individual transaction sets within the group */
    public $masterLinkNumber;

    /** @var int */
    public $linkSequenceNumber;

    /** @var int Number of pallets shipped */
    public $quantityOfPalletsReceived;

    /** @var int Number of pallets returned or exchanged from shipment */
    public $quantityOfPalletsReturned;

    /** @var float */
    public $quantityContested;

    /** @var string Code specifying the item's receiving condition */
    public $receivingConditionCode;

    /** @var string Code identifying loading or unloading a shipment */
    public $unitLoadOptionCode;

    /** @var string Code indicating physical location of product at the time temperature was measured */
    public $temperatureLocationCode;

    /** @var string */
    public $temperatureUOM;

    /** @var float */
    public $temperature;

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
        $properties->warehouseReceiptId = Schema::string();
        $properties->warehouseReceiptId->description = "Identification number assigned to the shipment by the agent";
        $ownerSchema->addPropertyMapping('WarehouseReceiptId', self::names()->warehouseReceiptId);
        $properties->shipmentIdentification = Schema::string();
        $properties->shipmentIdentification->description = "Identification number assigned to the shipment by the shipper that uniquely identifies the shipment from origin to ultimate destination and is not subject to modification";
        $ownerSchema->addPropertyMapping('ShipmentIdentification', self::names()->shipmentIdentification);
        $properties->depositorOrderNumber = Schema::string();
        $properties->depositorOrderNumber->description = "Identifying number for a warehouse shipping order assigned by the depositor";
        $ownerSchema->addPropertyMapping('DepositorOrderNumber', self::names()->depositorOrderNumber);
        $properties->shipmentDate = Schema::string();
        $properties->shipmentDate->description = "Date the shipment left the ship from location";
        $properties->shipmentDate->format = "date";
        $ownerSchema->addPropertyMapping('ShipmentDate', self::names()->shipmentDate);
        $properties->reportingCode = Schema::string();
        $properties->reportingCode->description = "Code specifying the basis used when reporting shipment information";
        $ownerSchema->addPropertyMapping('ReportingCode', self::names()->reportingCode);
        $properties->masterLinkNumber = Schema::string();
        $properties->masterLinkNumber->description = "Reference number assigned by the sender to relate a transaction set to a master transaction. Use the MasterLinkNumber to identify the group and the LinkSequenceNumber to identify individual transaction sets within the group";
        $ownerSchema->addPropertyMapping('MasterLinkNumber', self::names()->masterLinkNumber);
        $properties->linkSequenceNumber = Schema::integer();
        $ownerSchema->addPropertyMapping('LinkSequenceNumber', self::names()->linkSequenceNumber);
        $properties->quantityOfPalletsReceived = Schema::integer();
        $properties->quantityOfPalletsReceived->description = "Number of pallets shipped";
        $ownerSchema->addPropertyMapping('QuantityOfPalletsReceived', self::names()->quantityOfPalletsReceived);
        $properties->quantityOfPalletsReturned = Schema::integer();
        $properties->quantityOfPalletsReturned->description = "Number of pallets returned or exchanged from shipment";
        $ownerSchema->addPropertyMapping('QuantityOfPalletsReturned', self::names()->quantityOfPalletsReturned);
        $properties->quantityContested = Schema::number();
        $ownerSchema->addPropertyMapping('QuantityContested', self::names()->quantityContested);
        $properties->receivingConditionCode = Schema::string();
        $properties->receivingConditionCode->description = "Code specifying the item's receiving condition";
        $ownerSchema->addPropertyMapping('ReceivingConditionCode', self::names()->receivingConditionCode);
        $properties->unitLoadOptionCode = Schema::string();
        $properties->unitLoadOptionCode->description = "Code identifying loading or unloading a shipment";
        $ownerSchema->addPropertyMapping('UnitLoadOptionCode', self::names()->unitLoadOptionCode);
        $properties->temperatureLocationCode = Schema::string();
        $properties->temperatureLocationCode->description = "Code indicating physical location of product at the time temperature was measured";
        $ownerSchema->addPropertyMapping('TemperatureLocationCode', self::names()->temperatureLocationCode);
        $properties->temperatureUOM = Schema::string();
        $ownerSchema->addPropertyMapping('TemperatureUOM', self::names()->temperatureUOM);
        $properties->temperature = Schema::number();
        $ownerSchema->addPropertyMapping('Temperature', self::names()->temperature);
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
            'WarehouseReceiptId',
        );
    }
}