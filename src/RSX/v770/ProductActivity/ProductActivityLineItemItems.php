<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\ProductActivity;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ProductActivityLineItemItems extends ClassStructure
{
    /** @var ProductActivityLineItemItemsReportLineItem */
    public $reportLineItem;

    /** @var ProductActivityLineItemItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var ProductActivityLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var ProductActivityLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var ProductActivityLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var ProductActivityLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var ProductActivityLineItemItemsAddressItems[]|array */
    public $address;

    /** @var ProductActivityLineItemItemsProductActivityReportingItems[]|array */
    public $productActivityReporting;

    /** @var ProductActivityLineItemItemsTaxesItems[]|array */
    public $taxes;

    /** @var ProductActivityLineItemItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ProductActivityLineItemItemsMonetaryAmountsItems[]|array */
    public $monetaryAmounts;

    /** @var ProductActivityLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->reportLineItem = ProductActivityLineItemItemsReportLineItem::schema();
        $ownerSchema->addPropertyMapping('ReportLineItem', self::names()->reportLineItem);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = ProductActivityLineItemItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = ProductActivityLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = ProductActivityLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = ProductActivityLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ProductActivityLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->address = Schema::arr();
        $properties->address->items = ProductActivityLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->productActivityReporting = Schema::arr();
        $properties->productActivityReporting->items = ProductActivityLineItemItemsProductActivityReportingItems::schema();
        $ownerSchema->addPropertyMapping('ProductActivityReporting', self::names()->productActivityReporting);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ProductActivityLineItemItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ProductActivityLineItemItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->monetaryAmounts = Schema::arr();
        $properties->monetaryAmounts->items = ProductActivityLineItemItemsMonetaryAmountsItems::schema();
        $ownerSchema->addPropertyMapping('MonetaryAmounts', self::names()->monetaryAmounts);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ProductActivityLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}