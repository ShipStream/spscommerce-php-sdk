<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class LineItemsLineItemItemsAddressItems extends ClassStructure
{
    /** @var string */
    public $tradingPartnerId;

    /** @var string */
    public $documentId;

    /** @var string */
    public $recordType;

    /** @var string */
    public $addressTypeCode;

    /** @var string */
    public $locationCodeQualifier;

    /** @var string */
    public $addressLocationNumber;

    /** @var string */
    public $addressName;

    /** @var string */
    public $addressAlternateName;

    /** @var string */
    public $address1;

    /** @var string */
    public $address2;

    /** @var string */
    public $address3;

    /** @var string */
    public $address4;

    /** @var string */
    public $city;

    /** @var string */
    public $state;

    /** @var string */
    public $postalCode;

    /** @var string */
    public $country;

    /** @var string */
    public $contactName;

    /** @var string */
    public $contactPhone;

    /** @var string */
    public $contactFax;

    /** @var string */
    public $contactEmail;

    /** @var string */
    public $addressTaxIdNumber;

    /** @var string */
    public $addressTaxExemptNumber;

    /** @var string */
    public $addressAlternateName2;

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
        $properties->addressTypeCode = Schema::string();
        $ownerSchema->addPropertyMapping('AddressTypeCode', self::names()->addressTypeCode);
        $properties->locationCodeQualifier = Schema::string();
        $ownerSchema->addPropertyMapping('LocationCodeQualifier', self::names()->locationCodeQualifier);
        $properties->addressLocationNumber = Schema::string();
        $ownerSchema->addPropertyMapping('AddressLocationNumber', self::names()->addressLocationNumber);
        $properties->addressName = Schema::string();
        $ownerSchema->addPropertyMapping('AddressName', self::names()->addressName);
        $properties->addressAlternateName = Schema::string();
        $ownerSchema->addPropertyMapping('AddressAlternateName', self::names()->addressAlternateName);
        $properties->address1 = Schema::string();
        $ownerSchema->addPropertyMapping('Address1', self::names()->address1);
        $properties->address2 = Schema::string();
        $ownerSchema->addPropertyMapping('Address2', self::names()->address2);
        $properties->address3 = Schema::string();
        $ownerSchema->addPropertyMapping('Address3', self::names()->address3);
        $properties->address4 = Schema::string();
        $ownerSchema->addPropertyMapping('Address4', self::names()->address4);
        $properties->city = Schema::string();
        $ownerSchema->addPropertyMapping('City', self::names()->city);
        $properties->state = Schema::string();
        $ownerSchema->addPropertyMapping('State', self::names()->state);
        $properties->postalCode = Schema::string();
        $ownerSchema->addPropertyMapping('PostalCode', self::names()->postalCode);
        $properties->country = Schema::string();
        $ownerSchema->addPropertyMapping('Country', self::names()->country);
        $properties->contactName = Schema::string();
        $ownerSchema->addPropertyMapping('ContactName', self::names()->contactName);
        $properties->contactPhone = Schema::string();
        $ownerSchema->addPropertyMapping('ContactPhone', self::names()->contactPhone);
        $properties->contactFax = Schema::string();
        $ownerSchema->addPropertyMapping('ContactFax', self::names()->contactFax);
        $properties->contactEmail = Schema::string();
        $ownerSchema->addPropertyMapping('ContactEmail', self::names()->contactEmail);
        $properties->addressTaxIdNumber = Schema::string();
        $ownerSchema->addPropertyMapping('AddressTaxIdNumber', self::names()->addressTaxIdNumber);
        $properties->addressTaxExemptNumber = Schema::string();
        $ownerSchema->addPropertyMapping('AddressTaxExemptNumber', self::names()->addressTaxExemptNumber);
        $properties->addressAlternateName2 = Schema::string();
        $ownerSchema->addPropertyMapping('AddressAlternateName2', self::names()->addressAlternateName2);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->required = array(
            'TradingPartnerId',
            'DocumentId',
            'RecordType',
            'AddressTypeCode',
            'LocationCodeQualifier',
            'AddressLocationNumber',
            'AddressName',
            'AddressAlternateName',
            'Address1',
            'Address2',
            'Address3',
            'Address4',
            'City',
            'State',
            'PostalCode',
            'Country',
            'ContactName',
            'ContactPhone',
            'ContactFax',
            'ContactEmail',
            'AddressTaxIdNumber',
            'AddressTaxExemptNumber',
            'AddressAlternateName2',
        );
    }
}