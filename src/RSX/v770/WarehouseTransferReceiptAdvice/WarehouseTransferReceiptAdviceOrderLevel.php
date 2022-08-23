<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\WarehouseTransferReceiptAdvice;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * @method static WarehouseTransferReceiptAdviceOrderLevel import($data, Context $options = null)
 */
class WarehouseTransferReceiptAdviceOrderLevel extends ClassStructure
{
    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItems[]|array */
    public $orderPack;

    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItems[]|array */
    public $lineItem;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderPack = Schema::arr();
        $properties->orderPack->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItems::schema();
        $ownerSchema->addPropertyMapping('OrderPack', self::names()->orderPack);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = WarehouseTransferReceiptAdviceOrderLevelLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchemaOneOf0 = new Schema();
        $ownerSchemaOneOf0->required = array(
            'OrderPack',
        );
        $ownerSchema->oneOf[0] = $ownerSchemaOneOf0;
        $ownerSchemaOneOf1 = new Schema();
        $ownerSchemaOneOf1->required = array(
            'LineItem',
        );
        $ownerSchema->oneOf[1] = $ownerSchemaOneOf1;
        $ownerSchemaOneOf2 = new Schema();
        $ownerSchemaOneOf2->not = new Schema();
        $ownerSchemaOneOf2NotAnyOf0 = new Schema();
        $ownerSchemaOneOf2NotAnyOf0->required = array(
            'OrderPack',
        );
        $ownerSchemaOneOf2->not->anyOf[0] = $ownerSchemaOneOf2NotAnyOf0;
        $ownerSchemaOneOf2NotAnyOf1 = new Schema();
        $ownerSchemaOneOf2NotAnyOf1->required = array(
            'LineItem',
        );
        $ownerSchemaOneOf2->not->anyOf[1] = $ownerSchemaOneOf2NotAnyOf1;
        $ownerSchema->oneOf[2] = $ownerSchemaOneOf2;
        $ownerSchema->required = array(
        );
    }
}