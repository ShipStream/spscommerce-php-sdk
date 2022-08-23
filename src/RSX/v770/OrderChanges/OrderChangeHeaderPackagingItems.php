<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeHeaderPackagingItems extends ClassStructure
{
    /** @var string Code specifying the marking, packaging, loading, and related characteristics being described */
    public $packagingCharacteristicCode;

    /** @var string */
    public $agencyQualifierCode;

    /** @var string */
    public $packagingDescriptionCode;

    /** @var string */
    public $packagingDescription;

    /** @var string Code identifying loading or unloading a shipment */
    public $unitLoadOptionCode;

    /** @var OrderChangeHeaderPackagingItemsMeasurementsItems[]|array */
    public $measurements;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->packagingCharacteristicCode = Schema::string();
        $properties->packagingCharacteristicCode->description = "Code specifying the marking, packaging, loading, and related characteristics being described";
        $ownerSchema->addPropertyMapping('PackagingCharacteristicCode', self::names()->packagingCharacteristicCode);
        $properties->agencyQualifierCode = Schema::string();
        $ownerSchema->addPropertyMapping('AgencyQualifierCode', self::names()->agencyQualifierCode);
        $properties->packagingDescriptionCode = Schema::string();
        $ownerSchema->addPropertyMapping('PackagingDescriptionCode', self::names()->packagingDescriptionCode);
        $properties->packagingDescription = Schema::string();
        $ownerSchema->addPropertyMapping('PackagingDescription', self::names()->packagingDescription);
        $properties->unitLoadOptionCode = Schema::string();
        $properties->unitLoadOptionCode->description = "Code identifying loading or unloading a shipment";
        $ownerSchema->addPropertyMapping('UnitLoadOptionCode', self::names()->unitLoadOptionCode);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = OrderChangeHeaderPackagingItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}