<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class LineItemsLineItemItemsItemDetail extends ClassStructure
{
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

    const AR = 'AR';

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

    const EA = 'EA';

    const CA = 'CA';

    /** @var string */
    public $tradingPartnerId;

    /** @var string */
    public $documentId;

    /** @var string */
    public $purchaseOrderNumber;

    /** @var string */
    public $recordType;

    /** @var string */
    public $lineSequenceNumber;

    /** @var string */
    public $applicationId;

    /** @var string */
    public $buyerPartNumber;

    /** @var string */
    public $vendorPartNumber;

    /** @var string */
    public $consumerPackageCode;

    /** @var string */
    public $gTIN;

    /** @var string */
    public $uPCCaseCode;

    /** @var string */
    public $natlDrugCode;

    /** @var string */
    public $partNumberQualifier1;

    /** @var string */
    public $partNumber1;

    /** @var string */
    public $partNumberQualifier2;

    /** @var string */
    public $partNumber2;

    /** @var string */
    public $partNumberQualifier3;

    /** @var string */
    public $partNumber3;

    /** @var string */
    public $partNumberQualifier4;

    /** @var string */
    public $partNumber4;

    /** @var string */
    public $partNumberQualifier5;

    /** @var string */
    public $partNumber5;

    /** @var string */
    public $partNumberQualifier6;

    /** @var string */
    public $partNumber6;

    /** @var string */
    public $partNumberQualifier7;

    /** @var string */
    public $partNumber7;

    /** @var string */
    public $partNumberQualifier8;

    /** @var string */
    public $partNumber8;

    /** @var string */
    public $partNumberQualifier9;

    /** @var string */
    public $partNumber9;

    /** @var string */
    public $partNumberQualifier10;

    /** @var string */
    public $partNumber10;

    /** @var string */
    public $partDescription1;

    /** @var string */
    public $partDescription2;

    /** @var string */
    public $adjReasonCode;

    /** @var float */
    public $qtyAdjusted;

    /** @var string */
    public $qtyAdjustedUOM;

    /** @var string */
    public $warehouseLotID;

    /** @var float */
    public $weight1;

    /** @var string */
    public $weightQualifier1;

    /** @var string */
    public $weightUOM1;

    /** @var float */
    public $weight2;

    /** @var string */
    public $weightQualifier2;

    /** @var string */
    public $weightUOM2;

    /** @var string */
    public $inventoryTransaction;

    /** @var float */
    public $extendedItemTotal;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->tradingPartnerId = Schema::string();
        $ownerSchema->addPropertyMapping('TradingPartnerId', self::names()->tradingPartnerId);
        $properties->documentId = Schema::string();
        $properties->documentId->maxLength = 30;
        $ownerSchema->addPropertyMapping('DocumentId', self::names()->documentId);
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->maxLength = 30;
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->recordType = Schema::string();
        $ownerSchema->addPropertyMapping('RecordType', self::names()->recordType);
        $properties->lineSequenceNumber = Schema::string();
        $ownerSchema->addPropertyMapping('LineSequenceNumber', self::names()->lineSequenceNumber);
        $properties->applicationId = Schema::string();
        $ownerSchema->addPropertyMapping('ApplicationId', self::names()->applicationId);
        $properties->buyerPartNumber = Schema::string();
        $ownerSchema->addPropertyMapping('BuyerPartNumber', self::names()->buyerPartNumber);
        $properties->vendorPartNumber = Schema::string();
        $ownerSchema->addPropertyMapping('VendorPartNumber', self::names()->vendorPartNumber);
        $properties->consumerPackageCode = Schema::string();
        $ownerSchema->addPropertyMapping('ConsumerPackageCode', self::names()->consumerPackageCode);
        $properties->gTIN = Schema::string();
        $ownerSchema->addPropertyMapping('GTIN', self::names()->gTIN);
        $properties->uPCCaseCode = Schema::string();
        $ownerSchema->addPropertyMapping('UPCCaseCode', self::names()->uPCCaseCode);
        $properties->natlDrugCode = Schema::string();
        $ownerSchema->addPropertyMapping('NatlDrugCode', self::names()->natlDrugCode);
        $properties->partNumberQualifier1 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier1', self::names()->partNumberQualifier1);
        $properties->partNumber1 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber1', self::names()->partNumber1);
        $properties->partNumberQualifier2 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier2', self::names()->partNumberQualifier2);
        $properties->partNumber2 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber2', self::names()->partNumber2);
        $properties->partNumberQualifier3 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier3', self::names()->partNumberQualifier3);
        $properties->partNumber3 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber3', self::names()->partNumber3);
        $properties->partNumberQualifier4 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier4', self::names()->partNumberQualifier4);
        $properties->partNumber4 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber4', self::names()->partNumber4);
        $properties->partNumberQualifier5 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier5', self::names()->partNumberQualifier5);
        $properties->partNumber5 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber5', self::names()->partNumber5);
        $properties->partNumberQualifier6 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier6', self::names()->partNumberQualifier6);
        $properties->partNumber6 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber6', self::names()->partNumber6);
        $properties->partNumberQualifier7 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier7', self::names()->partNumberQualifier7);
        $properties->partNumber7 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber7', self::names()->partNumber7);
        $properties->partNumberQualifier8 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier8', self::names()->partNumberQualifier8);
        $properties->partNumber8 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber8', self::names()->partNumber8);
        $properties->partNumberQualifier9 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier9', self::names()->partNumberQualifier9);
        $properties->partNumber9 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber9', self::names()->partNumber9);
        $properties->partNumberQualifier10 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumberQualifier10', self::names()->partNumberQualifier10);
        $properties->partNumber10 = Schema::string();
        $ownerSchema->addPropertyMapping('PartNumber10', self::names()->partNumber10);
        $properties->partDescription1 = Schema::string();
        $ownerSchema->addPropertyMapping('PartDescription1', self::names()->partDescription1);
        $properties->partDescription2 = Schema::string();
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
        $ownerSchema->addPropertyMapping('AdjReasonCode', self::names()->adjReasonCode);
        $properties->qtyAdjusted = Schema::number();
        $ownerSchema->addPropertyMapping('QtyAdjusted', self::names()->qtyAdjusted);
        $properties->qtyAdjustedUOM = Schema::string();
        $properties->qtyAdjustedUOM->enum = array(
            self::EA,
            self::CA,
        );
        $ownerSchema->addPropertyMapping('QtyAdjustedUOM', self::names()->qtyAdjustedUOM);
        $properties->warehouseLotID = Schema::string();
        $ownerSchema->addPropertyMapping('WarehouseLotID', self::names()->warehouseLotID);
        $properties->weight1 = Schema::number();
        $ownerSchema->addPropertyMapping('Weight1', self::names()->weight1);
        $properties->weightQualifier1 = Schema::string();
        $ownerSchema->addPropertyMapping('WeightQualifier1', self::names()->weightQualifier1);
        $properties->weightUOM1 = Schema::string();
        $ownerSchema->addPropertyMapping('WeightUOM1', self::names()->weightUOM1);
        $properties->weight2 = Schema::number();
        $ownerSchema->addPropertyMapping('Weight2', self::names()->weight2);
        $properties->weightQualifier2 = Schema::string();
        $ownerSchema->addPropertyMapping('WeightQualifier2', self::names()->weightQualifier2);
        $properties->weightUOM2 = Schema::string();
        $ownerSchema->addPropertyMapping('WeightUOM2', self::names()->weightUOM2);
        $properties->inventoryTransaction = Schema::string();
        $ownerSchema->addPropertyMapping('InventoryTransaction', self::names()->inventoryTransaction);
        $properties->extendedItemTotal = Schema::number();
        $ownerSchema->addPropertyMapping('ExtendedItemTotal', self::names()->extendedItemTotal);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'AdjReasonCode',
            'QtyAdjusted',
            'QtyAdjustedUOM',
        );
    }
}