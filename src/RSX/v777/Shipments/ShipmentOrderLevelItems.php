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
 * Encloses all document order level elements
 * @method static ShipmentOrderLevelItems import($data, Context $options = null)
 */
class ShipmentOrderLevelItems extends ClassStructure
{
    /** @var ShipmentOrderLevelItemsOrderHeader Contains commonly used fields */
    public $orderHeader;

    /** @var ShipmentOrderLevelItemsQuantityAndWeightItems[]|array */
    public $quantityAndWeight;

    /** @var ShipmentOrderLevelItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ShipmentOrderLevelItemsDatesItems[]|array */
    public $dates;

    /** @var ShipmentOrderLevelItemsReferencesItems[]|array */
    public $references;

    /** @var ShipmentOrderLevelItemsNotesItems[]|array */
    public $notes;

    /** @var ShipmentOrderLevelItemsAddressItems[]|array */
    public $address;

    /** @var ShipmentOrderLevelItemsTaxesItems[]|array */
    public $taxes;

    /** @var ShipmentOrderLevelItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ShipmentOrderLevelItemsCommodityItems[]|array */
    public $commodity;

    /** @var ShipmentOrderLevelItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /** @var ShipmentOrderLevelItemsPackLevelItems[]|mixed[]|array */
    public $packLevel;

    /** @var ShipmentOrderLevelItemsItemLevelItems[]|array */
    public $itemLevel;

    /** @var ContainerLevel[]|mixed[]|array */
    public $containerLevel;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderHeader = ShipmentOrderLevelItemsOrderHeader::schema();
        $ownerSchema->addPropertyMapping('OrderHeader', self::names()->orderHeader);
        $properties->quantityAndWeight = Schema::arr();
        $properties->quantityAndWeight->items = ShipmentOrderLevelItemsQuantityAndWeightItems::schema();
        $ownerSchema->addPropertyMapping('QuantityAndWeight', self::names()->quantityAndWeight);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ShipmentOrderLevelItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->dates = Schema::arr();
        $properties->dates->items = ShipmentOrderLevelItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = ShipmentOrderLevelItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ShipmentOrderLevelItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->address = Schema::arr();
        $properties->address->items = ShipmentOrderLevelItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ShipmentOrderLevelItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ShipmentOrderLevelItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = ShipmentOrderLevelItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ShipmentOrderLevelItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $properties->packLevel = Schema::arr();
        $properties->packLevel->items = ShipmentOrderLevelItemsPackLevelItems::schema();
        $ownerSchema->addPropertyMapping('PackLevel', self::names()->packLevel);
        $properties->itemLevel = Schema::arr();
        $properties->itemLevel->items = ShipmentOrderLevelItemsItemLevelItems::schema();
        $ownerSchema->addPropertyMapping('ItemLevel', self::names()->itemLevel);
        $properties->containerLevel = Schema::arr();
        $properties->containerLevel->items = ContainerLevel::schema();
        $ownerSchema->addPropertyMapping('ContainerLevel', self::names()->containerLevel);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchemaOneOf0 = new Schema();
        $ownerSchemaOneOf0->required = array(
            'PackLevel',
        );
        $ownerSchema->oneOf[0] = $ownerSchemaOneOf0;
        $ownerSchemaOneOf1 = new Schema();
        $ownerSchemaOneOf1->required = array(
            'ItemLevel',
        );
        $ownerSchema->oneOf[1] = $ownerSchemaOneOf1;
        $ownerSchemaOneOf2 = new Schema();
        $ownerSchemaOneOf2->required = array(
            'ContainerLevel',
        );
        $ownerSchema->oneOf[2] = $ownerSchemaOneOf2;
        $ownerSchemaOneOf3 = new Schema();
        $ownerSchemaOneOf3->not = new Schema();
        $ownerSchemaOneOf3NotAnyOf0 = new Schema();
        $ownerSchemaOneOf3NotAnyOf0->required = array(
            'PackLevel',
        );
        $ownerSchemaOneOf3->not->anyOf[0] = $ownerSchemaOneOf3NotAnyOf0;
        $ownerSchemaOneOf3NotAnyOf1 = new Schema();
        $ownerSchemaOneOf3NotAnyOf1->required = array(
            'ItemLevel',
        );
        $ownerSchemaOneOf3->not->anyOf[1] = $ownerSchemaOneOf3NotAnyOf1;
        $ownerSchemaOneOf3NotAnyOf2 = new Schema();
        $ownerSchemaOneOf3NotAnyOf2->required = array(
            'ContainerLevel',
        );
        $ownerSchemaOneOf3->not->anyOf[2] = $ownerSchemaOneOf3NotAnyOf2;
        $ownerSchema->oneOf[3] = $ownerSchemaOneOf3;
        $ownerSchema->description = "Encloses all document order level elements";
        $ownerSchema->required = array(
        );
    }
}