<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierLoadTenders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Provides carrier, shipping, and route details
 */
class CarrierLoadTenderStopDetailsItems extends ClassStructure
{
    /** @var CarrierLoadTenderStopDetailsItemsCarrierDetail Basic details regarding each stop */
    public $carrierDetail;

    /** @var CarrierLoadTenderStopDetailsItemsQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierLoadTenderStopDetailsItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var CarrierLoadTenderStopDetailsItemsAddressItems[]|array */
    public $address;

    /** @var CarrierLoadTenderStopDetailsItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var CarrierLoadTenderStopDetailsItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var CarrierLoadTenderStopDetailsItemsHazardousInformationItems[]|array */
    public $hazardousInformation;

    /** @var CarrierLoadTenderStopDetailsItemsFreightRatesItems[]|array */
    public $freightRates;

    /** @var CarrierLoadTenderStopDetailsItemsDatesItems[]|array */
    public $dates;

    /** @var CarrierLoadTenderStopDetailsItemsReferencesItems[]|array */
    public $references;

    /** @var CarrierLoadTenderStopDetailsItemsNotesItems[]|array */
    public $notes;

    /** @var CarrierLoadTenderStopDetailsItemsContactsItems[]|array */
    public $contacts;

    /** @var CarrierLoadTenderStopDetailsItemsLadingDetailsItems[]|array */
    public $ladingDetails;

    /** @var CarrierLoadTenderStopDetailsItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var CarrierLoadTenderStopDetailsItemsTaxesItems[]|array */
    public $taxes;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItems[]|array */
    public $cargoDetails;

    /** @var CarrierLoadTenderStopDetailsItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->carrierDetail = CarrierLoadTenderStopDetailsItemsCarrierDetail::schema();
        $ownerSchema->addPropertyMapping('CarrierDetail', self::names()->carrierDetail);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierLoadTenderStopDetailsItemsQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = CarrierLoadTenderStopDetailsItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->address = Schema::arr();
        $properties->address->items = CarrierLoadTenderStopDetailsItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = CarrierLoadTenderStopDetailsItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = CarrierLoadTenderStopDetailsItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->hazardousInformation = Schema::arr();
        $properties->hazardousInformation->items = CarrierLoadTenderStopDetailsItemsHazardousInformationItems::schema();
        $ownerSchema->addPropertyMapping('HazardousInformation', self::names()->hazardousInformation);
        $properties->freightRates = Schema::arr();
        $properties->freightRates->items = CarrierLoadTenderStopDetailsItemsFreightRatesItems::schema();
        $ownerSchema->addPropertyMapping('FreightRates', self::names()->freightRates);
        $properties->dates = Schema::arr();
        $properties->dates->items = CarrierLoadTenderStopDetailsItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierLoadTenderStopDetailsItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierLoadTenderStopDetailsItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = CarrierLoadTenderStopDetailsItemsContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->ladingDetails = Schema::arr();
        $properties->ladingDetails->items = CarrierLoadTenderStopDetailsItemsLadingDetailsItems::schema();
        $ownerSchema->addPropertyMapping('LadingDetails', self::names()->ladingDetails);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = CarrierLoadTenderStopDetailsItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = CarrierLoadTenderStopDetailsItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->cargoDetails = Schema::arr();
        $properties->cargoDetails->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItems::schema();
        $ownerSchema->addPropertyMapping('CargoDetails', self::names()->cargoDetails);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = CarrierLoadTenderStopDetailsItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides carrier, shipping, and route details";
        $ownerSchema->required = array(
        );
    }
}