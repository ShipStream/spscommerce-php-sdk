<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeHeader extends ClassStructure
{
    /** @var OrderChangeHeaderOrderHeader */
    public $orderHeader;

    /** @var OrderChangeHeaderPaymentTermsItems[]|array */
    public $paymentTerms;

    /** @var OrderChangeHeaderDatesItems[]|array */
    public $dates;

    /** @var OrderChangeHeaderContactsItems[]|array */
    public $contacts;

    /** @var OrderChangeHeaderAddressItems[]|array */
    public $address;

    /** @var OrderChangeHeaderFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var OrderChangeHeaderCommodityItems[]|array */
    public $commodity;

    /** @var OrderChangeHeaderMeasurementsItems[]|array */
    public $measurements;

    /** @var OrderChangeHeaderPaperworkItems[]|array */
    public $paperwork;

    /** @var OrderChangeHeaderPackagingItems[]|array */
    public $packaging;

    /** @var OrderChangeHeaderQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var OrderChangeHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var OrderChangeHeaderMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var OrderChangeHeaderRestrictionsOrConditionsItems[]|array */
    public $restrictionsOrConditions;

    /** @var OrderChangeHeaderLeadTimeItems[]|array */
    public $leadTime;

    /** @var OrderChangeHeaderReferencesItems[]|array */
    public $references;

    /** @var OrderChangeHeaderNotesItems[]|array */
    public $notes;

    /** @var OrderChangeHeaderTaxesItems[]|array */
    public $taxes;

    /** @var OrderChangeHeaderChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderChangeHeaderMonetaryAmountsItems[]|array */
    public $monetaryAmounts;

    /** @var OrderChangeHeaderQuantityTotalsItems[]|array */
    public $quantityTotals;

    /** @var OrderChangeHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderHeader = OrderChangeHeaderOrderHeader::schema();
        $ownerSchema->addPropertyMapping('OrderHeader', self::names()->orderHeader);
        $properties->paymentTerms = Schema::arr();
        $properties->paymentTerms->items = OrderChangeHeaderPaymentTermsItems::schema();
        $ownerSchema->addPropertyMapping('PaymentTerms', self::names()->paymentTerms);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderChangeHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = OrderChangeHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = OrderChangeHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = OrderChangeHeaderFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderChangeHeaderCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = OrderChangeHeaderMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->paperwork = Schema::arr();
        $properties->paperwork->items = OrderChangeHeaderPaperworkItems::schema();
        $ownerSchema->addPropertyMapping('Paperwork', self::names()->paperwork);
        $properties->packaging = Schema::arr();
        $properties->packaging->items = OrderChangeHeaderPackagingItems::schema();
        $ownerSchema->addPropertyMapping('Packaging', self::names()->packaging);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = OrderChangeHeaderQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = OrderChangeHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = OrderChangeHeaderMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->restrictionsOrConditions = Schema::arr();
        $properties->restrictionsOrConditions->items = OrderChangeHeaderRestrictionsOrConditionsItems::schema();
        $ownerSchema->addPropertyMapping('RestrictionsOrConditions', self::names()->restrictionsOrConditions);
        $properties->leadTime = Schema::arr();
        $properties->leadTime->items = OrderChangeHeaderLeadTimeItems::schema();
        $ownerSchema->addPropertyMapping('LeadTime', self::names()->leadTime);
        $properties->references = Schema::arr();
        $properties->references->items = OrderChangeHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderChangeHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderChangeHeaderTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderChangeHeaderChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->monetaryAmounts = Schema::arr();
        $properties->monetaryAmounts->items = OrderChangeHeaderMonetaryAmountsItems::schema();
        $ownerSchema->addPropertyMapping('MonetaryAmounts', self::names()->monetaryAmounts);
        $properties->quantityTotals = Schema::arr();
        $properties->quantityTotals->items = OrderChangeHeaderQuantityTotalsItems::schema();
        $ownerSchema->addPropertyMapping('QuantityTotals', self::names()->quantityTotals);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderChangeHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'OrderHeader',
        );
    }
}