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
    /** @var string */
    public $tradingPartnerId;

    /** @var string */
    public $documentId;

    /** @var string */
    public $recordType;

    /** @var string */
    public $lineSequenceNumber;

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
        $ownerSchema->addPropertyMapping('DocumentId', self::names()->documentId);
        $properties->recordType = Schema::string();
        $ownerSchema->addPropertyMapping('RecordType', self::names()->recordType);
        $properties->lineSequenceNumber = Schema::string();
        $ownerSchema->addPropertyMapping('LineSequenceNumber', self::names()->lineSequenceNumber);
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
        $properties->partDescription1 = Schema::string();
        $ownerSchema->addPropertyMapping('PartDescription1', self::names()->partDescription1);
        $properties->partDescription2 = Schema::string();
        $ownerSchema->addPropertyMapping('PartDescription2', self::names()->partDescription2);
        $properties->adjReasonCode = Schema::string();
        $ownerSchema->addPropertyMapping('AdjReasonCode', self::names()->adjReasonCode);
        $properties->qtyAdjusted = Schema::number();
        $ownerSchema->addPropertyMapping('QtyAdjusted', self::names()->qtyAdjusted);
        $properties->qtyAdjustedUOM = Schema::string();
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
            'TradingPartnerId',
            'DocumentId',
            'RecordType',
            'LineSequenceNumber',
            'BuyerPartNumber',
            'VendorPartNumber',
            'ConsumerPackageCode',
            'GTIN',
            'UPCCaseCode',
            'NatlDrugCode',
            'PartNumberQualifier1',
            'PartNumber1',
            'PartNumberQualifier2',
            'PartNumber2',
            'PartNumberQualifier3',
            'PartNumber3',
            'PartNumberQualifier4',
            'PartNumber4',
            'PartDescription1',
            'PartDescription2',
            'AdjReasonCode',
            'QtyAdjusted',
            'QtyAdjustedUOM',
            'WarehouseLotID',
            'Weight1',
            'WeightQualifier1',
            'WeightUOM1',
            'Weight2',
            'WeightQualifier2',
            'WeightUOM2',
            'InventoryTransaction',
            'ExtendedItemTotal',
        );
    }
}