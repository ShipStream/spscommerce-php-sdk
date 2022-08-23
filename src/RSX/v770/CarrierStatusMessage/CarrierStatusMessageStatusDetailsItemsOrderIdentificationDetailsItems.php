<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierStatusMessage;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Used to outline orders and store locations included in shipment
 */
class CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItems extends ClassStructure
{
    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsOrderDetail Identifiers for orders that make up each stop */
    public $orderDetail;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItems[]|array */
    public $packageDetail;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsQuantityAndWeight This group contains the quantity of your PackingMedium and other related values such as weight and volume */
    public $quantityAndWeight;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsQuantitiesSchedulesLocationsItems[]|array */
    public $quantitiesSchedulesLocations;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderDetail = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsOrderDetail::schema();
        $ownerSchema->addPropertyMapping('OrderDetail', self::names()->orderDetail);
        $properties->packageDetail = Schema::arr();
        $properties->packageDetail->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsPackageDetailItems::schema();
        $ownerSchema->addPropertyMapping('PackageDetail', self::names()->packageDetail);
        $properties->quantityAndWeight = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsQuantityAndWeight::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Used to outline orders and store locations included in shipment";
        $ownerSchema->required = array(
        );
    }
}