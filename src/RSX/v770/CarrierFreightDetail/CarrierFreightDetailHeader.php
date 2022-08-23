<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetail;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierFreightDetailHeader extends ClassStructure
{
    /** @var CarrierFreightDetailHeaderOrderHeader */
    public $orderHeader;

    /** @var CarrierFreightDetailHeaderFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var CarrierFreightDetailHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var CarrierFreightDetailHeaderCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var CarrierFreightDetailHeaderMeasurementsItems[]|array */
    public $measurements;

    /** @var CarrierFreightDetailHeaderQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierFreightDetailHeaderAddressItems[]|array */
    public $address;

    /** @var CarrierFreightDetailHeaderReferencesItems[]|array */
    public $references;

    /** @var CarrierFreightDetailHeaderNotesItems[]|array */
    public $notes;

    /** @var CarrierFreightDetailHeaderDatesItems[]|array */
    public $dates;

    /** @var CarrierFreightDetailHeaderCommodityItems[]|array */
    public $commodity;

    /** @var CarrierFreightDetailHeaderPaymentTermsItems[]|array */
    public $paymentTerms;

    /** @var CarrierFreightDetailHeaderFreightRatesItems[]|array */
    public $freightRates;

    /** @var CarrierFreightDetailHeaderChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var CarrierFreightDetailHeaderTaxesItems[]|array */
    public $taxes;

    /** @var CarrierFreightDetailHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /** @var CarrierFreightDetailHeaderStopDetailsItems[]|array */
    public $stopDetails;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderHeader = CarrierFreightDetailHeaderOrderHeader::schema();
        $ownerSchema->addPropertyMapping('OrderHeader', self::names()->orderHeader);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = CarrierFreightDetailHeaderFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = CarrierFreightDetailHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = CarrierFreightDetailHeaderCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = CarrierFreightDetailHeaderMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierFreightDetailHeaderQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->address = Schema::arr();
        $properties->address->items = CarrierFreightDetailHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierFreightDetailHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierFreightDetailHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->dates = Schema::arr();
        $properties->dates->items = CarrierFreightDetailHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = CarrierFreightDetailHeaderCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->paymentTerms = Schema::arr();
        $properties->paymentTerms->items = CarrierFreightDetailHeaderPaymentTermsItems::schema();
        $ownerSchema->addPropertyMapping('PaymentTerms', self::names()->paymentTerms);
        $properties->freightRates = Schema::arr();
        $properties->freightRates->items = CarrierFreightDetailHeaderFreightRatesItems::schema();
        $ownerSchema->addPropertyMapping('FreightRates', self::names()->freightRates);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = CarrierFreightDetailHeaderChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = CarrierFreightDetailHeaderTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = CarrierFreightDetailHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $properties->stopDetails = Schema::arr();
        $properties->stopDetails->items = CarrierFreightDetailHeaderStopDetailsItems::schema();
        $ownerSchema->addPropertyMapping('StopDetails', self::names()->stopDetails);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'OrderHeader',
        );
    }
}