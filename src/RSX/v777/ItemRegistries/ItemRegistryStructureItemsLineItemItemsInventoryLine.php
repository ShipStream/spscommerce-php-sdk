<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ItemRegistries;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Contains the commonly used fields in the line item level of the transaction
 */
class ItemRegistryStructureItemsLineItemItemsInventoryLine extends ClassStructure
{
    const AAA = 'AAA';

    const AAB = 'AAB';

    const AAE = 'AAE';

    const BLP = 'BLP';

    const CAT = 'CAT';

    const CON = 'CON';

    const D01 = 'D01';

    const DIS = 'DIS';

    const ECP = 'ECP';

    const ELC = 'ELC';

    const EST = 'EST';

    const FCP = 'FCP';

    const MSR = 'MSR';

    const PNP = 'PNP';

    const PRP = 'PRP';

    const QTE = 'QTE';

    const RPA = 'RPA';

    const RPC = 'RPC';

    const RPM = 'RPM';

    const RTL = 'RTL';

    const TIP = 'TIP';

    const TNP = 'TNP';

    const UCP = 'UCP';

    const VPC = 'VPC';

    const WHL = 'WHL';

    const CA = 'CA';

    const HF = 'HF';

    const HP = 'HP';

    const HT = 'HT';

    const HTH = 'HTH';

    const PD = 'PD';

    const PE = 'PE';

    const PF = 'PF';

    const PG = 'PG';

    const PK = 'PK';

    const PN = 'PN';

    const PO = 'PO';

    const PP = 'PP';

    const PS = 'PS';

    const PT = 'PT';

    const TF = 'TF';

    const TT = 'TT';

    const UM = 'UM';

    const CONST_001 = '001';

    const CONST_002 = '002';

    const CONST_003 = '003';

    const CONST_004 = '004';

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

    /** @var ItemRegistryStructureItemsLineItemItemsInventoryLineProductIDItems[]|array */
    public $productID;

    /** @var string Code identifying the type of price */
    public $purchasePriceType;

    /** @var float Agreed upon price the buyer is paying for the line item */
    public $purchasePrice;

    /** @var string Code specifying the type of unit price for an item */
    public $purchasePriceBasis;

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

    /** @var string Code assigned to the manufacturing process of the product */
    public $productProcessCode;

    /** @var string Description of the manufacturing process of the product */
    public $productProcessDescription;

    /** @var string Name or number identifying an area wherein merchandise is categorized within a store */
    public $department;

    /** @var string Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store */
    public $departmentDescription;

    /** @var string The date in which an object expires */
    public $expirationDate;

    /** @var string Description used to identify the primary gender[and age] for which an item is designed. */
    public $gender;

    /** @var string Code to identify the action that is applied to associated level */
    public $maintenanceTypeCode;

    /** @var ItemRegistryStructureItemsLineItemItemsInventoryLineNRFStandardColorAndSize Color and size information conforming to standards set forth by the National Retail Federation */
    public $nRFStandardColorAndSize;

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
        $properties->productID->items = ItemRegistryStructureItemsLineItemItemsInventoryLineProductIDItems::schema();
        $ownerSchema->addPropertyMapping('ProductID', self::names()->productID);
        $properties->purchasePriceType = Schema::string();
        $properties->purchasePriceType->enum = array(
            self::AAA,
            self::AAB,
            self::AAE,
            self::BLP,
            self::CAT,
            self::CON,
            self::D01,
            self::DIS,
            self::ECP,
            self::ELC,
            self::EST,
            self::FCP,
            self::MSR,
            self::PNP,
            self::PRP,
            self::QTE,
            self::RPA,
            self::RPC,
            self::RPM,
            self::RTL,
            self::TIP,
            self::TNP,
            self::UCP,
            self::VPC,
            self::WHL,
        );
        $properties->purchasePriceType->description = "Code identifying the type of price";
        $ownerSchema->addPropertyMapping('PurchasePriceType', self::names()->purchasePriceType);
        $properties->purchasePrice = Schema::number();
        $properties->purchasePrice->description = "Agreed upon price the buyer is paying for the line item";
        $ownerSchema->addPropertyMapping('PurchasePrice', self::names()->purchasePrice);
        $properties->purchasePriceBasis = Schema::string();
        $properties->purchasePriceBasis->enum = array(
            self::CA,
            self::HF,
            self::HP,
            self::HT,
            self::HTH,
            self::PD,
            self::PE,
            self::PF,
            self::PG,
            self::PK,
            self::PN,
            self::PO,
            self::PP,
            self::PS,
            self::PT,
            self::TF,
            self::TT,
            self::UM,
        );
        $properties->purchasePriceBasis->description = "Code specifying the type of unit price for an item";
        $ownerSchema->addPropertyMapping('PurchasePriceBasis', self::names()->purchasePriceBasis);
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
        $properties->productProcessCode->description = "Code assigned to the manufacturing process of the product";
        $ownerSchema->addPropertyMapping('ProductProcessCode', self::names()->productProcessCode);
        $properties->productProcessDescription = Schema::string();
        $properties->productProcessDescription->description = "Description of the manufacturing process of the product";
        $ownerSchema->addPropertyMapping('ProductProcessDescription', self::names()->productProcessDescription);
        $properties->department = Schema::string();
        $properties->department->description = "Name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('Department', self::names()->department);
        $properties->departmentDescription = Schema::string();
        $properties->departmentDescription->description = "Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('DepartmentDescription', self::names()->departmentDescription);
        $properties->expirationDate = Schema::string();
        $properties->expirationDate->description = "The date in which an object expires";
        $properties->expirationDate->format = "date";
        $ownerSchema->addPropertyMapping('ExpirationDate', self::names()->expirationDate);
        $properties->gender = Schema::string();
        $properties->gender->description = "Description used to identify the primary gender[and age] for which an item is designed.";
        $ownerSchema->addPropertyMapping('Gender', self::names()->gender);
        $properties->maintenanceTypeCode = Schema::string();
        $properties->maintenanceTypeCode->enum = array(
            self::CONST_001,
            self::CONST_002,
            self::CONST_003,
            self::CONST_004,
        );
        $properties->maintenanceTypeCode->description = "Code to identify the action that is applied to associated level";
        $ownerSchema->addPropertyMapping('MaintenanceTypeCode', self::names()->maintenanceTypeCode);
        $properties->nRFStandardColorAndSize = ItemRegistryStructureItemsLineItemItemsInventoryLineNRFStandardColorAndSize::schema();
        $ownerSchema->addPropertyMapping('NRFStandardColorAndSize', self::names()->nRFStandardColorAndSize);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the line item level of the transaction";
        $ownerSchema->required = array(
        );
    }
}