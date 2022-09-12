<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ItemRegistries;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Encloses all document subline elements
 */
class ItemRegistryStructureItemsLineItemItemsSublineItems extends ClassStructure
{
    /** @var ItemRegistryStructureItemsLineItemItemsSublineItemsSublineItemDetail Contains the commonly used fields in the subline level of the transaction */
    public $sublineItemDetail;

    /** @var ItemRegistryStructureItemsLineItemItemsSublineItemsPriceDetailsItems[]|array */
    public $priceDetails;

    /** @var ItemRegistryStructureItemsLineItemItemsSublineItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var ItemRegistryStructureItemsLineItemItemsSublineItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->sublineItemDetail = ItemRegistryStructureItemsLineItemItemsSublineItemsSublineItemDetail::schema();
        $ownerSchema->addPropertyMapping('SublineItemDetail', self::names()->sublineItemDetail);
        $properties->priceDetails = Schema::arr();
        $properties->priceDetails->items = ItemRegistryStructureItemsLineItemItemsSublineItemsPriceDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PriceDetails', self::names()->priceDetails);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = ItemRegistryStructureItemsLineItemItemsSublineItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = ItemRegistryStructureItemsLineItemItemsSublineItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Encloses all document subline elements";
        $ownerSchema->required = array(
        );
    }
}