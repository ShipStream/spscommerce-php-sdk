<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\Shipment;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Context;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


/**
 * Built from #/definitions/PackLevel
 * @method static PackLevel import($data, Context $options = null)
 */
class PackLevel extends ClassStructure
{
    /** @var PackLevelPack */
    public $pack;

    /** @var PackLevelPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var PackLevelMarksAndNumbersCollectionItems[]|array */
    public $marksAndNumbersCollection;

    /** @var PackLevelPalletInformationItems[]|array */
    public $palletInformation;

    /** @var PackLevelDatesItems[]|array */
    public $dates;

    /** @var PackLevelReferencesItems[]|array */
    public $references;

    /** @var PackLevelNotesItems[]|array */
    public $notes;

    /** @var PackLevelAddressItems[]|array */
    public $address;

    /** @var PackLevelTaxesItems[]|array */
    public $taxes;

    /** @var PackLevelChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var PackLevelCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var PackLevelPackagingItems[]|array */
    public $packaging;

    /** @var PackLevelRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /** @var ItemLevel[]|mixed[]|array */
    public $itemLevel;

    /** @var PackLevel[]|mixed[]|array */
    public $packLevel;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->pack = PackLevelPack::schema();
        $ownerSchema->addPropertyMapping('Pack', self::names()->pack);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = PackLevelPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->marksAndNumbersCollection = Schema::arr();
        $properties->marksAndNumbersCollection->items = PackLevelMarksAndNumbersCollectionItems::schema();
        $ownerSchema->addPropertyMapping('MarksAndNumbersCollection', self::names()->marksAndNumbersCollection);
        $properties->palletInformation = Schema::arr();
        $properties->palletInformation->items = PackLevelPalletInformationItems::schema();
        $ownerSchema->addPropertyMapping('PalletInformation', self::names()->palletInformation);
        $properties->dates = Schema::arr();
        $properties->dates->items = PackLevelDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->references = Schema::arr();
        $properties->references->items = PackLevelReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = PackLevelNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->address = Schema::arr();
        $properties->address->items = PackLevelAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = PackLevelTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = PackLevelChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = PackLevelCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->packaging = Schema::arr();
        $properties->packaging->items = PackLevelPackagingItems::schema();
        $ownerSchema->addPropertyMapping('Packaging', self::names()->packaging);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = PackLevelRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $properties->itemLevel = Schema::arr();
        $properties->itemLevel->items = ItemLevel::schema();
        $ownerSchema->addPropertyMapping('ItemLevel', self::names()->itemLevel);
        $properties->packLevel = Schema::arr();
        $properties->packLevel->items = PackLevel::schema();
        $ownerSchema->addPropertyMapping('PackLevel', self::names()->packLevel);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchemaOneOf0 = new Schema();
        $ownerSchemaOneOf0->required = array(
            'ItemLevel',
        );
        $ownerSchema->oneOf[0] = $ownerSchemaOneOf0;
        $ownerSchemaOneOf1 = new Schema();
        $ownerSchemaOneOf1->required = array(
            'PackLevel',
        );
        $ownerSchema->oneOf[1] = $ownerSchemaOneOf1;
        $ownerSchemaOneOf2 = new Schema();
        $ownerSchemaOneOf2->not = new Schema();
        $ownerSchemaOneOf2NotAnyOf0 = new Schema();
        $ownerSchemaOneOf2NotAnyOf0->required = array(
            'ItemLevel',
        );
        $ownerSchemaOneOf2->not->anyOf[0] = $ownerSchemaOneOf2NotAnyOf0;
        $ownerSchemaOneOf2NotAnyOf1 = new Schema();
        $ownerSchemaOneOf2NotAnyOf1->required = array(
            'PackLevel',
        );
        $ownerSchemaOneOf2->not->anyOf[1] = $ownerSchemaOneOf2NotAnyOf1;
        $ownerSchema->oneOf[2] = $ownerSchemaOneOf2;
        $ownerSchema->required = array(
        );
        $ownerSchema->setFromRef('#/definitions/PackLevel');
    }
}