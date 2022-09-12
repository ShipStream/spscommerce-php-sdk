<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\WarehouseTransferReceiptAdvices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Description of the product
 */
class WarehouseTransferReceiptAdviceOrderLevelOrderPackItemsLineItemItemsProductOrItemDescriptionItems extends ClassStructure
{
    const CONST_08 = '08';

    const CONST_38 = '38';

    const CONST_39 = '39';

    const CONST_40 = '40';

    const CONST_73 = '73';

    const CONST_74 = '74';

    const CONST_76 = '76';

    const CONST_92 = '92';

    const AE = 'AE';

    const RE = 'RE';

    const VI = 'VI';

    const CONST_13 = '13';

    const AX = 'AX';

    const BI = 'BI';

    const DD = 'DD';

    const FA = 'FA';

    const FC = 'FC';

    const NEMA = 'NEMA';

    const ST = 'ST';

    const SZAU = 'SZAU';

    const N = 'N';

    const Y = 'Y';

    /** @var string Code defining/classifying the type of description being sent */
    public $productCharacteristicCode;

    /** @var string Identifies the agency from which code values are sourced */
    public $agencyQualifierCode;

    /** @var string Industry defined description code */
    public $productDescriptionCode;

    /** @var string Free-form textual description of the product */
    public $productDescription;

    /** @var string This field is deprecated */
    public $surfaceLayerPositionCode;

    /** @var string Code as defined by the AgencyQualifierCode */
    public $sourceSubqualifier;

    /** @var string Code indicating a Yes or No condition or response */
    public $yesOrNoResponse;

    /** @var string Code designating the language used in text. ISO 639 language code */
    public $languageCode;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->productCharacteristicCode = Schema::string();
        $properties->productCharacteristicCode->enum = array(
            self::CONST_08,
            self::CONST_38,
            self::CONST_39,
            self::CONST_40,
            self::CONST_73,
            self::CONST_74,
            self::CONST_76,
            self::CONST_92,
            self::AE,
            self::RE,
            self::VI,
        );
        $properties->productCharacteristicCode->description = "Code defining/classifying the type of description being sent";
        $ownerSchema->addPropertyMapping('ProductCharacteristicCode', self::names()->productCharacteristicCode);
        $properties->agencyQualifierCode = Schema::string();
        $properties->agencyQualifierCode->enum = array(
            self::CONST_13,
            self::AX,
            self::BI,
            self::DD,
            self::FA,
            self::FC,
            self::NEMA,
            self::ST,
            self::SZAU,
            self::VI,
        );
        $properties->agencyQualifierCode->description = "Identifies the agency from which code values are sourced";
        $ownerSchema->addPropertyMapping('AgencyQualifierCode', self::names()->agencyQualifierCode);
        $properties->productDescriptionCode = Schema::string();
        $properties->productDescriptionCode->description = "Industry defined description code";
        $ownerSchema->addPropertyMapping('ProductDescriptionCode', self::names()->productDescriptionCode);
        $properties->productDescription = Schema::string();
        $properties->productDescription->description = "Free-form textual description of the product";
        $ownerSchema->addPropertyMapping('ProductDescription', self::names()->productDescription);
        $properties->surfaceLayerPositionCode = Schema::string();
        $properties->surfaceLayerPositionCode->description = "This field is deprecated";
        $ownerSchema->addPropertyMapping('SurfaceLayerPositionCode', self::names()->surfaceLayerPositionCode);
        $properties->sourceSubqualifier = Schema::string();
        $properties->sourceSubqualifier->description = "Code as defined by the AgencyQualifierCode";
        $ownerSchema->addPropertyMapping('SourceSubqualifier', self::names()->sourceSubqualifier);
        $properties->yesOrNoResponse = Schema::string();
        $properties->yesOrNoResponse->enum = array(
            self::N,
            self::Y,
        );
        $properties->yesOrNoResponse->description = "Code indicating a Yes or No condition or response";
        $ownerSchema->addPropertyMapping('YesOrNoResponse', self::names()->yesOrNoResponse);
        $properties->languageCode = Schema::string();
        $properties->languageCode->description = "Code designating the language used in text. ISO 639 language code";
        $ownerSchema->addPropertyMapping('LanguageCode', self::names()->languageCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Description of the product";
        $ownerSchema->required = array(
        );
    }
}