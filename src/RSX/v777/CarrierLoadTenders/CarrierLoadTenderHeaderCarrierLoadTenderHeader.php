<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierLoadTenders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Contains the commonly used fields in the header of the transaction
 */
class CarrierLoadTenderHeaderCarrierLoadTenderHeader extends ClassStructure
{
    const CONST_00 = '00';

    const CONST_01 = '01';

    const CONST_05 = '05';

    const CONST_06 = '06';

    const CONST_07 = '07';

    const CONST_20 = '20';

    const CN = 'CN';

    const B = 'B';

    const L = 'L';

    const U = 'U';

    const CONST_50 = '50';

    const AF = 'AF';

    const CD = 'CD';

    const CW = 'CW';

    const DG = 'DG';

    const GR = 'GR';

    const HK = 'HK';

    const KG = 'KG';

    const LB = 'LB';

    const LG = 'LG';

    const MC = 'MC';

    const ME = 'ME';

    const MP = 'MP';

    const NS = 'NS';

    const OZ = 'OZ';

    const QS = 'QS';

    const TO = 'TO';

    const BL = 'BL';

    const LT = 'LT';

    const MF = 'MF';

    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Identification number assigned to the shipment by the shipper that uniquely identifies the shipment from origin to ultimate destination and is not subject to modification */
    public $shipmentIdentification;

    /** @var string Code identifying purpose or function of the transmission */
    public $tsetPurposeCode;

    /** @var string Official code assigned to a location by a governing body, such as the National Motor Freight Traffic Association [NMFTA] or Canadian Transportation Agency ]CTA], used for ratemaking purposes */
    public $standardPointLocationCode;

    /** @var string Code defining relationship of this shipment with respect to other shipments given to the carrier at the same time */
    public $shipmentQualifier;

    /** @var string Code value of the total weight of the shipment */
    public $shipmentWeightUOM;

    /** @var string Code indicating additional details regarding the type of transaction */
    public $loadTenderTypeCode;

    /** @var string Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $buyersCurrency;

    /** @var string Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $sellersCurrency;

    /** @var float The rate to be applied to convert one currency to another */
    public $exchangeRate;

    /** @var string Number assigned by buyer that uniquely identifies the vendor */
    public $vendor;

    /** @var string Name or number identifying an area wherein merchandise is categorized within a store */
    public $department;

    /** @var string Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store */
    public $departmentDescription;

    /** @var string Reference number assigned by the carrier */
    public $carrierProNumber;

    /** @var string A shipper assigned number that outlines the ownership, terms of carriage and is a receipt of goods */
    public $billOfLadingNumber;

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
        $properties->shipmentIdentification = Schema::string();
        $properties->shipmentIdentification->description = "Identification number assigned to the shipment by the shipper that uniquely identifies the shipment from origin to ultimate destination and is not subject to modification";
        $ownerSchema->addPropertyMapping('ShipmentIdentification', self::names()->shipmentIdentification);
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
        $properties->standardPointLocationCode = Schema::string();
        $properties->standardPointLocationCode->description = "Official code assigned to a location by a governing body, such as the National Motor Freight Traffic Association [NMFTA] or Canadian Transportation Agency ]CTA], used for ratemaking purposes";
        $ownerSchema->addPropertyMapping('StandardPointLocationCode', self::names()->standardPointLocationCode);
        $properties->shipmentQualifier = Schema::string();
        $properties->shipmentQualifier->enum = array(
            self::B,
            self::L,
            self::U,
        );
        $properties->shipmentQualifier->description = "Code defining relationship of this shipment with respect to other shipments given to the carrier at the same time";
        $ownerSchema->addPropertyMapping('ShipmentQualifier', self::names()->shipmentQualifier);
        $properties->shipmentWeightUOM = Schema::string();
        $properties->shipmentWeightUOM->enum = array(
            self::CONST_01,
            self::CONST_50,
            self::AF,
            self::CD,
            self::CW,
            self::DG,
            self::GR,
            self::HK,
            self::KG,
            self::LB,
            self::LG,
            self::MC,
            self::ME,
            self::MP,
            self::NS,
            self::OZ,
            self::QS,
            self::TO,
        );
        $properties->shipmentWeightUOM->description = "Code value of the total weight of the shipment";
        $ownerSchema->addPropertyMapping('ShipmentWeightUOM', self::names()->shipmentWeightUOM);
        $properties->loadTenderTypeCode = Schema::string();
        $properties->loadTenderTypeCode->enum = array(
            self::BL,
            self::LT,
            self::MF,
        );
        $properties->loadTenderTypeCode->description = "Code indicating additional details regarding the type of transaction";
        $ownerSchema->addPropertyMapping('LoadTenderTypeCode', self::names()->loadTenderTypeCode);
        $properties->buyersCurrency = Schema::string();
        $properties->buyersCurrency->description = "Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('BuyersCurrency', self::names()->buyersCurrency);
        $properties->sellersCurrency = Schema::string();
        $properties->sellersCurrency->description = "Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('SellersCurrency', self::names()->sellersCurrency);
        $properties->exchangeRate = Schema::number();
        $properties->exchangeRate->description = "The rate to be applied to convert one currency to another";
        $ownerSchema->addPropertyMapping('ExchangeRate', self::names()->exchangeRate);
        $properties->vendor = Schema::string();
        $properties->vendor->description = "Number assigned by buyer that uniquely identifies the vendor";
        $ownerSchema->addPropertyMapping('Vendor', self::names()->vendor);
        $properties->department = Schema::string();
        $properties->department->description = "Name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('Department', self::names()->department);
        $properties->departmentDescription = Schema::string();
        $properties->departmentDescription->description = "Free form text to describe the name or number identifying an area wherein merchandise is categorized within a store";
        $ownerSchema->addPropertyMapping('DepartmentDescription', self::names()->departmentDescription);
        $properties->carrierProNumber = Schema::string();
        $properties->carrierProNumber->description = "Reference number assigned by the carrier";
        $ownerSchema->addPropertyMapping('CarrierProNumber', self::names()->carrierProNumber);
        $properties->billOfLadingNumber = Schema::string();
        $properties->billOfLadingNumber->description = "A shipper assigned number that outlines the ownership, terms of carriage and is a receipt of goods";
        $ownerSchema->addPropertyMapping('BillOfLadingNumber', self::names()->billOfLadingNumber);
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
        $ownerSchema->description = "Contains the commonly used fields in the header of the transaction";
        $ownerSchema->required = array(
            'TradingPartnerId',
            'ShipmentIdentification',
        );
    }
}