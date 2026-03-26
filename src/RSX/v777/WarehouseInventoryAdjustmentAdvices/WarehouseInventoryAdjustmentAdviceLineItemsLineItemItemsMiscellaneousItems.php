<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Provides additional miscellaneous information
 */
class WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsMiscellaneousItems extends ClassStructure
{
    /** @var string Code qualifying the miscellaneous data element */
    public $qualifier1;

    /** @var string Free-form description of the miscellaneous element */
    public $description1;

    /** @var string Code qualifying the miscellaneous data element */
    public $qualifier2;

    /** @var string Free-form description of the miscellaneous element */
    public $description2;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->qualifier1 = Schema::string();
        $properties->qualifier1->description = "Code qualifying the miscellaneous data element";
        $ownerSchema->addPropertyMapping('Qualifier1', self::names()->qualifier1);
        $properties->description1 = Schema::string();
        $properties->description1->description = "Free-form description of the miscellaneous element";
        $ownerSchema->addPropertyMapping('Description1', self::names()->description1);
        $properties->qualifier2 = Schema::string();
        $properties->qualifier2->description = "Code qualifying the miscellaneous data element";
        $ownerSchema->addPropertyMapping('Qualifier2', self::names()->qualifier2);
        $properties->description2 = Schema::string();
        $properties->description2->description = "Free-form description of the miscellaneous element";
        $ownerSchema->addPropertyMapping('Description2', self::names()->description2);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides additional miscellaneous information";
        $ownerSchema->required = array(
        );
    }
}