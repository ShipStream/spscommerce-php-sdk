<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetail;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierFreightDetailHeaderOrderHeader extends ClassStructure
{
    /** @var string Unique internal identifier defined by SPS Commerce which identifies the relationship */
    public $tradingPartnerId;

    /** @var string Unique identifier assigned by the billing party */
    public $invoiceNumber;

    /** @var string Identification number assigned to the shipment by the shipper that uniquely identifies the shipment from origin to ultimate destination and is not subject to modification */
    public $shipmentIdentification;

    /** @var string Code indicating the reason of the updated transmission */
    public $correctionIndicator;

    /** @var string Code defining relationship of this shipment with respect to other shipments given to the carrier at the same time */
    public $shipmentQualifier;

    /** @var string Date Invoice was created */
    public $invoiceDate;

    /** @var string Official code assigned to a location by a governing body, such as the National Motor Freight Traffic Association [NMFTA] or Canadian Transportation Agency ]CTA], used for ratemaking purposes */
    public $standardPointLocationCode;

    /** @var string Buyers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $buyersCurrency;

    /** @var string Sellers Alpha ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $sellersCurrency;

    /** @var float The rate to be applied to convert one currency to another */
    public $exchangeRate;

    /** @var string Number assigned by buyer that uniquely identifies the vendor */
    public $vendor;

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
        $properties->shipmentIdentification = Schema::string();
        $properties->shipmentIdentification->description = "Identification number assigned to the shipment by the shipper that uniquely identifies the shipment from origin to ultimate destination and is not subject to modification";
        $ownerSchema->addPropertyMapping('ShipmentIdentification', self::names()->shipmentIdentification);
        $properties->correctionIndicator = Schema::string();
        $properties->correctionIndicator->description = "Code indicating the reason of the updated transmission";
        $ownerSchema->addPropertyMapping('CorrectionIndicator', self::names()->correctionIndicator);
        $properties->shipmentQualifier = Schema::string();
        $properties->shipmentQualifier->description = "Code defining relationship of this shipment with respect to other shipments given to the carrier at the same time";
        $ownerSchema->addPropertyMapping('ShipmentQualifier', self::names()->shipmentQualifier);
        $properties->invoiceDate = Schema::string();
        $properties->invoiceDate->description = "Date Invoice was created";
        $properties->invoiceDate->format = "date";
        $ownerSchema->addPropertyMapping('InvoiceDate', self::names()->invoiceDate);
        $properties->standardPointLocationCode = Schema::string();
        $properties->standardPointLocationCode->description = "Official code assigned to a location by a governing body, such as the National Motor Freight Traffic Association [NMFTA] or Canadian Transportation Agency ]CTA], used for ratemaking purposes";
        $ownerSchema->addPropertyMapping('StandardPointLocationCode', self::names()->standardPointLocationCode);
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
            'InvoiceNumber',
        );
    }
}