<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTenderResponse;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from CarrierLoadTenderResponses.json#/definitions/CarrierLoadTenderResponse
 */
class CarrierLoadTenderResponse extends ClassStructure
{
    /** @var CarrierLoadTenderResponseMeta Contains internal SPS information */
    public $meta;

    /** @var CarrierLoadTenderResponseLoadTenderResponseHeader */
    public $loadTenderResponseHeader;

    /** @var CarrierLoadTenderResponseCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var CarrierLoadTenderResponseQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var CarrierLoadTenderResponseDatesItems[]|array */
    public $dates;

    /** @var CarrierLoadTenderResponseReferencesItems[]|array */
    public $references;

    /** @var CarrierLoadTenderResponseNotesItems[]|array */
    public $notes;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = CarrierLoadTenderResponseMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->loadTenderResponseHeader = CarrierLoadTenderResponseLoadTenderResponseHeader::schema();
        $ownerSchema->addPropertyMapping('LoadTenderResponseHeader', self::names()->loadTenderResponseHeader);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = CarrierLoadTenderResponseCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = CarrierLoadTenderResponseQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->dates = Schema::arr();
        $properties->dates->items = CarrierLoadTenderResponseDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierLoadTenderResponseReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierLoadTenderResponseNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
            'LoadTenderResponseHeader',
        );
        $ownerSchema->setFromRef('CarrierLoadTenderResponses.json#/definitions/CarrierLoadTenderResponse');
    }
}