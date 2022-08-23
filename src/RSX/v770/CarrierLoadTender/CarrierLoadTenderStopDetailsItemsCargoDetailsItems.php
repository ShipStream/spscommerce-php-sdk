<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTender;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Information about orders, cartons, pallets, etc. that make up the stop. This can be used to relay information about orders at a stop, units within an order at a stop, or units at a stop
 */
class CarrierLoadTenderStopDetailsItemsCargoDetailsItems extends ClassStructure
{
    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsOrderDetail Identifiers for orders that make up each stop */
    public $orderDetail;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLadingDetailsItems[]|array */
    public $ladingDetails;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsReferencesItems[]|array */
    public $references;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsNotesItems[]|array */
    public $notes;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsContactsItems[]|array */
    public $contacts;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsDatesItems[]|array */
    public $dates;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItems[]|array */
    public $logisticalUnits;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderDetail = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsOrderDetail::schema();
        $ownerSchema->addPropertyMapping('OrderDetail', self::names()->orderDetail);
        $properties->ladingDetails = Schema::arr();
        $properties->ladingDetails->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLadingDetailsItems::schema();
        $ownerSchema->addPropertyMapping('LadingDetails', self::names()->ladingDetails);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->dates = Schema::arr();
        $properties->dates->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->logisticalUnits = Schema::arr();
        $properties->logisticalUnits->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItems::schema();
        $ownerSchema->addPropertyMapping('LogisticalUnits', self::names()->logisticalUnits);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Information about orders, cartons, pallets, etc. that make up the stop. This can be used to relay information about orders at a stop, units within an order at a stop, or units at a stop";
        $ownerSchema->required = array(
        );
    }
}