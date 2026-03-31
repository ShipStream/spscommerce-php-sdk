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
 * Supplemental information supporting the transaction
 */
class WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsAddressItemsReferenceItems extends ClassStructure
{
    /** @var string Code specifying the type of data in the ReferenceID/ReferenceDescription */
    public $referenceQual;

    /** @var string Value as defined by the ReferenceQual */
    public $referenceID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->referenceQual = Schema::string();
        $properties->referenceQual->description = "Code specifying the type of data in the ReferenceID/ReferenceDescription";
        $ownerSchema->addPropertyMapping('ReferenceQual', self::names()->referenceQual);
        $properties->referenceID = Schema::string();
        $properties->referenceID->description = "Value as defined by the ReferenceQual";
        $ownerSchema->addPropertyMapping('ReferenceID', self::names()->referenceID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Supplemental information supporting the transaction";
        $ownerSchema->required = array(
        );
    }
}