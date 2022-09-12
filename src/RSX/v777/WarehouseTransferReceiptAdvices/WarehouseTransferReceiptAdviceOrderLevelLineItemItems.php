<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\WarehouseTransferReceiptAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document line item elements
 */
class WarehouseTransferReceiptAdviceOrderLevelLineItemItems extends ClassStructure
{
    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItemsItemDetail Contains the commonly used fields in the line item level of the transaction */
    public $itemDetail;

    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItemsDetailResponseItems[]|array */
    public $detailResponse;

    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->itemDetail = WarehouseTransferReceiptAdviceOrderLevelLineItemItemsItemDetail::schema();
        $ownerSchema->addPropertyMapping('ItemDetail', self::names()->itemDetail);
        $properties->detailResponse = Schema::arr();
        $properties->detailResponse->items = WarehouseTransferReceiptAdviceOrderLevelLineItemItemsDetailResponseItems::schema();
        $ownerSchema->addPropertyMapping('DetailResponse', self::names()->detailResponse);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = WarehouseTransferReceiptAdviceOrderLevelLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = WarehouseTransferReceiptAdviceOrderLevelLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = WarehouseTransferReceiptAdviceOrderLevelLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = WarehouseTransferReceiptAdviceOrderLevelLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = WarehouseTransferReceiptAdviceOrderLevelLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document line item elements";
        $ownerSchema->required = array(
        );
    }
}