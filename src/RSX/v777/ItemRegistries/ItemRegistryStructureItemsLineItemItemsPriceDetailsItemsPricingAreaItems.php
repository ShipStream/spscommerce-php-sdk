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
 * This group is used to communicate the geographical location[s] restrictions for the parent PriceDetails group
 */
class ItemRegistryStructureItemsLineItemItemsPriceDetailsItemsPricingAreaItems extends ClassStructure
{
    const CONST_002 = '002';

    const CONST_006 = '006';

    const CONST_009 = '009';

    const CONST_010 = '010';

    const CT = 'CT';

    const MKZE = 'MKZE';

    const SUIP = 'SUIP';

    /** @var string Code used to identify the location[s] */
    public $pricingAreaQualifier;

    /** @var string Used to communicate the value as defined by the PricingAreaQualifier */
    public $pricingAreaIdentifier;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->pricingAreaQualifier = Schema::string();
        $properties->pricingAreaQualifier->enum = array(
            self::CONST_002,
            self::CONST_006,
            self::CONST_009,
            self::CONST_010,
            self::CT,
            self::MKZE,
            self::SUIP,
        );
        $properties->pricingAreaQualifier->description = "Code used to identify the location[s]";
        $ownerSchema->addPropertyMapping('PricingAreaQualifier', self::names()->pricingAreaQualifier);
        $properties->pricingAreaIdentifier = Schema::string();
        $properties->pricingAreaIdentifier->description = "Used to communicate the value as defined by the PricingAreaQualifier";
        $ownerSchema->addPropertyMapping('PricingAreaIdentifier', self::names()->pricingAreaIdentifier);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group is used to communicate the geographical location[s] restrictions for the parent PriceDetails group";
        $ownerSchema->required = array(
        );
    }
}