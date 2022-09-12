<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\ProductActivities;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Details purchase order information
 */
class ProductActivityHeaderPreassignedPurchaseOrderNumbersItems extends ClassStructure
{
    const CONST_1 = '1';

    const CONST_10 = '10';

    const CONST_11 = '11';

    const CONST_15 = '15';

    const CONST_21 = '21';

    const CONST_33 = '33';

    const CONST_6 = '6';

    const CONST_9 = '9';

    const CONST_91 = '91';

    const CONST_92 = '92';

    const A1 = 'A1';

    const BE = 'BE';

    const D = 'D';

    const K = 'K';

    const TPL = 'TPL';

    const UL = 'UL';

    /** @var string Purchase order number assigned to the transaction, or the first purchase order number if the transaction is regarding a range of orders */
    public $startPONumber;

    /** @var string Final purchase order number in a range of orders */
    public $endPONumber;

    /** @var string Code identifying the structure or format of the related location number[s] */
    public $locationCodeQualifier;

    /** @var string Value used to identify the location of which purchase order numbers apply */
    public $pOLocationID;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->startPONumber = Schema::string();
        $properties->startPONumber->description = "Purchase order number assigned to the transaction, or the first purchase order number if the transaction is regarding a range of orders";
        $ownerSchema->addPropertyMapping('StartPONumber', self::names()->startPONumber);
        $properties->endPONumber = Schema::string();
        $properties->endPONumber->description = "Final purchase order number in a range of orders";
        $ownerSchema->addPropertyMapping('EndPONumber', self::names()->endPONumber);
        $properties->locationCodeQualifier = Schema::string();
        $properties->locationCodeQualifier->enum = array(
            self::CONST_1,
            self::CONST_10,
            self::CONST_11,
            self::CONST_15,
            self::CONST_21,
            self::CONST_33,
            self::CONST_6,
            self::CONST_9,
            self::CONST_91,
            self::CONST_92,
            self::A1,
            self::BE,
            self::D,
            self::K,
            self::TPL,
            self::UL,
        );
        $properties->locationCodeQualifier->description = "Code identifying the structure or format of the related location number[s]";
        $ownerSchema->addPropertyMapping('LocationCodeQualifier', self::names()->locationCodeQualifier);
        $properties->pOLocationID = Schema::string();
        $properties->pOLocationID->description = "Value used to identify the location of which purchase order numbers apply";
        $ownerSchema->addPropertyMapping('POLocationID', self::names()->pOLocationID);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Details purchase order information";
        $ownerSchema->required = array(
        );
    }
}