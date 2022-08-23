<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Orders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderLineItemItemsSublineItems extends ClassStructure
{
    /** @var OrderLineItemItemsSublineItemsSublineItemDetail */
    public $sublineItemDetail;

    /** @var OrderLineItemItemsSublineItemsDatesItems[]|array */
    public $dates;

    /** @var OrderLineItemItemsSublineItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var OrderLineItemItemsSublineItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var OrderLineItemItemsSublineItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var OrderLineItemItemsSublineItemsReferencesItems[]|array */
    public $references;

    /** @var OrderLineItemItemsSublineItemsNotesItems[]|array */
    public $notes;

    /** @var OrderLineItemItemsSublineItemsFloorReadyItems[]|array */
    public $floorReady;

    /** @var OrderLineItemItemsSublineItemsTaxesItems[]|array */
    public $taxes;

    /** @var OrderLineItemItemsSublineItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderLineItemItemsSublineItemsAddressItems[]|array */
    public $address;

    /** @var OrderLineItemItemsSublineItemsCommodityItems[]|array */
    public $commodity;

    /** @var OrderLineItemItemsSublineItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sublineItemDetail = OrderLineItemItemsSublineItemsSublineItemDetail::schema();
        $ownerSchema->addPropertyMapping('SublineItemDetail', self::names()->sublineItemDetail);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderLineItemItemsSublineItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = OrderLineItemItemsSublineItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = OrderLineItemItemsSublineItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = OrderLineItemItemsSublineItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = OrderLineItemItemsSublineItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderLineItemItemsSublineItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->floorReady = Schema::arr();
        $properties->floorReady->items = OrderLineItemItemsSublineItemsFloorReadyItems::schema();
        $ownerSchema->addPropertyMapping('FloorReady', self::names()->floorReady);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderLineItemItemsSublineItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderLineItemItemsSublineItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->address = Schema::arr();
        $properties->address->items = OrderLineItemItemsSublineItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderLineItemItemsSublineItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderLineItemItemsSublineItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}