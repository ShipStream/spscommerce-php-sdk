<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\CarrierLoadTender;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class CarrierLoadTenderStopDetailsItemsHazardousInformationItems extends ClassStructure
{
    /** @var float */
    public $quantity;

    /** @var string */
    public $quantityUOM;

    /** @var string Code identifying the hazardous material identification number as required by Title 49 of the code of Federal Regulations */
    public $uNIdentificationCode;

    /** @var string Code indicating degree of danger */
    public $packingGroupCode;

    /** @var string */
    public $hazardousMaterialNameQualifier;

    /** @var string */
    public $hazardousMaterialName;

    /** @var string Code indicating which compartment of a tank car the product is located in. Typically used in rail shipments */
    public $compartmentIDCode;

    /** @var float The lowest temperature at which the vapor of a liquid can be ignited in air */
    public $flashpointTemperature;

    /** @var string */
    public $temperatureUOM;

    /** @var string */
    public $hazardousClassQualifier;

    /** @var string The hazardous classification corresponding to the shipping name of the hazardous commodity */
    public $hazardousClassification;

    /** @var CarrierLoadTenderStopDetailsItemsHazardousInformationItemsReferencesItems[]|array */
    public $references;

    /** @var CarrierLoadTenderStopDetailsItemsHazardousInformationItemsNotesItems[]|array */
    public $notes;

    /** @var CarrierLoadTenderStopDetailsItemsHazardousInformationItemsContactsItems[]|array */
    public $contacts;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->quantity = Schema::number();
        $ownerSchema->addPropertyMapping('Quantity', self::names()->quantity);
        $properties->quantityUOM = Schema::string();
        $ownerSchema->addPropertyMapping('QuantityUOM', self::names()->quantityUOM);
        $properties->uNIdentificationCode = Schema::string();
        $properties->uNIdentificationCode->description = "Code identifying the hazardous material identification number as required by Title 49 of the code of Federal Regulations";
        $ownerSchema->addPropertyMapping('UNIdentificationCode', self::names()->uNIdentificationCode);
        $properties->packingGroupCode = Schema::string();
        $properties->packingGroupCode->description = "Code indicating degree of danger";
        $ownerSchema->addPropertyMapping('PackingGroupCode', self::names()->packingGroupCode);
        $properties->hazardousMaterialNameQualifier = Schema::string();
        $ownerSchema->addPropertyMapping('HazardousMaterialNameQualifier', self::names()->hazardousMaterialNameQualifier);
        $properties->hazardousMaterialName = Schema::string();
        $ownerSchema->addPropertyMapping('HazardousMaterialName', self::names()->hazardousMaterialName);
        $properties->compartmentIDCode = Schema::string();
        $properties->compartmentIDCode->description = "Code indicating which compartment of a tank car the product is located in. Typically used in rail shipments";
        $ownerSchema->addPropertyMapping('CompartmentIDCode', self::names()->compartmentIDCode);
        $properties->flashpointTemperature = Schema::number();
        $properties->flashpointTemperature->description = "The lowest temperature at which the vapor of a liquid can be ignited in air";
        $ownerSchema->addPropertyMapping('FlashpointTemperature', self::names()->flashpointTemperature);
        $properties->temperatureUOM = Schema::string();
        $ownerSchema->addPropertyMapping('TemperatureUOM', self::names()->temperatureUOM);
        $properties->hazardousClassQualifier = Schema::string();
        $ownerSchema->addPropertyMapping('HazardousClassQualifier', self::names()->hazardousClassQualifier);
        $properties->hazardousClassification = Schema::string();
        $properties->hazardousClassification->description = "The hazardous classification corresponding to the shipping name of the hazardous commodity";
        $ownerSchema->addPropertyMapping('HazardousClassification', self::names()->hazardousClassification);
        $properties->references = Schema::arr();
        $properties->references->items = CarrierLoadTenderStopDetailsItemsHazardousInformationItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = CarrierLoadTenderStopDetailsItemsHazardousInformationItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->contacts = Schema::arr();
        $properties->contacts->items = CarrierLoadTenderStopDetailsItemsHazardousInformationItemsContactsItems::schema();
        $ownerSchema->addPropertyMapping('Contacts', self::names()->contacts);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}