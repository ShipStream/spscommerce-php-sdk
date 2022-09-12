<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\CarrierFreightDetails;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Carton or Label ID indicating the shipment or parts of the shipment
 */
class CarrierFreightDetailInvoiceDetailsItemsMarksAndNumbersCollectionItems extends ClassStructure
{
    const CA = 'CA';

    const SI = 'SI';

    const TG = 'TG';

    const UC = 'UC';

    const W = 'W';

    /** @var string Code specifying the application or source of MarksAndNumbers */
    public $marksAndNumbersQualifier1;

    /** @var string Carton or Label ID indicating the shipment or parts of shipment */
    public $marksAndNumbers1;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->marksAndNumbersQualifier1 = Schema::string();
        $properties->marksAndNumbersQualifier1->enum = array(
            self::CA,
            self::SI,
            self::TG,
            self::UC,
            self::W,
        );
        $properties->marksAndNumbersQualifier1->description = "Code specifying the application or source of MarksAndNumbers";
        $ownerSchema->addPropertyMapping('MarksAndNumbersQualifier1', self::names()->marksAndNumbersQualifier1);
        $properties->marksAndNumbers1 = Schema::string();
        $properties->marksAndNumbers1->description = "Carton or Label ID indicating the shipment or parts of shipment";
        $ownerSchema->addPropertyMapping('MarksAndNumbers1', self::names()->marksAndNumbers1);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Carton or Label ID indicating the shipment or parts of the shipment";
        $ownerSchema->required = array(
        );
    }
}