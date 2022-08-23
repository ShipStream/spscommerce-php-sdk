<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Order;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderLineItemItemsProductOrItemDescriptionItems extends ClassStructure
{
    /** @var string Code defining/classifying the type of description being sent */
    public $productCharacteristicCode;

    /** @var string */
    public $agencyQualifierCode;

    /** @var string */
    public $productDescriptionCode;

    /** @var string Free-form textual description of the product */
    public $productDescription;

    /** @var string */
    public $surfaceLayerPositionCode;

    /** @var string */
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
        $properties->productCharacteristicCode->description = "Code defining/classifying the type of description being sent";
        $ownerSchema->addPropertyMapping('ProductCharacteristicCode', self::names()->productCharacteristicCode);
        $properties->agencyQualifierCode = Schema::string();
        $ownerSchema->addPropertyMapping('AgencyQualifierCode', self::names()->agencyQualifierCode);
        $properties->productDescriptionCode = Schema::string();
        $ownerSchema->addPropertyMapping('ProductDescriptionCode', self::names()->productDescriptionCode);
        $properties->productDescription = Schema::string();
        $properties->productDescription->description = "Free-form textual description of the product";
        $ownerSchema->addPropertyMapping('ProductDescription', self::names()->productDescription);
        $properties->surfaceLayerPositionCode = Schema::string();
        $ownerSchema->addPropertyMapping('SurfaceLayerPositionCode', self::names()->surfaceLayerPositionCode);
        $properties->sourceSubqualifier = Schema::string();
        $ownerSchema->addPropertyMapping('SourceSubqualifier', self::names()->sourceSubqualifier);
        $properties->yesOrNoResponse = Schema::string();
        $properties->yesOrNoResponse->description = "Code indicating a Yes or No condition or response";
        $ownerSchema->addPropertyMapping('YesOrNoResponse', self::names()->yesOrNoResponse);
        $properties->languageCode = Schema::string();
        $properties->languageCode->description = "Code designating the language used in text. ISO 639 language code";
        $ownerSchema->addPropertyMapping('LanguageCode', self::names()->languageCode);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}