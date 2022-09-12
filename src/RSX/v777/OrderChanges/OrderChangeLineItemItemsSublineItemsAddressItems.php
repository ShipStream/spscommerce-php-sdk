<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\OrderChanges;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Represent an entity such as an organizational, physical location, property, or individual
 */
class OrderChangeLineItemItemsSublineItemsAddressItems extends ClassStructure
{
    const CONST_88 = '88';

    const CONST_9_C = '9C';

    const AG = 'AG';

    const BE = 'BE';

    const BK = 'BK';

    const BO = 'BO';

    const BOWN = 'BOWN';

    const BT = 'BT';

    const BY = 'BY';

    const CB = 'CB';

    const CN = 'CN';

    const CQ = 'CQ';

    const CS = 'CS';

    const CT = 'CT';

    const DA = 'DA';

    const DE = 'DE';

    const DS = 'DS';

    const DV = 'DV';

    const ESIID = 'ESIID';

    const FR = 'FR';

    const FW = 'FW';

    const IA = 'IA';

    const MF = 'MF';

    const N1 = 'N1';

    const NES = 'NES';

    const OB = 'OB';

    const PATI = 'PATI';

    const PF = 'PF';

    const PLCO = 'PLCO';

    const POAR = 'POAR';

    const PODI = 'PODI';

    const POEN = 'POEN';

    const POOR = 'POOR';

    const PR = 'PR';

    const PW = 'PW';

    const RAMP = 'RAMP';

    const RI = 'RI';

    const RL = 'RL';

    const RT = 'RT';

    const SF = 'SF';

    const SO = 'SO';

    const ST = 'ST';

    const TO = 'TO';

    const TP = 'TP';

    const TS = 'TS';

    const VN = 'VN';

    const WH = 'WH';

    const Z7 = 'Z7';

    const CONST_1 = '1';

    const CONST_10 = '10';

    const CONST_11 = '11';

    const CONST_15 = '15';

    const CONST_21 = '21';

    const CONST_33 = '33';

    const CONST_6 = '6';

    const CONST_9 = '9';

    const CONST_91 = '91';

    const CONST_92 = '92';

    const A1 = 'A1';

    const D = 'D';

    const K = 'K';

    const TPL = 'TPL';

    const UL = 'UL';

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

    /** @var string An administrative division such as a subnational entity, constituent unit, or country subdivision */
    public $countrySubDivision;

    /** @var string Unique number assigned by the relevant tax authority to identify a party for use in relation to Value Added Tax[VAT] */
    public $addressTaxIdNumber;

    /** @var string Unique tax exemption number assigned by the relevant tax authority to identify an entity or organization */
    public $addressTaxExemptNumber;

    /** @var OrderChangeLineItemItemsSublineItemsAddressItemsReferencesItems[]|array */
    public $references;

    /** @var OrderChangeLineItemItemsSublineItemsAddressItemsContactsItems[]|array */
    public $contacts;

    /** @var OrderChangeLineItemItemsSublineItemsAddressItemsDatesItems[]|array */
    public $dates;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->addressTypeCode = Schema::string();
        $properties->addressTypeCode->enum = array(
            self::CONST_88,
            self::CONST_9_C,
            self::AG,
            self::BE,
            self::BK,
            self::BO,
            self::BOWN,
            self::BT,
            self::BY,
            self::CB,
            self::CN,
            self::CQ,
            self::CS,
            self::CT,
            self::DA,
            self::DE,
            self::DS,
            self::DV,
            self::ESIID,
            self::FR,
            self::FW,
            self::IA,
            self::MF,
            self::N1,
            self::NES,
            self::OB,
            self::PATI,
            self::PF,
            self::PLCO,
            self::POAR,
            self::PODI,
            self::POEN,
            self::POOR,
            self::PR,
            self::PW,
            self::RAMP,
            self::RI,
            self::RL,
            self::RT,
            self::SF,
            self::SO,
            self::ST,
            self::TO,
            self::TP,
            self::TS,
            self::VN,
            self::WH,
            self::Z7,
        );
        $properties->addressTypeCode->description = "Code identifying an organizational entity, a physical location, property, or an individual";
        $ownerSchema->addPropertyMapping('AddressTypeCode', self::names()->addressTypeCode);
        $properties->locationCodeQualifier = Schema::string();
        $properties->locationCodeQualifier->enum = array(
            self::CONST_1,
            self::CONST_10,
            self::CONST_11,
            self::CONST_15,
            self::CONST_21,
            self::CONST_33,
            self::CONST_6,
            self::CONST_9,
            self::CONST_91,
            self::CONST_92,
            self::A1,
            self::BE,
            self::D,
            self::K,
            self::TPL,
            self::UL,
        );
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
        $properties->countrySubDivision->description = "An administrative division such as a subnational entity, constituent unit, or country subdivision";
        $ownerSchema->addPropertyMapping('CountrySubDivision', self::names()->countrySubDivision);
        $properties->addressTaxIdNumber = Schema::string();
        $properties->addressTaxIdNumber->description = "Unique number assigned by the relevant tax authority to identify a party for use in relation to Value Added Tax[VAT]";
        $ownerSchema->addPropertyMapping('AddressTaxIdNumber', self::names()->addressTaxIdNumber);
        $properties->addressTaxExemptNumber = Schema::string();
        $properties->addressTaxExemptNumber->description = "Unique tax exemption number assigned by the relevant tax authority to identify an entity or organization";
        $ownerSchema->addPropertyMapping('AddressTaxExemptNumber', self::names()->addressTaxExemptNumber);
        $properties->references = Schema::arr();
        $properties->references->items = OrderChangeLineItemItemsSublineItemsAddressItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = OrderChangeLineItemItemsSublineItemsAddressItemsContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderChangeLineItemItemsSublineItemsAddressItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Represent an entity such as an organizational, physical location, property, or individual";
        $ownerSchema->required = array(
        );
    }
}