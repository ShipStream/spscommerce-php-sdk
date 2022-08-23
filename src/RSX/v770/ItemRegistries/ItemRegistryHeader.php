<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\ItemRegistries;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ItemRegistryHeader extends ClassStructure
{
    /** @var ItemRegistryHeaderHeaderReport */
    public $headerReport;

    /** @var ItemRegistryHeaderDatesItems[]|array */
    public $dates;

    /** @var ItemRegistryHeaderContactsItems[]|array */
    public $contacts;

    /** @var ItemRegistryHeaderAddressItems[]|array */
    public $address;

    /** @var ItemRegistryHeaderReferencesItems[]|array */
    public $references;

    /** @var ItemRegistryHeaderNotesItems[]|array */
    public $notes;

    /** @var ItemRegistryHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->headerReport = ItemRegistryHeaderHeaderReport::schema();
        $ownerSchema->addPropertyMapping('HeaderReport', self::names()->headerReport);
        $properties->dates = Schema::arr();
        $properties->dates->items = ItemRegistryHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = ItemRegistryHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = ItemRegistryHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->references = Schema::arr();
        $properties->references->items = ItemRegistryHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ItemRegistryHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ItemRegistryHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'HeaderReport',
        );
    }
}