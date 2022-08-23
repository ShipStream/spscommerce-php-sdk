<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderAcks;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderAckLineItemItemsSublineItems extends ClassStructure
{
    /** @var OrderAckLineItemItemsSublineItemsSublineItemDetail */
    public $sublineItemDetail;

    /** @var OrderAckLineItemItemsSublineItemsDatesItems[]|array */
    public $dates;

    /** @var OrderAckLineItemItemsSublineItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var OrderAckLineItemItemsSublineItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var OrderAckLineItemItemsSublineItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var OrderAckLineItemItemsSublineItemsReferencesItems[]|array */
    public $references;

    /** @var OrderAckLineItemItemsSublineItemsNotesItems[]|array */
    public $notes;

    /** @var OrderAckLineItemItemsSublineItemsTaxesItems[]|array */
    public $taxes;

    /** @var OrderAckLineItemItemsSublineItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderAckLineItemItemsSublineItemsAddressItems[]|array */
    public $address;

    /** @var OrderAckLineItemItemsSublineItemsCommodityItems[]|array */
    public $commodity;

    /** @var OrderAckLineItemItemsSublineItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sublineItemDetail = OrderAckLineItemItemsSublineItemsSublineItemDetail::schema();
        $ownerSchema->addPropertyMapping('SublineItemDetail', self::names()->sublineItemDetail);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderAckLineItemItemsSublineItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = OrderAckLineItemItemsSublineItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = OrderAckLineItemItemsSublineItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = OrderAckLineItemItemsSublineItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = OrderAckLineItemItemsSublineItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderAckLineItemItemsSublineItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderAckLineItemItemsSublineItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderAckLineItemItemsSublineItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->address = Schema::arr();
        $properties->address->items = OrderAckLineItemItemsSublineItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderAckLineItemItemsSublineItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderAckLineItemItemsSublineItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}