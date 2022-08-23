<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleHeader extends ClassStructure
{
    /** @var PlanningScheduleHeaderPlanningHeader */
    public $planningHeader;

    /** @var PlanningScheduleHeaderReferencesItems[]|array */
    public $references;

    /** @var PlanningScheduleHeaderNotesItems[]|array */
    public $notes;

    /** @var PlanningScheduleHeaderContactsItems[]|array */
    public $contacts;

    /** @var PlanningScheduleHeaderAddressItems[]|array */
    public $address;

    /** @var PlanningScheduleHeaderDatesItems[]|array */
    public $dates;

    /** @var PlanningScheduleHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var PlanningScheduleHeaderQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var PlanningScheduleHeaderMeasurementsItems[]|array */
    public $measurements;

    /** @var PlanningScheduleHeaderCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var PlanningScheduleHeaderFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var PlanningScheduleHeaderCommodityItems[]|array */
    public $commodity;

    /** @var PlanningScheduleHeaderMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var PlanningScheduleHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->planningHeader = PlanningScheduleHeaderPlanningHeader::schema();
        $ownerSchema->addPropertyMapping('PlanningHeader', self::names()->planningHeader);
        $properties->references = Schema::arr();
        $properties->references->items = PlanningScheduleHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = PlanningScheduleHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = PlanningScheduleHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = PlanningScheduleHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->dates = Schema::arr();
        $properties->dates->items = PlanningScheduleHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = PlanningScheduleHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = PlanningScheduleHeaderQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = PlanningScheduleHeaderMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = PlanningScheduleHeaderCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = PlanningScheduleHeaderFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = PlanningScheduleHeaderCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = PlanningScheduleHeaderMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = PlanningScheduleHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'PlanningHeader',
        );
    }
}