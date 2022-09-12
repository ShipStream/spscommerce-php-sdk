<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierFreightDetails;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Provides information relating to costs and fees issued by a carrier for their services. This is often a request for payment
 * Built from CarrierFreightDetails.json#/definitions/CarrierFreightDetail
 */
class CarrierFreightDetail extends ClassStructure
{
    /** @var CarrierFreightDetailMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var CarrierFreightDetailHeader Encloses all document header elements */
    public $header;

    /** @var CarrierFreightDetailInvoiceDetailsItems[]|array */
    public $invoiceDetails;

    /** @var CarrierFreightDetailSummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = CarrierFreightDetailMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = CarrierFreightDetailHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->invoiceDetails = Schema::arr();
        $properties->invoiceDetails->items = CarrierFreightDetailInvoiceDetailsItems::schema();
        $ownerSchema->addPropertyMapping('InvoiceDetails', self::names()->invoiceDetails);
        $properties->summary = CarrierFreightDetailSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides information relating to costs and fees issued by a carrier for their services. This is often a request for payment";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('CarrierFreightDetails.json#/definitions/CarrierFreightDetail');
    }
}