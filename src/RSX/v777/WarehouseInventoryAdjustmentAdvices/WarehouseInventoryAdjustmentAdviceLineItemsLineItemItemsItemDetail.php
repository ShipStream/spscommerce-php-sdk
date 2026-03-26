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
 * Contains the commonly used fields in the line item level of the transaction
 */
class WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsItemDetail extends ClassStructure
{
    const AR = 'AR';

    const B8 = 'B8';

    const BO = 'BO';

    const CB = 'CB';

    const IS = 'IS';

    const IT = 'IT';

    const MF = 'MF';

    const MG = 'MG';

    const MN = 'MN';

    const SE = 'SE';

    const SK = 'SK';

    const UP = 'UP';

    const VP = 'VP';

    const CONST_03 = '03';

    const CONST_04 = '04';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_07 = '07';

    const CONST_08 = '08';

    const CONST_51 = '51';

    const CONST_52 = '52';

    const CONST_53 = '53';

    const CONST_54 = '54';

    const CONST_55 = '55';

    const CONST_56 = '56';

    const CONST_88 = '88';

    const AA = 'AA';

    const AB = 'AB';

    const AC = 'AC';

    const AD = 'AD';

    const AE = 'AE';

    const AF = 'AF';

    const AG = 'AG';

    const AH = 'AH';

    const AI = 'AI';

    const AJ = 'AJ';

    const AK = 'AK';

    const AL = 'AL';

    const AM = 'AM';

    const AN = 'AN';

    const AP = 'AP';

    const AQ = 'AQ';

    const _AS = 'AS';

    const AT = 'AT';

    const AU = 'AU';

    const AV = 'AV';

    const AW = 'AW';

    const AX = 'AX';

    const AY = 'AY';

    const BA = 'BA';

    const BD = 'BD';

    const BK = 'BK';

    const BM = 'BM';

    const BN = 'BN';

    const BR = 'BR';

    const BS = 'BS';

    const BT = 'BT';

    const CD = 'CD';

    const CO = 'CO';

    const CR = 'CR';

    const CS = 'CS';

    const PC = 'PC';

    const TC = 'TC';

    const UD = 'UD';

    const BG = 'BG';

    const BX = 'BX';

    const CA = 'CA';

    const CT = 'CT';

    const DZ = 'DZ';

    const EA = 'EA';

    const FT = 'FT';

    const GA = 'GA';

    const KG = 'KG';

    const LB = 'LB';

    const LT = 'LT';

    const OZ = 'OZ';

    const PK = 'PK';

    const RL = 'RL';

    const SF = 'SF';

    const YD = 'YD';

    const G = 'G';

    const N = 'N';

    const CONST_01 = '01';

    const GR = 'GR';

    const TO = 'TO';

    const TF = 'TF';

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

    /** @var string Global Trade Item Number which is an item identifier that encompasses all product identification numbers such as UPC, EAN, ITF, etc. and can be assigned at various packing levels */
    public $gTIN;

    /** @var string Package or case level product identification number */
    public $uPCCaseCode;

    /** @var string National Drug Code or NDC is a unique, universal product identifier for drugs. Primarily used in the pharmaceutical industry */
    public $natlDrugCode;

    /** @var string Qualifier describing the additional product identification number */
    public $partNumberQualifier1;

    /** @var string Additional product identification number as described by the PartNumberQualifier1 */
    public $partNumber1;

    /** @var string Qualifier describing the additional product identification number */
    public $partNumberQualifier2;

    /** @var string Additional product identification number as described by the PartNumberQualifier2 */
    public $partNumber2;

    /** @var string Qualifier describing the additional product identification number */
    public $partNumberQualifier3;

    /** @var string Additional product identification number as described by the PartNumberQualifier3 */
    public $partNumber3;

    /** @var string Qualifier describing the additional product identification number */
    public $partNumberQualifier4;

    /** @var string Additional product identification number as described by the PartNumberQualifier4 */
    public $partNumber4;

    /** @var string Product description of the item */
    public $partDescription1;

    /** @var string Additional product description of the item */
    public $partDescription2;

    /** @var string Code indicating the reason for the inventory adjustment */
    public $adjReasonCode;

    /** @var float Quantity of the item being adjusted */
    public $qtyAdjusted;

    /** @var string Unit of measure for the adjusted quantity */
    public $qtyAdjustedUOM;

    /** @var string Warehouse lot identification number */
    public $warehouseLotID;

    /** @var float Numeric value of weight */
    public $weight1;

    /** @var string Code qualifying the weight */
    public $weightQualifier1;

    /** @var string Unit of measure for weight */
    public $weightUOM1;

    /** @var float Numeric value of weight */
    public $weight2;

    /** @var string Code qualifying the weight */
    public $weightQualifier2;

    /** @var string Unit of measure for weight */
    public $weightUOM2;

    /** @var string Code indicating the type of inventory transaction */
    public $inventoryTransaction;

    /** @var float Dollar amount of the extended item total */
    public $extendedItemTotal;

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
        $properties->gTIN = Schema::string();
        $properties->gTIN->description = "Global Trade Item Number which is an item identifier that encompasses all product identification numbers such as UPC, EAN, ITF, etc. and can be assigned at various packing levels";
        $ownerSchema->addPropertyMapping('GTIN', self::names()->gTIN);
        $properties->uPCCaseCode = Schema::string();
        $properties->uPCCaseCode->description = "Package or case level product identification number";
        $ownerSchema->addPropertyMapping('UPCCaseCode', self::names()->uPCCaseCode);
        $properties->natlDrugCode = Schema::string();
        $properties->natlDrugCode->description = "National Drug Code or NDC is a unique, universal product identifier for drugs. Primarily used in the pharmaceutical industry";
        $ownerSchema->addPropertyMapping('NatlDrugCode', self::names()->natlDrugCode);
        $properties->partNumberQualifier1 = Schema::string();
        $properties->partNumberQualifier1->enum = array(
            self::AR,
            self::B8,
            self::BO,
            self::CB,
            self::IS,
            self::IT,
            self::MF,
            self::MG,
            self::MN,
            self::SE,
            self::SK,
            self::UP,
            self::VP,
        );
        $properties->partNumberQualifier1->description = "Qualifier describing the additional product identification number";
        $ownerSchema->addPropertyMapping('PartNumberQualifier1', self::names()->partNumberQualifier1);
        $properties->partNumber1 = Schema::string();
        $properties->partNumber1->description = "Additional product identification number as described by the PartNumberQualifier1";
        $ownerSchema->addPropertyMapping('PartNumber1', self::names()->partNumber1);
        $properties->partNumberQualifier2 = Schema::string();
        $properties->partNumberQualifier2->enum = array(
            self::AR,
            self::B8,
            self::BO,
            self::CB,
            self::IS,
            self::IT,
            self::MF,
            self::MG,
            self::MN,
            self::SE,
            self::SK,
            self::UP,
            self::VP,
        );
        $properties->partNumberQualifier2->description = "Qualifier describing the additional product identification number";
        $ownerSchema->addPropertyMapping('PartNumberQualifier2', self::names()->partNumberQualifier2);
        $properties->partNumber2 = Schema::string();
        $properties->partNumber2->description = "Additional product identification number as described by the PartNumberQualifier2";
        $ownerSchema->addPropertyMapping('PartNumber2', self::names()->partNumber2);
        $properties->partNumberQualifier3 = Schema::string();
        $properties->partNumberQualifier3->enum = array(
            self::AR,
            self::B8,
            self::BO,
            self::CB,
            self::IS,
            self::IT,
            self::MF,
            self::MG,
            self::MN,
            self::SE,
            self::SK,
            self::UP,
            self::VP,
        );
        $properties->partNumberQualifier3->description = "Qualifier describing the additional product identification number";
        $ownerSchema->addPropertyMapping('PartNumberQualifier3', self::names()->partNumberQualifier3);
        $properties->partNumber3 = Schema::string();
        $properties->partNumber3->description = "Additional product identification number as described by the PartNumberQualifier3";
        $ownerSchema->addPropertyMapping('PartNumber3', self::names()->partNumber3);
        $properties->partNumberQualifier4 = Schema::string();
        $properties->partNumberQualifier4->enum = array(
            self::AR,
            self::B8,
            self::BO,
            self::CB,
            self::IS,
            self::IT,
            self::MF,
            self::MG,
            self::MN,
            self::SE,
            self::SK,
            self::UP,
            self::VP,
        );
        $properties->partNumberQualifier4->description = "Qualifier describing the additional product identification number";
        $ownerSchema->addPropertyMapping('PartNumberQualifier4', self::names()->partNumberQualifier4);
        $properties->partNumber4 = Schema::string();
        $properties->partNumber4->description = "Additional product identification number as described by the PartNumberQualifier4";
        $ownerSchema->addPropertyMapping('PartNumber4', self::names()->partNumber4);
        $properties->partDescription1 = Schema::string();
        $properties->partDescription1->description = "Product description of the item";
        $ownerSchema->addPropertyMapping('PartDescription1', self::names()->partDescription1);
        $properties->partDescription2 = Schema::string();
        $properties->partDescription2->description = "Additional product description of the item";
        $ownerSchema->addPropertyMapping('PartDescription2', self::names()->partDescription2);
        $properties->adjReasonCode = Schema::string();
        $properties->adjReasonCode->enum = array(
            self::CONST_03,
            self::CONST_04,
            self::CONST_05,
            self::CONST_06,
            self::CONST_07,
            self::CONST_08,
            self::CONST_51,
            self::CONST_52,
            self::CONST_53,
            self::CONST_54,
            self::CONST_55,
            self::CONST_56,
            self::CONST_88,
            self::AA,
            self::AB,
            self::AC,
            self::AD,
            self::AE,
            self::AF,
            self::AG,
            self::AH,
            self::AI,
            self::AJ,
            self::AK,
            self::AL,
            self::AM,
            self::AN,
            self::AP,
            self::AQ,
            self::AR,
            self::_AS,
            self::AT,
            self::AU,
            self::AV,
            self::AW,
            self::AX,
            self::AY,
            self::BA,
            self::BD,
            self::BK,
            self::BM,
            self::BN,
            self::BR,
            self::BS,
            self::BT,
            self::CD,
            self::CO,
            self::CR,
            self::CS,
            self::PC,
            self::TC,
            self::UD,
        );
        $properties->adjReasonCode->description = "Code indicating the reason for the inventory adjustment";
        $ownerSchema->addPropertyMapping('AdjReasonCode', self::names()->adjReasonCode);
        $properties->qtyAdjusted = Schema::number();
        $properties->qtyAdjusted->description = "Quantity of the item being adjusted";
        $ownerSchema->addPropertyMapping('QtyAdjusted', self::names()->qtyAdjusted);
        $properties->qtyAdjustedUOM = Schema::string();
        $properties->qtyAdjustedUOM->enum = array(
            self::BG,
            self::BX,
            self::CA,
            self::CT,
            self::DZ,
            self::EA,
            self::FT,
            self::GA,
            self::KG,
            self::LB,
            self::LT,
            self::OZ,
            self::PC,
            self::PK,
            self::RL,
            self::SF,
            self::YD,
        );
        $properties->qtyAdjustedUOM->description = "Unit of measure for the adjusted quantity";
        $ownerSchema->addPropertyMapping('QtyAdjustedUOM', self::names()->qtyAdjustedUOM);
        $properties->warehouseLotID = Schema::string();
        $properties->warehouseLotID->description = "Warehouse lot identification number";
        $ownerSchema->addPropertyMapping('WarehouseLotID', self::names()->warehouseLotID);
        $properties->weight1 = Schema::number();
        $properties->weight1->description = "Numeric value of weight";
        $ownerSchema->addPropertyMapping('Weight1', self::names()->weight1);
        $properties->weightQualifier1 = Schema::string();
        $properties->weightQualifier1->enum = array(
            self::G,
            self::N,
        );
        $properties->weightQualifier1->description = "Code qualifying the weight";
        $ownerSchema->addPropertyMapping('WeightQualifier1', self::names()->weightQualifier1);
        $properties->weightUOM1 = Schema::string();
        $properties->weightUOM1->enum = array(
            self::CONST_01,
            self::GR,
            self::KG,
            self::LB,
            self::OZ,
            self::TO,
        );
        $properties->weightUOM1->description = "Unit of measure for weight";
        $ownerSchema->addPropertyMapping('WeightUOM1', self::names()->weightUOM1);
        $properties->weight2 = Schema::number();
        $properties->weight2->description = "Numeric value of weight";
        $ownerSchema->addPropertyMapping('Weight2', self::names()->weight2);
        $properties->weightQualifier2 = Schema::string();
        $properties->weightQualifier2->enum = array(
            self::G,
            self::N,
        );
        $properties->weightQualifier2->description = "Code qualifying the weight";
        $ownerSchema->addPropertyMapping('WeightQualifier2', self::names()->weightQualifier2);
        $properties->weightUOM2 = Schema::string();
        $properties->weightUOM2->enum = array(
            self::CONST_01,
            self::GR,
            self::KG,
            self::LB,
            self::OZ,
            self::TO,
        );
        $properties->weightUOM2->description = "Unit of measure for weight";
        $ownerSchema->addPropertyMapping('WeightUOM2', self::names()->weightUOM2);
        $properties->inventoryTransaction = Schema::string();
        $properties->inventoryTransaction->enum = array(
            self::AD,
            self::TF,
        );
        $properties->inventoryTransaction->description = "Code indicating the type of inventory transaction";
        $ownerSchema->addPropertyMapping('InventoryTransaction', self::names()->inventoryTransaction);
        $properties->extendedItemTotal = Schema::number();
        $properties->extendedItemTotal->description = "Dollar amount of the extended item total";
        $ownerSchema->addPropertyMapping('ExtendedItemTotal', self::names()->extendedItemTotal);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the line item level of the transaction";
        $ownerSchema->required = array(
            'AdjReasonCode',
            'QtyAdjusted',
            'QtyAdjustedUOM',
        );
    }
}