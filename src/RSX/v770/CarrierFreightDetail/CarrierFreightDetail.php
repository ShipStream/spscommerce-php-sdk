<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierFreightDetail;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from CarrierFreightDetails.json#/definitions/CarrierFreightDetail
 */
class CarrierFreightDetail extends ClassStructure
{
    /** @var CarrierFreightDetailMeta Contains internal SPS information */
    public $meta;

    /** @var CarrierFreightDetailHeader */
    public $header;

    /** @var CarrierFreightDetailInvoiceDetailsItems[]|array */
    public $invoiceDetails;

    /** @var CarrierFreightDetailSummary */
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
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('CarrierFreightDetails.json#/definitions/CarrierFreightDetail');
    }
}