<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetail;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Basic details regarding each stop
 */
class CarrierFreightDetailHeaderStopDetailsItemsCarrierDetail extends ClassStructure
{
    /** @var string Number assigned to a specific loading or unloading point that provides context to the sequence of stopping points */
    public $stopSequenceNumber;

    /** @var string Indicates the action needed at the specified stop */
    public $stopReasonCode;

    /** @var float Quantity that has already or is scheduled to be shipped/delivered */
    public $shipQty;

    /** @var string Unit of measure used with the ShipQty */
    public $shipQtyUOM;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string Official code assigned to a location by a governing body, such as the National Motor Freight Traffic Association [NMFTA] or Canadian Transportation Agency ]CTA], used for ratemaking purposes */
    public $standardPointLocationCode;

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
        $properties->stopSequenceNumber = Schema::string();
        $properties->stopSequenceNumber->description = "Number assigned to a specific loading or unloading point that provides context to the sequence of stopping points";
        $ownerSchema->addPropertyMapping('StopSequenceNumber', self::names()->stopSequenceNumber);
        $properties->stopReasonCode = Schema::string();
        $properties->stopReasonCode->description = "Indicates the action needed at the specified stop";
        $ownerSchema->addPropertyMapping('StopReasonCode', self::names()->stopReasonCode);
        $properties->shipQty = Schema::number();
        $properties->shipQty->description = "Quantity that has already or is scheduled to be shipped/delivered";
        $ownerSchema->addPropertyMapping('ShipQty', self::names()->shipQty);
        $properties->shipQtyUOM = Schema::string();
        $properties->shipQtyUOM->description = "Unit of measure used with the ShipQty";
        $ownerSchema->addPropertyMapping('ShipQtyUOM', self::names()->shipQtyUOM);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->standardPointLocationCode = Schema::string();
        $properties->standardPointLocationCode->description = "Official code assigned to a location by a governing body, such as the National Motor Freight Traffic Association [NMFTA] or Canadian Transportation Agency ]CTA], used for ratemaking purposes";
        $ownerSchema->addPropertyMapping('StandardPointLocationCode', self::names()->standardPointLocationCode);
        $properties->unitizedQty = Schema::integer();
        $properties->unitizedQty->description = "Number of objects in a load which are packed in a uniform manner.";
        $ownerSchema->addPropertyMapping('UnitizedQty', self::names()->unitizedQty);
        $properties->nonUnitizedQty = Schema::integer();
        $properties->nonUnitizedQty->description = "Number of objects in a load which are not packed in a uniform manner.";
        $ownerSchema->addPropertyMapping('NonUnitizedQty', self::names()->nonUnitizedQty);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Basic details regarding each stop";
        $ownerSchema->required = array(
        );
    }
}