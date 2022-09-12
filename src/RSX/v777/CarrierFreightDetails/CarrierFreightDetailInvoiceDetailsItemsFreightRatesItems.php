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
 * Details regarding the monetary amount charged for transporting the freight
 */
class CarrierFreightDetailInvoiceDetailsItemsFreightRatesItems extends ClassStructure
{
    const AV = 'AV';

    const CM = 'CM';

    const CW = 'CW';

    const DM = 'DM';

    const DV = 'DV';

    const FR = 'FR';

    const GT = 'GT';

    const KP = 'KP';

    const LB = 'LB';

    const LC = 'LC';

    const LFR = 'LFR';

    const LHS = 'LHS';

    const LT = 'LT';

    const PF = 'PF';

    const PL = 'PL';

    const PS = 'PS';

    const PT = 'PT';

    const PW = 'PW';

    const ST = 'ST';

    /** @var string Code indicating the type of rate applied to the load */
    public $freightRateCode;

    /** @var float Monetary amount which is assigned to transporting cargo, per the FreightRateCode */
    public $freightRate;

    /** @var float Sum of the freight rate, as defined by the FreightRateCode */
    public $freightRateTotal;

    /** @var string Free-form textual description to clarify the related data elements and their content */
    public $description;

    /** @var string ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm] */
    public $currency;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->freightRateCode = Schema::string();
        $properties->freightRateCode->enum = array(
            self::AV,
            self::CM,
            self::CW,
            self::DM,
            self::DV,
            self::FR,
            self::GT,
            self::KP,
            self::LB,
            self::LC,
            self::LFR,
            self::LHS,
            self::LT,
            self::PF,
            self::PL,
            self::PS,
            self::PT,
            self::PW,
            self::ST,
        );
        $properties->freightRateCode->description = "Code indicating the type of rate applied to the load";
        $ownerSchema->addPropertyMapping('FreightRateCode', self::names()->freightRateCode);
        $properties->freightRate = Schema::number();
        $properties->freightRate->description = "Monetary amount which is assigned to transporting cargo, per the FreightRateCode";
        $ownerSchema->addPropertyMapping('FreightRate', self::names()->freightRate);
        $properties->freightRateTotal = Schema::number();
        $properties->freightRateTotal->description = "Sum of the freight rate, as defined by the FreightRateCode";
        $ownerSchema->addPropertyMapping('FreightRateTotal', self::names()->freightRateTotal);
        $properties->description = Schema::string();
        $properties->description->description = "Free-form textual description to clarify the related data elements and their content";
        $ownerSchema->addPropertyMapping('Description', self::names()->description);
        $properties->currency = Schema::string();
        $properties->currency->description = "ISO Currency Code[http://www.iso.org/iso/home/standards/currency_codes.htm]";
        $ownerSchema->addPropertyMapping('Currency', self::names()->currency);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Details regarding the monetary amount charged for transporting the freight";
        $ownerSchema->required = array(
        );
    }
}