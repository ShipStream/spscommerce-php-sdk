<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\WarehouseTransferReceiptAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsPhysicalDetailsItems extends ClassStructure
{
    /** @var string Code to identify the pack hierarchical level */
    public $packQualifier;

    /** @var int The number of units inside the PackQualifier */
    public $packValue;

    /** @var float Measurable size of the sellable unit */
    public $packSize;

    /** @var string Unit of measure for the PackSize */
    public $packUOM;

    /** @var string Code identifying the type of packaging */
    public $packingMedium;

    /** @var string Code identifying the type of packaging material */
    public $packingMaterial;

    /** @var string Code defining the type of weight */
    public $weightQualifier;

    /** @var float Numeric value of total weight in reference to the PackQualifier or PalletQualifier */
    public $packWeight;

    /** @var string Code specifying the units in which the PackWeight is being measured by */
    public $packWeightUOM;

    /** @var float Numeric value of volume per unit of measure in reference to the PackQualifier or PalletQualifier */
    public $packVolume;

    /** @var string Code specifying the units in which the PackVolume is being measured by */
    public $packVolumeUOM;

    /** @var float The larger horizontal dimension of your pack, as defined by the PackQualifer, when the pack is in the upright position */
    public $packLength;

    /** @var float The smaller horizontal dimension of your pack, as defined by the PackQualifier, when the pack is in the upright position */
    public $packWidth;

    /** @var float The vertical dimension of your pack, as defined by the PackQualifer, when the pack is in the upright position */
    public $packHeight;

    /** @var string Code specifying the units in which the length, width, or height is being measured by */
    public $dimensionUOM;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string */
    public $surfaceLayerPositionCode;

    /** @var string */
    public $assignedID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->packQualifier = Schema::string();
        $properties->packQualifier->description = "Code to identify the pack hierarchical level";
        $ownerSchema->addPropertyMapping('PackQualifier', self::names()->packQualifier);
        $properties->packValue = Schema::integer();
        $properties->packValue->description = "The number of units inside the PackQualifier";
        $ownerSchema->addPropertyMapping('PackValue', self::names()->packValue);
        $properties->packSize = Schema::number();
        $properties->packSize->description = "Measurable size of the sellable unit";
        $ownerSchema->addPropertyMapping('PackSize', self::names()->packSize);
        $properties->packUOM = Schema::string();
        $properties->packUOM->description = "Unit of measure for the PackSize";
        $ownerSchema->addPropertyMapping('PackUOM', self::names()->packUOM);
        $properties->packingMedium = Schema::string();
        $properties->packingMedium->description = "Code identifying the type of packaging";
        $ownerSchema->addPropertyMapping('PackingMedium', self::names()->packingMedium);
        $properties->packingMaterial = Schema::string();
        $properties->packingMaterial->description = "Code identifying the type of packaging material";
        $ownerSchema->addPropertyMapping('PackingMaterial', self::names()->packingMaterial);
        $properties->weightQualifier = Schema::string();
        $properties->weightQualifier->description = "Code defining the type of weight";
        $ownerSchema->addPropertyMapping('WeightQualifier', self::names()->weightQualifier);
        $properties->packWeight = Schema::number();
        $properties->packWeight->description = "Numeric value of total weight in reference to the PackQualifier or PalletQualifier";
        $ownerSchema->addPropertyMapping('PackWeight', self::names()->packWeight);
        $properties->packWeightUOM = Schema::string();
        $properties->packWeightUOM->description = "Code specifying the units in which the PackWeight is being measured by";
        $ownerSchema->addPropertyMapping('PackWeightUOM', self::names()->packWeightUOM);
        $properties->packVolume = Schema::number();
        $properties->packVolume->description = "Numeric value of volume per unit of measure in reference to the PackQualifier or PalletQualifier";
        $ownerSchema->addPropertyMapping('PackVolume', self::names()->packVolume);
        $properties->packVolumeUOM = Schema::string();
        $properties->packVolumeUOM->description = "Code specifying the units in which the PackVolume is being measured by";
        $ownerSchema->addPropertyMapping('PackVolumeUOM', self::names()->packVolumeUOM);
        $properties->packLength = Schema::number();
        $properties->packLength->description = "The larger horizontal dimension of your pack, as defined by the PackQualifer, when the pack is in the upright position";
        $ownerSchema->addPropertyMapping('PackLength', self::names()->packLength);
        $properties->packWidth = Schema::number();
        $properties->packWidth->description = "The smaller horizontal dimension of your pack, as defined by the PackQualifier, when the pack is in the upright position";
        $ownerSchema->addPropertyMapping('PackWidth', self::names()->packWidth);
        $properties->packHeight = Schema::number();
        $properties->packHeight->description = "The vertical dimension of your pack, as defined by the PackQualifer, when the pack is in the upright position";
        $ownerSchema->addPropertyMapping('PackHeight', self::names()->packHeight);
        $properties->dimensionUOM = Schema::string();
        $properties->dimensionUOM->description = "Code specifying the units in which the length, width, or height is being measured by";
        $ownerSchema->addPropertyMapping('DimensionUOM', self::names()->dimensionUOM);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->surfaceLayerPositionCode = Schema::string();
        $ownerSchema->addPropertyMapping('SurfaceLayerPositionCode', self::names()->surfaceLayerPositionCode);
        $properties->assignedID = Schema::string();
        $ownerSchema->addPropertyMapping('AssignedID', self::names()->assignedID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}