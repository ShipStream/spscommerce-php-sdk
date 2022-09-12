<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Advises trading partners that a shipment has departed, or will be departing. Often detailing tracking and product identifiers, how product is packed, dates, and locations
 * Built from Shipments.json#/definitions/Shipment
 * @method static Shipment import($data, Context $options = null)
 */
class Shipment extends ClassStructure
{
    /** @var ShipmentMeta Information used for internal purposes at SPS Commerce */
    public $meta;

    /** @var ShipmentHeader Encloses all document header elements */
    public $header;

    /** @var ContainerLevel[]|mixed[]|array */
    public $containerLevel;

    /** @var ShipmentOrderLevelItems[]|mixed[]|array */
    public $orderLevel;

    /** @var PackLevel[]|mixed[]|array */
    public $packLevel;

    /** @var ItemLevel[]|mixed[]|array */
    public $itemLevel;

    /** @var ShipmentSummary Encloses all document summary elements */
    public $summary;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->meta = ShipmentMeta::schema();
        $ownerSchema->addPropertyMapping('Meta', self::names()->meta);
        $properties->header = ShipmentHeader::schema();
        $ownerSchema->addPropertyMapping('Header', self::names()->header);
        $properties->containerLevel = Schema::arr();
        $properties->containerLevel->items = ContainerLevel::schema();
        $ownerSchema->addPropertyMapping('ContainerLevel', self::names()->containerLevel);
        $properties->orderLevel = Schema::arr();
        $properties->orderLevel->items = ShipmentOrderLevelItems::schema();
        $ownerSchema->addPropertyMapping('OrderLevel', self::names()->orderLevel);
        $properties->packLevel = Schema::arr();
        $properties->packLevel->items = PackLevel::schema();
        $ownerSchema->addPropertyMapping('PackLevel', self::names()->packLevel);
        $properties->itemLevel = Schema::arr();
        $properties->itemLevel->items = ItemLevel::schema();
        $ownerSchema->addPropertyMapping('ItemLevel', self::names()->itemLevel);
        $properties->summary = ShipmentSummary::schema();
        $ownerSchema->addPropertyMapping('Summary', self::names()->summary);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchemaOneOf0 = new Schema();
        $ownerSchemaOneOf0->required = array(
            'ContainerLevel',
        );
        $ownerSchema->oneOf[0] = $ownerSchemaOneOf0;
        $ownerSchemaOneOf1 = new Schema();
        $ownerSchemaOneOf1->required = array(
            'OrderLevel',
        );
        $ownerSchema->oneOf[1] = $ownerSchemaOneOf1;
        $ownerSchemaOneOf2 = new Schema();
        $ownerSchemaOneOf2->required = array(
            'PackLevel',
        );
        $ownerSchema->oneOf[2] = $ownerSchemaOneOf2;
        $ownerSchemaOneOf3 = new Schema();
        $ownerSchemaOneOf3->required = array(
            'ItemLevel',
        );
        $ownerSchema->oneOf[3] = $ownerSchemaOneOf3;
        $ownerSchemaOneOf4 = new Schema();
        $ownerSchemaOneOf4->not = new Schema();
        $ownerSchemaOneOf4NotAnyOf0 = new Schema();
        $ownerSchemaOneOf4NotAnyOf0->required = array(
            'ContainerLevel',
        );
        $ownerSchemaOneOf4->not->anyOf[0] = $ownerSchemaOneOf4NotAnyOf0;
        $ownerSchemaOneOf4NotAnyOf1 = new Schema();
        $ownerSchemaOneOf4NotAnyOf1->required = array(
            'OrderLevel',
        );
        $ownerSchemaOneOf4->not->anyOf[1] = $ownerSchemaOneOf4NotAnyOf1;
        $ownerSchemaOneOf4NotAnyOf2 = new Schema();
        $ownerSchemaOneOf4NotAnyOf2->required = array(
            'PackLevel',
        );
        $ownerSchemaOneOf4->not->anyOf[2] = $ownerSchemaOneOf4NotAnyOf2;
        $ownerSchemaOneOf4NotAnyOf3 = new Schema();
        $ownerSchemaOneOf4NotAnyOf3->required = array(
            'ItemLevel',
        );
        $ownerSchemaOneOf4->not->anyOf[3] = $ownerSchemaOneOf4NotAnyOf3;
        $ownerSchema->oneOf[4] = $ownerSchemaOneOf4;
        $ownerSchema->description = "Advises trading partners that a shipment has departed, or will be departing. Often detailing tracking and product identifiers, how product is packed, dates, and locations";
        $ownerSchema->required = array(
            'Header',
        );
        $ownerSchema->setFromRef('Shipments.json#/definitions/Shipment');
    }
}