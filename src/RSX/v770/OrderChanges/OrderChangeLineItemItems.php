<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeLineItemItems extends ClassStructure
{
    /** @var OrderChangeLineItemItemsOrderLine */
    public $orderLine;

    /** @var OrderChangeLineItemItemsContactsItems[]|array */
    public $contacts;

    /** @var OrderChangeLineItemItemsDatesItems[]|array */
    public $dates;

    /** @var OrderChangeLineItemItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var OrderChangeLineItemItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var OrderChangeLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var OrderChangeLineItemItemsMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var OrderChangeLineItemItemsPaperworkItems[]|array */
    public $paperwork;

    /** @var OrderChangeLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var OrderChangeLineItemItemsPalletInformationItems[]|array */
    public $palletInformation;

    /** @var OrderChangeLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var OrderChangeLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var OrderChangeLineItemItemsFloorReadyItems[]|array */
    public $floorReady;

    /** @var OrderChangeLineItemItemsAddressItems[]|array */
    public $address;

    /** @var OrderChangeLineItemItemsSublineItems[]|array */
    public $subline;

    /** @var OrderChangeLineItemItemsQuantitiesSchedulesLocationsItems[]|array */
    public $quantitiesSchedulesLocations;

    /** @var OrderChangeLineItemItemsTaxesItems[]|array */
    public $taxes;

    /** @var OrderChangeLineItemItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderChangeLineItemItemsPaymentTermsItems[]|array */
    public $paymentTerms;

    /** @var OrderChangeLineItemItemsConditionOfSaleItems[]|array */
    public $conditionOfSale;

    /** @var OrderChangeLineItemItemsFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var OrderChangeLineItemItemsCommodityItems[]|array */
    public $commodity;

    /** @var OrderChangeLineItemItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var OrderChangeLineItemItemsMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var OrderChangeLineItemItemsRestrictionsOrConditionsItems[]|array */
    public $restrictionsOrConditions;

    /** @var OrderChangeLineItemItemsPackagingItems[]|array */
    public $packaging;

    /** @var OrderChangeLineItemItemsMonetaryAmountsItems[]|array */
    public $monetaryAmounts;

    /** @var OrderChangeLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderLine = OrderChangeLineItemItemsOrderLine::schema();
        $ownerSchema->addPropertyMapping('OrderLine', self::names()->orderLine);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = OrderChangeLineItemItemsContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderChangeLineItemItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = OrderChangeLineItemItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = OrderChangeLineItemItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = OrderChangeLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = OrderChangeLineItemItemsMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->paperwork = Schema::arr();
        $properties->paperwork->items = OrderChangeLineItemItemsPaperworkItems::schema();
        $ownerSchema->addPropertyMapping('Paperwork', self::names()->paperwork);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = OrderChangeLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->palletInformation = Schema::arr();
        $properties->palletInformation->items = OrderChangeLineItemItemsPalletInformationItems::schema();
        $ownerSchema->addPropertyMapping('PalletInformation', self::names()->palletInformation);
        $properties->references = Schema::arr();
        $properties->references->items = OrderChangeLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderChangeLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->floorReady = Schema::arr();
        $properties->floorReady->items = OrderChangeLineItemItemsFloorReadyItems::schema();
        $ownerSchema->addPropertyMapping('FloorReady', self::names()->floorReady);
        $properties->address = Schema::arr();
        $properties->address->items = OrderChangeLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->subline = Schema::arr();
        $properties->subline->items = OrderChangeLineItemItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = OrderChangeLineItemItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderChangeLineItemItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderChangeLineItemItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->paymentTerms = Schema::arr();
        $properties->paymentTerms->items = OrderChangeLineItemItemsPaymentTermsItems::schema();
        $ownerSchema->addPropertyMapping('PaymentTerms', self::names()->paymentTerms);
        $properties->conditionOfSale = Schema::arr();
        $properties->conditionOfSale->items = OrderChangeLineItemItemsConditionOfSaleItems::schema();
        $ownerSchema->addPropertyMapping('ConditionOfSale', self::names()->conditionOfSale);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = OrderChangeLineItemItemsFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderChangeLineItemItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = OrderChangeLineItemItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = OrderChangeLineItemItemsMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->restrictionsOrConditions = Schema::arr();
        $properties->restrictionsOrConditions->items = OrderChangeLineItemItemsRestrictionsOrConditionsItems::schema();
        $ownerSchema->addPropertyMapping('RestrictionsOrConditions', self::names()->restrictionsOrConditions);
        $properties->packaging = Schema::arr();
        $properties->packaging->items = OrderChangeLineItemItemsPackagingItems::schema();
        $ownerSchema->addPropertyMapping('Packaging', self::names()->packaging);
        $properties->monetaryAmounts = Schema::arr();
        $properties->monetaryAmounts->items = OrderChangeLineItemItemsMonetaryAmountsItems::schema();
        $ownerSchema->addPropertyMapping('MonetaryAmounts', self::names()->monetaryAmounts);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderChangeLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}