<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTender;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from CarrierLoadTenders.json#/definitions/CarrierLoadTender
 */
class CarrierLoadTender extends ClassStructure
{
    /** @var CarrierLoadTenderMeta Contains internal SPS information */
    public $meta;

    /** @var CarrierLoadTenderHeader */
    public $header;

    /** @var CarrierLoadTenderStopDetailsItems[]|array */
    public $stopDetails;

    /** @var CarrierLoadTenderSummary */
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
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('CarrierLoadTenders.json#/definitions/CarrierLoadTender');
    }
}