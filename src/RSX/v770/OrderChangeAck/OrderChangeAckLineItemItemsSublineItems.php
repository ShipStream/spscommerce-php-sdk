<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChangeAck;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeAckLineItemItemsSublineItems extends ClassStructure
{
    /** @var OrderChangeAckLineItemItemsSublineItemsSublineItemDetail */
    public $sublineItemDetail;

    /** @var OrderChangeAckLineItemItemsSublineItemsDatesItems[]|array */
    public $dates;

    /** @var OrderChangeAckLineItemItemsSublineItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var OrderChangeAckLineItemItemsSublineItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var OrderChangeAckLineItemItemsSublineItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var OrderChangeAckLineItemItemsSublineItemsReferencesItems[]|array */
    public $references;

    /** @var OrderChangeAckLineItemItemsSublineItemsNotesItems[]|array */
    public $notes;

    /** @var OrderChangeAckLineItemItemsSublineItemsTaxesItems[]|array */
    public $taxes;

    /** @var OrderChangeAckLineItemItemsSublineItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderChangeAckLineItemItemsSublineItemsAddressItems[]|array */
    public $address;

    /** @var OrderChangeAckLineItemItemsSublineItemsCommodityItems[]|array */
    public $commodity;

    /** @var OrderChangeAckLineItemItemsSublineItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sublineItemDetail = OrderChangeAckLineItemItemsSublineItemsSublineItemDetail::schema();
        $ownerSchema->addPropertyMapping('SublineItemDetail', self::names()->sublineItemDetail);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderChangeAckLineItemItemsSublineItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = OrderChangeAckLineItemItemsSublineItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = OrderChangeAckLineItemItemsSublineItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = OrderChangeAckLineItemItemsSublineItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = OrderChangeAckLineItemItemsSublineItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderChangeAckLineItemItemsSublineItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderChangeAckLineItemItemsSublineItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderChangeAckLineItemItemsSublineItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->address = Schema::arr();
        $properties->address->items = OrderChangeAckLineItemItemsSublineItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderChangeAckLineItemItemsSublineItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderChangeAckLineItemItemsSublineItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}