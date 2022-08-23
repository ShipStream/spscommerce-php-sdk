<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class ShipmentOrderLevelItemsNotesItems extends ClassStructure
{
    /** @var string Code specifying the type of note */
    public $noteCode;

    /** @var string Free-form textual description of the note */
    public $note;

    /** @var string Code designating the language used in text. ISO 639 language code */
    public $languageCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->noteCode = Schema::string();
        $properties->noteCode->description = "Code specifying the type of note";
        $ownerSchema->addPropertyMapping('NoteCode', self::names()->noteCode);
        $properties->note = Schema::string();
        $properties->note->description = "Free-form textual description of the note";
        $ownerSchema->addPropertyMapping('Note', self::names()->note);
        $properties->languageCode = Schema::string();
        $properties->languageCode->description = "Code designating the language used in text. ISO 639 language code";
        $ownerSchema->addPropertyMapping('LanguageCode', self::names()->languageCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}