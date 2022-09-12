<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\PlanningSchedules;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Indicates handling requirements and hazardous information for transportation
 */
class PlanningScheduleHeaderCarrierSpecialHandlingDetailItems extends ClassStructure
{
    const AH = 'AH';

    const BKA = 'BKA';

    const CO = 'CO';

    const DA = 'DA';

    const DNF = 'DNF';

    const EL = 'EL';

    const EX = 'EX';

    const FL = 'FL';

    const FLG = 'FLG';

    const FP = 'FP';

    const FR = 'FR';

    const HM = 'HM';

    const IC = 'IC';

    const IE = 'IE';

    const KMD = 'KMD';

    const MRF = 'MRF';

    const MULT = 'MULT';

    const NC = 'NC';

    const NPR = 'NPR';

    const NW = 'NW';

    const OPR = 'OPR';

    const OSB = 'OSB';

    const OTC = 'OTC';

    const PFH = 'PFH';

    const PG = 'PG';

    const PHR = 'PHR';

    const RM = 'RM';

    const SUIP = 'SUIP';

    const UN = 'UN';

    const UNDF = 'UNDF';

    const VOC = 'VOC';

    const D = 'D';

    const X = 'X';

    const N = 'N';

    const Y = 'Y';

    /** @var string Code specifying special transportation handling instructions */
    public $specialHandlingCode;

    /** @var string A unique identifier associated with a specific hazardous material */
    public $hazardousMaterialCode;

    /** @var string Hazard classes define the type of risk a hazardous material poses */
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
        $properties->specialHandlingCode->enum = array(
            self::AH,
            self::BKA,
            self::CO,
            self::DA,
            self::DNF,
            self::EL,
            self::EX,
            self::FL,
            self::FLG,
            self::FP,
            self::FR,
            self::HM,
            self::IC,
            self::IE,
            self::KMD,
            self::MRF,
            self::MULT,
            self::NC,
            self::NPR,
            self::NW,
            self::OPR,
            self::OSB,
            self::OTC,
            self::PFH,
            self::PG,
            self::PHR,
            self::RM,
            self::SUIP,
            self::UN,
            self::UNDF,
            self::VOC,
        );
        $properties->specialHandlingCode->description = "Code specifying special transportation handling instructions";
        $ownerSchema->addPropertyMapping('SpecialHandlingCode', self::names()->specialHandlingCode);
        $properties->hazardousMaterialCode = Schema::string();
        $properties->hazardousMaterialCode->enum = array(
            self::D,
            self::X,
        );
        $properties->hazardousMaterialCode->description = "A unique identifier associated with a specific hazardous material";
        $ownerSchema->addPropertyMapping('HazardousMaterialCode', self::names()->hazardousMaterialCode);
        $properties->hazardousMaterialClass = Schema::string();
        $properties->hazardousMaterialClass->description = "Hazard classes define the type of risk a hazardous material poses";
        $ownerSchema->addPropertyMapping('HazardousMaterialClass', self::names()->hazardousMaterialClass);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->yesOrNoResponse = Schema::string();
        $properties->yesOrNoResponse->enum = array(
            self::N,
            self::Y,
        );
        $properties->yesOrNoResponse->description = "Code indicating a Yes or No condition or response";
        $ownerSchema->addPropertyMapping('YesOrNoResponse', self::names()->yesOrNoResponse);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Indicates handling requirements and hazardous information for transportation";
        $ownerSchema->required = array(
        );
    }
}