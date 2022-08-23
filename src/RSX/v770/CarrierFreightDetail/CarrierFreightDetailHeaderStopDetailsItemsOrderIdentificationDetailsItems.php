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
 * Used to outline orders and store locations included in shipment
 */
class CarrierFreightDetailHeaderStopDetailsItemsOrderIdentificationDetailsItems extends ClassStructure
{
    /** @var CarrierFreightDetailHeaderStopDetailsItemsOrderIdentificationDetailsItemsOrderDetail Identifiers for orders that make up each stop */
    public $orderDetail;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsOrderIdentificationDetailsItemsQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsOrderIdentificationDetailsItemsQuantitiesSchedulesLocationsItems[]|array */
    public $quantitiesSchedulesLocations;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderDetail = CarrierFreightDetailHeaderStopDetailsItemsOrderIdentificationDetailsItemsOrderDetail::schema();
        $ownerSchema->addPropertyMapping('OrderDetail', self::names()->orderDetail);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierFreightDetailHeaderStopDetailsItemsOrderIdentificationDetailsItemsQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = CarrierFreightDetailHeaderStopDetailsItemsOrderIdentificationDetailsItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Used to outline orders and store locations included in shipment";
        $ownerSchema->required = array(
        );
    }
}