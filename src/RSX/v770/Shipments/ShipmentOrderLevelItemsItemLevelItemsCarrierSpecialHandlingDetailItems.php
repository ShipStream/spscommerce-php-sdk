<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsItemLevelItemsCarrierSpecialHandlingDetailItems extends ClassStructure
{
    /** @var string Code specifying special transportation handling instructions */
    public $specialHandlingCode;

    /** @var string */
    public $hazardousMaterialCode;

    /** @var string */
    public $hazardousMaterialClass;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string Code indicating a Yes or No condition or response */
    public $yesOrNoResponse;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->specialHandlingCode = Schema::string();
        $properties->specialHandlingCode->description = "Code specifying special transportation handling instructions";
        $ownerSchema->addPropertyMapping('SpecialHandlingCode', self::names()->specialHandlingCode);
        $properties->hazardousMaterialCode = Schema::string();
        $ownerSchema->addPropertyMapping('HazardousMaterialCode', self::names()->hazardousMaterialCode);
        $properties->hazardousMaterialClass = Schema::string();
        $ownerSchema->addPropertyMapping('HazardousMaterialClass', self::names()->hazardousMaterialClass);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->yesOrNoResponse = Schema::string();
        $properties->yesOrNoResponse->description = "Code indicating a Yes or No condition or response";
        $ownerSchema->addPropertyMapping('YesOrNoResponse', self::names()->yesOrNoResponse);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}