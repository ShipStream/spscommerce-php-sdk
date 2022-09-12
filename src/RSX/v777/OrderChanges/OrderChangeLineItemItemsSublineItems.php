<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document subline elements
 */
class OrderChangeLineItemItemsSublineItems extends ClassStructure
{
    /** @var OrderChangeLineItemItemsSublineItemsSublineItemDetail Contains the commonly used fields in the subline level of the transaction */
    public $sublineItemDetail;

    /** @var OrderChangeLineItemItemsSublineItemsDatesItems[]|array */
    public $dates;

    /** @var OrderChangeLineItemItemsSublineItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var OrderChangeLineItemItemsSublineItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var OrderChangeLineItemItemsSublineItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var OrderChangeLineItemItemsSublineItemsReferencesItems[]|array */
    public $references;

    /** @var OrderChangeLineItemItemsSublineItemsNotesItems[]|array */
    public $notes;

    /** @var OrderChangeLineItemItemsSublineItemsFloorReadyItems[]|array */
    public $floorReady;

    /** @var OrderChangeLineItemItemsSublineItemsTaxesItems[]|array */
    public $taxes;

    /** @var OrderChangeLineItemItemsSublineItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderChangeLineItemItemsSublineItemsAddressItems[]|array */
    public $address;

    /** @var OrderChangeLineItemItemsSublineItemsCommodityItems[]|array */
    public $commodity;

    /** @var OrderChangeLineItemItemsSublineItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sublineItemDetail = OrderChangeLineItemItemsSublineItemsSublineItemDetail::schema();
        $ownerSchema->addPropertyMapping('SublineItemDetail', self::names()->sublineItemDetail);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderChangeLineItemItemsSublineItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = OrderChangeLineItemItemsSublineItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = OrderChangeLineItemItemsSublineItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = OrderChangeLineItemItemsSublineItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = OrderChangeLineItemItemsSublineItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderChangeLineItemItemsSublineItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->floorReady = Schema::arr();
        $properties->floorReady->items = OrderChangeLineItemItemsSublineItemsFloorReadyItems::schema();
        $ownerSchema->addPropertyMapping('FloorReady', self::names()->floorReady);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderChangeLineItemItemsSublineItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderChangeLineItemItemsSublineItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->address = Schema::arr();
        $properties->address->items = OrderChangeLineItemItemsSublineItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderChangeLineItemItemsSublineItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderChangeLineItemItemsSublineItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document subline elements";
        $ownerSchema->required = array(
        );
    }
}