<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleLineItemItems extends ClassStructure
{
    /** @var PlanningScheduleLineItemItemsPlanningLine */
    public $planningLine;

    /** @var PlanningScheduleLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var PlanningScheduleLineItemItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var PlanningScheduleLineItemItemsDatesItems[]|array */
    public $dates;

    /** @var PlanningScheduleLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var PlanningScheduleLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var PlanningScheduleLineItemItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var PlanningScheduleLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var PlanningScheduleLineItemItemsPackagingItems[]|array */
    public $packaging;

    /** @var PlanningScheduleLineItemItemsAddressItems[]|array */
    public $address;

    /** @var PlanningScheduleLineItemItemsForecastDeliveryItems[]|array */
    public $forecastDelivery;

    /** @var PlanningScheduleLineItemItemsSublineItems[]|array */
    public $subline;

    /** @var PlanningScheduleLineItemItemsCommodityItems[]|array */
    public $commodity;

    /** @var PlanningScheduleLineItemItemsShipReceiveItems[]|array */
    public $shipReceive;

    /** @var PlanningScheduleLineItemItemsResourceAuthorizationItems[]|array */
    public $resourceAuthorization;

    /** @var PlanningScheduleLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->planningLine = PlanningScheduleLineItemItemsPlanningLine::schema();
        $ownerSchema->addPropertyMapping('PlanningLine', self::names()->planningLine);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = PlanningScheduleLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = PlanningScheduleLineItemItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->dates = Schema::arr();
        $properties->dates->items = PlanningScheduleLineItemItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = PlanningScheduleLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = PlanningScheduleLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = PlanningScheduleLineItemItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = PlanningScheduleLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->packaging = Schema::arr();
        $properties->packaging->items = PlanningScheduleLineItemItemsPackagingItems::schema();
        $ownerSchema->addPropertyMapping('Packaging', self::names()->packaging);
        $properties->address = Schema::arr();
        $properties->address->items = PlanningScheduleLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->forecastDelivery = Schema::arr();
        $properties->forecastDelivery->items = PlanningScheduleLineItemItemsForecastDeliveryItems::schema();
        $ownerSchema->addPropertyMapping('ForecastDelivery', self::names()->forecastDelivery);
        $properties->subline = Schema::arr();
        $properties->subline->items = PlanningScheduleLineItemItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = PlanningScheduleLineItemItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->shipReceive = Schema::arr();
        $properties->shipReceive->items = PlanningScheduleLineItemItemsShipReceiveItems::schema();
        $ownerSchema->addPropertyMapping('ShipReceive', self::names()->shipReceive);
        $properties->resourceAuthorization = Schema::arr();
        $properties->resourceAuthorization->items = PlanningScheduleLineItemItemsResourceAuthorizationItems::schema();
        $ownerSchema->addPropertyMapping('ResourceAuthorization', self::names()->resourceAuthorization);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = PlanningScheduleLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}