<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Invoices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Contains the commonly used fields in the header of the transaction
 */
class InvoiceHeaderInvoiceHeader extends ClassStructure
{
    const CONST_26 = '26';

    const BH = 'BH';

    const BK = 'BK';

    const CF = 'CF';

    const CN = 'CN';

    const DS = 'DS';

    const EO = 'EO';

    const IM = 'IM';

    const IN = 'IN';

    const KC = 'KC';

    const KN = 'KN';

    const NP = 'NP';

    const NS = 'NS';

    const OS = 'OS';

    const PR = 'PR';

    const RE = 'RE';

    const RL = 'RL';

    const RO = 'RO';

    const SA = 'SA';

    const SD = 'SD';

    const SP = 'SP';

    const SS = 'SS';

    const TS = 'TS';

    const WH = 'WH';

    const WO = 'WO';

    const CR = 'CR';

    const DR = 'DR';

    const PRO = 'PRO';

    const SELF = 'SELF';

    const U5 = 'U5';

    const CONST_00 = '00';

    const CONST_01 = '01';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_07 = '07';

    const CONST_20 = '20';

    const CONST_1 = '1';

    const CONST_2 = '2';

    const CONST_3 = '3';

    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Unique identifier assigned by the billing party */
    public $invoiceNumber;

    /** @var string Date Invoice was created */
    public $invoiceDate;

    /** @var string Time invoice was created */
    public $invoiceTime;

    /** @var string Date the purchase order was created */
    public $purchaseOrderDate;

    /** @var string Identifying number for the purchase order assigned by the buying organization */
    public $purchaseOrderNumber;

    /** @var string Code indicating the specific details regarding the ordering document */
    public $primaryPOTypeCode;

    /** @var string Free form text to describe the specific details regarding the ordering document */
    public $primaryPOTypeDescription;

    /** @var InvoiceHeaderInvoiceHeaderAdditionalPOTypeCodesItems[]|array */
    public $additionalPOTypeCodes;

    /** @var string Identifying number for the purchase order relating back to the original blanket order */
    public $releaseNumber;

    /** @var string Code that identifies the type of Invoice */
    public $invoiceTypeCode;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

    /** @var string Code indicating the type of action */
    public $actionCode;

    /** @var string Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $buyersCurrency;

    /** @var string Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $sellersCurrency;

    /** @var float The rate to be applied to convert one currency to another */
    public $exchangeRate;

    /** @var string ERP generated number assigned as unique identifier for each incoming order */
    public $internalOrderNumber;

    /** @var string ERP generated internal date for each incoming order */
    public $internalOrderDate;

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

    /** @var string Reference number assigned by the carrier */
    public $carrierProNumber;

    /** @var string A shipper assigned number that outlines the ownership, terms of carriage and is a receipt of goods */
    public $billOfLadingNumber;

    /** @var string Date shipment will leave the ship from location */
    public $shipDate;

    /** @var string Time the shipment left the ship-from location */
    public $shipTime;

    /** @var string Date the shipment arrived at its location */
    public $shipDeliveryDate;

    /** @var string Time the shipment arrived at its location */
    public $shipDeliveryTime;

    /** @var string Code designating the language used in text. ISO 639 language code */
    public $languageCode;

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
        $properties->invoiceNumber = Schema::string();
        $properties->invoiceNumber->description = "Unique identifier assigned by the billing party";
        $ownerSchema->addPropertyMapping('InvoiceNumber', self::names()->invoiceNumber);
        $properties->invoiceDate = Schema::string();
        $properties->invoiceDate->description = "Date Invoice was created";
        $properties->invoiceDate->format = "date";
        $ownerSchema->addPropertyMapping('InvoiceDate', self::names()->invoiceDate);
        $properties->invoiceTime = Schema::string();
        $properties->invoiceTime->description = "Time invoice was created";
        $properties->invoiceTime->format = "time";
        $ownerSchema->addPropertyMapping('InvoiceTime', self::names()->invoiceTime);
        $properties->purchaseOrderDate = Schema::string();
        $properties->purchaseOrderDate->description = "Date the purchase order was created";
        $properties->purchaseOrderDate->format = "date";
        $ownerSchema->addPropertyMapping('PurchaseOrderDate', self::names()->purchaseOrderDate);
        $properties->purchaseOrderNumber = Schema::string();
        $properties->purchaseOrderNumber->description = "Identifying number for the purchase order assigned by the buying organization";
        $ownerSchema->addPropertyMapping('PurchaseOrderNumber', self::names()->purchaseOrderNumber);
        $properties->primaryPOTypeCode = Schema::string();
        $properties->primaryPOTypeCode->enum = array(
            self::CONST_26,
            self::BH,
            self::BK,
            self::CF,
            self::CN,
            self::DS,
            self::EO,
            self::IM,
            self::IN,
            self::KC,
            self::KN,
            self::NP,
            self::NS,
            self::OS,
            self::PR,
            self::RE,
            self::RL,
            self::RO,
            self::SA,
            self::SD,
            self::SP,
            self::SS,
            self::TS,
            self::WH,
            self::WO,
        );
        $properties->primaryPOTypeCode->description = "Code indicating the specific details regarding the ordering document";
        $ownerSchema->addPropertyMapping('PrimaryPOTypeCode', self::names()->primaryPOTypeCode);
        $properties->primaryPOTypeDescription = Schema::string();
        $properties->primaryPOTypeDescription->description = "Free form text to describe the specific details regarding the ordering document";
        $ownerSchema->addPropertyMapping('PrimaryPOTypeDescription', self::names()->primaryPOTypeDescription);
        $properties->additionalPOTypeCodes = Schema::arr();
        $properties->additionalPOTypeCodes->items = InvoiceHeaderInvoiceHeaderAdditionalPOTypeCodesItems::schema();
        $ownerSchema->addPropertyMapping('AdditionalPOTypeCodes', self::names()->additionalPOTypeCodes);
        $properties->releaseNumber = Schema::string();
        $properties->releaseNumber->description = "Identifying number for the purchase order relating back to the original blanket order";
        $ownerSchema->addPropertyMapping('ReleaseNumber', self::names()->releaseNumber);
        $properties->invoiceTypeCode = Schema::string();
        $properties->invoiceTypeCode->enum = array(
            self::CR,
            self::DR,
            self::PRO,
            self::SELF,
            self::U5,
        );
        $properties->invoiceTypeCode->description = "Code that identifies the type of Invoice";
        $ownerSchema->addPropertyMapping('InvoiceTypeCode', self::names()->invoiceTypeCode);
        $properties->tsetPurposeCode = Schema::string();
        $properties->tsetPurposeCode->enum = array(
            self::CONST_00,
            self::CONST_01,
            self::CONST_05,
            self::CONST_06,
            self::CONST_07,
            self::CONST_20,
            self::CN,
        );
        $properties->tsetPurposeCode->description = "Code identifying purpose or function of the transmission";
        $ownerSchema->addPropertyMapping('TsetPurposeCode', self::names()->tsetPurposeCode);
        $properties->actionCode = Schema::string();
        $properties->actionCode->enum = array(
            self::CONST_1,
            self::CONST_2,
            self::CONST_3,
        );
        $properties->actionCode->description = "Code indicating the type of action";
        $ownerSchema->addPropertyMapping('ActionCode', self::names()->actionCode);
        $properties->buyersCurrency = Schema::string();
        $properties->buyersCurrency->description = "Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('BuyersCurrency', self::names()->buyersCurrency);
        $properties->sellersCurrency = Schema::string();
        $properties->sellersCurrency->description = "Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('SellersCurrency', self::names()->sellersCurrency);
        $properties->exchangeRate = Schema::number();
        $properties->exchangeRate->description = "The rate to be applied to convert one currency to another";
        $ownerSchema->addPropertyMapping('ExchangeRate', self::names()->exchangeRate);
        $properties->internalOrderNumber = Schema::string();
        $properties->internalOrderNumber->description = "ERP generated number assigned as unique identifier for each incoming order";
        $ownerSchema->addPropertyMapping('InternalOrderNumber', self::names()->internalOrderNumber);
        $properties->internalOrderDate = Schema::string();
        $properties->internalOrderDate->description = "ERP generated internal date for each incoming order";
        $properties->internalOrderDate->format = "date";
        $ownerSchema->addPropertyMapping('InternalOrderDate', self::names()->internalOrderDate);
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
        $properties->carrierProNumber = Schema::string();
        $properties->carrierProNumber->description = "Reference number assigned by the carrier";
        $ownerSchema->addPropertyMapping('CarrierProNumber', self::names()->carrierProNumber);
        $properties->billOfLadingNumber = Schema::string();
        $properties->billOfLadingNumber->description = "A shipper assigned number that outlines the ownership, terms of carriage and is a receipt of goods";
        $ownerSchema->addPropertyMapping('BillOfLadingNumber', self::names()->billOfLadingNumber);
        $properties->shipDate = Schema::string();
        $properties->shipDate->description = "Date shipment will leave the ship from location";
        $properties->shipDate->format = "date";
        $ownerSchema->addPropertyMapping('ShipDate', self::names()->shipDate);
        $properties->shipTime = Schema::string();
        $properties->shipTime->description = "Time the shipment left the ship-from location";
        $properties->shipTime->format = "time";
        $ownerSchema->addPropertyMapping('ShipTime', self::names()->shipTime);
        $properties->shipDeliveryDate = Schema::string();
        $properties->shipDeliveryDate->description = "Date the shipment arrived at its location";
        $properties->shipDeliveryDate->format = "date";
        $ownerSchema->addPropertyMapping('ShipDeliveryDate', self::names()->shipDeliveryDate);
        $properties->shipDeliveryTime = Schema::string();
        $properties->shipDeliveryTime->description = "Time the shipment arrived at its location";
        $properties->shipDeliveryTime->format = "time";
        $ownerSchema->addPropertyMapping('ShipDeliveryTime', self::names()->shipDeliveryTime);
        $properties->languageCode = Schema::string();
        $properties->languageCode->description = "Code designating the language used in text. ISO 639 language code";
        $ownerSchema->addPropertyMapping('LanguageCode', self::names()->languageCode);
        $properties->documentVersion = Schema::string();
        $properties->documentVersion->description = "Used to communicate the version number of the current document";
        $ownerSchema->addPropertyMapping('DocumentVersion', self::names()->documentVersion);
        $properties->documentRevision = Schema::string();
        $properties->documentRevision->description = "Used to communicate the revision number of the current document";
        $ownerSchema->addPropertyMapping('DocumentRevision', self::names()->documentRevision);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Contains the commonly used fields in the header of the transaction";
        $ownerSchema->required = array(
            'TradingPartnerId',
            'InvoiceNumber',
        );
    }
}