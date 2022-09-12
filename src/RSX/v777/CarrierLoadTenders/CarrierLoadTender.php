<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierLoadTenders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Presents a proposed shipment to one or more carriers. It often details scheduling, equipment requirements, and shipping instructions
 * Built from CarrierLoadTenders.json#/definitions/CarrierLoadTender
 */
class CarrierLoadTender extends ClassStructure
{
    /** @var CarrierLoadTenderMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var CarrierLoadTenderHeader Encloses all document header elements */
    public $header;

    /** @var CarrierLoadTenderStopDetailsItems[]|array */
    public $stopDetails;

    /** @var CarrierLoadTenderSummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = CarrierLoadTenderMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = CarrierLoadTenderHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->stopDetails = Schema::arr();
        $properties->stopDetails->items = CarrierLoadTenderStopDetailsItems::schema();
        $ownerSchema->addPropertyMapping('StopDetails', self::names()->stopDetails);
        $properties->summary = CarrierLoadTenderSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Presents a proposed shipment to one or more carriers. It often details scheduling, equipment requirements, and shipping instructions";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('CarrierLoadTenders.json#/definitions/CarrierLoadTender');
    }
}