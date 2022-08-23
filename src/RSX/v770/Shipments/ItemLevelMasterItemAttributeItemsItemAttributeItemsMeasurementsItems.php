<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ItemLevelMasterItemAttributeItemsItemAttributeItemsMeasurementsItems extends ClassStructure
{
    /** @var string */
    public $measurementRefIDCode;

    /** @var string Code identifying a specific product to which a measurement applies */
    public $measurementQualifier;

    /** @var float */
    public $measurementValue;

    /** @var string */
    public $compositeUOM;

    /** @var float */
    public $rangeMinimum;

    /** @var float */
    public $rangeMaximum;

    /** @var string Code used to qualify or further define a measurement value */
    public $measurementSignificanceCode;

    /** @var string */
    public $measurementAttributeCode;

    /** @var string */
    public $surfaceLayerPositionCode;

    /** @var string Code indicating a code from a specific industry code list */
    public $industryCodeQualifier;

    /** @var string */
    public $industryCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->measurementRefIDCode = Schema::string();
        $ownerSchema->addPropertyMapping('MeasurementRefIDCode', self::names()->measurementRefIDCode);
        $properties->measurementQualifier = Schema::string();
        $properties->measurementQualifier->description = "Code identifying a specific product to which a measurement applies";
        $ownerSchema->addPropertyMapping('MeasurementQualifier', self::names()->measurementQualifier);
        $properties->measurementValue = Schema::number();
        $ownerSchema->addPropertyMapping('MeasurementValue', self::names()->measurementValue);
        $properties->compositeUOM = Schema::string();
        $ownerSchema->addPropertyMapping('CompositeUOM', self::names()->compositeUOM);
        $properties->rangeMinimum = Schema::number();
        $ownerSchema->addPropertyMapping('RangeMinimum', self::names()->rangeMinimum);
        $properties->rangeMaximum = Schema::number();
        $ownerSchema->addPropertyMapping('RangeMaximum', self::names()->rangeMaximum);
        $properties->measurementSignificanceCode = Schema::string();
        $properties->measurementSignificanceCode->description = "Code used to qualify or further define a measurement value";
        $ownerSchema->addPropertyMapping('MeasurementSignificanceCode', self::names()->measurementSignificanceCode);
        $properties->measurementAttributeCode = Schema::string();
        $ownerSchema->addPropertyMapping('MeasurementAttributeCode', self::names()->measurementAttributeCode);
        $properties->surfaceLayerPositionCode = Schema::string();
        $ownerSchema->addPropertyMapping('SurfaceLayerPositionCode', self::names()->surfaceLayerPositionCode);
        $properties->industryCodeQualifier = Schema::string();
        $properties->industryCodeQualifier->description = "Code indicating a code from a specific industry code list";
        $ownerSchema->addPropertyMapping('IndustryCodeQualifier', self::names()->industryCodeQualifier);
        $properties->industryCode = Schema::string();
        $ownerSchema->addPropertyMapping('IndustryCode', self::names()->industryCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}