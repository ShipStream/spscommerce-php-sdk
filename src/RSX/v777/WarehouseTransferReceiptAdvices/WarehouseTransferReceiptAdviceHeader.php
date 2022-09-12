<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\WarehouseTransferReceiptAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document header elements
 */
class WarehouseTransferReceiptAdviceHeader extends ClassStructure
{
    /** @var WarehouseTransferReceiptAdviceHeaderHeaderDetail Contains the commonly used fields in the header of the transaction */
    public $headerDetail;

    /** @var WarehouseTransferReceiptAdviceHeaderDatesItems[]|array */
    public $dates;

    /** @var WarehouseTransferReceiptAdviceHeaderCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var WarehouseTransferReceiptAdviceHeaderContactsItems[]|array */
    public $contacts;

    /** @var WarehouseTransferReceiptAdviceHeaderAddressItems[]|array */
    public $address;

    /** @var WarehouseTransferReceiptAdviceHeaderReferencesItems[]|array */
    public $references;

    /** @var WarehouseTransferReceiptAdviceHeaderNotesItems[]|array */
    public $notes;

    /** @var WarehouseTransferReceiptAdviceHeaderRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->headerDetail = WarehouseTransferReceiptAdviceHeaderHeaderDetail::schema();
        $ownerSchema->addPropertyMapping('HeaderDetail', self::names()->headerDetail);
        $properties->dates = Schema::arr();
        $properties->dates->items = WarehouseTransferReceiptAdviceHeaderDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = WarehouseTransferReceiptAdviceHeaderCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = WarehouseTransferReceiptAdviceHeaderContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $properties->address = Schema::arr();
        $properties->address->items = WarehouseTransferReceiptAdviceHeaderAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->references = Schema::arr();
        $properties->references->items = WarehouseTransferReceiptAdviceHeaderReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = WarehouseTransferReceiptAdviceHeaderNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = WarehouseTransferReceiptAdviceHeaderRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document header elements";
        $ownerSchema->required = array(
            'HeaderDetail',
        );
    }
}