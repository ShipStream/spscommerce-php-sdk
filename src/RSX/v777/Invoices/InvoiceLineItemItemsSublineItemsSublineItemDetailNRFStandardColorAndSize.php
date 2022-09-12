<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v777\Invoices;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Color and size information conforming to standards set forth by the National Retail Federation
 */
class InvoiceLineItemItemsSublineItemsSublineItemDetailNRFStandardColorAndSize extends ClassStructure
{
    /** @var string Standardized National Retail Federation Code describing the color of the product */
    public $nRFColorCode;

    /** @var string A name describing a group of associated colors */
    public $colorCategoryName;

    /** @var string Human readable text defining the color code */
    public $colorPrimaryDescription;

    /** @var string Standardized National Retail Federation Code describing the size of the product */
    public $nRFSizeCode;

    /** @var string A name describing a group of associated sizes */
    public $sizeCategoryName;

    /** @var string Human readable text defining the size code */
    public $sizePrimaryDescription;

    /** @var string Additional human readable text defining the size code */
    public $sizeSecondaryDescription;

    /** @var string National Retail Federation item size details table name */
    public $sizeTableName;

    /** @var string Item property within a National Retail Federation size table */
    public $sizeHeading1;

    /** @var string Item property within a National Retail Federation size table */
    public $sizeHeading2;

    /** @var string Item property within a National Retail Federation size table */
    public $sizeHeading3;

    /** @var string Item property within a National Retail Federation size table */
    public $sizeHeading4;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->nRFColorCode = Schema::string();
        $properties->nRFColorCode->description = "Standardized National Retail Federation Code describing the color of the product";
        $ownerSchema->addPropertyMapping('NRFColorCode', self::names()->nRFColorCode);
        $properties->colorCategoryName = Schema::string();
        $properties->colorCategoryName->description = "A name describing a group of associated colors";
        $ownerSchema->addPropertyMapping('ColorCategoryName', self::names()->colorCategoryName);
        $properties->colorPrimaryDescription = Schema::string();
        $properties->colorPrimaryDescription->description = "Human readable text defining the color code";
        $ownerSchema->addPropertyMapping('ColorPrimaryDescription', self::names()->colorPrimaryDescription);
        $properties->nRFSizeCode = Schema::string();
        $properties->nRFSizeCode->description = "Standardized National Retail Federation Code describing the size of the product";
        $ownerSchema->addPropertyMapping('NRFSizeCode', self::names()->nRFSizeCode);
        $properties->sizeCategoryName = Schema::string();
        $properties->sizeCategoryName->description = "A name describing a group of associated sizes";
        $ownerSchema->addPropertyMapping('SizeCategoryName', self::names()->sizeCategoryName);
        $properties->sizePrimaryDescription = Schema::string();
        $properties->sizePrimaryDescription->description = "Human readable text defining the size code";
        $ownerSchema->addPropertyMapping('SizePrimaryDescription', self::names()->sizePrimaryDescription);
        $properties->sizeSecondaryDescription = Schema::string();
        $properties->sizeSecondaryDescription->description = "Additional human readable text defining the size code";
        $ownerSchema->addPropertyMapping('SizeSecondaryDescription', self::names()->sizeSecondaryDescription);
        $properties->sizeTableName = Schema::string();
        $properties->sizeTableName->description = "National Retail Federation item size details table name";
        $ownerSchema->addPropertyMapping('SizeTableName', self::names()->sizeTableName);
        $properties->sizeHeading1 = Schema::string();
        $properties->sizeHeading1->description = "Item property within a National Retail Federation size table";
        $ownerSchema->addPropertyMapping('SizeHeading1', self::names()->sizeHeading1);
        $properties->sizeHeading2 = Schema::string();
        $properties->sizeHeading2->description = "Item property within a National Retail Federation size table";
        $ownerSchema->addPropertyMapping('SizeHeading2', self::names()->sizeHeading2);
        $properties->sizeHeading3 = Schema::string();
        $properties->sizeHeading3->description = "Item property within a National Retail Federation size table";
        $ownerSchema->addPropertyMapping('SizeHeading3', self::names()->sizeHeading3);
        $properties->sizeHeading4 = Schema::string();
        $properties->sizeHeading4->description = "Item property within a National Retail Federation size table";
        $ownerSchema->addPropertyMapping('SizeHeading4', self::names()->sizeHeading4);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->description = "Color and size information conforming to standards set forth by the National Retail Federation";
        $ownerSchema->required = array(
        );
    }
}