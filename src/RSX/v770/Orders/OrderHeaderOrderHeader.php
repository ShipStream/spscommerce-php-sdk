<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Orders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderHeaderOrderHeader extends ClassStructure
{
    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Identifying number for the purchase order assigned by the buying organization */
    public $purchaseOrderNumber;

    /** @var string Identifying number for a warehouse shipping order assigned by the depositor */
    public $depositorOrderNumber;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

    /** @var string Code indicating the specific details regarding the ordering document */
    public $primaryPOTypeCode;

    /** @var string Free form text to describe the specific details regarding the ordering document */
    public $primaryPOTypeDescription;

    /** @var OrderHeaderOrderHeaderAdditionalPOTypeCodesItems[]|array */
    public $additionalPOTypeCodes;

    /** @var string Identifying number for the purchase order relating back to the original blanket order */
    public $releaseNumber;

    /** @var string Date the purchase order was created */
    public $purchaseOrderDate;

    /** @var string Time the purchase order was created */
    public $purchaseOrderTime;

    /** @var string */
    public $contractType;

    /** @var string Used to indicate a specific requirement of the sale */
    public $salesRequirementCode;

    /** @var string Code defining the vendor's status of the order as well as how much detail is being provided in the acknowledgement */
    public $acknowledgementType;

    /** @var string Code that identifies the type of Invoice */
    public $invoiceTypeCode;

    /** @var string Code to identify a specific requirement or agreement of sale. Should only be used to indicate if an item can be placed on backorder */
    public $shipCompleteCode;

    /** @var string Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $buyersCurrency;

    /** @var string Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $sellersCurrency;

    /** @var float The rate to be applied to convert one currency to another */
    public $exchangeRate;

    /** @var string Name or number identifying an area wherein merchandise is categorized within a store */
    public $department;

    /** @var string Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store */
    public $departmentDescription;

    /** @var string Number assigned by buyer that uniquely identifies the vendor */
    public $vendor;

    /** @var string Project number assigned to a standard reorder purchase order */
    public $jobNumber;

    /** @var string Different entities belonging to the same parent company */
    public $division;

    /** @var string End consumer's account number */
    public $customerAccountNumber;

    /** @var string End consumer's order number */
    public $customerOrderNumber;

    /** @var string Used to communicate the version number of the current document */
    public $documentVersion;

    /** @var string Used to communicate the revision number of the current document */
    public $documentRevision;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->tradingPartnerId = Schema::string();
        $properties->tradingPartnerId->description = "Unique internal identifier defined by SPS Commerce which identifies the relationship";
        $properties->tradingPartnerId->maxLength = 15;
        $properties->tradingPartnerId->minLength = 1;
        $ownerSchema->addPropertyMapping('TradingPartnerId', self::names()->tradingPartnerId);
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->description = "Identifying number for the purchase order assigned by the buying organization";
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->depositorOrderNumber = Schema::string();
        $properties->depositorOrderNumber->description = "Identifying number for a warehouse shipping order assigned by the depositor";
        $ownerSchema->addPropertyMapping('DepositorOrderNumber', self::names()->depositorOrderNumber);
        $properties->tsetPurposeCode = Schema::string();
        $properties->tsetPurposeCode->description = "Code identifying purpose or function of the transmission";
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->primaryPOTypeCode = Schema::string();
        $properties->primaryPOTypeCode->description = "Code indicating the specific details regarding the ordering document";
        $ownerSchema->addPropertyMapping('PrimaryPOTypeCode', self::names()->primaryPOTypeCode);
        $properties->primaryPOTypeDescription = Schema::string();
        $properties->primaryPOTypeDescription->description = "Free form text to describe the specific details regarding the ordering document";
        $ownerSchema->addPropertyMapping('PrimaryPOTypeDescription', self::names()->primaryPOTypeDescription);
        $properties->additionalPOTypeCodes = Schema::arr();
        $properties->additionalPOTypeCodes->items = OrderHeaderOrderHeaderAdditionalPOTypeCodesItems::schema();
        $ownerSchema->addPropertyMapping('AdditionalPOTypeCodes', self::names()->additionalPOTypeCodes);
        $properties->releaseNumber = Schema::string();
        $properties->releaseNumber->description = "Identifying number for the purchase order relating back to the original blanket order";
        $ownerSchema->addPropertyMapping('ReleaseNumber', self::names()->releaseNumber);
        $properties->purchaseOrderDate = Schema::string();
        $properties->purchaseOrderDate->description = "Date the purchase order was created";
        $properties->purchaseOrderDate->format = "date";
        $ownerSchema->addPropertyMapping('PurchaseOrderDate', self::names()->purchaseOrderDate);
        $properties->purchaseOrderTime = Schema::string();
        $properties->purchaseOrderTime->description = "Time the purchase order was created";
        $properties->purchaseOrderTime->format = "time";
        $ownerSchema->addPropertyMapping('PurchaseOrderTime', self::names()->purchaseOrderTime);
        $properties->contractType = Schema::string();
        $ownerSchema->addPropertyMapping('ContractType', self::names()->contractType);
        $properties->salesRequirementCode = Schema::string();
        $properties->salesRequirementCode->description = "Used to indicate a specific requirement of the sale";
        $ownerSchema->addPropertyMapping('SalesRequirementCode', self::names()->salesRequirementCode);
        $properties->acknowledgementType = Schema::string();
        $properties->acknowledgementType->description = "Code defining the vendor's status of the order as well as how much detail is being provided in the acknowledgement";
        $ownerSchema->addPropertyMapping('AcknowledgementType', self::names()->acknowledgementType);
        $properties->invoiceTypeCode = Schema::string();
        $properties->invoiceTypeCode->description = "Code that identifies the type of Invoice";
        $ownerSchema->addPropertyMapping('InvoiceTypeCode', self::names()->invoiceTypeCode);
        $properties->shipCompleteCode = Schema::string();
        $properties->shipCompleteCode->description = "Code to identify a specific requirement or agreement of sale. Should only be used to indicate if an item can be placed on backorder";
        $ownerSchema->addPropertyMapping('ShipCompleteCode', self::names()->shipCompleteCode);
        $properties->buyersCurrency = Schema::string();
        $properties->buyersCurrency->description = "Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('BuyersCurrency', self::names()->buyersCurrency);
        $properties->sellersCurrency = Schema::string();
        $properties->sellersCurrency->description = "Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('SellersCurrency', self::names()->sellersCurrency);
        $properties->exchangeRate = Schema::number();
        $properties->exchangeRate->description = "The rate to be applied to convert one currency to another";
        $ownerSchema->addPropertyMapping('ExchangeRate', self::names()->exchangeRate);
        $properties->department = Schema::string();
        $properties->department->description = "Name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('Department', self::names()->department);
        $properties->departmentDescription = Schema::string();
        $properties->departmentDescription->description = "Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('DepartmentDescription', self::names()->departmentDescription);
        $properties->vendor = Schema::string();
        $properties->vendor->description = "Number assigned by buyer that uniquely identifies the vendor";
        $ownerSchema->addPropertyMapping('Vendor', self::names()->vendor);
        $properties->jobNumber = Schema::string();
        $properties->jobNumber->description = "Project number assigned to a standard reorder purchase order";
        $ownerSchema->addPropertyMapping('JobNumber', self::names()->jobNumber);
        $properties->division = Schema::string();
        $properties->division->description = "Different entities belonging to the same parent company";
        $ownerSchema->addPropertyMapping('Division', self::names()->division);
        $properties->customerAccountNumber = Schema::string();
        $properties->customerAccountNumber->description = "End consumer's account number";
        $ownerSchema->addPropertyMapping('CustomerAccountNumber', self::names()->customerAccountNumber);
        $properties->customerOrderNumber = Schema::string();
        $properties->customerOrderNumber->description = "End consumer's order number";
        $ownerSchema->addPropertyMapping('CustomerOrderNumber', self::names()->customerOrderNumber);
        $properties->documentVersion = Schema::string();
        $properties->documentVersion->description = "Used to communicate the version number of the current document";
        $ownerSchema->addPropertyMapping('DocumentVersion', self::names()->documentVersion);
        $properties->documentRevision = Schema::string();
        $properties->documentRevision->description = "Used to communicate the revision number of the current document";
        $ownerSchema->addPropertyMapping('DocumentRevision', self::names()->documentRevision);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'TradingPartnerId',
            'PurchaseOrderNumber',
        );
    }
}