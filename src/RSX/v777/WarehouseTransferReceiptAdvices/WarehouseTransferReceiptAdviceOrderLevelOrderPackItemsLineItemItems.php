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
class WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItems extends ClassStructure
{
    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsItemDetail Contains the commonly used fields in the line item level of the transaction */
    public $itemDetail;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsDetailResponseItems[]|array */
    public $detailResponse;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->itemDetail = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsItemDetail::schema();
        $ownerSchema->addPropertyMapping('ItemDetail', self::names()->itemDetail);
        $properties->detailResponse = Schema::arr();
        $properties->detailResponse->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsDetailResponseItems::schema();
        $ownerSchema->addPropertyMapping('DetailResponse', self::names()->detailResponse);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document line item elements";
        $ownerSchema->required = array(
        );
    }
}