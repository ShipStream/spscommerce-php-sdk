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
 * Encloses all document header elements
 */
class ProductActivityHeader extends ClassStructure
{
    /** @var ProductActivityHeaderReportHeader Contains the commonly used fields in the header of the transaction */
    public $reportHeader;

    /** @var ProductActivityHeaderPreassignedPurchaseOrderNumbersItems[]|array */
    public $preassignedPurchaseOrderNumbers;

    /** @var ProductActivityHeaderDatesItems[]|array */
    public $dates;

    /** @var ProductActivityHeaderContactsItems[]|array */
    public $contacts;

    /** @var ProductActivityHeaderAddressItems[]|array */
    public $address;

    /** @var ProductActivityHeaderReferencesItems[]|array */
    public $references;

    /** @var ProductActivityHeaderNotesItems[]|array */
    public $notes;

    /** @var ProductActivityHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->reportHeader = ProductActivityHeaderReportHeader::schema();
        $ownerSchema->addPropertyMapping('ReportHeader', self::names()->reportHeader);
        $properties->preassignedPurchaseOrderNumbers = Schema::arr();
        $properties->preassignedPurchaseOrderNumbers->items = ProductActivityHeaderPreassignedPurchaseOrderNumbersItems::schema();
        $ownerSchema->addPropertyMapping('PreassignedPurchaseOrderNumbers', self::names()->preassignedPurchaseOrderNumbers);
        $properties->dates = Schema::arr();
        $properties->dates->items = ProductActivityHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = ProductActivityHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = ProductActivityHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->references = Schema::arr();
        $properties->references->items = ProductActivityHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ProductActivityHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ProductActivityHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document header elements";
        $ownerSchema->required = array(
            'ReportHeader',
        );
    }
}