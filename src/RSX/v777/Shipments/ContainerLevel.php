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
 * Information about the intermodal container used on a shipment
 * Built from #/definitions/ContainerLevel
 * @method static ContainerLevel import($data, Context $options = null)
 */
class ContainerLevel extends ClassStructure
{
    /** @var ContainerLevelContainer Contains the commonly used fields in the container level of the transaction */
    public $container;

    /** @var ContainerLevelDatesItems[]|array */
    public $dates;

    /** @var ContainerLevelReferencesItems[]|array */
    public $references;

    /** @var ContainerLevelNotesItems[]|array */
    public $notes;

    /** @var ContainerLevelQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var ContainerLevelCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ContainerLevelAddressItems[]|array */
    public $address;

    /** @var ContainerLevelRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /** @var OrderLevel[]|mixed[]|array */
    public $orderLevel;

    /** @var PackLevel[]|mixed[]|array */
    public $packLevel;

    /** @var ItemLevel[]|mixed[]|array */
    public $itemLevel;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->container = ContainerLevelContainer::schema();
        $ownerSchema->addPropertyMapping('Container', self::names()->container);
        $properties->dates = Schema::arr();
        $properties->dates->items = ContainerLevelDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = ContainerLevelReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ContainerLevelNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = ContainerLevelQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ContainerLevelCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->address = Schema::arr();
        $properties->address->items = ContainerLevelAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ContainerLevelRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $properties->orderLevel = Schema::arr();
        $properties->orderLevel->items = OrderLevel::schema();
        $ownerSchema->addPropertyMapping('OrderLevel', self::names()->orderLevel);
        $properties->packLevel = Schema::arr();
        $properties->packLevel->items = PackLevel::schema();
        $ownerSchema->addPropertyMapping('PackLevel', self::names()->packLevel);
        $properties->itemLevel = Schema::arr();
        $properties->itemLevel->items = ItemLevel::schema();
        $ownerSchema->addPropertyMapping('ItemLevel', self::names()->itemLevel);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchemaOneOf0 = new Schema();
        $ownerSchemaOneOf0->required = array(
            'OrderLevel',
        );
        $ownerSchema->oneOf[0] = $ownerSchemaOneOf0;
        $ownerSchemaOneOf1 = new Schema();
        $ownerSchemaOneOf1->required = array(
            'PackLevel',
        );
        $ownerSchema->oneOf[1] = $ownerSchemaOneOf1;
        $ownerSchemaOneOf2 = new Schema();
        $ownerSchemaOneOf2->required = array(
            'ItemLevel',
        );
        $ownerSchema->oneOf[2] = $ownerSchemaOneOf2;
        $ownerSchemaOneOf3 = new Schema();
        $ownerSchemaOneOf3->not = new Schema();
        $ownerSchemaOneOf3NotAnyOf0 = new Schema();
        $ownerSchemaOneOf3NotAnyOf0->required = array(
            'OrderLevel',
        );
        $ownerSchemaOneOf3->not->anyOf[0] = $ownerSchemaOneOf3NotAnyOf0;
        $ownerSchemaOneOf3NotAnyOf1 = new Schema();
        $ownerSchemaOneOf3NotAnyOf1->required = array(
            'PackLevel',
        );
        $ownerSchemaOneOf3->not->anyOf[1] = $ownerSchemaOneOf3NotAnyOf1;
        $ownerSchemaOneOf3NotAnyOf2 = new Schema();
        $ownerSchemaOneOf3NotAnyOf2->required = array(
            'ItemLevel',
        );
        $ownerSchemaOneOf3->not->anyOf[2] = $ownerSchemaOneOf3NotAnyOf2;
        $ownerSchema->oneOf[3] = $ownerSchemaOneOf3;
        $ownerSchema->description = "Information about the intermodal container used on a shipment";
        $ownerSchema->required = array(
        );
        $ownerSchema->setFromRef('#/definitions/ContainerLevel');
    }
}