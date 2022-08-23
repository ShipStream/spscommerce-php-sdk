<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetails;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierFreightDetailHeaderStopDetailsItems extends ClassStructure
{
    /** @var CarrierFreightDetailHeaderStopDetailsItemsCarrierDetail Basic details regarding each stop */
    public $carrierDetail;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsAddressItems[]|array */
    public $address;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsDatesItems[]|array */
    public $dates;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsReferencesItems[]|array */
    public $references;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsNotesItems[]|array */
    public $notes;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsOrderIdentificationDetailsItems[]|array */
    public $orderIdentificationDetails;

    /** @var CarrierFreightDetailHeaderStopDetailsItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->carrierDetail = CarrierFreightDetailHeaderStopDetailsItemsCarrierDetail::schema();
        $ownerSchema->addPropertyMapping('CarrierDetail', self::names()->carrierDetail);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierFreightDetailHeaderStopDetailsItemsQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = CarrierFreightDetailHeaderStopDetailsItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->address = Schema::arr();
        $properties->address->items = CarrierFreightDetailHeaderStopDetailsItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = CarrierFreightDetailHeaderStopDetailsItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = CarrierFreightDetailHeaderStopDetailsItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->dates = Schema::arr();
        $properties->dates->items = CarrierFreightDetailHeaderStopDetailsItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierFreightDetailHeaderStopDetailsItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierFreightDetailHeaderStopDetailsItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->orderIdentificationDetails = Schema::arr();
        $properties->orderIdentificationDetails->items = CarrierFreightDetailHeaderStopDetailsItemsOrderIdentificationDetailsItems::schema();
        $ownerSchema->addPropertyMapping('OrderIdentificationDetails', self::names()->orderIdentificationDetails);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = CarrierFreightDetailHeaderStopDetailsItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}