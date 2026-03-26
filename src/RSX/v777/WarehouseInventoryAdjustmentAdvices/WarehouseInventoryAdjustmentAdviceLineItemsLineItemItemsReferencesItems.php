<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Supplemental information supporting the transaction
 */
class WarehouseInventoryAdjustmentAdviceLineItemsLineItemItemsReferencesItems extends ClassStructure
{
    const CONST_02 = '02';

    const CONST_06 = '06';

    const CONST_12 = '12';

    const CONST_19 = '19';

    const CONST_2_I = '2I';

    const AH = 'AH';

    const AN = 'AN';

    const AO = 'AO';

    const BM = 'BM';

    const BT = 'BT';

    const BY = 'BY';

    const CN = 'CN';

    const CT = 'CT';

    const _DO = 'DO';

    const GS = 'GS';

    const IL = 'IL';

    const IN = 'IN';

    const IT = 'IT';

    const IV = 'IV';

    const KW = 'KW';

    const LO = 'LO';

    const MK = 'MK';

    const OC = 'OC';

    const PD = 'PD';

    const PK = 'PK';

    const PO = 'PO';

    const SE = 'SE';

    const SI = 'SI';

    const TN = 'TN';

    const VN = 'VN';

    const WH = 'WH';

    const WLT = 'WLT';

    const WS = 'WS';

    /** @var string Code specifying the type of data in the ReferenceID/ReferenceDescription */
    public $referenceQual;

    /** @var string Value as defined by the ReferenceQual */
    public $referenceID;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->referenceQual = Schema::string();
        $properties->referenceQual->enum = array(
            self::CONST_02,
            self::CONST_06,
            self::CONST_12,
            self::CONST_19,
            self::CONST_2_I,
            self::AH,
            self::AN,
            self::AO,
            self::BM,
            self::BT,
            self::BY,
            self::CN,
            self::CT,
            self::_DO,
            self::GS,
            self::IL,
            self::IN,
            self::IT,
            self::IV,
            self::KW,
            self::LO,
            self::MK,
            self::OC,
            self::PD,
            self::PK,
            self::PO,
            self::SE,
            self::SI,
            self::TN,
            self::VN,
            self::WH,
            self::WLT,
            self::WS,
        );
        $properties->referenceQual->description = "Code specifying the type of data in the ReferenceID/ReferenceDescription";
        $ownerSchema->addPropertyMapping('ReferenceQual', self::names()->referenceQual);
        $properties->referenceID = Schema::string();
        $properties->referenceID->description = "Value as defined by the ReferenceQual";
        $ownerSchema->addPropertyMapping('ReferenceID', self::names()->referenceID);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Supplemental information supporting the transaction";
        $ownerSchema->required = array(
        );
    }
}