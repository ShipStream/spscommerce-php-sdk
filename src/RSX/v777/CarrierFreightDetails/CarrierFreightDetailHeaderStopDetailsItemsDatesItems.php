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
 * Provides date and time information
 */
class CarrierFreightDetailHeaderStopDetailsItemsDatesItems extends ClassStructure
{
    const CONST_001 = '001';

    const CONST_002 = '002';

    const CONST_006 = '006';

    const CONST_007 = '007';

    const CONST_010 = '010';

    const CONST_011 = '011';

    const CONST_012 = '012';

    const CONST_013 = '013';

    const CONST_015 = '015';

    const CONST_016 = '016';

    const CONST_017 = '017';

    const CONST_018 = '018';

    const CONST_019 = '019';

    const CONST_020 = '020';

    const CONST_035 = '035';

    const CONST_036 = '036';

    const CONST_037 = '037';

    const CONST_038 = '038';

    const CONST_043 = '043';

    const CONST_050 = '050';

    const CONST_057 = '057';

    const CONST_060 = '060';

    const CONST_063 = '063';

    const CONST_064 = '064';

    const CONST_067 = '067';

    const CONST_068 = '068';

    const CONST_069 = '069';

    const CONST_071 = '071';

    const CONST_074 = '074';

    const CONST_076 = '076';

    const CONST_077 = '077';

    const CONST_079 = '079';

    const CONST_086 = '086';

    const CONST_087 = '087';

    const CONST_097 = '097';

    const CONST_100 = '100';

    const CONST_110 = '110';

    const CONST_118 = '118';

    const CONST_145 = '145';

    const CONST_146 = '146';

    const CONST_168 = '168';

    const CONST_171 = '171';

    const CONST_191 = '191';

    const CONST_196 = '196';

    const CONST_197 = '197';

    const CONST_201 = '201';

    const CONST_209 = '209';

    const CONST_220 = '220';

    const CONST_291 = '291';

    const CONST_328 = '328';

    const CONST_369 = '369';

    const CONST_370 = '370';

    const CONST_371 = '371';

    const CONST_372 = '372';

    const CONST_405 = '405';

    const CONST_510 = '510';

    const CONST_511 = '511';

    const CONST_598 = '598';

    const CONST_603 = '603';

    const CONST_619 = '619';

    const CONST_636 = '636';

    const CONST_807 = '807';

    const CONST_809 = '809';

    const CONST_815 = '815';

    const CONST_945 = '945';

    const CONST_995 = '995';

    const AA1 = 'AA1';

    const AA2 = 'AA2';

    const AAH = 'AAH';

    const AAL = 'AAL';

    const ACT = 'ACT';

    const APD = 'APD';

    const BBD = 'BBD';

    const CAD = 'CAD';

    const CSD = 'CSD';

    const DLO = 'DLO';

    const EDC = 'EDC';

    const FCS = 'FCS';

    const LCID = 'LCID';

    const MRB = 'MRB';

    const ORS = 'ORS';

    const OTD = 'OTD';

    const POS = 'POS';

    const SOL = 'SOL';

    const TPD = 'TPD';

    const TRM = 'TRM';

    /** @var string Code specifying the type of date */
    public $dateTimeQualifier;

    /** @var string A specific day */
    public $date;

    /** @var string All standard XML formats are accepted. */
    public $time;

    /** @var string A date, time, or range of dates and times */
    public $dateTimePeriod;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->dateTimeQualifier = Schema::string();
        $properties->dateTimeQualifier->enum = array(
            self::CONST_001,
            self::CONST_002,
            self::CONST_006,
            self::CONST_007,
            self::CONST_010,
            self::CONST_011,
            self::CONST_012,
            self::CONST_013,
            self::CONST_015,
            self::CONST_016,
            self::CONST_017,
            self::CONST_018,
            self::CONST_019,
            self::CONST_020,
            self::CONST_035,
            self::CONST_036,
            self::CONST_037,
            self::CONST_038,
            self::CONST_043,
            self::CONST_050,
            self::CONST_057,
            self::CONST_060,
            self::CONST_063,
            self::CONST_064,
            self::CONST_067,
            self::CONST_068,
            self::CONST_069,
            self::CONST_071,
            self::CONST_074,
            self::CONST_076,
            self::CONST_077,
            self::CONST_079,
            self::CONST_086,
            self::CONST_087,
            self::CONST_097,
            self::CONST_100,
            self::CONST_110,
            self::CONST_118,
            self::CONST_145,
            self::CONST_146,
            self::CONST_168,
            self::CONST_171,
            self::CONST_191,
            self::CONST_196,
            self::CONST_197,
            self::CONST_201,
            self::CONST_209,
            self::CONST_220,
            self::CONST_291,
            self::CONST_328,
            self::CONST_369,
            self::CONST_370,
            self::CONST_371,
            self::CONST_372,
            self::CONST_405,
            self::CONST_510,
            self::CONST_511,
            self::CONST_598,
            self::CONST_603,
            self::CONST_619,
            self::CONST_636,
            self::CONST_807,
            self::CONST_809,
            self::CONST_815,
            self::CONST_945,
            self::CONST_995,
            self::AA1,
            self::AA2,
            self::AAH,
            self::AAL,
            self::ACT,
            self::APD,
            self::BBD,
            self::CAD,
            self::CSD,
            self::DLO,
            self::EDC,
            self::FCS,
            self::LCID,
            self::MRB,
            self::ORS,
            self::OTD,
            self::POS,
            self::SOL,
            self::TPD,
            self::TRM,
        );
        $properties->dateTimeQualifier->description = "Code specifying the type of date";
        $ownerSchema->addPropertyMapping('DateTimeQualifier', self::names()->dateTimeQualifier);
        $properties->date = Schema::string();
        $properties->date->description = "A specific day";
        $properties->date->format = "date";
        $ownerSchema->addPropertyMapping('Date', self::names()->date);
        $properties->time = Schema::string();
        $properties->time->description = "All standard XML formats are accepted.";
        $properties->time->format = "time";
        $ownerSchema->addPropertyMapping('Time', self::names()->time);
        $properties->dateTimePeriod = Schema::string();
        $properties->dateTimePeriod->description = "A date, time, or range of dates and times";
        $ownerSchema->addPropertyMapping('DateTimePeriod', self::names()->dateTimePeriod);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Provides date and time information";
        $ownerSchema->required = array(
        );
    }
}