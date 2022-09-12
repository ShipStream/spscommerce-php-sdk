<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Shipments;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * This group should be used if the associated normalized fields already contain information.
 */
class ShipmentOrderLevelItemsPackLevelItemsPackLevelItemsItemLevelItemsAddressItemsContactsItemsAdditionalContactDetailsItems extends ClassStructure
{
    const AU = 'AU';

    const CP = 'CP';

    const EX = 'EX';

    const FT = 'FT';

    const HP = 'HP';

    const NP = 'NP';

    const WP = 'WP';

    const X4 = 'X4';

    /** @var string Indicates the method of contact */
    public $contactQual;

    /** @var string The value of the identified contact */
    public $contactID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->contactQual = Schema::string();
        $properties->contactQual->enum = array(
            self::AU,
            self::CP,
            self::EX,
            self::FT,
            self::HP,
            self::NP,
            self::WP,
            self::X4,
        );
        $properties->contactQual->description = "Indicates the method of contact";
        $ownerSchema->addPropertyMapping('ContactQual', self::names()->contactQual);
        $properties->contactID = Schema::string();
        $properties->contactID->description = "The value of the identified contact";
        $ownerSchema->addPropertyMapping('ContactID', self::names()->contactID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "This group should be used if the associated normalized fields already contain information.";
        $ownerSchema->required = array(
        );
    }
}