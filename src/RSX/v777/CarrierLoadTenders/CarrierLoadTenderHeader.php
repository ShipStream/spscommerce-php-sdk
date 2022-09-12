<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierLoadTenders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document header elements
 */
class CarrierLoadTenderHeader extends ClassStructure
{
    /** @var CarrierLoadTenderHeaderCarrierLoadTenderHeader Contains the commonly used fields in the header of the transaction */
    public $carrierLoadTenderHeader;

    /** @var CarrierLoadTenderHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var CarrierLoadTenderHeaderCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var CarrierLoadTenderHeaderQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierLoadTenderHeaderMeasurementsItems[]|array */
    public $measurements;

    /** @var CarrierLoadTenderHeaderFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var CarrierLoadTenderHeaderFreightRatesItems[]|array */
    public $freightRates;

    /** @var CarrierLoadTenderHeaderDatesItems[]|array */
    public $dates;

    /** @var CarrierLoadTenderHeaderReferencesItems[]|array */
    public $references;

    /** @var CarrierLoadTenderHeaderNotesItems[]|array */
    public $notes;

    /** @var CarrierLoadTenderHeaderContactsItems[]|array */
    public $contacts;

    /** @var CarrierLoadTenderHeaderAddressItems[]|array */
    public $address;

    /** @var CarrierLoadTenderHeaderChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var CarrierLoadTenderHeaderTaxesItems[]|array */
    public $taxes;

    /** @var CarrierLoadTenderHeaderCommodityItems[]|array */
    public $commodity;

    /** @var CarrierLoadTenderHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->carrierLoadTenderHeader = CarrierLoadTenderHeaderCarrierLoadTenderHeader::schema();
        $ownerSchema->addPropertyMapping('CarrierLoadTenderHeader', self::names()->carrierLoadTenderHeader);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = CarrierLoadTenderHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = CarrierLoadTenderHeaderCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierLoadTenderHeaderQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = CarrierLoadTenderHeaderMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = CarrierLoadTenderHeaderFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->freightRates = Schema::arr();
        $properties->freightRates->items = CarrierLoadTenderHeaderFreightRatesItems::schema();
        $ownerSchema->addPropertyMapping('FreightRates', self::names()->freightRates);
        $properties->dates = Schema::arr();
        $properties->dates->items = CarrierLoadTenderHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierLoadTenderHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierLoadTenderHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = CarrierLoadTenderHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = CarrierLoadTenderHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = CarrierLoadTenderHeaderChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = CarrierLoadTenderHeaderTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = CarrierLoadTenderHeaderCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = CarrierLoadTenderHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document header elements";
        $ownerSchema->required = array(
            'CarrierLoadTenderHeader',
        );
    }
}