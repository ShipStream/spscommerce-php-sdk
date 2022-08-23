<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\ItemRegistry;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ItemRegistryStructureItemsLineItemItems extends ClassStructure
{
    /** @var ItemRegistryStructureItemsLineItemItemsInventoryLine */
    public $inventoryLine;

    /** @var ItemRegistryStructureItemsLineItemItemsMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var ItemRegistryStructureItemsLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var ItemRegistryStructureItemsLineItemItemsPalletInformationItems[]|array */
    public $palletInformation;

    /** @var ItemRegistryStructureItemsLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var ItemRegistryStructureItemsLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var ItemRegistryStructureItemsLineItemItemsFloorReadyItems[]|array */
    public $floorReady;

    /** @var ItemRegistryStructureItemsLineItemItemsDatesItems[]|array */
    public $dates;

    /** @var ItemRegistryStructureItemsLineItemItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var ItemRegistryStructureItemsLineItemItemsPriceDetailsItems[]|array */
    public $priceDetails;

    /** @var ItemRegistryStructureItemsLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var ItemRegistryStructureItemsLineItemItemsAddressItems[]|array */
    public $address;

    /** @var ItemRegistryStructureItemsLineItemItemsSublineItems[]|array */
    public $subline;

    /** @var ItemRegistryStructureItemsLineItemItemsQuantitiesSchedulesLocationsItems[]|array */
    public $quantitiesSchedulesLocations;

    /** @var ItemRegistryStructureItemsLineItemItemsTaxesItems[]|array */
    public $taxes;

    /** @var ItemRegistryStructureItemsLineItemItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ItemRegistryStructureItemsLineItemItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ItemRegistryStructureItemsLineItemItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var ItemRegistryStructureItemsLineItemItemsHazardousInformationItems[]|array */
    public $hazardousInformation;

    /** @var ItemRegistryStructureItemsLineItemItemsCommodityItems[]|array */
    public $commodity;

    /** @var ItemRegistryStructureItemsLineItemItemsSpecialLabelingItems[]|array */
    public $specialLabeling;

    /** @var ItemRegistryStructureItemsLineItemItemsFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var ItemRegistryStructureItemsLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->inventoryLine = ItemRegistryStructureItemsLineItemItemsInventoryLine::schema();
        $ownerSchema->addPropertyMapping('InventoryLine', self::names()->inventoryLine);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = ItemRegistryStructureItemsLineItemItemsMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = ItemRegistryStructureItemsLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->palletInformation = Schema::arr();
        $properties->palletInformation->items = ItemRegistryStructureItemsLineItemItemsPalletInformationItems::schema();
        $ownerSchema->addPropertyMapping('PalletInformation', self::names()->palletInformation);
        $properties->references = Schema::arr();
        $properties->references->items = ItemRegistryStructureItemsLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ItemRegistryStructureItemsLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->floorReady = Schema::arr();
        $properties->floorReady->items = ItemRegistryStructureItemsLineItemItemsFloorReadyItems::schema();
        $ownerSchema->addPropertyMapping('FloorReady', self::names()->floorReady);
        $properties->dates = Schema::arr();
        $properties->dates->items = ItemRegistryStructureItemsLineItemItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = ItemRegistryStructureItemsLineItemItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceDetails = Schema::arr();
        $properties->priceDetails->items = ItemRegistryStructureItemsLineItemItemsPriceDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PriceDetails', self::names()->priceDetails);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = ItemRegistryStructureItemsLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->address = Schema::arr();
        $properties->address->items = ItemRegistryStructureItemsLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->subline = Schema::arr();
        $properties->subline->items = ItemRegistryStructureItemsLineItemItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = ItemRegistryStructureItemsLineItemItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ItemRegistryStructureItemsLineItemItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ItemRegistryStructureItemsLineItemItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ItemRegistryStructureItemsLineItemItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = ItemRegistryStructureItemsLineItemItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->hazardousInformation = Schema::arr();
        $properties->hazardousInformation->items = ItemRegistryStructureItemsLineItemItemsHazardousInformationItems::schema();
        $ownerSchema->addPropertyMapping('HazardousInformation', self::names()->hazardousInformation);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = ItemRegistryStructureItemsLineItemItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->specialLabeling = Schema::arr();
        $properties->specialLabeling->items = ItemRegistryStructureItemsLineItemItemsSpecialLabelingItems::schema();
        $ownerSchema->addPropertyMapping('SpecialLabeling', self::names()->specialLabeling);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = ItemRegistryStructureItemsLineItemItemsFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ItemRegistryStructureItemsLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}