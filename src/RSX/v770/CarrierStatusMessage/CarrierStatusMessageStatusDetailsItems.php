<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierStatusMessage;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierStatusMessageStatusDetailsItems extends ClassStructure
{
    /** @var CarrierStatusMessageStatusDetailsItemsStatusLine */
    public $statusLine;

    /** @var CarrierStatusMessageStatusDetailsItemsShipmentStatusDetailsItems[]|array */
    public $shipmentStatusDetails;

    /** @var CarrierStatusMessageStatusDetailsItemsReferencesItems[]|array */
    public $references;

    /** @var CarrierStatusMessageStatusDetailsItemsNotesItems[]|array */
    public $notes;

    /** @var CarrierStatusMessageStatusDetailsItemsAddressItems[]|array */
    public $address;

    /** @var CarrierStatusMessageStatusDetailsItemsQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierStatusMessageStatusDetailsItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var CarrierStatusMessageStatusDetailsItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var CarrierStatusMessageStatusDetailsItemsMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItems[]|array */
    public $orderIdentificationDetails;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->statusLine = CarrierStatusMessageStatusDetailsItemsStatusLine::schema();
        $ownerSchema->addPropertyMapping('StatusLine', self::names()->statusLine);
        $properties->shipmentStatusDetails = Schema::arr();
        $properties->shipmentStatusDetails->items = CarrierStatusMessageStatusDetailsItemsShipmentStatusDetailsItems::schema();
        $ownerSchema->addPropertyMapping('ShipmentStatusDetails', self::names()->shipmentStatusDetails);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierStatusMessageStatusDetailsItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierStatusMessageStatusDetailsItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->address = Schema::arr();
        $properties->address->items = CarrierStatusMessageStatusDetailsItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierStatusMessageStatusDetailsItemsQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = CarrierStatusMessageStatusDetailsItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = CarrierStatusMessageStatusDetailsItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = CarrierStatusMessageStatusDetailsItemsMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->orderIdentificationDetails = Schema::arr();
        $properties->orderIdentificationDetails->items = CarrierStatusMessageStatusDetailsItemsOrderIdentificationDetailsItems::schema();
        $ownerSchema->addPropertyMapping('OrderIdentificationDetails', self::names()->orderIdentificationDetails);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}