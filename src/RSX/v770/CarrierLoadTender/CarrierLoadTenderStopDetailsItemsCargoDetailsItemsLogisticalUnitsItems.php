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
 * Information regarding the cartons, pallets, containers, etc. at each stop
 */
class CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItems extends ClassStructure
{
    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsLogisticalUnitDetail Basic details regarding a logistical unit */
    public $logisticalUnitDetail;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsCommodityItems[]|array */
    public $commodity;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsReferencesItems[]|array */
    public $references;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsNotesItems[]|array */
    public $notes;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsDatesItems[]|array */
    public $dates;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsContactsItems[]|array */
    public $contacts;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsHazardousInformationItems[]|array */
    public $hazardousInformation;

    /** @var CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->logisticalUnitDetail = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsLogisticalUnitDetail::schema();
        $ownerSchema->addPropertyMapping('LogisticalUnitDetail', self::names()->logisticalUnitDetail);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->dates = Schema::arr();
        $properties->dates->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->hazardousInformation = Schema::arr();
        $properties->hazardousInformation->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsHazardousInformationItems::schema();
        $ownerSchema->addPropertyMapping('HazardousInformation', self::names()->hazardousInformation);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = CarrierLoadTenderStopDetailsItemsCargoDetailsItemsLogisticalUnitsItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Information regarding the cartons, pallets, containers, etc. at each stop";
        $ownerSchema->required = array(
        );
    }
}