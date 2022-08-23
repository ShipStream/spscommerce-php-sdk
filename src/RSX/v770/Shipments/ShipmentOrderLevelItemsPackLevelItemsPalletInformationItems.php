<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsPackLevelItemsPalletInformationItems extends ClassStructure
{
    /** @var string Code to identify the pallet hierarchical level */
    public $palletQualifier;

    /** @var int The number of units inside the PalletQualifier */
    public $palletValue;

    /** @var string Code indicating the type of material of the pallet */
    public $palletTypeCode;

    /** @var int The number of vertical layers on the pallet */
    public $palletTiers;

    /** @var int The number of units per horizontal layer on the pallet */
    public $palletBlocks;

    /** @var float */
    public $unitWeight;

    /** @var string */
    public $unitWeightUOM;

    /** @var float */
    public $length;

    /** @var float */
    public $width;

    /** @var float */
    public $height;

    /** @var string Code specifying the units in which the length, width, or height is being measured by */
    public $dimensionUOM;

    /** @var string Code defining the type of weight */
    public $weightQualifier;

    /** @var float Numeric value of total weight in reference to the PalletQualifier */
    public $palletWeight;

    /** @var string Code specifying the units in which the PalletWeight is being measured by */
    public $palletWeightUOM;

    /** @var float Numeric value of volume per unit of measure in reference to the PalletQualifier */
    public $palletVolume;

    /** @var string Code specifying the units in which the PalletVolume is being measured by */
    public $palletVolumeUOM;

    /** @var float The vertical dimension of your pallet when not loaded */
    public $unloadedHeight;

    /** @var string Unit of measure used in relation with the UnloadedHeight */
    public $unloadedHeightUOM;

    /** @var string Code specifying pallet exchange instructions */
    public $palletExchangeCode;

    /** @var string Code identifying the style of the pallet */
    public $palletStructureCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->palletQualifier = Schema::string();
        $properties->palletQualifier->description = "Code to identify the pallet hierarchical level";
        $ownerSchema->addPropertyMapping('PalletQualifier', self::names()->palletQualifier);
        $properties->palletValue = Schema::integer();
        $properties->palletValue->description = "The number of units inside the PalletQualifier";
        $ownerSchema->addPropertyMapping('PalletValue', self::names()->palletValue);
        $properties->palletTypeCode = Schema::string();
        $properties->palletTypeCode->description = "Code indicating the type of material of the pallet";
        $ownerSchema->addPropertyMapping('PalletTypeCode', self::names()->palletTypeCode);
        $properties->palletTiers = Schema::integer();
        $properties->palletTiers->description = "The number of vertical layers on the pallet";
        $ownerSchema->addPropertyMapping('PalletTiers', self::names()->palletTiers);
        $properties->palletBlocks = Schema::integer();
        $properties->palletBlocks->description = "The number of units per horizontal layer on the pallet";
        $ownerSchema->addPropertyMapping('PalletBlocks', self::names()->palletBlocks);
        $properties->unitWeight = Schema::number();
        $ownerSchema->addPropertyMapping('UnitWeight', self::names()->unitWeight);
        $properties->unitWeightUOM = Schema::string();
        $ownerSchema->addPropertyMapping('UnitWeightUOM', self::names()->unitWeightUOM);
        $properties->length = Schema::number();
        $ownerSchema->addPropertyMapping('Length', self::names()->length);
        $properties->width = Schema::number();
        $ownerSchema->addPropertyMapping('Width', self::names()->width);
        $properties->height = Schema::number();
        $ownerSchema->addPropertyMapping('Height', self::names()->height);
        $properties->dimensionUOM = Schema::string();
        $properties->dimensionUOM->description = "Code specifying the units in which the length, width, or height is being measured by";
        $ownerSchema->addPropertyMapping('DimensionUOM', self::names()->dimensionUOM);
        $properties->weightQualifier = Schema::string();
        $properties->weightQualifier->description = "Code defining the type of weight";
        $ownerSchema->addPropertyMapping('WeightQualifier', self::names()->weightQualifier);
        $properties->palletWeight = Schema::number();
        $properties->palletWeight->description = "Numeric value of total weight in reference to the PalletQualifier";
        $ownerSchema->addPropertyMapping('PalletWeight', self::names()->palletWeight);
        $properties->palletWeightUOM = Schema::string();
        $properties->palletWeightUOM->description = "Code specifying the units in which the PalletWeight is being measured by";
        $ownerSchema->addPropertyMapping('PalletWeightUOM', self::names()->palletWeightUOM);
        $properties->palletVolume = Schema::number();
        $properties->palletVolume->description = "Numeric value of volume per unit of measure in reference to the PalletQualifier";
        $ownerSchema->addPropertyMapping('PalletVolume', self::names()->palletVolume);
        $properties->palletVolumeUOM = Schema::string();
        $properties->palletVolumeUOM->description = "Code specifying the units in which the PalletVolume is being measured by";
        $ownerSchema->addPropertyMapping('PalletVolumeUOM', self::names()->palletVolumeUOM);
        $properties->unloadedHeight = Schema::number();
        $properties->unloadedHeight->description = "The vertical dimension of your pallet when not loaded";
        $ownerSchema->addPropertyMapping('UnloadedHeight', self::names()->unloadedHeight);
        $properties->unloadedHeightUOM = Schema::string();
        $properties->unloadedHeightUOM->description = "Unit of measure used in relation with the UnloadedHeight";
        $ownerSchema->addPropertyMapping('UnloadedHeightUOM', self::names()->unloadedHeightUOM);
        $properties->palletExchangeCode = Schema::string();
        $properties->palletExchangeCode->description = "Code specifying pallet exchange instructions";
        $ownerSchema->addPropertyMapping('PalletExchangeCode', self::names()->palletExchangeCode);
        $properties->palletStructureCode = Schema::string();
        $properties->palletStructureCode->description = "Code identifying the style of the pallet";
        $ownerSchema->addPropertyMapping('PalletStructureCode', self::names()->palletStructureCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}