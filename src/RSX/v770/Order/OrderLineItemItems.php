<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Order;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderLineItemItems extends ClassStructure
{
    /** @var OrderLineItemItemsOrderLine */
    public $orderLine;

    /** @var OrderLineItemItemsContactsItems[]|array */
    public $contacts;

    /** @var OrderLineItemItemsDatesItems[]|array */
    public $dates;

    /** @var OrderLineItemItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var OrderLineItemItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var OrderLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var OrderLineItemItemsMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var OrderLineItemItemsPaperworkItems[]|array */
    public $paperwork;

    /** @var OrderLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var OrderLineItemItemsPalletInformationItems[]|array */
    public $palletInformation;

    /** @var OrderLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var OrderLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var OrderLineItemItemsFloorReadyItems[]|array */
    public $floorReady;

    /** @var OrderLineItemItemsAddressItems[]|array */
    public $address;

    /** @var OrderLineItemItemsSublineItems[]|array */
    public $subline;

    /** @var OrderLineItemItemsQuantitiesSchedulesLocationsItems[]|array */
    public $quantitiesSchedulesLocations;

    /** @var OrderLineItemItemsTaxesItems[]|array */
    public $taxes;

    /** @var OrderLineItemItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderLineItemItemsPaymentTermsItems[]|array */
    public $paymentTerms;

    /** @var OrderLineItemItemsConditionOfSaleItems[]|array */
    public $conditionOfSale;

    /** @var OrderLineItemItemsFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var OrderLineItemItemsCommodityItems[]|array */
    public $commodity;

    /** @var OrderLineItemItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var OrderLineItemItemsCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var OrderLineItemItemsMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var OrderLineItemItemsRestrictionsOrConditionsItems[]|array */
    public $restrictionsOrConditions;

    /** @var OrderLineItemItemsPackagingItems[]|array */
    public $packaging;

    /** @var OrderLineItemItemsMonetaryAmountsItems[]|array */
    public $monetaryAmounts;

    /** @var OrderLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderLine = OrderLineItemItemsOrderLine::schema();
        $ownerSchema->addPropertyMapping('OrderLine', self::names()->orderLine);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = OrderLineItemItemsContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderLineItemItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = OrderLineItemItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = OrderLineItemItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = OrderLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = OrderLineItemItemsMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->paperwork = Schema::arr();
        $properties->paperwork->items = OrderLineItemItemsPaperworkItems::schema();
        $ownerSchema->addPropertyMapping('Paperwork', self::names()->paperwork);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = OrderLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->palletInformation = Schema::arr();
        $properties->palletInformation->items = OrderLineItemItemsPalletInformationItems::schema();
        $ownerSchema->addPropertyMapping('PalletInformation', self::names()->palletInformation);
        $properties->references = Schema::arr();
        $properties->references->items = OrderLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->floorReady = Schema::arr();
        $properties->floorReady->items = OrderLineItemItemsFloorReadyItems::schema();
        $ownerSchema->addPropertyMapping('FloorReady', self::names()->floorReady);
        $properties->address = Schema::arr();
        $properties->address->items = OrderLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->subline = Schema::arr();
        $properties->subline->items = OrderLineItemItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = OrderLineItemItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderLineItemItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderLineItemItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->paymentTerms = Schema::arr();
        $properties->paymentTerms->items = OrderLineItemItemsPaymentTermsItems::schema();
        $ownerSchema->addPropertyMapping('PaymentTerms', self::names()->paymentTerms);
        $properties->conditionOfSale = Schema::arr();
        $properties->conditionOfSale->items = OrderLineItemItemsConditionOfSaleItems::schema();
        $ownerSchema->addPropertyMapping('ConditionOfSale', self::names()->conditionOfSale);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = OrderLineItemItemsFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderLineItemItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = OrderLineItemItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = OrderLineItemItemsCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = OrderLineItemItemsMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->restrictionsOrConditions = Schema::arr();
        $properties->restrictionsOrConditions->items = OrderLineItemItemsRestrictionsOrConditionsItems::schema();
        $ownerSchema->addPropertyMapping('RestrictionsOrConditions', self::names()->restrictionsOrConditions);
        $properties->packaging = Schema::arr();
        $properties->packaging->items = OrderLineItemItemsPackagingItems::schema();
        $ownerSchema->addPropertyMapping('Packaging', self::names()->packaging);
        $properties->monetaryAmounts = Schema::arr();
        $properties->monetaryAmounts->items = OrderLineItemItemsMonetaryAmountsItems::schema();
        $ownerSchema->addPropertyMapping('MonetaryAmounts', self::names()->monetaryAmounts);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}