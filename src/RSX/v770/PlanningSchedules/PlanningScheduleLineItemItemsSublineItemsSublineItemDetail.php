<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class PlanningScheduleLineItemItemsSublineItemsSublineItemDetail extends ClassStructure
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

    /** @var PlanningScheduleLineItemItemsSublineItemsSublineItemDetailProductIDItems[]|array */
    public $productID;

    /** @var string Vendor/Buyer assigned size code. NRF codes should go in the NRFStandardColorAndSize fields */
    public $productSizeCode;

    /** @var string Free-form textual description of the product size */
    public $productSizeDescription;

    /** @var string Vendor/Buyer assigned color code. NRF codes should go in the NRFStandardColorAndSize fields */
    public $productColorCode;

    /** @var string Free-form textual description of the product color */
    public $productColorDescription;

    /** @var string Vendor/Buyer assigned fabric code/material code. NRF codes should go in the NRFStandardColorAndSize fields */
    public $productMaterialCode;

    /** @var string Free-form textual description of the item's primary material/fabric */
    public $productMaterialDescription;

    /** @var string */
    public $productProcessCode;

    /** @var string */
    public $productProcessDescription;

    /** @var float Component quantity within the pre-pack */
    public $qtyPer;

    /** @var string Unit of measure pertaining to the QtyPer */
    public $qtyPerUOM;

    /** @var string Code identifying the type of price */
    public $purchasePriceType;

    /** @var float Agreed upon price the buyer is paying for the line item */
    public $purchasePrice;

    /** @var string Code specifying the type of unit price for an item */
    public $purchasePriceBasis;

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
        $properties->productID->items = PlanningScheduleLineItemItemsSublineItemsSublineItemDetailProductIDItems::schema();
        $ownerSchema->addPropertyMapping('ProductID', self::names()->productID);
        $properties->productSizeCode = Schema::string();
        $properties->productSizeCode->description = "Vendor/Buyer assigned size code. NRF codes should go in the NRFStandardColorAndSize fields";
        $ownerSchema->addPropertyMapping('ProductSizeCode', self::names()->productSizeCode);
        $properties->productSizeDescription = Schema::string();
        $properties->productSizeDescription->description = "Free-form textual description of the product size";
        $ownerSchema->addPropertyMapping('ProductSizeDescription', self::names()->productSizeDescription);
        $properties->productColorCode = Schema::string();
        $properties->productColorCode->description = "Vendor/Buyer assigned color code. NRF codes should go in the NRFStandardColorAndSize fields";
        $ownerSchema->addPropertyMapping('ProductColorCode', self::names()->productColorCode);
        $properties->productColorDescription = Schema::string();
        $properties->productColorDescription->description = "Free-form textual description of the product color";
        $ownerSchema->addPropertyMapping('ProductColorDescription', self::names()->productColorDescription);
        $properties->productMaterialCode = Schema::string();
        $properties->productMaterialCode->description = "Vendor/Buyer assigned fabric code/material code. NRF codes should go in the NRFStandardColorAndSize fields";
        $ownerSchema->addPropertyMapping('ProductMaterialCode', self::names()->productMaterialCode);
        $properties->productMaterialDescription = Schema::string();
        $properties->productMaterialDescription->description = "Free-form textual description of the item's primary material/fabric";
        $ownerSchema->addPropertyMapping('ProductMaterialDescription', self::names()->productMaterialDescription);
        $properties->productProcessCode = Schema::string();
        $ownerSchema->addPropertyMapping('ProductProcessCode', self::names()->productProcessCode);
        $properties->productProcessDescription = Schema::string();
        $ownerSchema->addPropertyMapping('ProductProcessDescription', self::names()->productProcessDescription);
        $properties->qtyPer = Schema::number();
        $properties->qtyPer->description = "Component quantity within the pre-pack";
        $ownerSchema->addPropertyMapping('QtyPer', self::names()->qtyPer);
        $properties->qtyPerUOM = Schema::string();
        $properties->qtyPerUOM->description = "Unit of measure pertaining to the QtyPer";
        $ownerSchema->addPropertyMapping('QtyPerUOM', self::names()->qtyPerUOM);
        $properties->purchasePriceType = Schema::string();
        $properties->purchasePriceType->description = "Code identifying the type of price";
        $ownerSchema->addPropertyMapping('PurchasePriceType', self::names()->purchasePriceType);
        $properties->purchasePrice = Schema::number();
        $properties->purchasePrice->description = "Agreed upon price the buyer is paying for the line item";
        $ownerSchema->addPropertyMapping('PurchasePrice', self::names()->purchasePrice);
        $properties->purchasePriceBasis = Schema::string();
        $properties->purchasePriceBasis->description = "Code specifying the type of unit price for an item";
        $ownerSchema->addPropertyMapping('PurchasePriceBasis', self::names()->purchasePriceBasis);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}