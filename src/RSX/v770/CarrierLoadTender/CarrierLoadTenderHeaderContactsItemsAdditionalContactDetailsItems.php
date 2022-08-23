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
 * This group should be used if the associated normalized fields already contain information.
 */
class CarrierLoadTenderHeaderContactsItemsAdditionalContactDetailsItems extends ClassStructure
{
    /** @var string */
    public $contactQual;

    /** @var string */
    public $contactID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->contactQual = Schema::string();
        $ownerSchema->addPropertyMapping('ContactQual', self::names()->contactQual);
        $properties->contactID = Schema::string();
        $ownerSchema->addPropertyMapping('ContactID', self::names()->contactID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group should be used if the associated normalized fields already contain information.";
        $ownerSchema->required = array(
        );
    }
}