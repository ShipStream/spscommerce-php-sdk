<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetail;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierFreightDetailInvoiceDetailsItems extends ClassStructure
{
    /** @var CarrierFreightDetailInvoiceDetailsItemsInvoiceLine */
    public $invoiceLine;

    /** @var CarrierFreightDetailInvoiceDetailsItemsFreightRatesItems[]|array */
    public $freightRates;

    /** @var CarrierFreightDetailInvoiceDetailsItemsQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierFreightDetailInvoiceDetailsItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var CarrierFreightDetailInvoiceDetailsItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var CarrierFreightDetailInvoiceDetailsItemsTaxesItems[]|array */
    public $taxes;

    /** @var CarrierFreightDetailInvoiceDetailsItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var CarrierFreightDetailInvoiceDetailsItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var CarrierFreightDetailInvoiceDetailsItemsHazardousInformationItems[]|array */
    public $hazardousInformation;

    /** @var CarrierFreightDetailInvoiceDetailsItemsMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var CarrierFreightDetailInvoiceDetailsItemsCommodityItems[]|array */
    public $commodity;

    /** @var CarrierFreightDetailInvoiceDetailsItemsReferencesItems[]|array */
    public $references;

    /** @var CarrierFreightDetailInvoiceDetailsItemsNotesItems[]|array */
    public $notes;

    /** @var CarrierFreightDetailInvoiceDetailsItemsTariffsItems[]|array */
    public $tariffs;

    /** @var CarrierFreightDetailInvoiceDetailsItemsAddressItems[]|array */
    public $address;

    /** @var CarrierFreightDetailInvoiceDetailsItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->invoiceLine = CarrierFreightDetailInvoiceDetailsItemsInvoiceLine::schema();
        $ownerSchema->addPropertyMapping('InvoiceLine', self::names()->invoiceLine);
        $properties->freightRates = Schema::arr();
        $properties->freightRates->items = CarrierFreightDetailInvoiceDetailsItemsFreightRatesItems::schema();
        $ownerSchema->addPropertyMapping('FreightRates', self::names()->freightRates);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierFreightDetailInvoiceDetailsItemsQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = CarrierFreightDetailInvoiceDetailsItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = CarrierFreightDetailInvoiceDetailsItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = CarrierFreightDetailInvoiceDetailsItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = CarrierFreightDetailInvoiceDetailsItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = CarrierFreightDetailInvoiceDetailsItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->hazardousInformation = Schema::arr();
        $properties->hazardousInformation->items = CarrierFreightDetailInvoiceDetailsItemsHazardousInformationItems::schema();
        $ownerSchema->addPropertyMapping('HazardousInformation', self::names()->hazardousInformation);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = CarrierFreightDetailInvoiceDetailsItemsMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = CarrierFreightDetailInvoiceDetailsItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierFreightDetailInvoiceDetailsItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierFreightDetailInvoiceDetailsItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->tariffs = Schema::arr();
        $properties->tariffs->items = CarrierFreightDetailInvoiceDetailsItemsTariffsItems::schema();
        $ownerSchema->addPropertyMapping('Tariffs', self::names()->tariffs);
        $properties->address = Schema::arr();
        $properties->address->items = CarrierFreightDetailInvoiceDetailsItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = CarrierFreightDetailInvoiceDetailsItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}