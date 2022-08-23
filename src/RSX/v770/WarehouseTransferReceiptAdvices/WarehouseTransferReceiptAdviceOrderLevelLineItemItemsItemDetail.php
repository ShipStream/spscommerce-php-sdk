<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\WarehouseTransferReceiptAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class WarehouseTransferReceiptAdviceOrderLevelLineItemItemsItemDetail extends ClassStructure
{
    /** @var string For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction. */
    public $lineSequenceNumber;

    /** @var string ERP generated code to uniquely identify the item */
    public $applicationId;

    /** @var string Buyer's primary product identifier */
    public $buyerPartNumber;

    /** @var string Vendor's primary product identifier */
    public $vendorPartNumber;

    /** @var string Consumer level or customer unit product identification number */
    public $consumerPackageCode;

    /** @var string International Article Number, aka European Article Number, which is the European equivalent of the United States UPC[Universal Product Code] */
    public $eAN;

    /** @var string Global Trade Item Number which is an item identifier that encompasses all product identification numbers such as UPC, EAN, ITF, etc. and can be assigned at various packing levels */
    public $gTIN;

    /** @var string Package or case level product identification number */
    public $uPCCaseCode;

    /** @var string National Drug Code or NDC is a unique, universal product identifier for drugs. Primarily used in the pharmaceutical industry */
    public $natlDrugCode;

    /** @var string ISBN is a unique number assigned to every book before publication */
    public $internationalStandardBookNumber;

    /** @var WarehouseTransferReceiptAdviceOrderLevelLineItemItemsItemDetailProductIDItems[]|array */
    public $productID;

    /** @var float Quantity that has already or is scheduled to be shipped/delivered */
    public $shipQty;

    /** @var string Unit of measure used with the ShipQty */
    public $shipQtyUOM;

    /** @var string */
    public $warehouseLotID;

    /** @var string */
    public $warehouseDetailAdjID;

    /** @var float */
    public $unitWeight;

    /** @var string */
    public $color;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->lineSequenceNumber = Schema::string();
        $properties->lineSequenceNumber->description = "For an initiated document, this is a unique number for the line item[s]. For a return transaction, this number should be the same as what was received from the source transaction.";
        $ownerSchema->addPropertyMapping('LineSequenceNumber', self::names()->lineSequenceNumber);
        $properties->applicationId = Schema::string();
        $properties->applicationId->description = "ERP generated code to uniquely identify the item";
        $ownerSchema->addPropertyMapping('ApplicationId', self::names()->applicationId);
        $properties->buyerPartNumber = Schema::string();
        $properties->buyerPartNumber->description = "Buyer's primary product identifier";
        $ownerSchema->addPropertyMapping('BuyerPartNumber', self::names()->buyerPartNumber);
        $properties->vendorPartNumber = Schema::string();
        $properties->vendorPartNumber->description = "Vendor's primary product identifier";
        $ownerSchema->addPropertyMapping('VendorPartNumber', self::names()->vendorPartNumber);
        $properties->consumerPackageCode = Schema::string();
        $properties->consumerPackageCode->description = "Consumer level or customer unit product identification number";
        $ownerSchema->addPropertyMapping('ConsumerPackageCode', self::names()->consumerPackageCode);
        $properties->eAN = Schema::string();
        $properties->eAN->description = "International Article Number, aka European Article Number, which is the European equivalent of the United States UPC[Universal Product Code]";
        $ownerSchema->addPropertyMapping('EAN', self::names()->eAN);
        $properties->gTIN = Schema::string();
        $properties->gTIN->description = "Global Trade Item Number which is an item identifier that encompasses all product identification numbers such as UPC, EAN, ITF, etc. and can be assigned at various packing levels";
        $ownerSchema->addPropertyMapping('GTIN', self::names()->gTIN);
        $properties->uPCCaseCode = Schema::string();
        $properties->uPCCaseCode->description = "Package or case level product identification number";
        $ownerSchema->addPropertyMapping('UPCCaseCode', self::names()->uPCCaseCode);
        $properties->natlDrugCode = Schema::string();
        $properties->natlDrugCode->description = "National Drug Code or NDC is a unique, universal product identifier for drugs. Primarily used in the pharmaceutical industry";
        $ownerSchema->addPropertyMapping('NatlDrugCode', self::names()->natlDrugCode);
        $properties->internationalStandardBookNumber = Schema::string();
        $properties->internationalStandardBookNumber->description = "ISBN is a unique number assigned to every book before publication";
        $ownerSchema->addPropertyMapping('InternationalStandardBookNumber', self::names()->internationalStandardBookNumber);
        $properties->productID = Schema::arr();
        $properties->productID->items = WarehouseTransferReceiptAdviceOrderLevelLineItemItemsItemDetailProductIDItems::schema();
        $ownerSchema->addPropertyMapping('ProductID', self::names()->productID);
        $properties->shipQty = Schema::number();
        $properties->shipQty->description = "Quantity that has already or is scheduled to be shipped/delivered";
        $ownerSchema->addPropertyMapping('ShipQty', self::names()->shipQty);
        $properties->shipQtyUOM = Schema::string();
        $properties->shipQtyUOM->description = "Unit of measure used with the ShipQty";
        $ownerSchema->addPropertyMapping('ShipQtyUOM', self::names()->shipQtyUOM);
        $properties->warehouseLotID = Schema::string();
        $ownerSchema->addPropertyMapping('WarehouseLotID', self::names()->warehouseLotID);
        $properties->warehouseDetailAdjID = Schema::string();
        $ownerSchema->addPropertyMapping('WarehouseDetailAdjID', self::names()->warehouseDetailAdjID);
        $properties->unitWeight = Schema::number();
        $ownerSchema->addPropertyMapping('UnitWeight', self::names()->unitWeight);
        $properties->color = Schema::string();
        $ownerSchema->addPropertyMapping('Color', self::names()->color);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}