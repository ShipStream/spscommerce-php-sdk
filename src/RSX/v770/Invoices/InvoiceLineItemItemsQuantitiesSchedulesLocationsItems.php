<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Invoices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Specialized quantities that may be defined by location and/or dates
 */
class InvoiceLineItemItemsQuantitiesSchedulesLocationsItems extends ClassStructure
{
    /** @var string Qualifier used to define the type of quantity to follow */
    public $quantityQualifier;

    /** @var float Numeric value of the total quantity */
    public $totalQty;

    /** @var string The unit of measure for the numeric value of the total quantity */
    public $totalQtyUOM;

    /** @var string Free-form text to further describe the QuantityQualifier */
    public $quantityDescription;

    /** @var string Code identifying the structure or format of the related location number[s] */
    public $locationCodeQualifier;

    /** @var string Generic description to explain all the location quantities. i.e. Bin Number, Warehouse, Stockroom */
    public $locationDescription;

    /** @var InvoiceLineItemItemsQuantitiesSchedulesLocationsItemsLocationQuantityItems[]|array */
    public $locationQuantity;

    /** @var InvoiceLineItemItemsQuantitiesSchedulesLocationsItemsDatesItems[]|array */
    public $dates;

    /** @var string */
    public $assignedID;

    /** @var string Code indicating the time range that applies to LeadTimePeriodInterval, LeadTimeQuantity, and LeadTimeDate */
    public $leadTimeCode;

    /** @var float The amount of time allowed to fulfill the primary function of the transaction */
    public $leadTimeQuantity;

    /** @var string Code indicating the units of time that apply to the LeadTimeQuantity */
    public $leadTimePeriodInterval;

    /** @var string Date that indicates when a LeadTimeCode takes effect */
    public $leadTimeDate;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->quantityQualifier = Schema::string();
        $properties->quantityQualifier->description = "Qualifier used to define the type of quantity to follow";
        $ownerSchema->addPropertyMapping('QuantityQualifier', self::names()->quantityQualifier);
        $properties->totalQty = Schema::number();
        $properties->totalQty->description = "Numeric value of the total quantity";
        $ownerSchema->addPropertyMapping('TotalQty', self::names()->totalQty);
        $properties->totalQtyUOM = Schema::string();
        $properties->totalQtyUOM->description = "The unit of measure for the numeric value of the total quantity";
        $ownerSchema->addPropertyMapping('TotalQtyUOM', self::names()->totalQtyUOM);
        $properties->quantityDescription = Schema::string();
        $properties->quantityDescription->description = "Free-form text to further describe the QuantityQualifier";
        $ownerSchema->addPropertyMapping('QuantityDescription', self::names()->quantityDescription);
        $properties->locationCodeQualifier = Schema::string();
        $properties->locationCodeQualifier->description = "Code identifying the structure or format of the related location number[s]";
        $ownerSchema->addPropertyMapping('LocationCodeQualifier', self::names()->locationCodeQualifier);
        $properties->locationDescription = Schema::string();
        $properties->locationDescription->description = "Generic description to explain all the location quantities. i.e. Bin Number, Warehouse, Stockroom";
        $ownerSchema->addPropertyMapping('LocationDescription', self::names()->locationDescription);
        $properties->locationQuantity = Schema::arr();
        $properties->locationQuantity->items = InvoiceLineItemItemsQuantitiesSchedulesLocationsItemsLocationQuantityItems::schema();
        $ownerSchema->addPropertyMapping('LocationQuantity', self::names()->locationQuantity);
        $properties->dates = Schema::arr();
        $properties->dates->items = InvoiceLineItemItemsQuantitiesSchedulesLocationsItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->assignedID = Schema::string();
        $ownerSchema->addPropertyMapping('AssignedID', self::names()->assignedID);
        $properties->leadTimeCode = Schema::string();
        $properties->leadTimeCode->description = "Code indicating the time range that applies to LeadTimePeriodInterval, LeadTimeQuantity, and LeadTimeDate";
        $ownerSchema->addPropertyMapping('LeadTimeCode', self::names()->leadTimeCode);
        $properties->leadTimeQuantity = Schema::number();
        $properties->leadTimeQuantity->description = "The amount of time allowed to fulfill the primary function of the transaction";
        $ownerSchema->addPropertyMapping('LeadTimeQuantity', self::names()->leadTimeQuantity);
        $properties->leadTimePeriodInterval = Schema::string();
        $properties->leadTimePeriodInterval->description = "Code indicating the units of time that apply to the LeadTimeQuantity";
        $ownerSchema->addPropertyMapping('LeadTimePeriodInterval', self::names()->leadTimePeriodInterval);
        $properties->leadTimeDate = Schema::string();
        $properties->leadTimeDate->description = "Date that indicates when a LeadTimeCode takes effect";
        $properties->leadTimeDate->format = "date";
        $ownerSchema->addPropertyMapping('LeadTimeDate', self::names()->leadTimeDate);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Specialized quantities that may be defined by location and/or dates";
        $ownerSchema->required = array(
        );
    }
}