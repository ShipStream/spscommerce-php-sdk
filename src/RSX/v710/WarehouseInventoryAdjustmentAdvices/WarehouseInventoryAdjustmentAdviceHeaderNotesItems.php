<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v710\WarehouseInventoryAdjustmentAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Supplemental text for the transaction
 */
class WarehouseInventoryAdjustmentAdviceHeaderNotesItems extends ClassStructure
{
    const CCG = 'CCG';

    const GEN = 'GEN';

    const GFT = 'GFT';

    const MKG = 'MKG';

    const PCK = 'PCK';

    const PRN = 'PRN';

    const RTN = 'RTN';

    const SHP = 'SHP';

    const SPE = 'SPE';

    const TPA = 'TPA';

    /** @var string Code specifying the type of note */
    public $noteCode;

    /** @var string Code designating the language used in text. ISO 639 language code */
    public $languageCode;

    /** @var string Free-form textual description of the note */
    public $noteInformationField;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->noteCode = Schema::string();
        $properties->noteCode->enum = array(
            self::CCG,
            self::GEN,
            self::GFT,
            self::MKG,
            self::PCK,
            self::PRN,
            self::RTN,
            self::SHP,
            self::SPE,
            self::TPA,
        );
        $properties->noteCode->description = "Code specifying the type of note";
        $ownerSchema->addPropertyMapping('NoteCode', self::names()->noteCode);
        $properties->languageCode = Schema::string();
        $properties->languageCode->description = "Code designating the language used in text. ISO 639 language code";
        $ownerSchema->addPropertyMapping('LanguageCode', self::names()->languageCode);
        $properties->noteInformationField = Schema::string();
        $properties->noteInformationField->description = "Free-form textual description of the note";
        $ownerSchema->addPropertyMapping('NoteInformationField', self::names()->noteInformationField);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Supplemental text for the transaction";
        $ownerSchema->required = array(
        );
    }
}