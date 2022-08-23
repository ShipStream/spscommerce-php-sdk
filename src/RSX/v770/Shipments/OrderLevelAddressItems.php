<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderLevelAddressItems extends ClassStructure
{
    /** @var string Code identifying an organizational entity, a physical location, property, or an individual */
    public $addressTypeCode;

    /** @var string Code identifying the structure or format of the related location number[s] */
    public $locationCodeQualifier;

    /** @var string Unique value assigned to identify a location */
    public $addressLocationNumber;

    /** @var string Primary free-form textual description of a location */
    public $addressName;

    /** @var string Additional free-form description of a location */
    public $addressAlternateName;

    /** @var string Additional free-form description of a location */
    public $addressAlternateName2;

    /** @var string Address information */
    public $address1;

    /** @var string Address information */
    public $address2;

    /** @var string Address information */
    public $address3;

    /** @var string Address information */
    public $address4;

    /** @var string Free-form text for city name */
    public $city;

    /** @var string Code[Standard State/Province] as defined by appropriate government agency */
    public $state;

    /** @var string International postal zone excluding punctuation and blanks[Zip Code for United States] */
    public $postalCode;

    /** @var string Human readable description identifying the country */
    public $country;

    /** @var string Provides further description to the address information. This can be either text or an ID */
    public $locationID;

    /** @var string */
    public $countrySubDivision;

    /** @var string Unique number assigned by the relevant tax authority to identify a party for use in relation to Value Added Tax[VAT] */
    public $addressTaxIdNumber;

    /** @var string */
    public $addressTaxExemptNumber;

    /** @var OrderLevelAddressItemsReferencesItems[]|array */
    public $references;

    /** @var OrderLevelAddressItemsContactsItems[]|array */
    public $contacts;

    /** @var OrderLevelAddressItemsDatesItems[]|array */
    public $dates;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->addressTypeCode = Schema::string();
        $properties->addressTypeCode->description = "Code identifying an organizational entity, a physical location, property, or an individual";
        $ownerSchema->addPropertyMapping('AddressTypeCode', self::names()->addressTypeCode);
        $properties->locationCodeQualifier = Schema::string();
        $properties->locationCodeQualifier->description = "Code identifying the structure or format of the related location number[s]";
        $ownerSchema->addPropertyMapping('LocationCodeQualifier', self::names()->locationCodeQualifier);
        $properties->addressLocationNumber = Schema::string();
        $properties->addressLocationNumber->description = "Unique value assigned to identify a location";
        $ownerSchema->addPropertyMapping('AddressLocationNumber', self::names()->addressLocationNumber);
        $properties->addressName = Schema::string();
        $properties->addressName->description = "Primary free-form textual description of a location";
        $ownerSchema->addPropertyMapping('AddressName', self::names()->addressName);
        $properties->addressAlternateName = Schema::string();
        $properties->addressAlternateName->description = "Additional free-form description of a location";
        $ownerSchema->addPropertyMapping('AddressAlternateName', self::names()->addressAlternateName);
        $properties->addressAlternateName2 = Schema::string();
        $properties->addressAlternateName2->description = "Additional free-form description of a location";
        $ownerSchema->addPropertyMapping('AddressAlternateName2', self::names()->addressAlternateName2);
        $properties->address1 = Schema::string();
        $properties->address1->description = "Address information";
        $ownerSchema->addPropertyMapping('Address1', self::names()->address1);
        $properties->address2 = Schema::string();
        $properties->address2->description = "Address information";
        $ownerSchema->addPropertyMapping('Address2', self::names()->address2);
        $properties->address3 = Schema::string();
        $properties->address3->description = "Address information";
        $ownerSchema->addPropertyMapping('Address3', self::names()->address3);
        $properties->address4 = Schema::string();
        $properties->address4->description = "Address information";
        $ownerSchema->addPropertyMapping('Address4', self::names()->address4);
        $properties->city = Schema::string();
        $properties->city->description = "Free-form text for city name";
        $ownerSchema->addPropertyMapping('City', self::names()->city);
        $properties->state = Schema::string();
        $properties->state->description = "Code[Standard State/Province] as defined by appropriate government agency";
        $ownerSchema->addPropertyMapping('State', self::names()->state);
        $properties->postalCode = Schema::string();
        $properties->postalCode->description = "International postal zone excluding punctuation and blanks[Zip Code for United States]";
        $ownerSchema->addPropertyMapping('PostalCode', self::names()->postalCode);
        $properties->country = Schema::string();
        $properties->country->description = "Human readable description identifying the country";
        $ownerSchema->addPropertyMapping('Country', self::names()->country);
        $properties->locationID = Schema::string();
        $properties->locationID->description = "Provides further description to the address information. This can be either text or an ID";
        $ownerSchema->addPropertyMapping('LocationID', self::names()->locationID);
        $properties->countrySubDivision = Schema::string();
        $ownerSchema->addPropertyMapping('CountrySubDivision', self::names()->countrySubDivision);
        $properties->addressTaxIdNumber = Schema::string();
        $properties->addressTaxIdNumber->description = "Unique number assigned by the relevant tax authority to identify a party for use in relation to Value Added Tax[VAT]";
        $ownerSchema->addPropertyMapping('AddressTaxIdNumber', self::names()->addressTaxIdNumber);
        $properties->addressTaxExemptNumber = Schema::string();
        $ownerSchema->addPropertyMapping('AddressTaxExemptNumber', self::names()->addressTaxExemptNumber);
        $properties->references = Schema::arr();
        $properties->references->items = OrderLevelAddressItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = OrderLevelAddressItemsContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderLevelAddressItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}