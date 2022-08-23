<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsPackLevelItemsPackLevelItems extends ClassStructure
{
    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsPack */
    public $pack;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsPalletInformationItems[]|array */
    public $palletInformation;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsDatesItems[]|array */
    public $dates;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsReferencesItems[]|array */
    public $references;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsNotesItems[]|array */
    public $notes;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsAddressItems[]|array */
    public $address;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsTaxesItems[]|array */
    public $taxes;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsPackagingItems[]|array */
    public $packaging;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItems[]|array */
    public $itemLevel;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->pack = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsPack::schema();
        $ownerSchema->addPropertyMapping('Pack', self::names()->pack);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->palletInformation = Schema::arr();
        $properties->palletInformation->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsPalletInformationItems::schema();
        $ownerSchema->addPropertyMapping('PalletInformation', self::names()->palletInformation);
        $properties->dates = Schema::arr();
        $properties->dates->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->address = Schema::arr();
        $properties->address->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->packaging = Schema::arr();
        $properties->packaging->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsPackagingItems::schema();
        $ownerSchema->addPropertyMapping('Packaging', self::names()->packaging);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $properties->itemLevel = Schema::arr();
        $properties->itemLevel->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItems::schema();
        $ownerSchema->addPropertyMapping('ItemLevel', self::names()->itemLevel);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}