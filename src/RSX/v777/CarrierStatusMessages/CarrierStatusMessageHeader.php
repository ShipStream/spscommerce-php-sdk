<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierStatusMessages;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document header elements
 */
class CarrierStatusMessageHeader extends ClassStructure
{
    /** @var CarrierStatusMessageHeaderCarrierStatusMessageHeader Contains the commonly used fields in the header of the transaction */
    public $carrierStatusMessageHeader;

    /** @var CarrierStatusMessageHeaderReferencesItems[]|array */
    public $references;

    /** @var CarrierStatusMessageHeaderNotesItems[]|array */
    public $notes;

    /** @var CarrierStatusMessageHeaderDatesItems[]|array */
    public $dates;

    /** @var CarrierStatusMessageHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var CarrierStatusMessageHeaderAddressItems[]|array */
    public $address;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->carrierStatusMessageHeader = CarrierStatusMessageHeaderCarrierStatusMessageHeader::schema();
        $ownerSchema->addPropertyMapping('CarrierStatusMessageHeader', self::names()->carrierStatusMessageHeader);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierStatusMessageHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierStatusMessageHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->dates = Schema::arr();
        $properties->dates->items = CarrierStatusMessageHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = CarrierStatusMessageHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->address = Schema::arr();
        $properties->address->items = CarrierStatusMessageHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document header elements";
        $ownerSchema->required = array(
            'CarrierStatusMessageHeader',
        );
    }
}