<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\WarehouseTransferReceiptAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseTransferReceiptAdviceOrderLevelLineItemItemsDetailResponseItems extends ClassStructure
{
    /** @var float Numeric value of quantity */
    public $qty;

    /** @var string Unit of measure of the quantity specified */
    public $qtyUOM;

    /** @var string Code specifying the item's receiving condition */
    public $receivingConditionCode;

    /** @var string */
    public $warehouseLotID;

    /** @var string Code specifying the type of damage */
    public $damageReasonCode;

    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItemsDetailResponseItemsReferencesItems[]|array */
    public $references;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->qty = Schema::number();
        $properties->qty->description = "Numeric value of quantity";
        $ownerSchema->addPropertyMapping('Qty', self::names()->qty);
        $properties->qtyUOM = Schema::string();
        $properties->qtyUOM->description = "Unit of measure of the quantity specified";
        $ownerSchema->addPropertyMapping('QtyUOM', self::names()->qtyUOM);
        $properties->receivingConditionCode = Schema::string();
        $properties->receivingConditionCode->description = "Code specifying the item's receiving condition";
        $ownerSchema->addPropertyMapping('ReceivingConditionCode', self::names()->receivingConditionCode);
        $properties->warehouseLotID = Schema::string();
        $ownerSchema->addPropertyMapping('WarehouseLotID', self::names()->warehouseLotID);
        $properties->damageReasonCode = Schema::string();
        $properties->damageReasonCode->description = "Code specifying the type of damage";
        $ownerSchema->addPropertyMapping('DamageReasonCode', self::names()->damageReasonCode);
        $properties->references = Schema::arr();
        $properties->references->items = WarehouseTransferReceiptAdviceOrderLevelLineItemItemsDetailResponseItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}