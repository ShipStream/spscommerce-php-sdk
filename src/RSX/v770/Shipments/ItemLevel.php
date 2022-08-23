<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from #/definitions/ItemLevel
 * @method static ItemLevel import($data, Context $options = null)
 */
class ItemLevel extends ClassStructure
{
    /** @var ItemLevelShipmentLine */
    public $shipmentLine;

    /** @var ItemLevelPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var ItemLevelCarrierSpecialHandlingDetailItems[]|array */
    public $carrierSpecialHandlingDetail;

    /** @var ItemLevelCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var ItemLevelMeasurementsItems[]|array */
    public $measurements;

    /** @var ItemLevelPriceInformationItems[]|array */
    public $priceInformation;

    /** @var ItemLevelProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var ItemLevelMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var ItemLevelDatesItems[]|array */
    public $dates;

    /** @var ItemLevelReferencesItems[]|array */
    public $references;

    /** @var ItemLevelNotesItems[]|array */
    public $notes;

    /** @var ItemLevelCommodityItems[]|array */
    public $commodity;

    /** @var ItemLevelAddressItems[]|array */
    public $address;

    /** @var ItemLevelSublineItems[]|array */
    public $subline;

    /** @var ItemLevelTaxesItems[]|array */
    public $taxes;

    /** @var ItemLevelChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var ItemLevelItemLoadInfoItems[]|array */
    public $itemLoadInfo;

    /** @var ItemLevelRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /** @var PackLevel[]|mixed[]|array */
    public $packLevel;

    /** @var OrderLevel[]|mixed[]|array */
    public $orderLevel;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->shipmentLine = ItemLevelShipmentLine::schema();
        $ownerSchema->addPropertyMapping('ShipmentLine', self::names()->shipmentLine);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = ItemLevelPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->carrierSpecialHandlingDetail = Schema::arr();
        $properties->carrierSpecialHandlingDetail->items = ItemLevelCarrierSpecialHandlingDetailItems::schema();
        $ownerSchema->addPropertyMapping('CarrierSpecialHandlingDetail', self::names()->carrierSpecialHandlingDetail);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = ItemLevelCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = ItemLevelMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = ItemLevelPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = ItemLevelProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = ItemLevelMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->dates = Schema::arr();
        $properties->dates->items = ItemLevelDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = ItemLevelReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = ItemLevelNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = ItemLevelCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->address = Schema::arr();
        $properties->address->items = ItemLevelAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->subline = Schema::arr();
        $properties->subline->items = ItemLevelSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = ItemLevelTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = ItemLevelChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->itemLoadInfo = Schema::arr();
        $properties->itemLoadInfo->items = ItemLevelItemLoadInfoItems::schema();
        $ownerSchema->addPropertyMapping('ItemLoadInfo', self::names()->itemLoadInfo);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ItemLevelRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $properties->packLevel = Schema::arr();
        $properties->packLevel->items = PackLevel::schema();
        $ownerSchema->addPropertyMapping('PackLevel', self::names()->packLevel);
        $properties->orderLevel = Schema::arr();
        $properties->orderLevel->items = OrderLevel::schema();
        $ownerSchema->addPropertyMapping('OrderLevel', self::names()->orderLevel);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchemaOneOf0 = new Schema();
        $ownerSchemaOneOf0->required = array(
            'PackLevel',
        );
        $ownerSchema->oneOf[0] = $ownerSchemaOneOf0;
        $ownerSchemaOneOf1 = new Schema();
        $ownerSchemaOneOf1->required = array(
            'OrderLevel',
        );
        $ownerSchema->oneOf[1] = $ownerSchemaOneOf1;
        $ownerSchemaOneOf2 = new Schema();
        $ownerSchemaOneOf2->not = new Schema();
        $ownerSchemaOneOf2NotAnyOf0 = new Schema();
        $ownerSchemaOneOf2NotAnyOf0->required = array(
            'PackLevel',
        );
        $ownerSchemaOneOf2->not->anyOf[0] = $ownerSchemaOneOf2NotAnyOf0;
        $ownerSchemaOneOf2NotAnyOf1 = new Schema();
        $ownerSchemaOneOf2NotAnyOf1->required = array(
            'OrderLevel',
        );
        $ownerSchemaOneOf2->not->anyOf[1] = $ownerSchemaOneOf2NotAnyOf1;
        $ownerSchema->oneOf[2] = $ownerSchemaOneOf2;
        $ownerSchema->required = array(
        );
        $ownerSchema->setFromRef('#/definitions/ItemLevel');
    }
}