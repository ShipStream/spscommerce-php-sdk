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
 * Contains the commonly used fields in the line item level of the transaction
 */
class CarrierStatusMessageStatusDetailsItemsStatusLine extends ClassStructure
{
    const D = 'D';

    const O = 'O';

    const P = 'P';

    /** @var string For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction. */
    public $lineSequenceNumber;

    /** @var string Serial Shipping Container Code[SSCC] and Application Identifier[00] indicates the shipment or parts of shipment. This field includes both the SSCC[18 digits] and the Application Identifier[2 digits], which should be 20 digits in length */
    public $shippingSerialID;

    /** @var string Carrier-Assigned Package ID indicating the shipment or parts of shipment */
    public $carrierPackageID;

    /** @var string Code indicating the condition of the shipment */
    public $ladingExceptionCode;

    /** @var int Number of objects in a load which are packed in a uniform manner. */
    public $unitizedQty;

    /** @var int Number of objects in a load which are not packed in a uniform manner. */
    public $nonUnitizedQty;

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
        $properties->unitizedQty = Schema::integer();
        $properties->unitizedQty->description = "Number of objects in a load which are packed in a uniform manner.";
        $ownerSchema->addPropertyMapping('UnitizedQty', self::names()->unitizedQty);
        $properties->nonUnitizedQty = Schema::integer();
        $properties->nonUnitizedQty->description = "Number of objects in a load which are not packed in a uniform manner.";
        $ownerSchema->addPropertyMapping('NonUnitizedQty', self::names()->nonUnitizedQty);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the line item level of the transaction";
        $ownerSchema->required = array(
        );
    }
}