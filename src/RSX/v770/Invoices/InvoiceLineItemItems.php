<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Invoices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class InvoiceLineItemItems extends ClassStructure
{
    /** @var InvoiceLineItemItemsInvoiceLine */
    public $invoiceLine;

    /** @var InvoiceLineItemItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var InvoiceLineItemItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var InvoiceLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var InvoiceLineItemItemsMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var InvoiceLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var InvoiceLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var InvoiceLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var InvoiceLineItemItemsCommodityItems[]|array */
    public $commodity;

    /** @var InvoiceLineItemItemsDatesItems[]|array */
    public $dates;

    /** @var InvoiceLineItemItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var InvoiceLineItemItemsSublineItems[]|array */
    public $subline;

    /** @var InvoiceLineItemItemsAddressItems[]|array */
    public $address;

    /** @var InvoiceLineItemItemsQuantitiesSchedulesLocationsItems[]|array */
    public $quantitiesSchedulesLocations;

    /** @var InvoiceLineItemItemsTaxesItems[]|array */
    public $taxes;

    /** @var InvoiceLineItemItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var InvoiceLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->invoiceLine = InvoiceLineItemItemsInvoiceLine::schema();
        $ownerSchema->addPropertyMapping('InvoiceLine', self::names()->invoiceLine);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = InvoiceLineItemItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = InvoiceLineItemItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = InvoiceLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = InvoiceLineItemItemsMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = InvoiceLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = InvoiceLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = InvoiceLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = InvoiceLineItemItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->dates = Schema::arr();
        $properties->dates->items = InvoiceLineItemItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = InvoiceLineItemItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->subline = Schema::arr();
        $properties->subline->items = InvoiceLineItemItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->address = Schema::arr();
        $properties->address->items = InvoiceLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = InvoiceLineItemItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = InvoiceLineItemItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = InvoiceLineItemItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = InvoiceLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}