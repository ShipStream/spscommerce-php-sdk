<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\WarehouseTransferReceiptAdvice;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseTransferReceiptAdviceHeaderCarrierInformationItems extends ClassStructure
{
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

    /** @var string */
    public $equipmentType;

    /** @var string */
    public $ownershipCode;

    /** @var string */
    public $routingSequenceCode;

    /** @var string The point of origin and point of direction */
    public $transitDirectionCode;

    /** @var string */
    public $transitTimeQual;

    /** @var float */
    public $transitTime;

    /** @var WarehouseTransferReceiptAdviceHeaderCarrierInformationItemsServiceLevelCodesItems[]|array */
    public $serviceLevelCodes;

    /** @var WarehouseTransferReceiptAdviceHeaderCarrierInformationItemsAddressItems[]|array */
    public $address;

    /** @var WarehouseTransferReceiptAdviceHeaderCarrierInformationItemsSealNumbersItems[]|array */
    public $sealNumbers;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->statusCode = Schema::string();
        $properties->statusCode->description = "Code indicating the status of an order or shipment or the disposition of any difference between the quantity ordered and the quantity shipped for a line item or transaction";
        $ownerSchema->addPropertyMapping('StatusCode', self::names()->statusCode);
        $properties->carrierTransMethodCode = Schema::string();
        $properties->carrierTransMethodCode->description = "Code specifying the method or type of transportation for the shipment";
        $ownerSchema->addPropertyMapping('CarrierTransMethodCode', self::names()->carrierTransMethodCode);
        $properties->carrierAlphaCode = Schema::string();
        $properties->carrierAlphaCode->description = "Standard Carrier Alpha Code[SCAC] - 2 to 4 digit alphabetic code assigned by the National Motor Freight Traffic Association identifying transportation companies";
        $ownerSchema->addPropertyMapping('CarrierAlphaCode', self::names()->carrierAlphaCode);
        $properties->carrierRouting = Schema::string();
        $properties->carrierRouting->description = "Free-form description of the routing/requested routing for shipment or the originating carrier's identity";
        $ownerSchema->addPropertyMapping('CarrierRouting', self::names()->carrierRouting);
        $properties->equipmentDescriptionCode = Schema::string();
        $properties->equipmentDescriptionCode->description = "Code identifying type of equipment used for shipment";
        $ownerSchema->addPropertyMapping('EquipmentDescriptionCode', self::names()->equipmentDescriptionCode);
        $properties->carrierEquipmentInitial = Schema::string();
        $properties->carrierEquipmentInitial->description = "Prefix or alphabetic part of an equipment unit's identifying number";
        $ownerSchema->addPropertyMapping('CarrierEquipmentInitial', self::names()->carrierEquipmentInitial);
        $properties->carrierEquipmentNumber = Schema::string();
        $properties->carrierEquipmentNumber->description = "Sequencing or serial part of an equipment unit's identifying number[Pure numeric form for equipment number is preferred]";
        $ownerSchema->addPropertyMapping('CarrierEquipmentNumber', self::names()->carrierEquipmentNumber);
        $properties->equipmentType = Schema::string();
        $ownerSchema->addPropertyMapping('EquipmentType', self::names()->equipmentType);
        $properties->ownershipCode = Schema::string();
        $ownerSchema->addPropertyMapping('OwnershipCode', self::names()->ownershipCode);
        $properties->routingSequenceCode = Schema::string();
        $ownerSchema->addPropertyMapping('RoutingSequenceCode', self::names()->routingSequenceCode);
        $properties->transitDirectionCode = Schema::string();
        $properties->transitDirectionCode->description = "The point of origin and point of direction";
        $ownerSchema->addPropertyMapping('TransitDirectionCode', self::names()->transitDirectionCode);
        $properties->transitTimeQual = Schema::string();
        $ownerSchema->addPropertyMapping('TransitTimeQual', self::names()->transitTimeQual);
        $properties->transitTime = Schema::number();
        $ownerSchema->addPropertyMapping('TransitTime', self::names()->transitTime);
        $properties->serviceLevelCodes = Schema::arr();
        $properties->serviceLevelCodes->items = WarehouseTransferReceiptAdviceHeaderCarrierInformationItemsServiceLevelCodesItems::schema();
        $ownerSchema->addPropertyMapping('ServiceLevelCodes', self::names()->serviceLevelCodes);
        $properties->address = Schema::arr();
        $properties->address->items = WarehouseTransferReceiptAdviceHeaderCarrierInformationItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->sealNumbers = Schema::arr();
        $properties->sealNumbers->items = WarehouseTransferReceiptAdviceHeaderCarrierInformationItemsSealNumbersItems::schema();
        $ownerSchema->addPropertyMapping('SealNumbers', self::names()->sealNumbers);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}