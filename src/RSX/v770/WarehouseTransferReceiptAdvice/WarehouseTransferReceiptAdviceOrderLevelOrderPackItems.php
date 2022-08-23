<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\WarehouseTransferReceiptAdvice;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseTransferReceiptAdviceOrderLevelOrderPackItems extends ClassStructure
{
    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsWarehousePack */
    public $warehousePack;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsPalletInformationItems[]|array */
    public $palletInformation;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsReferencesItems[]|array */
    public $references;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsNotesItems[]|array */
    public $notes;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItems[]|array */
    public $lineItem;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->warehousePack = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsWarehousePack::schema();
        $ownerSchema->addPropertyMapping('WarehousePack', self::names()->warehousePack);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->palletInformation = Schema::arr();
        $properties->palletInformation->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsPalletInformationItems::schema();
        $ownerSchema->addPropertyMapping('PalletInformation', self::names()->palletInformation);
        $properties->references = Schema::arr();
        $properties->references->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->lineItem = Schema::arr();
        $properties->lineItem->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItems::schema();
        $ownerSchema->addPropertyMapping('LineItem', self::names()->lineItem);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}