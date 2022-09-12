<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ProductActivities;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Provides contact information
 */
class ProductActivityHeaderAddressItemsContactsItems extends ClassStructure
{
    const AL = 'AL';

    const BD = 'BD';

    const BI = 'BI';

    const CH = 'CH';

    const CR = 'CR';

    const EX = 'EX';

    const HM = 'HM';

    const IC = 'IC';

    const MRP = 'MRP';

    const OC = 'OC';

    const RE = 'RE';

    const SC = 'SC';

    const SGN = 'SGN';

    const SR = 'SR';

    const TIC = 'TIC';

    /** @var string Code identifying a type of contact */
    public $contactTypeCode;

    /** @var string Free-form name */
    public $contactName;

    /** @var string Phone number of contact listed */
    public $primaryPhone;

    /** @var string Fax number of contact listed */
    public $primaryFax;

    /** @var string E-mail address for contact listed */
    public $primaryEmail;

    /** @var ProductActivityHeaderAddressItemsContactsItemsAdditionalContactDetailsItems[]|array */
    public $additionalContactDetails;

    /** @var string Additional field to clarify a contact */
    public $contactReference;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->contactTypeCode = Schema::string();
        $properties->contactTypeCode->enum = array(
            self::AL,
            self::BD,
            self::BI,
            self::CH,
            self::CR,
            self::EX,
            self::HM,
            self::IC,
            self::MRP,
            self::OC,
            self::RE,
            self::SC,
            self::SGN,
            self::SR,
            self::TIC,
        );
        $properties->contactTypeCode->description = "Code identifying a type of contact";
        $ownerSchema->addPropertyMapping('ContactTypeCode', self::names()->contactTypeCode);
        $properties->contactName = Schema::string();
        $properties->contactName->description = "Free-form name";
        $ownerSchema->addPropertyMapping('ContactName', self::names()->contactName);
        $properties->primaryPhone = Schema::string();
        $properties->primaryPhone->description = "Phone number of contact listed";
        $ownerSchema->addPropertyMapping('PrimaryPhone', self::names()->primaryPhone);
        $properties->primaryFax = Schema::string();
        $properties->primaryFax->description = "Fax number of contact listed";
        $ownerSchema->addPropertyMapping('PrimaryFax', self::names()->primaryFax);
        $properties->primaryEmail = Schema::string();
        $properties->primaryEmail->description = "E-mail address for contact listed";
        $ownerSchema->addPropertyMapping('PrimaryEmail', self::names()->primaryEmail);
        $properties->additionalContactDetails = Schema::arr();
        $properties->additionalContactDetails->items = ProductActivityHeaderAddressItemsContactsItemsAdditionalContactDetailsItems::schema();
        $ownerSchema->addPropertyMapping('AdditionalContactDetails', self::names()->additionalContactDetails);
        $properties->contactReference = Schema::string();
        $properties->contactReference->description = "Additional field to clarify a contact";
        $ownerSchema->addPropertyMapping('ContactReference', self::names()->contactReference);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides contact information";
        $ownerSchema->required = array(
        );
    }
}