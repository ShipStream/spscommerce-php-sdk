<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Orders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderHeader extends ClassStructure
{
    /** @var OrderHeaderOrderHeader */
    public $orderHeader;

    /** @var OrderHeaderPaymentTermsItems[]|array */
    public $paymentTerms;

    /** @var OrderHeaderDatesItems[]|array */
    public $dates;

    /** @var OrderHeaderContactsItems[]|array */
    public $contacts;

    /** @var OrderHeaderAddressItems[]|array */
    public $address;

    /** @var OrderHeaderFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var OrderHeaderCommodityItems[]|array */
    public $commodity;

    /** @var OrderHeaderMeasurementsItems[]|array */
    public $measurements;

    /** @var OrderHeaderPaperworkItems[]|array */
    public $paperwork;

    /** @var OrderHeaderPackagingItems[]|array */
    public $packaging;

    /** @var OrderHeaderQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var OrderHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var OrderHeaderCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var OrderHeaderMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var OrderHeaderRestrictionsOrConditionsItems[]|array */
    public $restrictionsOrConditions;

    /** @var OrderHeaderLeadTimeItems[]|array */
    public $leadTime;

    /** @var OrderHeaderReferencesItems[]|array */
    public $references;

    /** @var OrderHeaderNotesItems[]|array */
    public $notes;

    /** @var OrderHeaderTaxesItems[]|array */
    public $taxes;

    /** @var OrderHeaderChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderHeaderMonetaryAmountsItems[]|array */
    public $monetaryAmounts;

    /** @var OrderHeaderQuantityTotalsItems[]|array */
    public $quantityTotals;

    /** @var OrderHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderHeader = OrderHeaderOrderHeader::schema();
        $ownerSchema->addPropertyMapping('OrderHeader', self::names()->orderHeader);
        $properties->paymentTerms = Schema::arr();
        $properties->paymentTerms->items = OrderHeaderPaymentTermsItems::schema();
        $ownerSchema->addPropertyMapping('PaymentTerms', self::names()->paymentTerms);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = OrderHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = OrderHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = OrderHeaderFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderHeaderCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = OrderHeaderMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->paperwork = Schema::arr();
        $properties->paperwork->items = OrderHeaderPaperworkItems::schema();
        $ownerSchema->addPropertyMapping('Paperwork', self::names()->paperwork);
        $properties->packaging = Schema::arr();
        $properties->packaging->items = OrderHeaderPackagingItems::schema();
        $ownerSchema->addPropertyMapping('Packaging', self::names()->packaging);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = OrderHeaderQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = OrderHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = OrderHeaderCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = OrderHeaderMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->restrictionsOrConditions = Schema::arr();
        $properties->restrictionsOrConditions->items = OrderHeaderRestrictionsOrConditionsItems::schema();
        $ownerSchema->addPropertyMapping('RestrictionsOrConditions', self::names()->restrictionsOrConditions);
        $properties->leadTime = Schema::arr();
        $properties->leadTime->items = OrderHeaderLeadTimeItems::schema();
        $ownerSchema->addPropertyMapping('LeadTime', self::names()->leadTime);
        $properties->references = Schema::arr();
        $properties->references->items = OrderHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderHeaderTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderHeaderChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->monetaryAmounts = Schema::arr();
        $properties->monetaryAmounts->items = OrderHeaderMonetaryAmountsItems::schema();
        $ownerSchema->addPropertyMapping('MonetaryAmounts', self::names()->monetaryAmounts);
        $properties->quantityTotals = Schema::arr();
        $properties->quantityTotals->items = OrderHeaderQuantityTotalsItems::schema();
        $ownerSchema->addPropertyMapping('QuantityTotals', self::names()->quantityTotals);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'OrderHeader',
        );
    }
}