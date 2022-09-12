<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Orders;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Identifies the type of report and the reporting bodies supporting a transaction
 */
class OrderLineItemItemsPaperworkItems extends ClassStructure
{
    const MB = 'MB';

    const MC = 'MC';

    const PS = 'PS';

    const CONST_88 = '88';

    const CONST_9_C = '9C';

    const AG = 'AG';

    const BE = 'BE';

    const BK = 'BK';

    const BO = 'BO';

    const BOWN = 'BOWN';

    const BT = 'BT';

    const BY = 'BY';

    const CB = 'CB';

    const CN = 'CN';

    const CQ = 'CQ';

    const CS = 'CS';

    const CT = 'CT';

    const DA = 'DA';

    const DE = 'DE';

    const DS = 'DS';

    const DV = 'DV';

    const ESIID = 'ESIID';

    const FR = 'FR';

    const FW = 'FW';

    const IA = 'IA';

    const MF = 'MF';

    const N1 = 'N1';

    const NES = 'NES';

    const OB = 'OB';

    const PATI = 'PATI';

    const PF = 'PF';

    const PLCO = 'PLCO';

    const POAR = 'POAR';

    const PODI = 'PODI';

    const POEN = 'POEN';

    const POOR = 'POOR';

    const PR = 'PR';

    const PW = 'PW';

    const RAMP = 'RAMP';

    const RI = 'RI';

    const RL = 'RL';

    const RT = 'RT';

    const SF = 'SF';

    const SO = 'SO';

    const ST = 'ST';

    const TO = 'TO';

    const TP = 'TP';

    const TS = 'TS';

    const VN = 'VN';

    const WH = 'WH';

    const Z7 = 'Z7';

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

    const D = 'D';

    const K = 'K';

    const TPL = 'TPL';

    const UL = 'UL';

    /** @var string Code indicating the title or contents of a document, report, or supporting item */
    public $reportTypeCode;

    /** @var string */
    public $reportTransmissionCode;

    /** @var int Quantifies number of reports sent to entity */
    public $reportCopiesNeeded;

    /** @var string Code identifying an organizational entity, a physical location, property, or an individual */
    public $addressTypeCode;

    /** @var string Code identifying the structure or format of the related location number[s] */
    public $locationCodeQualifier;

    /** @var string Entity identifier code */
    public $locationNumber;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string This field is deprecated */
    public $actionsIndicated;

    /** @var string This field is deprecated */
    public $requestCategoryCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->reportTypeCode = Schema::string();
        $properties->reportTypeCode->enum = array(
            self::MB,
            self::MC,
            self::PS,
        );
        $properties->reportTypeCode->description = "Code indicating the title or contents of a document, report, or supporting item";
        $ownerSchema->addPropertyMapping('ReportTypeCode', self::names()->reportTypeCode);
        $properties->reportTransmissionCode = Schema::string();
        $ownerSchema->addPropertyMapping('ReportTransmissionCode', self::names()->reportTransmissionCode);
        $properties->reportCopiesNeeded = Schema::integer();
        $properties->reportCopiesNeeded->description = "Quantifies number of reports sent to entity";
        $ownerSchema->addPropertyMapping('ReportCopiesNeeded', self::names()->reportCopiesNeeded);
        $properties->addressTypeCode = Schema::string();
        $properties->addressTypeCode->enum = array(
            self::CONST_88,
            self::CONST_9_C,
            self::AG,
            self::BE,
            self::BK,
            self::BO,
            self::BOWN,
            self::BT,
            self::BY,
            self::CB,
            self::CN,
            self::CQ,
            self::CS,
            self::CT,
            self::DA,
            self::DE,
            self::DS,
            self::DV,
            self::ESIID,
            self::FR,
            self::FW,
            self::IA,
            self::MF,
            self::N1,
            self::NES,
            self::OB,
            self::PATI,
            self::PF,
            self::PLCO,
            self::POAR,
            self::PODI,
            self::POEN,
            self::POOR,
            self::PR,
            self::PW,
            self::RAMP,
            self::RI,
            self::RL,
            self::RT,
            self::SF,
            self::SO,
            self::ST,
            self::TO,
            self::TP,
            self::TS,
            self::VN,
            self::WH,
            self::Z7,
        );
        $properties->addressTypeCode->description = "Code identifying an organizational entity, a physical location, property, or an individual";
        $ownerSchema->addPropertyMapping('AddressTypeCode', self::names()->addressTypeCode);
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
        $properties->locationNumber = Schema::string();
        $properties->locationNumber->description = "Entity identifier code";
        $ownerSchema->addPropertyMapping('LocationNumber', self::names()->locationNumber);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->actionsIndicated = Schema::string();
        $properties->actionsIndicated->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('ActionsIndicated', self::names()->actionsIndicated);
        $properties->requestCategoryCode = Schema::string();
        $properties->requestCategoryCode->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('RequestCategoryCode', self::names()->requestCategoryCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Identifies the type of report and the reporting bodies supporting a transaction";
        $ownerSchema->required = array(
        );
    }
}