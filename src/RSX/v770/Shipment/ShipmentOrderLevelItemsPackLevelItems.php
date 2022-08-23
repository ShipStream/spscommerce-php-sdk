<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * @method static ShipmentOrderLevelItemsPackLevelItems import($data, Context $options = null)
 */
class ShipmentOrderLevelItemsPackLevelItems extends ClassStructure
{
    /** @var ShipmentOrderLevelItemsPackLevelItemsPack */
    public $pack;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var ShipmentOrderLevelItemsPackLevelItemsMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPalletInformationItems[]|array */
    public $palletInformation;

    /** @var ShipmentOrderLevelItemsPackLevelItemsDatesItems[]|array */
    public $dates;

    /** @var ShipmentOrderLevelItemsPackLevelItemsReferencesItems[]|array */
    public $references;

    /** @var ShipmentOrderLevelItemsPackLevelItemsNotesItems[]|array */
    public $notes;

    /** @var ShipmentOrderLevelItemsPackLevelItemsAddressItems[]|array */
    public $address;

    /** @var ShipmentOrderLevelItemsPackLevelItemsTaxesItems[]|array */
    public $taxes;

    /** @var ShipmentOrderLevelItemsPackLevelItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ShipmentOrderLevelItemsPackLevelItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackagingItems[]|array */
    public $packaging;

    /** @var ShipmentOrderLevelItemsPackLevelItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /** @var ShipmentOrderLevelItemsPackLevelItemsItemLevelItems[]|array */
    public $itemLevel;

    /** @var ShipmentOrderLevelItemsPackLevelItemsPackLevelItems[]|array */
    public $packLevel;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->pack = ShipmentOrderLevelItemsPackLevelItemsPack::schema();
        $ownerSchema->addPropertyMapping('Pack', self::names()->pack);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = ShipmentOrderLevelItemsPackLevelItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = ShipmentOrderLevelItemsPackLevelItemsMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->palletInformation = Schema::arr();
        $properties->palletInformation->items = ShipmentOrderLevelItemsPackLevelItemsPalletInformationItems::schema();
        $ownerSchema->addPropertyMapping('PalletInformation', self::names()->palletInformation);
        $properties->dates = Schema::arr();
        $properties->dates->items = ShipmentOrderLevelItemsPackLevelItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = ShipmentOrderLevelItemsPackLevelItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ShipmentOrderLevelItemsPackLevelItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->address = Schema::arr();
        $properties->address->items = ShipmentOrderLevelItemsPackLevelItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ShipmentOrderLevelItemsPackLevelItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ShipmentOrderLevelItemsPackLevelItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ShipmentOrderLevelItemsPackLevelItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->packaging = Schema::arr();
        $properties->packaging->items = ShipmentOrderLevelItemsPackLevelItemsPackagingItems::schema();
        $ownerSchema->addPropertyMapping('Packaging', self::names()->packaging);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ShipmentOrderLevelItemsPackLevelItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $properties->itemLevel = Schema::arr();
        $properties->itemLevel->items = ShipmentOrderLevelItemsPackLevelItemsItemLevelItems::schema();
        $ownerSchema->addPropertyMapping('ItemLevel', self::names()->itemLevel);
        $properties->packLevel = Schema::arr();
        $properties->packLevel->items = ShipmentOrderLevelItemsPackLevelItemsPackLevelItems::schema();
        $ownerSchema->addPropertyMapping('PackLevel', self::names()->packLevel);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchemaOneOf0 = new Schema();
        $ownerSchemaOneOf0->required = array(
            'ItemLevel',
        );
        $ownerSchema->oneOf[0] = $ownerSchemaOneOf0;
        $ownerSchemaOneOf1 = new Schema();
        $ownerSchemaOneOf1->required = array(
            'PackLevel',
        );
        $ownerSchema->oneOf[1] = $ownerSchemaOneOf1;
        $ownerSchemaOneOf2 = new Schema();
        $ownerSchemaOneOf2->not = new Schema();
        $ownerSchemaOneOf2NotAnyOf0 = new Schema();
        $ownerSchemaOneOf2NotAnyOf0->required = array(
            'ItemLevel',
        );
        $ownerSchemaOneOf2->not->anyOf[0] = $ownerSchemaOneOf2NotAnyOf0;
        $ownerSchemaOneOf2NotAnyOf1 = new Schema();
        $ownerSchemaOneOf2NotAnyOf1->required = array(
            'PackLevel',
        );
        $ownerSchemaOneOf2->not->anyOf[1] = $ownerSchemaOneOf2NotAnyOf1;
        $ownerSchema->oneOf[2] = $ownerSchemaOneOf2;
        $ownerSchema->required = array(
        );
    }
}