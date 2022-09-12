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
 * Provides status updates of a shipment. This often includes dates, routes, and locations
 * Built from CarrierStatusMessages.json#/definitions/CarrierStatusMessage
 */
class CarrierStatusMessage extends ClassStructure
{
    /** @var CarrierStatusMessageMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var CarrierStatusMessageHeader Encloses all document header elements */
    public $header;

    /** @var CarrierStatusMessageStatusDetailsItems[]|array */
    public $statusDetails;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = CarrierStatusMessageMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = CarrierStatusMessageHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->statusDetails = Schema::arr();
        $properties->statusDetails->items = CarrierStatusMessageStatusDetailsItems::schema();
        $ownerSchema->addPropertyMapping('StatusDetails', self::names()->statusDetails);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides status updates of a shipment. This often includes dates, routes, and locations";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('CarrierStatusMessages.json#/definitions/CarrierStatusMessage');
    }
}