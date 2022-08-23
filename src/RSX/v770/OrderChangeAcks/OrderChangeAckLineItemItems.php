<?php
/**
 * @file ATTENTION!!! The code below was carefully crafted by a mean machine.
 * Please consider to NOT put any emotional human-generated modifications as the splendid AI will throw them away with no mercy.
 */

namespace ShipStream\SpsCommerce\RSX\v770\OrderChangeAcks;

use Swaggest\JsonSchema\Constraint\Properties;
use Swaggest\JsonSchema\Schema;
use Swaggest\JsonSchema\Structure\ClassStructure;


class OrderChangeAckLineItemItems extends ClassStructure
{
    /** @var OrderChangeAckLineItemItemsOrderLine */
    public $orderLine;

    /** @var OrderChangeAckLineItemItemsLineItemAcknowledgementItems[]|array */
    public $lineItemAcknowledgement;

    /** @var OrderChangeAckLineItemItemsDatesItems[]|array */
    public $dates;

    /** @var OrderChangeAckLineItemItemsMeasurementsItems[]|array */
    public $measurements;

    /** @var OrderChangeAckLineItemItemsPriceInformationItems[]|array */
    public $priceInformation;

    /** @var OrderChangeAckLineItemItemsProductOrItemDescriptionItems[]|array */
    public $productOrItemDescription;

    /** @var OrderChangeAckLineItemItemsMasterItemAttributeItems[]|array */
    public $masterItemAttribute;

    /** @var OrderChangeAckLineItemItemsPhysicalDetailsItems[]|array */
    public $physicalDetails;

    /** @var OrderChangeAckLineItemItemsReferencesItems[]|array */
    public $references;

    /** @var OrderChangeAckLineItemItemsNotesItems[]|array */
    public $notes;

    /** @var OrderChangeAckLineItemItemsCommodityItems[]|array */
    public $commodity;

    /** @var OrderChangeAckLineItemItemsAddressItems[]|array */
    public $address;

    /** @var OrderChangeAckLineItemItemsSublineItems[]|array */
    public $subline;

    /** @var OrderChangeAckLineItemItemsQuantitiesSchedulesLocationsItems[]|array */
    public $quantitiesSchedulesLocations;

    /** @var OrderChangeAckLineItemItemsTaxesItems[]|array */
    public $taxes;

    /** @var OrderChangeAckLineItemItemsChargesAllowancesItems[]|array */
    public $chargesAllowances;

    /** @var OrderChangeAckLineItemItemsFOBRelatedInstructionItems[]|array */
    public $fOBRelatedInstruction;

    /** @var OrderChangeAckLineItemItemsCarrierInformationItems[]|array */
    public $carrierInformation;

    /** @var OrderChangeAckLineItemItemsRegulatoryCompliancesItems[]|array */
    public $regulatoryCompliances;

    /**
     * @param Properties|static $properties
     * @param Schema $ownerSchema
     */
    public static function setUpProperties($properties, Schema $ownerSchema)
    {
        $properties->orderLine = OrderChangeAckLineItemItemsOrderLine::schema();
        $ownerSchema->addPropertyMapping('OrderLine', self::names()->orderLine);
        $properties->lineItemAcknowledgement = Schema::arr();
        $properties->lineItemAcknowledgement->items = OrderChangeAckLineItemItemsLineItemAcknowledgementItems::schema();
        $ownerSchema->addPropertyMapping('LineItemAcknowledgement', self::names()->lineItemAcknowledgement);
        $properties->dates = Schema::arr();
        $properties->dates->items = OrderChangeAckLineItemItemsDatesItems::schema();
        $ownerSchema->addPropertyMapping('Dates', self::names()->dates);
        $properties->measurements = Schema::arr();
        $properties->measurements->items = OrderChangeAckLineItemItemsMeasurementsItems::schema();
        $ownerSchema->addPropertyMapping('Measurements', self::names()->measurements);
        $properties->priceInformation = Schema::arr();
        $properties->priceInformation->items = OrderChangeAckLineItemItemsPriceInformationItems::schema();
        $ownerSchema->addPropertyMapping('PriceInformation', self::names()->priceInformation);
        $properties->productOrItemDescription = Schema::arr();
        $properties->productOrItemDescription->items = OrderChangeAckLineItemItemsProductOrItemDescriptionItems::schema();
        $ownerSchema->addPropertyMapping('ProductOrItemDescription', self::names()->productOrItemDescription);
        $properties->masterItemAttribute = Schema::arr();
        $properties->masterItemAttribute->items = OrderChangeAckLineItemItemsMasterItemAttributeItems::schema();
        $ownerSchema->addPropertyMapping('MasterItemAttribute', self::names()->masterItemAttribute);
        $properties->physicalDetails = Schema::arr();
        $properties->physicalDetails->items = OrderChangeAckLineItemItemsPhysicalDetailsItems::schema();
        $ownerSchema->addPropertyMapping('PhysicalDetails', self::names()->physicalDetails);
        $properties->references = Schema::arr();
        $properties->references->items = OrderChangeAckLineItemItemsReferencesItems::schema();
        $ownerSchema->addPropertyMapping('References', self::names()->references);
        $properties->notes = Schema::arr();
        $properties->notes->items = OrderChangeAckLineItemItemsNotesItems::schema();
        $ownerSchema->addPropertyMapping('Notes', self::names()->notes);
        $properties->commodity = Schema::arr();
        $properties->commodity->items = OrderChangeAckLineItemItemsCommodityItems::schema();
        $ownerSchema->addPropertyMapping('Commodity', self::names()->commodity);
        $properties->address = Schema::arr();
        $properties->address->items = OrderChangeAckLineItemItemsAddressItems::schema();
        $ownerSchema->addPropertyMapping('Address', self::names()->address);
        $properties->subline = Schema::arr();
        $properties->subline->items = OrderChangeAckLineItemItemsSublineItems::schema();
        $ownerSchema->addPropertyMapping('Subline', self::names()->subline);
        $properties->quantitiesSchedulesLocations = Schema::arr();
        $properties->quantitiesSchedulesLocations->items = OrderChangeAckLineItemItemsQuantitiesSchedulesLocationsItems::schema();
        $ownerSchema->addPropertyMapping('QuantitiesSchedulesLocations', self::names()->quantitiesSchedulesLocations);
        $properties->taxes = Schema::arr();
        $properties->taxes->items = OrderChangeAckLineItemItemsTaxesItems::schema();
        $ownerSchema->addPropertyMapping('Taxes', self::names()->taxes);
        $properties->chargesAllowances = Schema::arr();
        $properties->chargesAllowances->items = OrderChangeAckLineItemItemsChargesAllowancesItems::schema();
        $ownerSchema->addPropertyMapping('ChargesAllowances', self::names()->chargesAllowances);
        $properties->fOBRelatedInstruction = Schema::arr();
        $properties->fOBRelatedInstruction->items = OrderChangeAckLineItemItemsFOBRelatedInstructionItems::schema();
        $ownerSchema->addPropertyMapping('FOBRelatedInstruction', self::names()->fOBRelatedInstruction);
        $properties->carrierInformation = Schema::arr();
        $properties->carrierInformation->items = OrderChangeAckLineItemItemsCarrierInformationItems::schema();
        $ownerSchema->addPropertyMapping('CarrierInformation', self::names()->carrierInformation);
        $properties->regulatoryCompliances = Schema::arr();
        $properties->regulatoryCompliances->items = OrderChangeAckLineItemItemsRegulatoryCompliancesItems::schema();
        $ownerSchema->addPropertyMapping('RegulatoryCompliances', self::names()->regulatoryCompliances);
        $ownerSchema->type = Schema::OBJECT;
        $ownerSchema->additionalProperties = false;
        $ownerSchema->required = array(
        );
    }
}