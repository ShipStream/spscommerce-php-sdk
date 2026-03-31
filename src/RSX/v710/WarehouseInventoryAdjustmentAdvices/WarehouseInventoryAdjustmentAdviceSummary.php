<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document summary elements
 */
class WarehouseInventoryAdjustmentAdviceSummary extends ClassStructure
{
    const CONST_01 = '01';

    const GR = 'GR';

    const KG = 'KG';

    const LB = 'LB';

    const OZ = 'OZ';

    const TO = 'TO';

    const CF = 'CF';

    const CI = 'CI';

    const CR = 'CR';

    const GA = 'GA';

    const LT = 'LT';

    const ML = 'ML';

    /** @var float Total number of line items in the transaction */
    public $totalOrders;

    /** @var float Total weight of all items in the transaction */
    public $totalWeight;

    /** @var string Unit of measure for the total weight */
    public $weightUOM;

    /** @var float Total volume of all items in the transaction */
    public $totalVolume;

    /** @var string Unit of measure for the total volume */
    public $volumeUOM;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->totalOrders = Schema::number();
        $properties->totalOrders->description = "Total number of line items in the transaction";
        $ownerSchema->addPropertyMapping('TotalOrders', self::names()->totalOrders);
        $properties->totalWeight = Schema::number();
        $properties->totalWeight->description = "Total weight of all items in the transaction";
        $ownerSchema->addPropertyMapping('TotalWeight', self::names()->totalWeight);
        $properties->weightUOM = Schema::string();
        $properties->weightUOM->enum = array(
            self::CONST_01,
            self::GR,
            self::KG,
            self::LB,
            self::OZ,
            self::TO,
        );
        $properties->weightUOM->description = "Unit of measure for the total weight";
        $ownerSchema->addPropertyMapping('WeightUOM', self::names()->weightUOM);
        $properties->totalVolume = Schema::number();
        $properties->totalVolume->description = "Total volume of all items in the transaction";
        $ownerSchema->addPropertyMapping('TotalVolume', self::names()->totalVolume);
        $properties->volumeUOM = Schema::string();
        $properties->volumeUOM->enum = array(
            self::CF,
            self::CI,
            self::CR,
            self::GA,
            self::LT,
            self::ML,
        );
        $properties->volumeUOM->description = "Unit of measure for the total volume";
        $ownerSchema->addPropertyMapping('VolumeUOM', self::names()->volumeUOM);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document summary elements";
        $ownerSchema->required = array(
        );
    }
}